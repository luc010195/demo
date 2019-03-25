<?php
Class User extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }
    
    /*
     * Lay danh sach admin
     */
    function index()
    {
        $input = array();
        $list = $this->user_model->get_list($input);
        $this->data['list'] = $list;
    
        $total = $this->user_model->get_total();
        $this->data['total'] = $total;
        
        //lay nội dung của biến message
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        
        $this->data['temp'] = 'admin/user/index';
        $this->load->view('admin/main', $this->data);
    }
    
    
    
    /*
     * Hàm xóa dữ liệu
     */
    function delete()
    {
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        //lay thong tin cua quan tri vien
        $info = $this->user_model->get_info($id);
        if(!$info)
        {
            $this->session->set_flashdata('message', 'Không tồn tại thành viên này');
            redirect(admin_url('user'));
        }
        //thuc hiện xóa
        $this->user_model->delete($id);
        
        $this->session->set_flashdata('message', 'Xóa dữ liệu thành công');
        redirect(admin_url('user'));
    }
    
    // /*
    //  * Thuc hien dang xuat
    //  */
    // function logout()
    // {
    //     if($this->session->userdata('login'))
    //     {
    //         $this->session->unset_userdata('login');
    //     }
    //     redirect(admin_url('login'));
    // }
}



