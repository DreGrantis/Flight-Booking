<!DOCTYPE HTML>
<?php

SESSION_START();
$User = $_SESSION['User'];


echo"
<html>

<head>
	  <link rel='stylesheet' type='text/css' href='Style.css'>
</head>
    
    
        
<body>
<ul class = 'topnav' id='myTopnav'>
    <li><a href = 'AdminHome.php' >Home</a></li>
    <li class= 'dropdown'>Manage Customer </a>
            <div class = 'dropdown-content' >
            <a href ='ManageCustomer.php'>View Customer Info</a>
    </div>
    
      <li class= 'dropdown'>Manage Flights </a>
            <div class = 'dropdown-content' >
            <a href ='ManageFlights.php'>View Flight Info</a>
    </div>

    <li class = 'dropdown'>Account: $User </a>
        <div class = 'dropdown-content' >
            <a href ='ChangePassword.php'>Change Password</a>
            <a href ='Profile.php'>Profile</a>
            <a href = 'log_out.php'>Log Out</a>
    </div>
    </li>
    </ul> 
</body>

 <h1><a href='AdminHome.php'><img src= 'images/image.png'></a></h1> 
 
 <div class='slideshow-container'>

<div class='mySlides fade'>
  <div class='numbertext'>1 / 3</div>
  <img src='images/image3.jpg' style='width:100%'>
  <div class='text'>Caption Text</div>
</div>

<div class='mySlides fade'>
  <div class='numbertext'>2 / 3</div>
  <img src='images/image5.jpg' style='width:100%'>
  <div class='text'>Caption Two</div>
</div>

<div class='mySlides fade'>
  <div class='numbertext'>3 / 3</div>
  <img src='images/image4.jpg' style='width:100%'>
  <div class='text'>Caption Three</div>
</div>

<a class='prev' onclick='plusSlides(-1)'>&#10094;</a>
<a class='next' onclick='plusSlides(1)'>&#10095;</a>

</div>
<br>

<div style='text-align:center'>
  <span class='dot' onclick='currentSlide(1)'></span> 
  <span class='dot' onclick='currentSlide(2)'></span> 
  <span class='dot' onclick='currentSlide(3)'></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName('mySlides');
  var dots = document.getElementsByClassName('dot');
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = 'none';  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(' active', '');
  }
  slides[slideIndex-1].style.display = 'block';  
  dots[slideIndex-1].className += ' active';
}
</script>

<div class='footer'>
  <p>YR Booking &copy;</p>
</div>

</html>"
    ?>