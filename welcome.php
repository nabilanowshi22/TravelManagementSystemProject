    <?php

$uname = "nabila";
$pwd = "nabila";

session_start(); //builtin function of php

if(isset($_SESSION['uname'])){
    echo "<h1> Travel Management System</h1>";
         echo "<h6> </h6>";
     echo "<h3>Hi Nabila</h3>";
   // echo"<h1>ksjkd<h1>";
        echo "<a href='homepage.php'>Home Page</a><br>";

    echo "<br><a href='logout.php'><input type=button value=logout name=logout></a>";
}else{
    if($_POST['uname'] == $uname && $_POST['pwd'] == $pwd){

        $_SESSION['uname']=$uname; //session set.
        
        echo "<script>location.href='welcome.php'</script>";

    }else{
        echo "<script>alert('username or password is incorrect')</script>";

        echo "<script>location.href='login.php'</script>"; 
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"></meta>
    <title></title>
</head>
<body background="kkk.jpg">
    

</body>
</html>    
