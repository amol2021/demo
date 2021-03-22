<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Package_model');
	
		$this->load->library('pagination');
		if ( ! $this->session->userdata('userdata'))
	    { 
	        // Allow some methods?
	        $allowed = array(
	            'logout','dashboard','customer','managecustomer'            
	        );
	        if (  in_array($this->router->fetch_method(), $allowed))
	        {
	            redirect('user');
	        }
	    }

	}

	
	public function index()
	{
		$userdata = $this->session->userdata('userdata');


		if($this->input->post())
		{
				$where_array = array(
							'username'=>$this->input->post('username'),
							'password'=>$this->input->post('password')
							);
				
				$result = $this->Package_model->check_user($where_array);
			
				$abc = $result['id'];
				if(count($result) > 0)
				{

					  $this->session->set_userdata('userdata', $result);
					redirect(base_url('user/customer/'.$abc));
				}else{
					$this->session->set_flashdata('error', '<div class="alert alert-danger">Invalid Credentials..</div>');
					redirect(base_url('user'));
				}
				
		}
		
		$this->load->view('admin/login');
			
	}


   	public function logout()
	{
		$userdata = $this->session->userdata('userdata');
		
		if($userdata !=''){
			
			
			$this->session->sess_destroy($userdata);
			redirect(base_url('user'));

		}else{
			redirect(base_url('user'));
		}
		
	}

    
    public function agent_register()
	{

         
         	if($this->input->post()){
    	
        	$insert_agent = array(
				
								'name'=>$this->input->post('name'),
								'email'=>$this->input->post('email'),
								'mobile'=>$this->input->post('mobile'),
								'username'=>$this->input->post('username'),
								'password'=>$this->input->post('password'),
								'status'=>'Active'
				
							);
				$this->Package_model->insert_agent($insert_agent);

				$this->session->set_flashdata('message', '<div class="alert alert-success"> Customer Register Successfully...!</div>');

				redirect(base_url('user'));
	        
	}

		
		$this->load->view('admin/agent_register');
	
	}


    public function customer()
	{
         $id = $this->uri->segment('3');


       	if($this->input->post())
		{
			//$digits = 5;
           // $opt = str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);
            $new_image_name1 = str_replace(str_split(' ()\\/,:*?"<>|'), '', 
			$_FILES['cust_profile_img']['name']);
			$config['upload_path'] = 'profile_pic/'; 
			$config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
			$config['file_name'] = $new_image_name1;
			$config['max_size']  = '0';
			$config['max_width']  = '0';
			$config['max_height']  = '0';
			$config['$min_width'] = '0';
			$config['min_height'] = '0';
		    $this->load->library('upload', $config);
			$upload1 = $this->upload->do_upload('cust_profile_img');
			$value=array('cust_profile_img'=>$new_image_name1);
			$image1 = $value['cust_profile_img'];
			$insert_customer = array(
									//'package_id'=>"PKG".$opt,
									'agent_id'=>$id,
									'cust_name'=>$this->input->post('cust_name'),
									'cust_email'=>$this->input->post('cust_email'),
									'cust_mobile'=>$this->input->post('cust_mobile'),
									
									'cust_profile_img'=>$image1,
									'cust_age'=>$this->input->post('cust_age'),
									'cust_address'=>$this->input->post('cust_address'),
									'status'=>$this->input->post('status')
				
				
									);
				$this->Package_model->insert_customer($insert_customer);
			
				$this->session->set_flashdata('message', '<div class="alert alert-success">Add customer Successfully...!</div>');
				redirect(base_url('user/managecustomer/'.$id));
			
		}


			$this->load->view('admin/header');
			$this->load->view('admin/customer_register');
			$this->load->view('admin/footer');
	}



	public function managecustomer($id)
	{
          $data['data'] =  $this->Package_model->allcustomer($id);

          //echo "<pre>"; print_r($data['data'] ); die();

		$this->load->view('admin/header');
		$this->load->view('admin/manage_customer',$data);
		$this->load->view('admin/footer');
	}



		
	
	public function dashboard()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/index');
		$this->load->view('admin/footer');
	}

	
   




}





