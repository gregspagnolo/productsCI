<?php
class Product extends CI_Model {

	public function all()
	{
		$query = "SELECT * FROM products";
		return $this->db->query($query)->result_array();
	}

	public function create($userinfo)
	{
		$query = "INSERT INTO products (name, description, price, created_at, updated_at) 
							VALUES (?,?,?, NOW(), NOW())";
		$values = array($userinfo['name'], $userinfo['description'], $userinfo['price']);
		$this->db->query($query, $values);
	}

	public function show($id)
	{
		$query = "SELECT * FROM products WHERE id = ?";
		$value = array($id);
		return $this->db->query($query, $value)->row_array();
	}

	public function update($id, $userupdate)
	{
		$query = "UPDATE products SET name = ?, description = ?, price = ? WHERE id = ?";
		$values = array($userupdate['name'], $userupdate['description'], $userupdate['price'], $id);
		return $this->db->query($query, $values);
	}

	public function delete($id)
	{
		$query = "DELETE FROM products WHERE products.id = ?";
    	return $this->db->query($query, array($id));
	}

}

?>