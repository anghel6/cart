<?php session_start(); ?>
<?php  
class Cart extends CI_Controller { // Our Cart class extends the Controller class
  
    
            function index()  
    {
        $this->load->library('cart');
         $this->load->model('cart_model');
        $data['products'] = $this->cart_model->retrieve_products();
        $data['content'] = 'cart/products'; // Select our view file that will display our products  
        //$this->load->view('index', $data);
        $this->load->helper('form');
       $data['microcontrollers'] = $this->cart_model->retrieve_microcontrollers();
       $data['result'] = 'cart/microcontrollers'; // Select our view file that will display our products
       $data['Sensors'] = $this->cart_model->retrieve_Sensors();
       $data['res'] = 'cart/Sensors'; // Select our view file that will display our products  
        $this->load->view('index',$data);
    
       }
                      
              public function execute_search()
    {
             $this->load->helper('form');
        // Retrieve the posted search term.
        $search_term = $this->input->post('search');
        $this->load->model('cart_model');
    
        // Use a model to retrieve the results.
        $data['results'] = $this->cart_model->get_results($search_term);

        // Pass the results to the view.
        $this->load->view('search_form',$data);
        
    }
        function add_cart_item(){
                     $this->load->model('cart_model');

        if($this->cart_model->validate_add_cart_item() == TRUE){  
            // Check if user has javascript enabled  
            if($this->input->post('ajax') != '1'){  
            redirect(cart); // If javascript is not enabled, reload the page with new data  
            }else{
           
                echo 'true';
            }  
        }  
    }
        function show_cart(){  
        $this->load->view('cart/cart');  
    }
        function update_cart(){
        error_reporting(0);                    
        $this->load->model('cart_model');
        $this->cart_model->validate_update_cart();
 if($_SESSION['url']=('http://localhost/ci/index.php/cart/show_cart')){
            $a=("<html><script language='JavaScript'>history.go(-1)</script></html>");
            echo $a;
         
 }
    
    
    }  
         function empty_cart(){  
        $this->cart->destroy(); // Destroy all cart data  
        redirect('cart'); // Refresh te page  
    }  
    
}  