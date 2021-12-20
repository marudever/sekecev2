<?php

    class Ordering extends CI_Controller
    {

        public function __construct(){
            parent::__construct();
            $this->load->model('M_artikel');
            $this->load->model('M_kategori');
            $this->load->model('M_suka');
            $this->load->model('M_user');
            $this->load->model('M_order');
        }


        public function index()
        {

            $data['judul'] = "Your Order/ ";

            $where = array(
				'id_users' => $this->session->userdata('user_id')
			);
            $data['list'] = $this->M_order->get_where_user($where)->result();
            
            $data['jumlah_artikel'] = $this->M_order->get_where_user($where)->num_rows();

            $this->load->view('user/template/header', $data);
			$this->load->view('user/ordering', $data);
			$this->load->view('user/template/footer', $data);

        }



        // Payment System
        public function payment_clear($id)
		{

			$data = array(
				'status'	=> 1
			);

			$update = $this->M_order->edit($id, $data);

				if($update){
					$this->session->set_flashdata('order_stat', 'Pembayaran Telah Selesai, Silahkan Hubungi Freelancer Untuk Konfirmasi Lanjut');
					redirect(base_url('order'));
				}else{
					$this->session->set_flashdata('order_stat', 'There is something in our system, please try again!');
					redirect(base_url('order'));
				}

		}
		
		public function paying($id)
		{

			$data['judul'] = "Your Order/ ";

            $where = array(
				'id_users' => $this->session->userdata('user_id')
			);
            $data['list'] = $this->M_order->get_where_user($where)->result();
            
            $data['jumlah_artikel'] = $this->M_order->get_where_user($where)->num_rows();

			$this->load->view('user/template/header_s', $data);
			$this->load->view('user/pay', $data);

		}
        

        public function payment_wait($id)
		{

			$data = array(
				'status'	=> 0
			);

			$update = $this->M_order->edit($id, $data);

				if($update){
					$this->session->set_flashdata('order_stat', 'Pembayaran Belum di Proses');
					redirect(base_url('order'));
				}else{
					$this->session->set_flashdata('order_stat', 'There is something in our system, please try again!');
					redirect(base_url('order'));
				}

		}


		public function payment_acc($id)
		{

			$data = array(
				'status'	=> 2
			);

			$update = $this->M_order->edit($id, $data);

				if($update){
					$this->session->set_flashdata('order_stat', 'Pembayaran Diterima');
					redirect(base_url('mystore'));
				}else{
					$this->session->set_flashdata('order_stat', 'There is something in our system, please try again!');
					redirect(base_url('mystore'));
				}

		}


		public function payment_done($id)
		{

			$data = array(
				'status'	=> 3
			);

			$update = $this->M_order->edit($id, $data);

				if($update){
					$this->session->set_flashdata('order_stat', 'Done');
					redirect(base_url('order'));
				}else{
					$this->session->set_flashdata('order_stat', 'There is something in our system, please try again!');
					redirect(base_url('order'));
				}

		}

    }

?>