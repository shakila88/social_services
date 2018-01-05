<?php

/**
 * Common properties and methods available for all models that extend this
 * Make sure this model is auto loaded from config/autoload.php
 * @example: class  extends MY_Common {}
 */
class Contact_model extends My_common {

    public $total_records; //holds total records for get_list()

    public function __construct() {
        parent::__construct();
    }

    public function add($db_data) {
        $this->db->insert('contact', $db_data);
        return $this->db->insert_id();
    }

    public function update($db_data, $id) {
        $this->db->where('id', $id);
        return $this->db->update('contact', $db_data);
    }

    public function get_one_by_id($id) {
        $this->db->select('c.*');
        $this->db->from('contact c');
        $this->db->where('c.id', $id);
        $this->db->limit('1');
        $query = $this->db->get();
        $query = $query->result_array();

        if ($query) {
            return $query[0];
        } else {
            return 0;
        }
    }

}
