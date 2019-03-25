<?php
Class Transaction extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('transaction_model');
        
    }
    function index(){
    	$list = $this->transaction_model->get_list();
        $this->data['list'] = $list;
        
        //load view
    	$this->data['temp'] = 'admin/transaction/index1';
        $this->load->view('admin/main', $this->data);
    }
    

    /*
     * Xoa 1 đơn hàng
     */
    function delete()
    {
        //lay id danh mục
        $id = $this->uri->rsegment(3);
        $this->_del($id);
        
        //tạo ra nội dung thông báo
        $this->session->set_flashdata('message', 'Xóa dữ liệu thành công');
        redirect(admin_url('transaction'));
    }

    function view(){
        //lấy id của thể loại
        

        $id=intval($this->uri->rsegment(3));
        //lấy thông tin của đơn hàng
        $this->load->model('order_model');
        $transaction=$this->transaction_model->get_info($id);
        $this->data['transaction']=$transaction;
       
        $input['where']= array('transaction_id'=>$id);
        $list=$this->order_model->get_list($input);
        $this->data['list']=$list;

        $this->load->model('product_model');
        $product=$this->product_model->get_list();
        $this->data['product']=$product;

        $now = getdate();
        $currentDate = $now["mday"] . "." . $now["mon"] . "." . $now["year"]; 
        $this->data['currentDate']=$currentDate;
        $this->data['temp']='';
        $this->data['temp']='admin/transaction/view';
        $this->load->view('admin/main1',$this->data);

    }
    function update(){
        //load thư viện validate dữ liệu
        $id=intval($this->uri->rsegment(3));
        $transaction = $this->transaction_model->get_info($id);

        $this->data['transaction'] = $transaction;

        // $name       = $transaction->;
        // $parent_id  = $this->input->post('parent_id');
        // $sort_order = $this->input->post('sort_order');
    
        //luu du lieu can them
        $data = array(
        'status'      => 1,
        'payment' => 3,
        );

        if($this->transaction_model->update($id, $data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Cập nhật dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách
                redirect(admin_url('transaction'));
    }
    function in(){

        $id=intval($this->uri->rsegment(3));
        //lấy thông tin của đơn hàng
        $this->load->model('order_model');
        $transaction=$this->transaction_model->get_info($id);
        $this->data['transaction']=$transaction;
       
        $input['where']= array('transaction_id'=>$id);
        $list=$this->order_model->get_list($input);
        $this->data['list']=$list;

        $this->load->model('product_model');
        $product=$this->product_model->get_list();
        $this->data['product']=$product;

        $now = getdate();
        $currentDate = $now["mday"] . "." . $now["mon"] . "." . $now["year"]; 
        $this->data['currentDate']=$currentDate;
        //$this->data['temp']='';

        //$this->data['temp']='admin/transaction/file_html';
        $this->load->view('admin/transaction/file',$this->data);
    }

    private function _del($id, $rediect = true)
    {
        $info = $this->transaction_model->get_info($id);
        if(!$info)
        {
            //tạo ra nội dung thông báo
            $this->session->set_flashdata('message', 'không tồn tại danh mục này');
            if($rediect)
            {
                redirect(admin_url('transaction'));
            }else{
                return false;
            }
        }
        
        $this->load->model('order_model');
        $total_rows = $this->order_model->get_total();
        for($i=0;$i<$total_rows;$i++){
            $order = $this->order_model->get_info_rule(array('transaction_id' => $id), 'id');
        
            if($order)
            {
                $ids= $order->id;
                $this->order_model->delete($ids);
            }
        }
        
        $this->transaction_model->delete($id);
        
    }

}
?>