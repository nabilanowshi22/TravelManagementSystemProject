    <?php

session_start();

if(isset($_SESSION['uname'])){
    echo "<h1>Home Page  </h1>";
     echo "<h6>Menu  </h6>";
     echo "<a href='http://localhost/travelsystem/b.html'>BOOK HOTEL</a><br>";
     echo "<a href='http://localhost/travelsystem/tour%20guide%20booking.html'>Book Tour Guide</a><br>";
     echo "<a href='http://localhost/travelsystem/feed%20back.html'>Give Feedback</a><br>";
      echo "<a href='http://localhost/travelsystem/tourbooking.html'>Tour Booking</a><br>";
      echo "<a href='http://localhost/travelsystem/changepass.php'>Change Password</a><br>";
      

    echo "<br><a href='welcome.php'><input type=button value=back name=back></a>";
     

}else{

      echo "<script>location.href='home.html'</script>"; 

}

?>

