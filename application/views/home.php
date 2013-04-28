<?php
session_start(); // NEVER forget this!

if(!isset($_SESSION['loggedin']))
{
    die("To access the page press  <a href='index.php'>LOGIN</a>"); // Make sure they are logged in!
} // What the !isset() code does, is check to see if the variable $_SESSION['loggedin'] is there, and if it isn't it kills the script telling the user to log in!
session_destroy();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="description" content="your description goes here" />
	<meta name="keywords" content="your,keywords,goes,here" />
	<meta name="author" content="aggelos" />
	<link rel="stylesheet" type="text/css" href="learn-css.css" />
	<script src="jquery.js" language="javascript" type="text/javascript"></script>
	<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
	<script   src="script.js"></script>
	<script  src="blink.js"></script>
		<script src="slides.jquery.js"></script>
	<script type="text/javascript" src="idtabs.js"></script>
		<script type="text/javascript" src=".js"></script>
		<style>
		.slides_container {
			width:600px;
			height: 400px;
			margin: -50px auto 200px 300px;
		background:  url(background.jpg) no-repeat 0px 0px;
		padding:10px;
		}

		/*
			Each slide
			Importa
			Set the width of your slides
			If height not specified height will be set by the slide content
			Set to display block
		*/
		.slides_container #slides {
			width:450px;

          margin-left:20px auto auto 25px;
          padding-left: 120px;
			 padding-top: : 100px;

                 
			display:block;
		}

		


     #par{
     position:relative;
     bottom: 40px;
     right: 49px;
     }



		.paging{ 
		display: inline;
       background-color: rgba(125, 200, 100, 0.8);
		
		position:relative; 
		bottom:340px;
		 left:530px;
       
		}
		.number{
				font-style: normal;
		color: black;
		font-size: 1.2em;
		margin:1.01em;
		}
		
		/*
			Optional:
			Reset list default style
		*/
		.pagination {
			list-style:none;
			margin:0;
			padding:0;
		}

		/*
			Optional:
			Show the current slide in the pagination
		*/
		.pagination .current .number{
			color:red;
		}
	</style>
	<script type = "text/javascript">
	

$(document).ready(function() {
$("#menu2").load("gallery.html");




} );
<br />script language="JavaScript1.2" src="http://www.altavista.com/static/scripts/translate_engl.js"></script> 

</script>

	<title>Ιατρικό Συνέδριο Demo</title>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyCISOsLgRqitWYsSxkHxq_fzincTLRWz5k&sensor=false"> </script>
    <script type="text/javascript">
      function initialize(){
      var latlng = new google.maps.LatLng(37.98043 , 23.73285);
      var myOptions={
      zoom:15,
      center:latlng,
      mapTypeId:google.maps.MapTypeId.ROADMAP       
      };
      var firstmap = new google.maps.Map(document.getElementById("map_canvas"),
      myOptions);
      var point = new google.maps.LatLng(37.98043 , 23.73285);
      var marker = new google.maps.Marker({
      position:point,
      map:firstmap,
     title:'Hotel Titania',
     
      })
      
      }
    </script>
    <script type="text/javascript" >
    $(document).ready(function()
{
    var refreshId = setInterval( function() 
    {
        if( $(".opacity").css("opacity") == "1"){
         $(".opacity").css("opacity","0.5");

          }
          else{
         
         $(".opacity").css("opacity","1");

          
          }
     }, 500);
});    
    
</script>
	 

	
    <script type="text/javascript">
    
    $(document).ready(function()
    {
            $('.blink').blink({delay:500}); // default is 500ms blink interval.
            //$('.blink').blink({delay:100}); // causes a 100ms blink interval.
    });
     
    
</script>
<script>
		$(function(){
			$('#slides').slides({
			   generateNextPrev:true,
				preload: true,

			});
		});
	</script>


</head>

<body onload="initialize()"  >


<div id="wrap">
	<div id="header">
		<h1 style="font-size:1.6em"><a href="index.html"><b style="color:yellow; ">ΙΑΤΡΙΚΟ ΣΥΝΕΔΡΙΟ ΜΕ ΘΕΜΑ ΤΗΝ ΚΑΡΔΙΟΛΟΓΙΑ</b></a></h1>
		<p style="color:red; "><i>1 Δεκεμβρίου 2012, Αθήνα, Ξενοδοχείο Τιτάνια</i></p>
	</div>

<div class="menu"   >
    <ul id="menu" class="idTabs" style="position:relative; left:40px;" >
        <li  class="menu1" ><a href="#menu1">Αρχική</a></li>
        <li class="menu2"><a href="#menu2">Video Gallery</a></li>
        <li class="menu3" ><a   href="#menu3"><b  class="opacity" style="color:#00FF33;"> LIVE! ΜΕΤΑΔΟΣΗ</b></a></li>
        <li style="position:relative; left:250px; bottom:10px;"><?php echo "Καλως ήλθες, {$_SESSION['email']}"; ?><br><a style="font-size:13px; position:absolute; left:29px; bottom:-46px; background-color:orangered;" href="index.php">[Αποσύνδεση]</a></li>
        
    </ul>
    
</div>


<div id="menu2" class="menu2" >

