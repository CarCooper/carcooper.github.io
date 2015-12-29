
<!DOCTYPE html>
<html>
	<head>
		<title>CarCooper</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        
		<script type="text/javascript" src="./Js/bootstrap.min.js"></script>
       
        <link rel="stylesheet" type="text/css" href="./Css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="./Css/site.css"></link>
     
	</head>

    <body>
    	<div class="container">
<!-- Feedback Form Starts Here -->
<div id="feedback">
<!-- Heading Of The Form -->
<div class="head">
<h3>FeedBack Form</h3>
<p>This is feedback form. Send us your feedback !</p>
</div>
<!-- Feedback Form -->
<form action="#" id="form" method="post" name="form">
<input name="vname" placeholder="Your Name" type="text" value="">
<input name="vemail" placeholder="Your Email" type="text" value="">
<input name="sub" placeholder="Subject" type="text" value="">
<label>Your Suggestion/Feedback</label>
<textarea name="msg" placeholder="Type your text here..."></textarea>
<input id="send" name="submit" type="submit" value="Send Feedback">
</form>
<h3><?php include "secure_email_code.php"?></h3>
</div>
<!-- Feedback Form Ends Here -->
</div>
    	
    	
    	
    	
    	
    	
      

    </body>


</html>
