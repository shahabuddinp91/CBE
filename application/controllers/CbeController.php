<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CbeController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->baseurl = $this->config->item('base_url');
    }

    public function index() {
        $data['baseurl'] = $this->baseurl;

        $this->load->view('Dashboard/header', $data);
        $this->load->view('Dashboard/sidebar', $data);
        $this->load->view('Dashboard/footer', $data);
    }

    public function category() {
        $data['baseurl'] = $this->baseurl;
        //pagination settings 
        $config['base_url'] = base_url('index.php/CbeController/category/');
        $config['total_rows'] = $this->db->count_all('category');
        $config['per_page'] = "10";
        $config['uri_segment'] = 3;
        $choice = $config['total_rows'] / $config['per_page'];
        $config['num_links'] = floor($choice);
//config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
//call the model function to get the department data
        $this->load->model('CbeModel');
        $data['allCategory'] = $this->CbeModel->getCategory($config["per_page"], $data['page']);
        $data['pagination'] = $this->pagination->create_links();

        $this->load->view('Dashboard/header', $data);
        $this->load->view('Dashboard/sidebar', $data);
        $this->load->view('Dashboard/category/addCategory', $data);
        $this->load->view('Dashboard/footer', $data);
    }

    public function categoryCreate() {
        $data['baseurl'] = $this->baseurl;
        date_default_timezone_set("Asia/Dhaka");
        $created = date('d-m-Y');
        $month = date("F");
        $year = date("Y");
        $this->form_validation->set_rules('name', 'Category Name', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('errors', 'Please, data insert correctly');
            redirect('CbeController/category');
        } else {
            $allCategory = array(
                'category_name' => $this->input->post('name'),
                'month' => $month,
                'year' => $year,
                'created' => $created,
            );
            $this->db->insert('category', $allCategory);
            $this->session->set_flashdata('success', 'Data save successfully!');
            redirect('CbeController/category');
        }
    }

    public function categoryEdit() {
        
    }

    public function categoryDelete($categoryDelete) {
        $data['baseurl'] = $this->baseurl;
        if ($categoryDelete != '') {
            $this->db->delete('category', array('category_id' => $categoryDelete));
            $this->session->set_flashdata('success', 'Data deleted successfully!');
            redirect('CbeController/category');
        } else {
            redirect('CbeController/category');
        }
    }

    public function subCategory() {
        $data['baseurl'] = $this->baseurl;
//        its for all category show
        $data['allCategory'] = $this->CbeModel->getComboCategory();
        
        //pagination settings 
        $config['base_url'] = base_url('index.php/CbeController/subCategory/');
        $config['total_rows'] = $this->db->count_all('subCategory');
        $config['per_page'] = "10";
        $config['uri_segment'] = 3;
        $choice = $config['total_rows'] / $config['per_page'];
        $config['num_links'] = floor($choice);
//config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
//call the model function to get the department data
        $this->load->model('CbeModel');
        $data['allSubCategory'] = $this->CbeModel->getSubCategory($config["per_page"], $data['page']);
        $data['pagination'] = $this->pagination->create_links();

        $this->load->view('Dashboard/header', $data);
        $this->load->view('Dashboard/sidebar', $data);
        $this->load->view('Dashboard/category/subCategory', $data);
        $this->load->view('Dashboard/footer', $data);
    }

    public function subCategoryCreate() {
        $data['baseurl'] = $this->baseurl;
        date_default_timezone_set("Asia/Dhaka");
        $month = date("F");
        $year = date("Y");
        $created = date('d-m-Y');
        $this->form_validation->set_rules('catename', 'Category Name', 'required');
        $this->form_validation->set_rules('subcatename', 'Sub-category Name', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('errors', 'Please, data insert correctly');
            redirect('CbeController/subCategory');
        } else {
            $allsubcate = array(
                'category_id' => $this->input->post('catename'),
                'subCategory_name' => $this->input->post('subcatename'),
                'month' => $month,
                'year' => $year,
                'created' => $created,
            );
            $this->db->insert('subCategory', $allsubcate);
            $this->session->set_flashdata('success', 'Data save successfully!');
            redirect('CbeController/subCategory');
        }
    }
    
    
    public function products(){
        $data['baseurl'] = $this->baseurl;
//        its for all category show
        $data['allCategory'] = $this->CbeModel->getComboCategory();
        
        $this->load->view('Dashboard/header', $data);
        $this->load->view('Dashboard/sidebar', $data);
        $this->load->view('Dashboard/products/addproduct', $data);
        $this->load->view('Dashboard/footer', $data);
    }
    public function ajax_subcategory($subcateid){
        $this->load->model('CbeModel');
        $data['allsubcate'] = $this->CbeModel->getsubCate($subcateid);
        $this->load->view('Dashboard/products/ajax_subcatePage', $data);
    }

}
