<?php 
Class Order extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct(); 
	}
	//lấy thông tin khách hàng
	function checkout()
	{
		//thông tin giỏ hàng
		$carts=$this->cart->contents();
		//tổng số sàn phẩm co trong gio hang
		$total_items=$this->cart->total_items();
		if($total_items<=0){
			redirect();
		}
		//tổng số tiền thanh toán
		$total_amount=0;
		foreach ($carts as $row) {
			$total_amount=$total_amount +$row['subtotal'];
		}
		$this->data['total_amount']=$total_amount;
		
		//nếu thành vien da dang nhập thành công thì lấy thông tin thành viên
		$user_id=0;
		$user='';
		if($this->session->userdata('user_id_login')){
			//lấy thông tin khách hàng
			$user_id=$this->session->userdata('user_id_login');
			$user=$this->user_model->get_info($user_id);
		}
		$this->data['user']=$user;

		$this->load->library('form_validation');
        $this->load->helper('form');
        
        //neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
            $this->form_validation->set_rules('name', 'Tên', 'required|min_length[6]');
            $this->form_validation->set_rules('email', 'Email nhận hàng', 'required|valid_email');
            
            $this->form_validation->set_rules('phone', 'Số điện thoại', 'required');
            $this->form_validation->set_rules('message', 'Địa chỉ', 'required');
  			$this->form_validation->set_rules('payment', 'Cổng thanh toán', 'required');
            //nhập liệu chính xác
            if($this->form_validation->run())
            {
                //them vao csdl
                $payment=$this->input->post('payment');
                
                $data = array(
					'status'     =>0,//trạng thái chưa thanh toán
					'user_id'    =>$user_id,//id thành viên mua háng nếu đã đăng nhập
					'user_name'  => $this->input->post('name'),
					'user_email' => $this->input->post('email'),
					'user_phone' => $this->input->post('phone'),
					'message'    => $this->input->post('message'),
					'amount'=>$total_amount,//tổng số tiền cần thanh toán
					'payment'=> $payment,//cổng thanh toán
                   	'created'=>now(),
                );
                //them dữ liệu vào transaction
                $this->load->model('transaction_model');
                $this->transaction_model->create($data);
                $transaction_id=$this->db->insert_id();//lấy ra id của giao dịch vừa thêm vào

                //thêm vào bàn order
                $this->load->model('order_model');
                foreach ($carts as $row) {
                	$data=array(
						'transaction_id' =>$transaction_id,
						'product_id'     =>$row['id'],
						'qty'            =>$row['qty'],
						'amount'         =>$row['subtotal'],
						'status'         =>'0',
                	);
                	$this->order_model->create($data);
                }

                //xóa thông tin đơn hàng trong giỏ hàng                
            	$this->cart->destroy();

            	if($payment==1){
            		//thông báo
            		$this->session->set_flashdata('message','bạn đã đặt hàng thành công!');
                	//chuyen tới trang danh sách quản trị viên
                	//redirect(site_url());
                	redirect(base_url('home'));
            	}
            	else if(in_array($payment, array('nganluong','baokim')))
            	{
            		redirect(base_url('home'));
            	}
            }
        }
        
		//hiển thị ra view
        $this->data['temp'] = 'site/order/checkout';
        $this->load->view('site/layout', $this->data);
	}
}

?>