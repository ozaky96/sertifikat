<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Generate extends CI_Controller
 {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_generate');
        $this->load->model('M_events');
        $this->load->model('M_certificate');

    }

	
	public function index()
	{
		$data['generate'] = $this->db->get_where('certificate_assignments', ['assignment_id' => $this->session->userdata('assignment_id')])->row_array();
		$data['title'] = 'E - Sertifikat';
        $Generate = $this->M_generate->getDatagenerate();
		$data['Generate'] = $Generate;
        $queryAllgenerate = $this->M_generate->getDatagenerate();
		$data['queryAllgenerate'] = $queryAllgenerate;
		$this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
		$this->load->view('generate/vw_generate');
        $this->load->view('layout/footer');
		
	}

	public function tambah_generate()
	{
		$data['generate'] = $this->db->get_where('certificate_assignments', ['assignment_id' => $this->session->userdata('assignment_id')])->row_array();
		$data['title'] = 'E - Sertifikat';
        $certificate = $this->M_certificate->getDataCertificate();
		$events = $this->M_events->getDataEvents();
		$desha = $this->db->query("SELECT * FROM users WHERE level='user'")->result();
        $data['certificate'] = $certificate;
		$data['events'] = $events;
        $data['desha'] = $desha;
		$this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
		$this->load->view('generate/vw_tambahgenerate');
        $this->load->view('layout/footer');
		
	}

    // public function edit_generate($assignment_id)
	// {
	// 	$data['generate'] = $this->db->get_where('certificate_assignments', ['assignment_id' => $this->session->userdata('assignment_id')])->row_array();
	// 	$data['title'] = 'E - Sertifikat';
    //     $queryAllgenerate = $this->M_generate->getDatagenerateDetail($assignment_id);
	// 	$data['queryAllgenerate'] = $queryAllgenerate;
	// 	$this->load->view('layout/header', $data);
	// 	$this->load->view('generate/vw_edithgenerate');
	// 	$this->load->view('layout/footer');
	// }

	public function fungsi_tambah_generate()
   {
        $data['generate'] = $this->db->get_where('certificate_assignments', ['user_id' => $this->session->userdata('user_id')])->row_array();

        // $assignment_id = $this->input->post('assignment_id');
        $certificate_id = $this->input->post('certificate_id');
        $user_id = $this->input->post('user_id');
        $event_id = $this->input->post('event_id');
        $assigned_at = $this->input->post('assigned_at');
  
       

        $ArrInsert = array(
            // 'assignment_id' => $assignment_id,
            'certificate_id' => $certificate_id,
            'user_id' => $user_id,
            'event_id' => $event_id,
            'assigned_at' => $assigned_at
 
           
        );

        $this->M_generate->insertDatagenerate($ArrInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
        redirect('generate');
    }

    // public function fungsi_edit_generate()
    // {
    //     $data['generate'] = $this->db->get_where('certificate_assignments', ['assignment_id' => $this->session->userdata('assignment_id')])->row_array();

    //     // $assignment_id = $this->input->post('assignment_id');
    //     $certificate_id = $this->input->post('certificate_id');
    //     $user_id = $this->input->post('user_id');
    //     $event_id = $this->input->post('event_id');
    //     $assigned_at = $this->input->post('assigned_at');
      

    //     $ArrUpdate = array(
    //     	// 'assignment_id' => $assignment_id,
    //         'certificate_id' => $certificate_id,
    //         'user_id' => $user_id,
    //         'event_id' => $event_id,
    //         'assigned_at' => $assigned_at
         
           
    //     );

    //     $this->M_generate->updateDatagenerate($assignment_id, $ArrUpdate);
    //     $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
    //     redirect('generate');
    // }

    public function hapus_generate($id)
    {
        $data['users'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();

        $this->M_generate->hapusGenerate($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        redirect('generate');
    }

    public function download($id)
    {
        $data['title'] = 'download';
        $certificate = $this->M_certificate->getDataCertificateDetail($id);
        $event = $this->M_events->getDataeventsDetail($id);
		
        $data['certificate'] = $certificate;
        $data['events'] = $event;

        $this->load->library('dompdf_gen');
        $this->load->view('generate/download', $data);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper_size, $orientation);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream('Certificate.pdf', array('Attachment' => 0));
    }

}