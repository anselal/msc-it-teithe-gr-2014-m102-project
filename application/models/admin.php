<?php
/**
 * Created by IntelliJ IDEA.
 * User: tasos
 * Date: 11/24/14
 * Time: 11:01 AM
 */

class admin extends CI_Model {

    function get_all_users() {
        $q = $this->db->get('user');

        if($q->num_rows()>0) {
            foreach($q->result() as $row) {
                $data[] = $row;
            }
        }
        return json_encode($data);
    }
} 