<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Snap extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
        $params = array('server_key' => 'SB-Mid-server-xUlRmPGt2cb6pYNn139tOqJT', 'production' => false);
		$this->load->library('midtrans');
		$this->midtrans->config($params);
		$this->load->helper('url');	
		$this->load->model('M_artikel');
        $this->load->model('M_kategori');
        $this->load->model('M_suka');
        $this->load->model('M_user');
        $this->load->model('M_order');
    }


	public function payment($id)
	{

		$where = array(
			'payment.id' => $id
		);
		$data['list'] = $this->M_order->get_where_payment($where)->result();
		$data['jumlah_artikel'] = $this->M_order->get_where_payment($where)->num_rows();


		$this->load->view('user/snapnew', $data);
		
	}


    public function index()
    {
    	$this->load->view('checkout_snap');
    }

    public function token()
    {	

		$payment_id = $this->input->post('payment_id');
		$service = $this->input->post('service');
		$harga = $this->input->post('harga');
		
		// Required
		$transaction_details = array(
		  'order_id' => $payment_id,
		  'gross_amount' => $harga, // no decimal allowed for creditcard
		);

		// Optional
		$item1_details = array(
		  'id' => 'a1',
		  'price' => $harga,
		  'quantity' => 1,
		  'name' => $service
		);

		// Optional
		$item_details = array ($item1_details);

		// Optional
		$billing_address = array(
		  'first_name'    => "Andri",
		  'last_name'     => "Litani",
		  'address'       => "Mangga 20",
		  'city'          => "Jakarta",
		  'postal_code'   => "16602",
		  'phone'         => "081122334455",
		  'country_code'  => 'IDN'
		);

		// Optional
		$shipping_address = array(
		  'first_name'    => "Obet",
		  'last_name'     => "Supriadi",
		  'address'       => "Manggis 90",
		  'city'          => "Jakarta",
		  'postal_code'   => "16601",
		  'phone'         => "08113366345",
		  'country_code'  => 'IDN'
		);

		// Optional
		$customer_details = array(
		  'first_name'    => $this->session->userdata('username'),
		  'last_name'     => "",
		  'email'         => "andri@litani.com",
		  'phone'         => "081122334455",
		  'billing_address'  => $billing_address,
		  'shipping_address' => $shipping_address
		);

		// Data yang akan dikirim untuk request redirect_url.
        $credit_card['secure'] = true;
        //ser save_card true to enable oneclick or 2click
        //$credit_card['save_card'] = true;

        $time = time();
        $custom_expiry = array(
            'start_time' => date("Y-m-d H:i:s O",$time),
            'unit' => 'hour', 
            'duration'  => 1
        );
        
        $transaction_data = array(
            'transaction_details'=> $transaction_details,
            'item_details'       => $item_details,
            'customer_details'   => $customer_details,
            'credit_card'        => $credit_card,
            'expiry'             => $custom_expiry
        );

		error_log(json_encode($transaction_data));
		$snapToken = $this->midtrans->getSnapToken($transaction_data);
		error_log($snapToken);
		echo $snapToken;
    }

    public function finish()
    {
    	$result = json_decode($this->input->post('result_data'),true);
		$where = $result['order_id'];
    	$data = [
			'gross_amount' => $result['gross_amount'],
			'payment_type' => $result['payment_type'],
			'transaction_time' => $result['transaction_time'],
			'bank' => $result['va_numbers'][0]["bank"],
			'va_number' => $result['va_numbers'][0]["va_number"],
			'pdf_url' => $result['pdf_url'],
			'status_code' => $result['status_code'],
			'status' => +1
		];

		$this->M_order->insert_data($data, $where);
    }
}
