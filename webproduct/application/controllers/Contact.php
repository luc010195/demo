<?php
Class Contact extends MY_Controller
{

	function __construct()
    {
        parent::__construct();
        //load ra file model
        $this->load->model('contact_model');
    }
    //hiển thị
    function index(){

        
    	$this->data['temp'] = 'site/contact/index';
		$this->load->view('site/layout2', $this->data);
    }
    function add(){
        //load thư vien gửi mail
        $this->load->library('email');
        //cấu hình gửi mail theo 
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.googlemail.com'; //neu sử dụng gmail
        $config['smtp_user'] = 'nvansungit@gmail.com';
        $config['smtp_pass'] = 'tivqqgeaxphohuxd';
        $config['smtp_port'] = '465'; //nếu sử dụng gmail
        $this->email->initialize($config); 

        // //cấu hình gửi mail
        // $config['protocol'] = 'sendmail';
        // $config['charset']  = 'utf-8';
        // $config['mailtype'] = 'html';
        // $config['wordwrap'] = TRUE;
        // //cấu hình gửi mail
        // $this->email->initialize($config);

        //load thư viện validate dữ liệu
        $this->load->library('form_validation');
        $this->load->helper('form');
        //them vao csdl
        $name       = $this->input->post('name');
        $email  = $this->input->post('email');
        $title = $this->input->post('title');
        $phone = $this->input->post('phone');
        $content = $this->input->post('content');
        //thiết lập nọi dung mail
        $this->email->from($email, $name );
        $this->email->to('nvansungit@gmail.com');
        $this->email->subject($title);
        $this->email->message($content );
        if ( ! $this->email->send())
        {
        //     // Generate error
           echo $this->email->print_debugger('dịa chỉ mail không đúng');
        }else{
            echo 'Gửi email thành công';
        }
        

        //luu du lieu can them
        $data = array(
            'name'      => $name,
            'email' => $email,
            'title' => $title,
            'phone' => $phone,
            'content' => $content,
        );

        //them moi vao csdl
        if($this->contact_model->create($data))
        {
            //tạo ra nội dung thông báo
            $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
        }else{
            $this->session->set_flashdata('message', 'Không thêm được');
        }
        //chuyen tới trang danh sách
        redirect(site_url('contact'));

    }

}
?>