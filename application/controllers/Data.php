<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('curl');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = array();

        $data['mode'] = 'data';
        $data['class'] = $this->router->fetch_class();
        $data['content'] = $this->load->view('data/index', null, TRUE);

        $this->load->view('layouts/v_layout', $data);
    }

    public function add()
    {
        # Validate 
        $this->form_validation->set_rules('txtName', 'Name', 'trim|required');
        $this->form_validation->set_rules('txtTlp', 'Tlp', 'trim|required');
        $this->form_validation->set_message('required', 'Field %s is Required.');

        if ($this->form_validation->run() === TRUE) {
            $stat_add = $this->_save();
            if ($stat_add) {
                $this->session->set_flashdata('msg', 'Data Successfully Saved.');
                redirect(base_url('data'),'refresh');
                exit;
            } else {
                $this->session->set_flashdata('failedmsg', 'Failed to Save Data');
            }
        }
        $data['data'] = null;
        $data['mode'] = 'action';
        $data['class'] = $this->router->fetch_class();
        $data['method'] = $this->router->fetch_method();
        $data['content'] = $this->load->view('data/add', $data, TRUE);
        $this->load->view('layouts/v_layout', $data);
    }

    public function edit($id=null)
    {
        $kontakData = $this->curl->simple_get('http://localhost/rest_ci/index.php/kontak/detail?id='.$id);
        if ($kontakData != "") {
            # Validate 
            $this->form_validation->set_rules('txtName', 'Name', 'trim|required');
            $this->form_validation->set_rules('txtTlp', 'Tlp', 'trim|required');
            $this->form_validation->set_message('required', 'Field %s is Required.');

            if ($this->form_validation->run() === TRUE) {
                $stat_add = $this->_save();
                if ($stat_add) {
                    $this->session->set_flashdata('msg', 'Data Successfully Updated.');
                    redirect(base_url('data'),'refresh');
                    exit;
                } else {
                    $this->session->set_flashdata('failedmsg', 'Failed to Update Data');
                }
            }

            $data['data'] = json_decode($kontakData);
            $data['mode'] = 'action';
            $data['class'] = $this->router->fetch_class();
            $data['method'] = $this->router->fetch_method();
            $data['content'] = $this->load->view('data/update', $data, TRUE);
            $this->load->view('layouts/v_layout', $data);
        } else {
            $this->session->set_flashdata('failedmsg', 'Data Not Found');
            redirect(base_url('data'),'refresh');
            exit;
        }
    }

    public function delete($id) {
        $data['id'] = $id;
        $delete = $this->curl->simple_delete('http://localhost/rest_ci/index.php/kontak', $data, array(CURLOPT_BUFFERSIZE => 10));
        if ($delete) {
            $result['message'] = 'data successfully deleted';
            $result['status']  = 'true';
        } else {
            $result['message'] = 'data failed to delete';
            $result['status']  = 'false';
        }

        echo json_encode($result);
    }

    private function _save()
    {
        $data['id'] = $this->input->post('txtId');
        $data['nama'] = $this->input->post('txtName');
        $data['nomor'] = $this->input->post('txtTlp');

        if (empty($data['id'])) {
            $status = $this->curl->simple_post('http://localhost/rest_ci/index.php/kontak/add', $data, array(CURLOPT_BUFFERSIZE => 10));
        } else {
            $status = $this->curl->simple_put('http://localhost/rest_ci/index.php/kontak/update', $data, array(CURLOPT_BUFFERSIZE => 10));
        }

        if ($status) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function getData() 
    {
        $postData = array();
        
        $data_array = array('id', 'nama', 'nomor'); 
        $postData['order'] = $data_array[$_GET['order'][0]['column']];
        $postData['offset'] = $_GET['length'];
        $postData['start'] = $_GET['start'];
        $postData['dir'] = $_GET['order'][0]['dir'];
        $postData['search'] = $_GET['search']['value'];
        $data = json_decode($this->curl->simple_get('http://localhost/rest_ci/index.php/kontak', $postData, array(CURLOPT_BUFFERSIZE => 10)));
        $totalData = json_decode($this->curl->simple_get('http://localhost/rest_ci/index.php/kontak/totalData'));
        $totalSearch = json_decode($this->curl->simple_get('http://localhost/rest_ci/index.php/kontak/totalSearch', $postData, array(CURLOPT_BUFFERSIZE => 10)));

        $item = array();
        $item['draw'] = (int) $_GET['draw'];
        $item['recordsTotal'] = (int) $totalData->total;
        $item['recordsFiltered'] = (int) $totalSearch->total;
        $item['data'] = array();

        $i=0;
        $no=$postData['start']+1;
        if (!empty($data)) {
            foreach ($data AS $dt) {
                $item['data'][$i][] = $no;
                $item['data'][$i][] = $dt->nama;
                $item['data'][$i][] = $dt->nomor;
                $item['data'][$i][] = '<div class="btn-group">
                                        <a class="btn btn-default" title="edit" href="'.base_url("data/edit/$dt->id").'"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-default" title="delete"  onclick="confirmation(\''.base_url("data/delete/$dt->id").'\')"><i class="fa fa-trash-o"></i></a>
                                        </div>
                                        ';
                $i++;
                $no++;
            }            
        }

        return print_r(json_encode($item));
    }

    public function loopAdd()
    {
        for ($i = 738; $i < 1000; $i++) { 
            $data['nama'] = 'TEST NAMA'.$i;
            $data['nomor'] = '08512'.$i;

            $status = $this->curl->simple_post('http://localhost/rest_ci/index.php/kontak/add', $data, array(CURLOPT_BUFFERSIZE => 10));
        }
    }
}
?>