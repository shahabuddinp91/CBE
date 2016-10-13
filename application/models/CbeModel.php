<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CbeModel extends CI_Model {
    public function getCategory($limit,$start){
        $this->db->select('*');
        $this->db->from('category');
        $this->db->limit($limit,$start);
        $query = $this->db->get();
        return $query->result();
    }
    public function getComboCategory(){
        $this->db->select('*');
        $this->db->from('category');
        $query = $this->db->get();
        return $query->result();        
    }
    public function getSubCategory($limit,$start){
        $this->db->select('*');
        $this->db->from('subCategory');
        $this->db->join('category','category.category_id=subCategory.category_id');
        $this->db->limit($limit,$start);
        $query = $this->db->get();
        return $query->result();
    }
    public function getsubCate($subcate){
         $this->db->where('category_id', $subcate);
        $query = $this->db->get('subcategory');
        return $query->result();
    }
    
}
