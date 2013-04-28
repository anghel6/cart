
    <?php error_reporting(0);
    if(!$this->cart->contents()):  
        echo 'You don\'t have any items yet.';

    else:  
    ?>  
    <?php echo form_open('cart/update_cart'); ?>
    
    <br>
    <table width="650px" cellpadding="0" cellspacing="0" style="font-size: 14px" >  
        <thead>  
            <tr>  
                <td>Qty</td>  
                <td>Item Description</td>  
                <td>Item Price</td>  
                <td>Sub-Total</td>
                <td>Status</td>
                <td style="color:blue">In-Stock(after purchasing)</td>
            </tr>  
        </thead>  
        <tbody>
            <?php $i = 1; ?>  
            <?php foreach($this->cart->contents() as $items): ?>  
            <?php echo form_hidden('rowid[]', $items['rowid']); ?>  
            <tr <?php if($i&1){ echo 'class="alt"'; }?>>  
                <td>  
                    <?php echo  form_input(array('name' => 'qty[]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5',id=>'upd')); ?>  
                </td>  
                <td><?php echo $items['name']; ?></td>  
                <td>&euro;<?php echo $this->cart->format_number($items['price']); ?></td>  
                <td>&euro;<?php echo $this->cart->format_number($items['subtotal']); ?></td>
                <td style="color:red;"><?php if($items['stock']-$items['qty']<0){
                $items['qty']=0;
                
                echo "Out of stock";
                 print ("<html><script language='JavaScript'>alert('Check status:out of stock,Please change Quantity of product! '),exit</script></html>");
                }else{ echo "In-stock"; ?></td>
               
                <td id="st"><b><?php echo $items['stock']-$items['qty']; ?></b></td>
               
                <?php    } ?>
               
             
            <?php $i++; ?>  
            <?php endforeach; ?>
            <tr>  
                <td</td>  
                <td></td>  
                <td><strong>Total</strong></td>  
                <td style="color:red">&euro;<?php echo $this->cart->format_number($this->cart->total()); ?></td>  
            </tr>  
        </tbody>  
    </table>  
    <p><?php $js = 'onClick="update()"';echo form_submit('submit', 'Update your Cart',$js); echo anchor('cart/empty_cart', 'Empty Cart', 'class="empty"');?></p>
  
    <?php
function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
    $_SESSION['url']=curPageURL();
                  
     ?>
    <p><small>If the quantity is set to zero, the item will be removed from the cart.</small></p>  
    <?php  
    echo form_close();  
    endif;  
    ?>
  
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="upload" value="1">
<input type="hidden" name="business" value="ang_ni_1360011701_biz@yahoo.com">

<?php
$num=0;
 foreach($this->cart->contents() as $items):

                $num++;
                echo '<input type="hidden" name="item_number_'.$num.'" value="'.$items['rowid'].'">';
                echo '<input type="hidden" name="item_name_'.$num.'" value="'.$items['name'].'">';
                
                echo '<input type="hidden" name="amount_'.$num.'" value="'.$items['price'].'">';
                
                echo '<input type="hidden" name="quantity_'.$num.'" value="'.$items['qty'].'">';
                endforeach;
    ?>
<input type="hidden" name="currency_code" value="EUR">
<input type="hidden" name="amount" value="<?php echo $this->cart->format_number($this->cart->total());   ?>">
<div style="color:red"><b style="color:blue;">Attention!</b>This is a Sandbox Paypal button with a fake account which i use it only for experimental reasons.Use <strong>12345678</strong> password to proceed with paypal simulation payment! </div>
<input type="image" src="http://www.paypal.com/en_US/i/btn/x-click-but01.gif"  width="70px" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
</form>



    
    
    
    