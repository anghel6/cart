    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">  
    <html xml:lang="en-us" xmlns="http://www.w3.org/1999/xhtml">  
    <head>  
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
    <title>CodeIgniter Shopping Cart</title>  
    <link href="<?php echo base_url(); ?>assets/css/core.css" media="screen" rel="stylesheet" type="text/css" />
    
     
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/core.js"></script>
   
	
	
	
    </head>  
    <body>
        
            <?php $i = 1; ?>  

    <ul class="products">
        
        <?php foreach($products as $p): ?>  
        <li>
            <h2 style="font-size:16px"><?php echo $p['name']; ?></h2>
            <div id="stock">In stock<strong style="color:blue; font-size:10px">(now!)</strong>:<b><?php echo $p['stock']; ?></b></div>
            <?php if ($i==1) {; ?>
            <a  id="m1" style="color:blue; text-decoration:underline" class="page1" href="#dialog" name="modal"><?php echo $p['modals'];?></a>
            <?php require_once('modal.php');?>
             <?php }; ?>
            <?php if ($i==2) {; ?>
            <a id="m2" style="color:blue; text-decoration:underline" class="page1" href="#dialog1" name="modal"><?php echo $p['modals'];?></a>

            <?php require_once('modal1.php');?>

            <?php }; ?>
            <?php if ($i==3) {; ?>
            <a id="m3" style="color:blue; text-decoration:underline" class="page1"  href="#dialog2" name="modal"><?php echo $p['modals'];?></a>
            <?php require_once('modal2.php');?>
            <?php }; ?>
            <?php if ($i==1) {; ?>
            <a id="m4" style="color:blue; text-decoration:underline;" class="page2" href="#dialog3" name="modal"><?php echo $p['modals'];?></a>
            <?php require_once('modal3.php');?>
            <?php }; ?>
            <?php if ($i==2) {; ?>
            <a id="m5" style="color:blue; text-decoration:underline;" class="page2" href="#dialog4" name="modal"><?php echo $p['modals'];?></a>
           <?php require_once('modal4.php');?>
            <?php }; ?>
            <?php if ($i==3) {; ?>
            <a id="m6" style="color:blue; text-decoration:underline;" class="page2" href="#dialog5" name="modal"><?php echo $p['modals'];?></a>
            <?php require_once('modal5.php');?>
            <?php }; ?> 
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
        <?php  $i++;?>
        <?php endforeach;?>  
         <?php //echo $this->pagination->create_links(); ?>
    </ul>
      
    </body>
    </html>