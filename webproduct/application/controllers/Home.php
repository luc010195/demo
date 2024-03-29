<?php
Class Home extends MY_Controller
{
	function __construct()
    {
        parent::__construct();
        //load ra file model
        $this->load->model('product_model');
    }
	function index()
	{
		//load ra thu vien phan trang
        $this->load->library('pagination');
		//lay tong so luong ta ca cac san pham trong websit
		$total_rows = $this->product_model->get_total();
        $this->data['total_rows'] = $total_rows;

        

	   	
	   	$config = array();
        $config['total_rows'] = $total_rows;//tong tat ca cac san pham tren website
     	$config['base_url']   = base_url('home/index'); //link hien thi ra danh sach san pham
     	$config['per_page']   = 9;//so luong san pham hien thi tren 1 trang
        $config['uri_segment'] = 3;//phan doan hien thi ra so trang tren url
        $config['next_link']   = 'Trang kế tiếp';
        $config['prev_link']   = 'Trang trước';

           //khoi tao cac cau hinh phan trang
        $this->pagination->initialize($config);
        $segment = $this->uri->segment(3);
        $segment = intval($segment);
        $input = array();
        $input['limit'] = array($config['per_page'], $segment);
        $product_newest=$this->product_model->get_list($input);
        $this->data['product_newest']=$product_newest;
     


     	//lấy sàn phẩm mua nhiều
	    $input['order'] = array('buyed', 'DESC');
	    $input['limit'] = array(3, 0);
	    $product_buy = $this->product_model->get_list($input);
		$this->data['product_buy']  = $product_buy;
		
		
		 //lay danh sach slide
	    $this->load->model('slide_model');
	    $slide_list = $this->slide_model->get_list();
	    $this->data['slide_list'] = $slide_list;
	    

		$this->data['temp'] = 'site/home/index';
		$this->load->view('site/layout', $this->data);
	}
	// lấy thông tin truyền san trang sản phẩm tương tự như trang index
	function sanpham(){

	    //load ra thu vien phan trang
        $this->load->library('pagination');
		//lay tong so luong ta ca cac san pham trong websit
		$total_rows = $this->product_model->get_total();
        $this->data['total_rows'] = $total_rows;

        

	   	
	   	$config = array();
        $config['total_rows'] = $total_rows;//tong tat ca cac san pham tren website
     	$config['base_url']   = base_url('home/index'); //link hien thi ra danh sach san pham
     	$config['per_page']   = 9;//so luong san pham hien thi tren 1 trang
        $config['uri_segment'] = 3;//phan doan hien thi ra so trang tren url
        $config['next_link']   = 'Trang kế tiếp';
        $config['prev_link']   = 'Trang trước';

           //khoi tao cac cau hinh phan trang
        $this->pagination->initialize($config);
        $segment = $this->uri->segment(3);
        $segment = intval($segment);
        $input = array();
        $input['limit'] = array($config['per_page'], $segment);
        $product_newest=$this->product_model->get_list($input);
        $this->data['product_newest']=$product_newest;
	    


		
		//lấy sàn phẩm mua nhiều
	    $input['order'] = array('buyed', 'DESC');
	    $input['limit'] = array(3, 0);
	    $product_buy = $this->product_model->get_list($input);
		$this->data['product_buy']  = $product_buy;
		
		//lay nội dung của biến message
		$message = $this->session->flashdata('message');
		$this->data['message'] = $message;

        $this->data['temp'] = 'site/home/sanpham';
        $this->load->view('site/layout', $this->data);
    }

	
}