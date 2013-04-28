<?php  
    class Cart_model extends CI_Model { // Our Cart_model class extends the Model class  
        // Function to retrieve an array with all product information  
        function retrieve_products(){
            

            $this->load->library('pagination');

            $this->load->database();
            $config['base_url']='http://localhost/ci/index.php/cart/index';
            $this->db->where('category','wifi');
            $config['total_rows']=$this->db->get('products')->num_rows();
           // $config['page_query_string'] = TRUE;
            $config['suffix'] = '?'.http_build_query($_GET, '', "&");
            $config['per_page']=3;
            $config['num_links']=2;
            $config['full_tag_open']='<div id="pagination">';
            $config['full_tag_close']='</div>';
            $this->pagination->initialize($config);
            $query = $this->db->get('products',$config['per_page'],$this->uri->segment(3)); // Select the table products  
            return $query->result_array(); // Return the results in a array.
                    
        }
        function retrieve_microcontrollers(){
            $this->load->database();
            $this->db->where('category','microcontrollers');
            $q=$this->db->get('products');
            return $q->result_array();
        }
        
        function retrieve_Sensors(){
            $this->load->database();
            $this->db->where('category','Sensors');
            $q1=$this->db->get('products');
            return $q1->result_array();
        }
        public function get_results($search_term='default')
    {
        $this->load->database();
        // Use the Active Record class for safer queries.
        $this->db->select('*');
        $this->db->from('products');
        $this->db->like('name',$search_term);

        // Execute the query.
        $query = $this->db->get();

        // Return the results.
        return $query->result_array();
    }
               
        
        function validate_add_cart_item(){
    
    $this->load->database();
     $n=0;
    $id = $this->input->post('product_id'); // Assign posted product_id to $id  
    $cty = $this->input->post('quantity'); // Assign posted quantity to $cty  
    $this->db->where('id', $id); // Select where id matches the posted id  
    $query = $this->db->get('products',1); // Select the products where a match is found and limit the query by 1
      
    // Check if a row has matched our product id
            $this->load->library('cart');

    if($query->num_rows > 0){  
    // We have a match!  
        foreach ($query->result() as $row)
         
        {  
                     $data = array(  
                    'id'      => $id,  
                    'qty'     => $cty,  
                    'price'   => $row->price,  
                    'name'    => $row->name  ,
                    'stock'   => $row->stock,
                    
            );
        }
                
          // Add the data to the cart using the insert function that is available because we loaded the cart library
        
                $this->cart->insert($data);  

         
            return TRUE; // Finally return TRUE 
        
        }else{  
        // Nothing found! Return FALSE!  
        return FALSE;  
    }  
}

function validate_update_cart(){  
    // Get the total number of items in cart
    
    $total = $this->cart->total_items();  
    // Retrieve the posted information  
    $item = $this->input->post('rowid');  
    $qty = $this->input->post('qty');  
    // Cycle true all items and update them  
    for($i=0;$i < $total;$i++)  
    {  
        // Create an array with the products rowid's and quantities.  
        $data = array(  
              'rowid' => $item[$i], 
              'qty'   => $qty[$i],
           );  
           // Update the cart with the new information  
        $this->cart->update($data);  
    }  
}  
    }  