<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Product');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$results = $this->Product->all();
		if(empty($results))
		{
			echo "Sorry there's no products added yet. Please <a href=\"/products/new_products\">add one</a>";
		}
		else
		{
		$this->load->view('products/all', array("results" => $results));
		}
	}

	public function new_products()
	{
		$this->load->view('products/productsnew');
	}

	public function create()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('price', 'Price', 'required|numeric');

	    if ($this->form_validation->run() == FALSE)
	    {
      		$this->session->set_flashdata("login_errors", validation_errors());
      		redirect('/products/new_products');
	    }
	    else
	    {
			$this->Product->create($this->input->post());
			redirect('/'); 
	    }
	}

	public function show($id)
	{
		$all = $this->Product->show($id);
		$this->load->view('Products/Show', array('all'=>$all));		
	}

	public function edit($id)
	{
		$edit = $this->Product->show($id);
		$this->load->view('Products/edit', array('edit' => $edit));
	}

	public function update($id)
	{
		$this->Product->update($id, $this->input->post());
		redirect('/');
	}

	public function destroy($id)
	{
		$this->Product->delete($id);
		redirect('/');
	}

}













