<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Surat_masuk extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Surat_masuk_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','surat_masuk/surat_masuk_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Surat_masuk_model->json();
    }

    public function read($id) 
    {
        $row = $this->Surat_masuk_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_masuk' => $row->id_masuk,
		'nomor_surat' => $row->nomor_surat,
		'perihal' => $row->perihal,
		'tanggal' => $row->tanggal,
		'pengirim' => $row->pengirim,
		'penerima' => $row->penerima,
	    );
            $this->template->load('template','surat_masuk/surat_masuk_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('surat_masuk'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('surat_masuk/create_action'),
	    'id_masuk' => set_value('id_masuk'),
	    'nomor_surat' => set_value('nomor_surat'),
	    'perihal' => set_value('perihal'),
	    'tanggal' => set_value('tanggal'),
	    'pengirim' => set_value('pengirim'),
	    'penerima' => set_value('penerima'),
	);
        $this->template->load('template','surat_masuk/surat_masuk_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();
        $input_nomor = $this->input->post('nomor_surat',TRUE);
        $format1 = '420/';
        $format2 = '/422.101' . '/' . date('Y');

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nomor_surat' => $format1 . $input_nomor . $format2,
		'perihal' => $this->input->post('perihal',TRUE),
		'tanggal' => $this->input->post('tanggal',TRUE),
		'pengirim' => $this->input->post('pengirim',TRUE),
		'penerima' => $this->input->post('penerima',TRUE),
	    );

            $this->Surat_masuk_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('surat_masuk'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Surat_masuk_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('surat_masuk/update_action'),
		'id_masuk' => set_value('id_masuk', $row->id_masuk),
		'nomor_surat' => set_value('nomor_surat', $row->nomor_surat),
		'perihal' => set_value('perihal', $row->perihal),
		'tanggal' => set_value('tanggal', $row->tanggal),
		'pengirim' => set_value('pengirim', $row->pengirim),
		'penerima' => set_value('penerima', $row->penerima),
	    );
            $this->template->load('template','surat_masuk/surat_masuk_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('surat_masuk'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_masuk', TRUE));
        } else {
            $data = array(
		'nomor_surat' => $this->input->post('nomor_surat',TRUE),
		'perihal' => $this->input->post('perihal',TRUE),
		'tanggal' => $this->input->post('tanggal',TRUE),
		'pengirim' => $this->input->post('pengirim',TRUE),
		'penerima' => $this->input->post('penerima',TRUE),
	    );

            $this->Surat_masuk_model->update($this->input->post('id_masuk', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('surat_masuk'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Surat_masuk_model->get_by_id($id);

        if ($row) {
            $this->Surat_masuk_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('surat_masuk'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('surat_masuk'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nomor_surat', 'nomor surat', 'trim|required');
	$this->form_validation->set_rules('perihal', 'perihal', 'trim|required');
	$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
	$this->form_validation->set_rules('pengirim', 'pengirim', 'trim|required');
	$this->form_validation->set_rules('penerima', 'penerima', 'trim|required');

	$this->form_validation->set_rules('id_masuk', 'id_masuk', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "surat_masuk.xls";
        $judul = "surat_masuk";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Nomor Surat");
	xlsWriteLabel($tablehead, $kolomhead++, "Perihal");
	xlsWriteLabel($tablehead, $kolomhead++, "Tanggal");
	xlsWriteLabel($tablehead, $kolomhead++, "Pengirim");
	xlsWriteLabel($tablehead, $kolomhead++, "Penerima");

	foreach ($this->Surat_masuk_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nomor_surat);
	    xlsWriteLabel($tablebody, $kolombody++, $data->perihal);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tanggal);
	    xlsWriteLabel($tablebody, $kolombody++, $data->pengirim);
	    xlsWriteLabel($tablebody, $kolombody++, $data->penerima);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=surat_masuk.doc");

        $data = array(
            'surat_masuk_data' => $this->Surat_masuk_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('surat_masuk/surat_masuk_doc',$data);
    }

}

/* End of file Surat_masuk.php */
/* Location: ./application/controllers/Surat_masuk.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-01-28 17:43:33 */
/* http://harviacode.com */