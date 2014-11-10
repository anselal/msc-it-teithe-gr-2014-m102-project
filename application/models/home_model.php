<?php
/**
 * Created by IntelliJ IDEA.
 * User: tasos
 * Date: 11/9/14
 * Time: 10:28 PM
 */

class Home_model extends CI_Model{

    function getPosts() {
        $q = $this->db->get('posts');

        if($q->num_rows()>0) {
            foreach($q->result() as $row) {
                $data[] = $row;
            }
        }
        return $data;
    }
} 