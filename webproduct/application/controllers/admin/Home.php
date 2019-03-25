<?php
Class Home extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('transaction_model');
    }

    function index()
    {
        $now = getdate();
        $currentmday = $now["mday"]; 
        $currentmon = $now["mon"]; 
        $currentyear = $now["year"]; 
        
        // . "." . $now["mon"] . "." . $now["year"];

        $list = $this->transaction_model->get_list();
        $this->data['list'] = $list;
        $danhthutheongay=0;
        $danhthutheothang=0;
        foreach ($list as $row) {
            $ngaytao= getdate($row->created);
            $ngay= $ngaytao["mday"]; 
            $thang=$ngaytao["mon"];
            $nam=$ngaytao["year"];
            //pre($currentDate1);
            // . "." . $now["mon"] . "." . $now["year"];
            if($currentmday==$ngay){
                $danhthutheongay=$danhthutheongay+ $row->amount;
            }
            if(($currentmon==$thang) && ($currentyear==$nam)){
                $danhthutheothang=$danhthutheothang+ $row->amount;
            }
        }
        $this->data['danhthutheongay']=$danhthutheongay; 
        $this->data['danhthutheothang']=$danhthutheothang; 

        $this->load->model('product_model');
        $list_product = $this->product_model->get_list();
        $this->data['list_product'] = $list_product;

        $this->load->model('news_model');
        $list_news = $this->news_model->get_list();
        $this->data['list_news'] = $list_news;

        $this->load->model('user_model');
        $list_user = $this->user_model->get_list();
        $this->data['list_user'] = $list_user;

        $this->load->model('contact_model');
        $list_contact = $this->contact_model->get_list();
        $this->data['list_contact'] = $list_contact;

        $this->data['temp'] = 'admin/home/index';
        $this->load->view('admin/main', $this->data);
    }
    

    /*
     * Thuc hien dang xuat
     */
    function logout()
    {
        if($this->session->userdata('login'))
        {
            $this->session->unset_userdata('login');
        }
        redirect(admin_url('login'));
    }
}