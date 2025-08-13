<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct() {
		parent::__construct();

		//$this->load->model('madmin');
		$this->load->model('mmain');

	}

	public function homepage(){

		$data['page'] = 'Home';
		$data['products'] = $this->getProducts();
		
		//$this->load->view('layouts/header', $data);
		$this->load->view('home',$data);
		//$this->load->view('layouts/footer');
	}
	
	public function policyCookie(){
	    
	    $data['page'] = 'Cookie Policy';
	    $data['products'] = $this->getProducts();

	    $this->load->view('layouts/header',$data);
		$this->load->view('cookie-policy');
		$this->load->view('layouts/footer');
	}
	

	public function About(){
	    
	    $data['page'] = 'About Us';
	    $data['products'] = $this->getProducts();

	    $this->load->view('layouts/header',$data);
		$this->load->view('about');
		$this->load->view('layouts/footer');
	}

	public function companyOverview(){
	    
	    $data['page'] = 'About Us';
	    $data['products'] = $this->getProducts();

	    $this->load->view('layouts/header',$data);
		$this->load->view('company-overview');
		$this->load->view('layouts/footer');
	}
	
	public function missionVision(){
	    
	    $data['page'] = 'About Us';
	    $data['products'] = $this->getProducts();

	    $this->load->view('layouts/header',$data);
		$this->load->view('mission-vision');
		$this->load->view('layouts/footer');
	}
	
	public function corporateMilestones(){
	    
	    $data['page'] = 'About Us';
	    $data['products'] = $this->getProducts();

	    $this->load->view('layouts/header',$data);
		$this->load->view('corporate-milestones');
		$this->load->view('layouts/footer');
	}
	
	public function getNews(){
	    
	    $data['page'] = 'News';
	    $data['products'] = $this->getProducts();

	    $this->load->view('layouts/header',$data);
		$this->load->view('news');
		$this->load->view('layouts/footer');
	}

	
	public function getCareers(){
	    
	    $data['page'] = 'Careers';
	    $data['products'] = $this->getProducts();
	    $data['careers'] = $this->mmain->getCareers();

	    $this->load->view('layouts/header',$data);
		$this->load->view('careers');
		$this->load->view('layouts/footer');
	}
	
	public function getCareerDetails(){
	    
	    $careerID = $this->uri->segment(2);
	    $data['page'] = 'Careers';
	    $data['products'] = $this->getProducts();
	    
	    $careerDetails = $this->mmain->getCareerDetails($careerID);
	    foreach($careerDetails as $cd){
	        $data['title'] = $cd['c_title'];
	        $data['description'] = $cd['c_description'];
	        $data['overview'] = explode("|",$cd['c_overview']);
	        $data['qualifications'] = explode("|",$cd['c_qualifications']);
	        $data['location'] = $cd['c_location'];
	        $data['type'] = $cd['c_type'];
	        $data['dateadded'] = $cd['c_dateadded'];
	    }
	    
	    $this->load->view('layouts/header',$data);
		$this->load->view('career-details');
		$this->load->view('layouts/footer');
	    
	}
	
	public function contactUs(){
	    
	    $data['page'] = 'Contact Us';
	    $data['products'] = $this->getProducts();

	    $this->load->view('layouts/header',$data);
		$this->load->view('contact-us');
		$this->load->view('layouts/footer');
	}
	
	
	public function getProductDetails(){
	    
	    $data['product_slug'] = $this->uri->segment(2);
	    
	    $data['page'] = 'Products';
	    $data['products'] = $this->getProducts();
        
        $data['title'] = strtoupper(str_replace("-"," ",$data['product_slug']));

        $data['product_details'] = $this->mmain->getProductDetails($data['product_slug']);

	    $this->load->view('layouts/header',$data);
		$this->load->view('products');
		$this->load->view('layouts/footer');
	}
	
	public function getSubProductDetails(){
	    
	    $data['subproduct_slug'] = $this->uri->segment(3);
	    
	    $data['page'] = 'Products';
	    $data['products'] = $this->getProducts();
        
        $data['subproduct_title'] = $this->mmain->getSubProductTitle($data['subproduct_slug']);
        
	    $this->load->view('layouts/header',$data);
		$this->load->view('subproducts');
		$this->load->view('layouts/footer');
	}
	
	/*get products*/
	public function getProducts(){
	    
	    $productArray = [];
	    $products = $this->mmain->getProducts();
	    
	    foreach($products as $p){
	        $productArray[$p['pr_slug']]['name'] = $p['pr_name'];
	        if($p['PS_ID'] != ''){
	            $productArray[$p['pr_slug']]['sub'][$p['subproduct_slug']]['name'] = $p['subproduct_name'];
	        }
	    }
	    
	    return $productArray;
	}


}