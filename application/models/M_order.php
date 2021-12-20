<?php 

	class M_order extends CI_Model
	{

		public function get_where_user($where)
		{

			$this->db->select('*, payment.id AS ID, payment.id_users AS ids, freelancer.nama AS NAMA, artikel.judul AS Judul, user.username AS nama, payment.status AS Status, payment.status_code AS stat, payment.va_number AS va, payment.payment_type AS pt, payment.bank AS bk');
			$this->db->join('freelancer','freelancer.id=payment.id_freelancer');
			$this->db->join('artikel','artikel.id=payment.id_artikel');
			$this->db->join('user','user.id=payment.id_users');
			return $this->db->get_where('payment', $where);

		}


		public function get_where_payment($where)
		{

			$this->db->select('*, payment.id AS ID, payment.id_users AS ids, freelancer.nama AS NAMA, artikel.judul AS Judul, user.username AS nama, payment.status AS Status');
			$this->db->join('freelancer','freelancer.id=payment.id_freelancer');
			$this->db->join('artikel','artikel.id=payment.id_artikel');
			$this->db->join('user','user.id=payment.id_users');
			return $this->db->get_where('payment', $where);

		}


		public function get_where_f($wheref)
		{

			$this->db->select('*, payment.id AS ID, payment.id_users AS ids, freelancer.nama AS NAMA, user.username AS name, payment.status AS Status, freelancer.deskripsi AS desk, payment.status_code AS stat, payment.va_number AS va, payment.payment_type AS pt, payment.bank AS bk');
			$this->db->join('freelancer','freelancer.id=payment.id_freelancer');
            $this->db->join('user','user.id=payment.id_users');
            $this->db->join('artikel','artikel.id=payment.id_artikel');
			return $this->db->get_where('payment', $wheref);

		}


		// Payment System
		public function edit($id, $data){

			$this->db->where('id', $id);
			return $this->db->update('payment', $data);

		}

		public function insert_data($data, $where){

			$this->db->where('id', $where);
			return $this->db->update('payment', $data);

		}


	}

?>