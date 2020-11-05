<?php defined('BASEPATH') OR exit('No direct script access allowed');
class trainmodel extends CI_Model {
    function __construct(){
        parent::__construct();
    }
    function regis_ton($tondata){
        $this->db->insert('tontang',$tondata);
    } 
    function regis_kang($kangdata){
        $this->db->insert('kangtang',$kangdata);
    } 
    function regis_pay($paydata){
        $this->db->insert('paytang',$paydata);
    } 
    function regis_train($traindata){
        $this->db->insert('train',$traindata);
    } 

    function select_all(){
        
        $this->db->select('*');
        $this->db->from('train');
        $this->db->join('tontang','tontang.Ton_ID = train.Ton_ID','left');
        $this->db->join('kangtang','kangtang.Kang_ID = train.Kang_ID','left');
        $this->db->join('paytang','paytang.Pay_ID = train.Pay_ID','left');
        $this->db->join('train_status','train_status.Status_ID = train.Status','left');
        $this->db->like('train_status.Status', "ราง");
        $query = $this->db->get();
        return $query->result();
    }
}
        
?>