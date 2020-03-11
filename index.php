<?php
	if(isset($_GET["email"])) {
		echo " Hello ".$_GET["username"].", your email is: ".$_GET["email"];
	}

?>
<meta charset="UTF-8">
<form action="/" method="GET">
	<div><label for="username">Username <br><input required name="username" id="username" ></label></div>
	<div><label for"email"> Email <br><input required type="email" name="email" id="email"></lable></div>
	<div>
        <br>
		<input type="submit" value="Submit" />
	</div>
</form>
