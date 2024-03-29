<?php
Class Support extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        //load ra file model
        $this->load->model('support_model');
    }
    
    /*
     * Hien thi danh sach slide
     */
    function index()
    {
 

        $input = array();
       
        //lay danh sach slide
        $list = $this->support_model->get_list($input);
        $this->data['list'] = $list;
       
        //lay nội dung của biến message
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        
        //load view
        $this->data['temp'] = 'admin/support/index';
        $this->load->view('admin/main', $this->data);
    }

    
    /*
     * Chinh sua slide
     */
    function edit()
    {
        $id = $this->uri->rsegment('3');
        $support = $this->support_model->get_info($id);
        if(!$support)
        {
            //tạo ra nội dung thông báo
            $this->session->set_flashdata('message', 'Không tồn tại thông tin này');
            redirect(admin_url('support'));
        }
        $this->data['support'] = $support;
       
        //load thư viện validate dữ liệu
        $this->load->library('form_validation');
        $this->load->helper('form');
        
        //neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
            $this->form_validation->set_rules('name', 'Tên người quản trị', 'required');
            
            //nhập liệu chính xác
            if($this->form_validation->run())
            {
               
                
                //luu du lieu can them
                $data = array(
                    'name'       => $this->input->post('name'),
                    'link'       => $this->input->post('link'),
                    'info'       => $this->input->post('info'),
                    'sort_order' => $this->input->post('sort_order'),
                ); 
               
                //them moi vao csdl
                if($this->slide_model->update($slide->id, $data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Cập nhật dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không cập nhật được');
                }
                //chuyen tới trang danh sách
                redirect(admin_url('slide'));
            }
        }
        
        
        //load view
        $this->data['temp'] = 'admin/support/edit';
        $this->load->view('admin/main', $this->data);
    }
    
}
