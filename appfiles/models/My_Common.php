<?php
/**
 * Common properties and methods available for all models that extend this
 * Make sure this model is auto loaded from config/autoload.php
 * @example: class Job_model extends MY_Common {}
 */
class My_Common extends CI_Model {

    public $total_records; //holds total records for get_list()

    public function __construct() {
        parent::__construct();
    }


}
