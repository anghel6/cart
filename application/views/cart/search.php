
<?php

function checkValues($value)
{
	 // Use this function on all those values where you want to check for both sql injection and cross site scripting
	 //Trim the value
	 $value = trim($value);
	 
	// Stripslashes
	if (get_magic_quotes_gpc()) {
		$value = stripslashes($value);
	}
	
	 // Convert all &lt;, &gt; etc. to normal html and then strip these
	 $value = strtr($value,array_flip(get_html_translation_table(HTML_ENTITIES)));
	
	 // Strip HTML Tags
	 $value = strip_tags($value);
	
	// Quote the value
	$value = mysql_real_escape_string($value);
	return $value;
	
}	

include("/var/www/db.php");
$rec = checkValues($_GET['val']);




if($rec)

{
     
	 $sql = "select * from video    where  speaker like '%$rec%'";

}

else

{

	echo "<b>Εισάγετε κάποιο στοιχείο στην φόρμα </b>";
}



$rsd = mysql_query($sql);

$total =  mysql_num_rows($rsd);

?>

<?php

 while($row = mysql_fetch_array( $rsd,MYSQL_ASSOC))

{?>
           
	<div class="each_rec"><b style="font-size:17px; "> <?php echo $row['speaker'];?></b>:
        <b style="font-size:17px; color:red;"><?php echo $row['subject'];?></b>
         <br> 
        <?php     echo '<a onclick="" href="something.html" ><img name="myimage" src="'.$row[image].'" width="60" height="60" alt="word" /></a>'; ?>
</div>

<?php

}

if($total==0){ echo '<div class="no-rec">Δεν βρέθηκαν εγγραφές!</div>';}?>

