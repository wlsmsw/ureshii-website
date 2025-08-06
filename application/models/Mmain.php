<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mmain extends CI_Model {

	protected $_conn;

	protected $_conn_close;

	function __construct() {
		parent::__construct();
		$this->load->library('conn');

		$this->_conn = $this->conn->_conn();
		$this->_conn_close = $this->conn->_close();
	}
	
	
	
	public function getProducts(){
	    
	    $query = "SELECT * FROM u_productcategory  A LEFT JOIN u_subproductcategory B ON A.PR_ID = B.product_id WHERE pr_active = :status ORDER BY A.PR_ID, B.PS_ID";

		$param[':status'] = 1;

		$result = $this->conn->query($query, $param);

		return ($result) ? $result : array();
	    
	}
	
	public function getProductDetails($projName){
	    
	    $query = "SELECT * FROM u_product A INNER JOIN u_productcategory B ON A.PCat_ID = B.PR_ID WHERE A.project_status = :status AND B.pr_slug = :catslug";
	    
	    $param[':status'] = 1;
	    $param[':catslug'] = $projName;
	    
	    $result = $this->conn->query($query, $param);

		return ($result) ? $result : array();
	    
	}
	
	public function getSubProductTitle($subproductSlug){
	    
	    $query = "SELECT subproduct_name FROM u_subproductcategory WHERE subproduct_slug = :subproductSlug";

		$param[':subproductSlug'] = $subproductSlug;

		$result = $this->conn->query($query, $param);

		return ($result) ? $result[0]['subproduct_name'] : array();
	    
	}
	
	
	public function getCareers(){
	    
	    $query = "SELECT c_code, c_title, c_description, c_dateadded FROM u_careers WHERE c_active = :status";

		$param[':status'] = 1;

		$result = $this->conn->query($query, $param);

		return ($result) ? $result : array();
	    
	}
	
	public function getCareerDetails($careerID){
	    
	    $query = "SELECT * FROM u_careers WHERE c_code = :careerID";
	    
	    $param[':careerID'] = $careerID;
	    
	    $result = $this->conn->query($query, $param);

		return ($result) ? $result : array();
	    
	}
	
}