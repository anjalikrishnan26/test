<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}
	public function insert()
	{

		$this->load->library('form_validation');
		$this->form_validation->set_rules("fname","name",'required');
		$this->form_validation->set_rules("lname","name",'required');
		$this->form_validation->set_rules("uname","name",'required');
		$this->form_validation->set_rules("password","password",'required');
		$this->form_validation->set_rules("phone","phone",'required');
		$this->form_validation->set_rules("email","email",'required');
		
	
		if($this->form_validation->run())
		{

			$this->load->model('mainmodel');
			$pass=$this->input->post("password");
			$encspass=$this->mainmodel->encpswd($pass);

		$a=array("fname"=>$this->input->post("fname"),
			"lname"=>$this->input->post("lname"),
			"uname"=>$this->input->post("uname"),
			"password"=>$encspass,
			"phone"=>$this->input->post("phone"),
			"email"=>$this->input->post("email"));
		$this->mainmodel->reg1($a);
		redirect(base_url().'main/index');
	}
}
public function admin()
{
	$this->load->view('admin');
}
	public function show()
{
	$this->load->model('mainmodel');
	$data['n']=$this->mainmodel->show();
	$this->load->view('view',$data);
}
public function approve1()
	{

		$this->load->model('mainmodel');
		$id=$this->uri->segment(3);
		$this->mainmodel->approve1($id);
		redirect('main/show','refresh');
	}
	public function reject1()
	{
		$this->load->model('mainmodel');
		$id=$this->uri->segment(3);
		$this->mainmodel->reject1($id);
		redirect('main/show','refresh');

	}
	public function user()
{
	$this->load->view('uhome');
}
	public function login1()
{

	$this->load->view('login');
}
public function loginvalid()
{ 
	$this->load->library('form_validation');
	$this->form_validation->set_rules("uname","uname",'required');
	$this->form_validation->set_rules("password","password",'required');

	if($this->form_validation->run())
		{
			$this->load->model('mainmodel');

			$uname=$this->input->post("uname");
			$pass=$this->input->post("password");
			$rslt=$this->mainmodel->selectpass1($uname,$pass);

			if($rslt)
			{

				$id=$this->mainmodel->getuserid1($uname);
				$user=$this->mainmodel->getuser1($id);
				$this->load->library(array('session'));
				$this->session->set_userdata(array('id'=>(int)$user->id,
					'status'=>$user->status));
				
				if($_SESSION['status']=='1')
				{
					redirect(base_url().'main/user');
				}
				else
				{
					echo "waiting for approval";
				}
			}
			// else
			// {
			// 	echo "invlaid user";

			// }
		}
		// else
		// {
		// 	redirect('main/login1','refresh');
		// }
		
}
}
