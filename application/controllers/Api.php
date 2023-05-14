<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

    public function __construct() {
        parent::__construct();
        $this->load->model('M_Api');
        header("Access-Control-Allow-Origin: *");
        header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
        header('Access-Control-Allow-Headers: *');
    }

	public function users($id = null) {
        if ($id !== null) {
            $data['users'] = $this->M_Api->getDataById('users', $id);
        } else {
            $data['users'] = $this->M_Api->getAllData('users');
        }
        header("Access-Control-Allow-Origin: ");
        header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
        header('Access-Control-Allow-Headers:');
        if(!$data){
                $this->output->set_content_type('application/json')->set_output(json_encode(
                    array(
                        'success' => false,
                        'message' => 'failed',
                    )
                ));
               }else{
                $this->output->set_content_type('application/json')->set_output(json_encode(
                    array(
                        'success' => true,
                        'message' => 'success',
                        'data' => $data,
                    )
                ));
            }

    }
}
