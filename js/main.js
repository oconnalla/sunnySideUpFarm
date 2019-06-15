// JS FOR CHANGING BANNER TITLES


//get the current filename
var url = window.location.pathname; //this returns the entire URL to the current file
var filename = url.substring(url.lastIndexOf('/')+1); //this returns just the filename at the end of the full URL
//declare the title variable for use in the switch statement
var bigBanner;
var subBanner;
// $( document ).ready(function() {
//create switch statement to determine a banner for the page
switch (filename) {
case 'index.php':
  bigBanner = 'Welcome To Our Farm!';
  subBanner = '<a href="product.html"> Shop Our Collection > </a>';
  break;
case 'about.php':
  bigBanner = 'Want To Learn More?';
  subBanner = 'See How We Started ';
  break;
case 'contact.php':
  bigBanner = 'Trying To Reach Us?';
  subBanner = 'Fill Out Our Form Below!';
  break;
case 'product.php':
  bigBanner = 'Your Cart';
  subBanner = 'Checkout Page 1/3';
  break;
case 'login.php':
  bigBanner = 'Stay Updated!';
  subBanner = 'Join Our Email List';
  break;
case 'sires.php':
  bigBanner = 'Our Sires';
  subBanner = 'Check Out Our Available Bucks Belwo';
  break;
case 'dames.php':
  bigBanner = 'Our Dames';
  subBanner = 'Check Out Our Available Does Below';
  break;
case 'forSale.php':
  bigBanner = 'Want To Start Your Own Farm?';
  subBanner = 'See available animals below!';
  break;
}
// Create a variable called el to hold the element whose id attribute has a value of footer
var elBig = document.getElementById('mainBannerTitle');
var elSmall =document.getElementById('subBannerTitle');

// Write the message into that element
elBig.textContent = bigBanner;
elSmall.innerHTML=subBanner;
