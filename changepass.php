          
<!DOCTYPE HTML>  
<html>
<body>


<h2>CHANGE PASSWORD</h2>

<div><?php if(isset($message)) { echo $message; } ?></div>
<form method="post" action="welcome.php">
Current Password:<br>
<input type="password" name="currentPassword"><span id="currentPassword" class="required"></span>
<br>
New Password:<br>
<input type="password" name="newPassword"><span id="newPassword" class="required"></span>
<br>
Retype New Password:<br>
<input type="password" name="confirmPassword"><span id="confirmPassword" class="required"></span>
<br><br>
<input type="submit">
</form>





<?php 
?>
</body>
</html>
    

    
