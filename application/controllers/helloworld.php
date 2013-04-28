    <?php  
        class Helloworld extends CI_Controller{  
            function index()  
            {  
                $this->load->model('Helloworld_model');  
                $data['result'] = $this->helloworld_model-><span class="sql">getData</span>();  
                $data['page_title'] = "CI Hello World App!";  
                $this->load->view('helloworld_views',$data);
		$this->load->view('21314');  
            }  
        }  
    ?>  