<div style="position:absolute; top:350px; left:900px; width:400px;">


 <form  name="search" method="post" action="do_search.php" style="width:250px; font-size:1.6em; background-color: rgba(160, 30, 210, 0.5);"><b>
 Αναζήτηση Video:</b> <input type="text" name="find" /> Κριτήριο:
 <Select NAME="field">
 <Option VALUE="speaker">Ομιλητής</option>
 <Option VALUE="subject">θέμα</option>

 </Select>
 <input  type="hidden" name="searching" value="yes" />
 <input id="submit" class="search_button" type="submit" name="search" value="Αναζήτηση" />
 </form>
</div>
</div>  
<div id="menu3" class="menu3"  >
<div>
<h3 style="font-family: Georgia; text-align:center; font-size: 32px; font-weight: normal; margin: 0px auto 0 auto; color: #6d8824; width:400px;">LIVE! ΑΝΑΜΕΤΑΔΟΣΗ  <img class="blink" style="position:relative; top:20px;" src="images3.jpeg" alt="live" /></h3>
</div >
<div style="positon:relative; margin:30px 70% 80px 30%; ">
 <iframe width="360" height="300" src="http://www.youtube.com/embed/aIGSb1zxGlA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>

</div>   
</div>   
        

	<div id="menu1" class="menu1" >
	    <div>
		<h2 style="position:relative; left:460px; bottom:10px;  background-color: rgba(125, 12, 30, 0.5);">Θεματολογία Συνεδρίου</h2>
		</div>
		<br></br>
		<div id="slides">
		<div id="slides" class="slides_container">
			<div id="slides">
				<h1  id="par">Θέμα 1</h1>
				<p id="par">Η καρδιά έχει πολλά ανατομικά χαρακτηριστικά (π.χ., κόλποι, κοιλία, καρδιακής βαλβίδας) και πολλές φυσιολογικές λειτουργίες (π.χ., συστολή, ήχοι της καρδιάς, μεταφορτίο) που απασχολούν την καρδιολογία. Διαταραχές της καρδιάς οδηγούν σε καρδιακές παθήσεις και καρδιαγγειακή νόσο και ευθύνονται για σημαντικό αριθμό θανάτων: καρδιαγγειακή νόσος είναι η μεγαλύτερη [αιτία [θανάτου]] και προκάλεσε το 29,34% του συνόλου των θανάτων το 2002.</p>
			</div>
			<div id="slides">
				<h1  id="par">Θέμα 2</h1>
				<p id="par">Η πρωταρχική ευθύνη της καρδιάς είναι να προωθεί το αίμα στη συστηματική κυκλοφορία. Προωθεί το αίμα στο σώμα - που ονομάζεται συστηματική κυκλοφορία - στη συνέχεια στους πνεύμονες - που ονομάζεται πνευμονική κυκλοφορία - και τέλος πίσω στο σώμα. Αυτό σημαίνει ότι η καρδιά είναι συνδεδεμένη και επηρεάζει το σύνολο του σώματος. Το μεγαλύτερο μέρος των μελετών στην καρδιολογία αφορά τις διαταραχές της καρδιάς και την αποκατάσταση, όπου είναι δυνατόν, της λειτουργίας της.</p>
			</div>
			<div id="slides">
				<h1  id="par">Θέμα 3</h1>
           <p id="par">Το μηχανικό σύστημα της καρδιάς εστιάζει στην κίνηση του αίματος και τη λειτουργικότητα της καρδιάς ως αντλίας. Η μη επαρκής διακίνηση του αίματος μπορεί να οδηγήσει σε έκπτωση λειτουργίας άλλων οργάνων και μπορεί να οδηγήσει σε θάνατο, αν είναι σοβαρή. Καρδιακή ανεπάρκεια είναι μια κατάσταση κατά την οποία οι μηχανικές ιδιότητες της καρδιάς έχουν εκπέσει πλήρως και η καρδιά ανεπαρκή ή έχουν ελαχιστοποιηθεί και η ο καρδιακός μυς εμφανίζει ελαττωμένη λειτουργικότητα, πράγμα που σημαίνει ανεπαρκής κυκλοφορία αίματος.</p>
			</div>
			<div id="slides">
				<h1  id="par">Θέμα 4</h1>
          <p id="par">Υπάρχουν κι άλλες παθήσεις της καρδιάς που διαταράσσουν τόσο τις ηλεκτρικές όσο και τις μηχανικές ιδιότητες της καρδιάς. Η πιο οδυνηρή διαταραχή είναι το έμφραγμα του μυοκαρδίου (ΕΜ) ή καρδιακή ανακοπή. Το ΕΜ προκαλεί κυτταρικό θάνατο της καρδιάς που μειώνει τη λειτουργικότητα της καρδιάς και μπορεί να οδηγήσει στο θάνατο εάν είναι σοβαρό (μαζικό από στένωση βασικών κλάδων των στεφανιαίων).</p>
			</div>
		</div>
	</div>		

		<div id="lolo">
		<div style="position:relative; bottom:700px; width:200px;">
      <p><b>Πόλη:</b>Αθήνα</p>
		<p><b>Ημερομηνία:</b>1/12/2012</p>
		<p><b>Xώρος:</b>Hotel Titania</p>
		<p><b>Ωρα Εναρξης:</b>10:30πμ</p>
	   <p><b>Δες που βρίσκεται:</b></p>
		</div>
		<div   id="map_canvas" style="width: 250px; height:250px; position:fixed; bottom:700px;  ">
		
		</div>
	
	</div>

	
	
	 
	
	>
	
   
	
	

</body>
</html>
