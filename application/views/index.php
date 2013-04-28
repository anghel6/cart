    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">  
    <html xml:lang="en-us" xmlns="http://www.w3.org/1999/xhtml">  
   
    <body>  
    
<div id="container" >
	<div id="header">
		<h1>Demo Electronics e-shop</h1>
		<h2>With PHP CodeIgniter Framework &Jquery&Ajax</h2>
                <img src="<?php echo base_url(); ?>assets/img/wifi.ico" width="128px" height="128px" style="float:right dislplay:inline;"></>
	</div>
            
            <div class="menu">
<ul>
    <li class="current" >
        <a href="http://shopcart.web44.net/index.php/cart/index?product=wifi" class="wifi" title="Home">WiFi</a>
    </li>
    <li class="current">
        <a href="http://shopcart.web44.net/index.php/cart/index?product=microcontrollers" class="microcontrollers" title="Microcontrollers">Microcontrollers</a>
    </li>
    <li class="current">
        <a class="Sensors" href="http://shopcart.web44.net/index.php/cart/index?product=Sensors" title="Sensors">Sensors</a>
    </li>
    
</ul>
</div>


		<div id="wrap">
                <div id="on" style="">
            <?php
            error_reporting(0);
            
            if (!(($_GET['product']) == 'microcontrollers') && !(($_GET['product']) == 'Sensors') && !(($_GET['product']) == 'wifi')) {

           $this->load->view($content);
            echo $this->pagination->create_links();
            }
            
            ?>
          </div>
        <div id="show_products" class="products">
        <?php
         error_reporting(0);
         
        if (($_GET['product']) == 'wifi') {
           // header('Location:cart/products');
            echo $string;  
             $this->load->view($content);
            echo $this->pagination->create_links();


        }
        ?>
        </div>
         <div id="show_products_1" class="products">
        <?php
        error_reporting(0);
        if (($_GET['product']) == 'microcontrollers') {
        $this->load->view($result);

        }
        ?>
        <div id="show_products_2" class="products">
        <?php
        error_reporting(0);
        if (($_GET['product']) == 'Sensors') {
        $this->load->view($res);

        }
        ?>
        
         </div>
         </div>
         <div  class="products">
        
         </div>
         
        <div class="cart_list">
        <br>
        <h1 style="font-size: 14px; padding-right:80px;"><b>Your shopping cart</b></h1>

        <div id="cart_content">  
            <?php echo $this->view('cart/cart.php'); ?>
                    
        </div>
        <div style="">
            
            <?php echo $this->view('/search_form.php'); ?>
        </div>
    </div>
	</div>


	</div>
       

        

	

	</div>
        <?php
    $attributes = array('class' => 'searchForm', 'id' => 'searchForm');
   echo form_open('cart/',$attributes);
   ?>
  <b style="color:blue"><label for="search">Search Product:</label></b>
   
  <?php
    echo form_input(array('name'=>'search'));
    $data = array(
    'name'        => 'search_submit',
    'id'          => 'submit',
    'value'       => 'Go!',
    'class'       => 'sub'
    );

    echo form_submit($data);
    

?>
        <div id="txtHint"></div>
<div class="result"></div>


			</div>

    </body>  
    </html>
     <head>  
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
    <title>CodeIgniter Shopping Cart</title>  
    <link href="<?php echo base_url(); ?>assets/css/core.css" media="screen" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/core.js"></script>

<script type="text/javascript">
$(document).ready(function(){
  //$('#submit').click(function(){  
 // });
    var link = "http://shopcart.web44.net/index.php/";

 $("#searchForm").submit(function(event) {
  /* stop form from submitting normally */
  event.preventDefault();
  /* get some values from elements on the page: */
  var $form = $( this ),
      term = $form.find( 'input[name="search"]' ).val(),
      url = $form.attr( 'action' );
   /* Send the data using post */
    // 
  var posting = $.post(link + "cart/execute_search", { search: term } );
 
  /* Put the results in a div */
  posting.done(function( data ) {
    var content = $( data ).find( '.products' );
   //window.location=link+"cart/index?search="+term;

   $( "#wrap" ).empty().append( content );
  });
});
 

  });


$(document).ready(function(){
    var currentURL = window.location.href;
    
    if(currentURL == "http://shopcart.web44.net/index.php/cart/index/3?product=wifi" || currentURL == "http://shopcart.web44.net/index.php/cart/index/3?" ){
           
           
            $('#m1 #m2 #m3').removeClass('page2');
           $("#m1").prop("href", "#dialog3");
           $("#m2").prop("href", "#dialog4");
           $("#m3").prop("href", "#dialog5");
	

}
$('.close').click(function() {
		
	history.go(0);
	});			
 
     
    
});
 
 
 
 
</script>


    </head>  