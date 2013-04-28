
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">  
    <html xml:lang="en-us" xmlns="http://www.w3.org/1999/xhtml">  
   
    <body style="height:600px;">
		
    

<div style="margin-top:0px;">

<div>
    <?php
          $i = 1; 
?>

    <ul class="products">
        
        <?php foreach($results as $p): ?>  
        <li>
            <h3><?php echo $p['name']; ?></h3>
            <div id="stock">In stock<strong style="color:blue; font-size:12px">(now!)</strong>:<b><?php echo $p['stock']; ?></b></div>
           
             
            <img src="<?php echo base_url(); ?>assets/img/<?php echo $p['image']; ?>" alt="" />  
            <small>&euro;<?php echo $p['price']; ?></small>  
            <?php echo form_open('cart/add_cart_item'); ?>  
                <fieldset>  
                    <label>Quantity</label>  
                    <?php echo form_input('quantity', '1', 'maxlength="2"'); ?>  
                    <?php echo form_hidden('product_id', $p['id']); ?>  
                    <?php echo form_submit('add', 'Add'); ?>  
                </fieldset>  
            <?php echo form_close(); ?>  
        </li>
        <?php $i++ ?>
        <?php endforeach;?>

    </ul>
	
	
	
</div>
</div>
	
    



       





 </body>  
    </html>
     <head>  
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
    <title>CodeIgniter Shopping Cart</title>  
        <link href="<?php echo base_url(); ?>assets/css/core.css" media="screen" rel="stylesheet" type="text/css" />
     
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>  
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/core.js"></script>

      
    
     
    </head>  