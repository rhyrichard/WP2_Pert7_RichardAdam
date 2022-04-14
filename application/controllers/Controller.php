<?php
class Controller extends CI_Controller
{
 
	public function index()
	{
		$this->load->view('vw_form');
	}

    public function cetak()
    {
        $this->form_validation->set_rules('nama','Nama','required|min_length[4]|max_length[30]');
		$this->form_validation->set_rules('nis','NIS','required|min_length[10]');
        $this->form_validation->set_rules('kelas','Kelas','required');
        $this->form_validation->set_rules('tanggallahir','Tanggal Lahir','required');
        $this->form_validation->set_rules('tempatlahir','Tempat Lahir','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required');
		$this->form_validation->set_rules('agama','Agama','required');
		
        if ($this->form_validation->run()!=true) {
            $this->load->view('vw_form');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'kelas' => $this->input->post('kelas'),
                'tanggallahir' => $this->input->post('tanggallahir'),
                'tempatlahir' => $this->input->post('tempatlahir'),
                'alamat' => $this->input->post('alamat'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'agama' => $this->input->post('agama'),
            ];
        
            $this->load->view('vw_data',$data);
        }
    }
} 