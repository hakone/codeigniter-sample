<?php
/**
 * Created by PhpStorm.
 * User: box406
 * Date: 2014/05/17
 * Time: 17:16
 */

class Blog extends CI_Controller {


    public function _construct() {
        parent::contruct();

    }

    public function index() {

        $data = array();
        $data["base_url"] = base_url();
        $tmplate["meta_content"] = $this->load->view("layout/meta", $data, true);
        $tmplate["title"] = "codeigniter test";
        $this->load->view("blogviwe", $tmplate);

    }

    public function comment() {
        echo "hello commment";
    }

    public function argv($id, $pass = "") {
        echo $id . ":" . $pass;
    }

//    public function _remap() {
//        echo "hoge-fuga";
//        call_user_func_array(array($this, "argv"), array("box406", "tel5900"));
//    }
}
