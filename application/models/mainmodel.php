<?php
class mainmodel extends CI_model
{
	
public function encpswd($pass)
{
	return password_hash($pass,PASSWORD_BCRYPT);
}
public function reg1($a)
{

	$this->db->insert("register",$a);

}
public function show()
{
	$this->db->select('*');
	$qry=$this->db->get("register");
	return $qry;

}
public function approve1($id)
{
	$this->db->set('status','1');
	$qry=$this->db->where("id",$id);
	$qry=$this->db->update("register");
    return $qry;
}
public function reject1($id)
{
	$this->db->set('status','2');
	$qry=$this->db->where("id",$id);
	$qry=$this->db->update("register");
    return $qry;
}
public function selectpass1($uname,$pass)
{
	$this->db->select('password');
	$this->db->from("register");
	$this->db->where("uname","$uname");
	$qry=$this->db->get()->row('password');
	return $this->verifypass1($pass,$qry);
}
public function verifypass1($pass,$qry)
{
	return password_verify($pass,$qry);
}
public function getuserid1($uname)
{
	$this->db->select('id');
	$this->db->from("register");
	$this->db->where("uname","$uname");
	return $this->db->get()->row('id');

}
public function getuser1($id)
{
	$this->db->select('*');
	$this->db->from("register");
	$this->db->where("id",$id);
	return $this->db->get()->row();

}
}

?>