<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tests extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("test_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["tests"] = $this->test_model->getAll();
        $this->load->view("admin/test/list", $data);
    }

    public function add()
    {
        $test = $this->test_model;
        $validation = $this->form_validation;
        $validation->set_rules($test->rules());

        if ($validation->run()) {
            if (($y <= 21) && ($y >= 15)) {
                $resiko = "tinggi";						
            }
            elseif (($y <= 14) && ($y >= 8)) {
                $resiko = "sedang";
            }
            else {
                $resiko = "rendah";
            }
            $test->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/test/new_form");
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->test_model->delete($id)) {
            redirect(site_url('admin/test'));
        }
    }
}