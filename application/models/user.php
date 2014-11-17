<?php
/**
 * Created by IntelliJ IDEA.
 * User: tasos
 * Date: 11/13/14
 * Time: 1:55 PM
 */

class User extends CI_Model {

    function create_user($data) {
        $this->db->insert('user',$data);
    }

    function login($username,$password) {
        $where=array(
            'username'=>$username,
            'password'=>sha1($password)
        );
        $this->db->select()->from('user')->where($where);
        $query=$this->db->get();
        return $query->first_row('array');
    }
} 