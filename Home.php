
<!DOCTYPE HTML>
<?php

//Done By Andre Grant And Gavonne

SESSION_START();


if($_SESSION['User']==NULL)
{
    $_SESSION['User'] = 'Guest';
}
$User = $_SESSION['User'];



echo"
<html>

<head>
	  <link rel='stylesheet' type='text/css' href='Style.css'>
</head>
    
    
        
<body>


<ul class = 'topnav' id='myTopnav'>
    <li><a href = 'Home.php' >Home</a></li>
    <li><a href = 'SearchFlight.php'> Search Flight </a></li>
    <li><a href = 'Register.php'> SignUp </a></li>
    <li><a href = 'Login.php'> Login </a></li>
    <li class = 'dropdown'>Account: $User </a>
        <div class = 'dropdown-content' >
            <a href ='ChangePassword.php'>Change Password</a>
            <a href ='Profile.php'>Profile</a>
            <a href = 'log_out.php'>Log Out</a>
    </div>
    </li>
    </ul> 
</body>

 <h1><a href='Home.php'><img src= 'images/image.png'></a></h1>
 

 
 <div class='slideshow-container'>

<div class='mySlides fade'>
  <div class='numbertext'>1 / 3</div>
  <a href='SearchFlight.php'><img src='images/image3.jpg'></a>
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
  <p>Done By: Andre Grant And Gavonne</p>
</div>
</html>
"
    ?>