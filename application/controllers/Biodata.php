<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_biodata');
	}
	
	public function index()
	{	
		$data['judul'] = "List Biodata";
		$data['biodata'] = $this->M_biodata->getData();
		$this->template->load('v_tamplate','v_biodata', $data);

		if ($this->input->post('keyword')) {
			$this->form_validation->set_rules('keyword', 'keyword', 'required');
			if ($this->form_validation->run() == FALSE) {
					redirect(base_url('biodata'), 'refresh');
			} else{

			 		$input = $this->input->post('keyword');
			        $arrayinput = explode(" ",$input);
			        $id_usia = "";
			        $nama[]="";
			        $kota[]="";

		            for($i=0;$i<count($arrayinput);$i++){
			            $number = substr($arrayinput[$i], 0,1);	            
			            if(is_numeric($number)){
			                    $id_usia = $i;
			       				$usia = str_replace(["th","tahun"],"",$arrayinput[$id_usia]);
			            }
		            }
			        for($i=0;$i<$id_usia;$i++){
			        	$nama[] = $arrayinput[$i];
			        }	
			        for($i=$id_usia + 1; $i<=count($arrayinput);$i++){
			        	 
			        	  if (isset($arrayinput[$i])) {
				               $kota[] = $arrayinput[$i] ;
				           }
			        }
			        $imNama = implode(" ", $nama);
			        $imKota = implode(" ", $kota);

			        $numNama = substr($imNama, 0 , 2);
			        $numKota = substr($imKota, 0 ,2);
			        if((is_numeric($numNama) ) or (is_numeric($numKota)))
			        {		
							        	
			         	$this->session->set_flashdata('flashBio', 'Data Gagal Disimpan Nama dan Kota Harus Alphabet');
						redirect(base_url('biodata'), 'refresh');
			        }else{
		   	     	 	$data = array(
		 					'nama' => $imNama,
		 					'usia' => $usia,
		 					'kota' => $imKota
		 				);

			         	$this->session->set_flashdata('flashBio', 'Data Berhasil Ditambah');
						$this->M_biodata->sendData($data);
						redirect(base_url('biodata'), 'refresh');
			        }

				
			}
		}
	}






	// 	public function tambah()
	// {
	// 	$data ['judul'] = 'Tambah Biodata';
	// 	$this->form_validation->set_rules('nama', 'Nama', 'required');
	// 	if ($this->form_validation->run() == FALSE) {				
	// 		$this->template->load('v_tamplate','v_tambah', $data);
	// 	} else{

	// 	 		$string = $this->input->post('nama');
	// 	        $pecah = explode(" ",$string);
	// 	        var_dump($pecah)."<br>";
	// 	        $usia_idx = "";
	// 	        $nama="";
	// 	        $kota="";
	// 	            for($i=0;$i<count($pecah);$i++){
	// 	            $cek = substr($pecah[$i], 0,1);
	// 				echo ($cek)."<br>";
	// 	            if(is_numeric($cek) == TRUE)
	// 	                {
	// 	                    $usia_idx = $i;
	// 	                    echo "id = ". ($usia_idx) .'<br>';
	// 	       				$usia = str_replace(["tahun","thn","th"],"",$pecah[$usia_idx]);
	// 	       				echo $usia .'<br>';
	// 	                }
	// 	            }
	// 	        for($i=0;$i<$usia_idx;$i++){
	// 	        	echo $i .'<br>';
	// 	        	echo $nama = $pecah[$i].'<br>';
	// 	        }

	// 	        for($i=$usia_idx + 1; $i<=count($pecah);$i++){
	// 	        	  echo $i . '<br>';
	// 	        	  if (isset($pecah[$i])) {
	// 		              echo $kota = $pecah[$i] . '<br>';
	// 		           }
	// 	        }

	// 	        if((!is_numeric($nama) ) or (!is_numeric($kota)))
	// 	        {
	//         	 	$data = array(
	//  					'nama' => $nama,
	//  					'usia' => $usia,
	//  					'kota' => $kota
	//  				);

	// 	         	$this->session->set_flashdata('flashBio', 'Data Berhasil Ditambah');
	// 				$this->M_biodata->sendData($data);
	// 				redirect(base_url('biodata'), 'refresh');
	// 	        }else{
	// 	            echo "Nama dan Kota harus Alphabet";
	// 	        }

			
	// 	}
	// }



    
}
