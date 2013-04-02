<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<!-- Handcoded and crafted by Kevin Litzenberg -->

<head>

<?php

$agent = $_SERVER['HTTP_USER_AGENT'];  
if(preg_match('/iPhone|Android|Blackberry/i', $agent)){  
    header("Location: kevinlitzenberg_mobile00.html");  
    exit;  
    
print $agent;    
    
}  

?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="SlideLuck IV 2012 San Francisco, CA"/>
<meta name="keywords" content="litzenberg, kevin, ellie, exhibition, slide"/>
<meta name="robots" content="noarchive"/>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js">
</script>

<script type="text/javascript">

$(document).ready(function(){
    $('li').click(function(){
       $('.home').css("opacity" ,"1.0");
       $('.video').css("opacity" ,"1.0");
       $('.card').css("opacity" ,"1.0");
       $('.info').css("opacity" ,"1.0");
       $('.statement').css("opacity" ,"1.0");
});//$('.statement').click(function(){
});//$(document).ready(function(){

$(document).ready(function(){
    $('.home').click(function(){
         $('#home').css("opacity" ,"1.0");
         $('#home').css("z-index" ,"10");
         
         $('#video_container').css("opacity" ,"0");
         $('#video_container').css("z-index" ,"0");
         
                
         $('#image1_container').css("opacity" ,"0");
         $('#image2_container').css("opacity" ,"0");
         $('#statement_container').css("opacity" ,"0");
         $('.home').css("opacity" ,"0.5");
    });//$('.home').click(function(){
});//$(document).ready(function(){

$(document).ready(function(){
    $('.video').click(function(){
         $('#home').css("opacity" ,"0");
         $('#home').css("z-index" ,"0");
         
         $('#video_container').css("opacity" ,"1.0");
         $('#video_container').css("z-index" ,"10");
         $('#image1_container').css("opacity" ,"0");
         $('#image2_container').css("opacity" ,"0");
         $('#statement_container').css("opacity" ,"0");
         $('.video').css("opacity" ,"0.5");
    });//$('.video').click(function(){
});//$(document).ready(function(){

$(document).ready(function(){
    $('.card').click(function(){
         $('#home').css("opacity" ,"0");
         $('#video_container').css("opacity" ,"0");
         $('#image1_container').css("opacity" ,"1.0");
         $('#image2_container').css("opacity" ,"0");
         $('#statement_container').css("opacity" ,"0");
         $('.card').css("opacity" ,"0.5");
    });//$('.card').click(function(){
});//$(document).ready(function(){

$(document).ready(function(){
    $('.info').click(function(){
         $('#home').css("opacity" ,"0");
         $('#video_container').css("opacity" ,"0");
         $('#image1_container').css("opacity" ,"0");
         $('#image2_container').css("opacity" ,"1.0");
         $('#statement_container').css("opacity" ,"0");
         $('.info').css("opacity" ,"0.5");
    });//$('.info').click(function(){
});//$(document).ready(function(){

$(document).ready(function(){
    $('.statement').click(function(){
         $('#home').css("opacity" ,"0");
         $('#video_container').css("opacity" ,"0");
         $('#image1_container').css("opacity" ,"0");
         $('#image2_container').css("opacity" ,"0");
         $('#statement_container').css("opacity" ,"1.0");
         $('.statement').css("opacity" ,"0.5");
    });//$('.ready').click(function(){
});//$(document).ready(function(){



	
</script>


<!-------------------------Begin Style Sheets ------------------------->
<style type="text/css">

/*Page/Body Divider */
#divTopPage{
    position: relative;
    height: 125px;
	width: 1100px;
	top: 0px;
	left: 0px;
	padding: 10px 10px 10px 10px;
}

#divMiddlePage{
    position: absolute;
	height: 550px;
	width: 1100px;
	left: 0px;
	top: 125px;	
}

#divContentHolder{
    position: relative;
	margin: 0 auto;
	top: 10%;
	
	/*640x880*/
    height: 500px;	
    width: 700px;
	
    padding: 2px 2px 2px 2px;
    background-color: black;
	border: 1px solid #FF8C00;
    
    box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    -moz-box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    -webkit-box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    -o-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5); 
	
	border-top-left-radius: 15px 22px;
	border-top-right-radius: 15px 22px;
	border-bottom-right-radius: 15px 22px;
	border-bottom-left-radius: 15px 22px;
	
	-moz-border-top-left-radius: 15px 22px;
	-moz-border-top-right-radius: 15px 22px;
	-moz-border-bottom-right-radius: 15px 22px;
	-moz-border-bottom-left-radius: 15px 22px;
	
	-webkit-border-top-left-radius: 15px 22px;
	-webkit-border-top-right-radius: 15px 22px;
	-webkit-border-bottom-right-radius: 15px 22px;
	-webkit-border-bottom-left-radius: 15px 22px;
}

#videoContainer640x480{ 
    position: absolute;
	right: 0;
	top: 1.5%;
	z-index: 1;
	width: 750px;
	height: 500px;
	text-indent: 15px;
	overflow: hidden; /*Disable scrollbars. Set to "scroll" to enable*/
	/*border: 1px solid #DCDCDC ;*/
	color: black;
		
	border-top-left-radius: 15px 22px;
	border-top-right-radius: 15px 22px;
	border-bottom-right-radius: 15px 22px;
	border-bottom-left-radius: 15px 22px;
	
	-moz-border-top-left-radius: 15px 22px;
	-moz-border-top-right-radius: 15px 22px;
	-moz-border-bottom-right-radius: 15px 22px;
	-moz-border-bottom-left-radius: 15px 22px;
	
	-webkit-border-top-left-radius: 15px 22px;
	-webkit-border-top-right-radius: 15px 22px;
	-webkit-border-bottom-right-radius: 15px 22px;
	-webkit-border-bottom-left-radius: 15px 22px;
}

#contentContainer{ 
    position: absolute;
	right: 0;
	top: 1.5%;
	z-index: 0;
	width: 750px;
	height: 500px;
	text-indent: 15px;
	overflow: hidden; /*Disable scrollbars. Set to "scroll" to enable*/
	/*border: 1px solid #DCDCDC ;*/
	color: black;
		
	border-top-left-radius: 15px 22px;
	border-top-right-radius: 15px 22px;
	border-bottom-right-radius: 15px 22px;
	border-bottom-left-radius: 15px 22px;
	
	-moz-border-top-left-radius: 15px 22px;
	-moz-border-top-right-radius: 15px 22px;
	-moz-border-bottom-right-radius: 15px 22px;
	-moz-border-bottom-left-radius: 15px 22px;
	
	-webkit-border-top-left-radius: 15px 22px;
	-webkit-border-top-right-radius: 15px 22px;
	-webkit-border-bottom-right-radius: 15px 22px;
	-webkit-border-bottom-left-radius: 15px 22px;
	
}

#home{
    position: absolute;
	opacity: 0;
	color: #FF8C00;
	/*680x480*/
	left: 2%;
	top: 1.5%;
	z-index: 0;
	background-color: black;
	background-image: url('WaterLake_640x427_Opacity.jpg');
	background-repeat: no-repeat;
	background-position: 50% 50%; 
	height: 480px;
	width: 680px;
	
	-moz-transition-property: opacity;
	-moz-transition-duration: 2s;
	-moz-transition-delay: ease-in-out;
	
	-webkit-transition-property: opacity;
	-webkit-transition-duration: 2s;
	-webkit-transition-delay: ease-in-out;
	
	-o-transition-property: opacity;
	-o-transition-duration: 2s;
	-o-transition-delay: ease-in-out;
	
	box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    -moz-box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    -webkit-box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    -o-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5); 
    
    border-top-left-radius: 15px 22px;
	border-top-right-radius: 15px 22px;
	border-bottom-right-radius: 15px 22px;
	border-bottom-left-radius: 15px 22px;
	
	-moz-border-top-left-radius: 15px 22px;
	-moz-border-top-right-radius: 15px 22px;
	-moz-border-bottom-right-radius: 15px 22px;
	-moz-border-bottom-left-radius: 15px 22px;
	
	-webkit-border-top-left-radius: 15px 22px;
	-webkit-border-top-right-radius: 15px 22px;
	-webkit-border-bottom-right-radius: 15px 22px;
	-webkit-border-bottom-left-radius: 15px 22px;
}

#home a {
    color: orange;
    cursor: auto;
    
}

#video_container{
    position: absolute;
	opacity: 1;
	/*680x480*/
	z-index: 0;
	left: 10%;
	top: 1.5%;
	
	transition-property: opacity;
	transition-duration: 2s;
	transition-delay: ease-in-out;
	
	-moz-transition-property: opacity;
	-moz-transition-duration: 2s;
	-moz-transition-delay: ease-in-out;
	
	
	-webkit-transition-property: opacity;
	-webkit-transition-duration: 2s;
	-webkit-transition-delay: ease-in-out;
	
	-o-transition-property: opacity;
	-o-transition-duration: 2s;
	-o-transition-delay: ease-in-out;
	
	box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    -moz-box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    -webkit-box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    -o-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5); 
     
    border-top-left-radius: 15px 22px;
	border-top-right-radius: 15px 22px;
	border-bottom-right-radius: 15px 22px;
	border-bottom-left-radius: 15px 22px;
	
	-moz-border-top-left-radius: 15px 22px;
	-moz-border-top-right-radius: 15px 22px;
	-moz-border-bottom-right-radius: 15px 22px;
	-moz-border-bottom-left-radius: 15px 22px;
	
	-webkit-border-top-left-radius: 15px 22px;
	-webkit-border-top-right-radius: 15px 22px;
	-webkit-border-bottom-right-radius: 15px 22px;
	-webkit-border-bottom-left-radius: 15px 22px;
}

#image1_container{
    position: absolute;
	opacity: 0;
	/*680x480*/
	left: 2%;
	top: 1.5%;
	z-index: 0;
	
	transition-property: opacity;
	transition-duration: 2s;
	transition-delay: ease-in-out;
	
	-moz-transition-property: opacity;
	-moz-transition-duration: 2s;
	-moz-transition-delay: ease-in-out;
	
	-webkit-transition-property: opacity;
	-webkit-transition-duration: 2s;
	-webkit-transition-delay: ease-in-out;
	
	-o-transition-property: opacity;
	-o-transition-duration: 2s;
	-o-transition-delay: ease-in-out;
	
	box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    -moz-box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    -webkit-box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    -o-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5); 
    
    border-top-left-radius: 15px 22px;
	border-top-right-radius: 15px 22px;
	border-bottom-right-radius: 15px 22px;
	border-bottom-left-radius: 15px 22px;
	
	-moz-border-top-left-radius: 15px 22px;
	-moz-border-top-right-radius: 15px 22px;
	-moz-border-bottom-right-radius: 15px 22px;
	-moz-border-bottom-left-radius: 15px 22px;
	
	-webkit-border-top-left-radius: 15px 22px;
	-webkit-border-top-right-radius: 15px 22px;
	-webkit-border-bottom-right-radius: 15px 22px;
	-webkit-border-bottom-left-radius: 15px 22px;	
}

#image2_container{
    position: absolute;
	opacity: 0;
	/*680x480*/
	left: 2%;
	top: 1.5%;
	z-index: 0;
	
	transition-property: opacity;
	transition-duration: 2s;
	transition-delay: ease-in-out;
	
	-moz-transition-property: opacity;
	-moz-transition-duration: 2s;
	-moz-transition-delay: ease-in-out;
	
	-webkit-transition-property: opacity;
	-webkit-transition-duration: 2s;
	-webkit-transition-delay: ease-in-out;
	
	-o-transition-property: opacity;
	-o-transition-duration: 2s;
	-o-transition-delay: ease-in-out;
	
	box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    -moz-box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    -webkit-box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    -o-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5); 
    
    border-top-left-radius: 15px 22px;
	border-top-right-radius: 15px 22px;
	border-bottom-right-radius: 15px 22px;
	border-bottom-left-radius: 15px 22px;
	
	-moz-border-top-left-radius: 15px 22px;
	-moz-border-top-right-radius: 15px 22px;
	-moz-border-bottom-right-radius: 15px 22px;
	-moz-border-bottom-left-radius: 15px 22px;
	
	-webkit-border-top-left-radius: 15px 22px;
	-webkit-border-top-right-radius: 15px 22px;
	-webkit-border-bottom-right-radius: 15px 22px;
	-webkit-border-bottom-left-radius: 15px 22px;
}


#statement_container{
    position: absolute;
	opacity: 0;
	color: #FF8C00;
	/*680x480*/
	left: 2%;
	top: 1.5%;
	z-index: 0;
	background-color: black;
	background-image: url('SaltLake_640x427_Opacity.jpg');
	background-repeat: no-repeat;
	background-position: 50% 50%; 
	height: 480px;
	width: 680px;

	
	font-size: medium;
    font-weight: 100;
	text-indent: 5px
	
	transition-property: opacity;
	transition-duration: 2s;
	transition-delay: ease-in-out;
	
	-moz-transition-property: opacity;
	-moz-transition-duration: 2s;
	-moz-transition-delay: ease-in-out;
	
	-webkit-transition-property: opacity;
	-webkit-transition-duration: 2s;
	-webkit-transition-delay: ease-in-out;
	
	-o-transition-property: opacity;
	-o-transition-duration: 2s;
	-o-transition-delay: ease-in-out;
	
	box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    -moz-box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    -webkit-box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    -o-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5); 
    
    border-top-left-radius: 15px 22px;
	border-top-right-radius: 15px 22px;
	border-bottom-right-radius: 15px 22px;
	border-bottom-left-radius: 15px 22px;
	
	-moz-border-top-left-radius: 15px 22px;
	-moz-border-top-right-radius: 15px 22px;
	-moz-border-bottom-right-radius: 15px 22px;
	-moz-border-bottom-left-radius: 15px 22px;
	
	-webkit-border-top-left-radius: 15px 22px;
	-webkit-border-top-right-radius: 15px 22px;
	-webkit-border-bottom-right-radius: 15px 22px;
	-webkit-border-bottom-left-radius: 15px 22px;
}
#statement_contatiner a {
    color: red;
}

#divBottomPage{
    position: absolute;
    height: 300px;
	width: 1100px;
	top: 675px;
	left: 0px;
}

#divBottomPage img {
    display: inline;
    width: 165px;
    height:115px;
    /*margin: 10px 10px 10px 10px;*/
        
    position: absolute;
    opacity: 9.0; /* add opacity*/
    
    border: 4px solid #FF8C00;
    box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    -moz-box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    -webkit-box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
}

#divBottomPage .slideluck{
    left: 200px;
    top: 90px;
}

#divBottomPage .vimeo{
    left: 725px;
    top: 90px;
}

#divBottomPage .ellie{
    left: 300px;
    top: 90px;
}



/*Redefine html tags */
/*html { */
/*	background: url(WoodenFilm.jpg) no-repeat center center fixed; 
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;*/
/*}*/


body{
    /*margin: 0 auto;*/
    /*background-color: #FF8C00;*/ 
	background-image: url('OrangeWhiteFadeDiag_1800x2400_web.jpg');
	/*background-border: 0px;
    background-position: 50% 50%;
	background-repeat:no-repeat;*/
}

#bookPage{
    position: absolute;
    margin: 0 auto;
    height: 940px; 
    width: 1090px;
	left: 5%;
    top: 10px;
    padding: 2px 2px 2px 2px;
    background-color: white;
	
	background-color: #000000; 
	background-image: url('WoodenFilm1100x950.jpg');
	border: 1px black;
    background-position: 0% 0%;
	background-repeat:no-repeat;
    
    box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.8);
    -moz-box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.8);
    -webkit-box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.8);
    -o-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.8); 
}


/**** Places images on the screen ****/

img{
    display: block;
    width: 680px;
    height:480px;
    /*margin: 10px 10px 10px 10px;*/  
}

h1{
    color: orange;
    font-size: medium;
    font-variant: small-caps;
}

/*Menu and Navigation*/

.menu_container {
    /*z-index: 1;*/
    position: relative;
    margin: 0 auto;
    top: 50px;
    width: 825px;
	height: 24px;
	background-color: #222222;
	color: white;
	padding: 1px 1px 1px 1px;
	
	border-top-left-radius: 15px 22px;
	border-top-right-radius: 15px 22px;
	border-bottom-right-radius: 15px 22px;
	border-bottom-left-radius: 15px 22px;
	
	-moz-border-top-left-radius: 15px 22px;
	-moz-border-top-right-radius: 15px 22px;
	-moz-border-bottom-right-radius: 15px 22px;
	-moz-border-bottom-left-radius: 15px 22px;
	
	-webkit-border-top-left-radius: 15px 22px;
	-webkit-border-top-right-radius: 15px 22px;
	-webkit-border-bottom-right-radius: 15px 22px;
	-webkit-border-bottom-left-radius: 15px 22px;
	
	}



#top { 
  margin: 0 auto; 
  text-align: center; 
  width: 825px;  
  height: 20px;
  border: 1px solid #FF8C00;
  
  /*line-height: 0em;*/  
  background: #222222;  
  padding: 1px; 
  
  border-top-left-radius: 15px 22px;
  border-top-right-radius: 15px 22px;
  border-bottom-right-radius: 15px 22px;
  border-bottom-left-radius: 15px 22px;
	
  -moz-border-top-left-radius: 15px 22px;
  -moz-border-top-right-radius: 15px 22px;
  -moz-border-bottom-right-radius: 15px 22px;
  -moz-border-bottom-left-radius: 15px 22px;
	
  -webkit-border-top-left-radius: 15px 22px;
  -webkit-border-top-right-radius: 15px 22px;
  -webkit-border-bottom-right-radius: 15px 22px;
  -webkit-border-bottom-left-radius: 15px 22px
  
}   
	
#top li li, #top li li a {  
   height:0px;  
   margin-top: -10px;  
   text-align: center;  
   color: rgba(255,255,255,.0);  
   text-decoration: none; 
   
   transition:all .7s ease-in-out; 
   -moz-transition:all .7s ease-in-out;
   -webkit-transition:all .7s ease-in-out;  
}   
	
#top li:hover{  
   height:20px;  
   margin-top:0px;  
   margin-bottom: 2px;  
   border-radius: 5px;  
   opacity: 0.5;
   
  transition-property: opacity;
	transition-duration: 2s;
	transition-delay: ease-in-out;
	
	-moz-transition-property: opacity;
	-moz-transition-duration: 2s;
	-moz-transition-delay: ease-in-out;
	
	
	-webkit-transition-property: opacity;
	-webkit-transition-duration: 2s;
	-webkit-transition-delay: ease-in-out;
	
	-o-transition-property: opacity;
	-o-transition-duration: 2s;
	-o-transition-delay: ease-in-out;
	
}

li {  
  list-style: none; 
  float: left;
  width: 165px;
} 

ul{
   list-style: none; 
   margin: 0;
   padding: 0;
}
 
a {  
   color: orange;  
   text-decoration: none; 
} 

.toplink{
   /*background-color: red;*/
   list-style: none;
}  

/*classes for JQuery*/
.video{
    list-style: none;
    opacity: 1;
}

.card{
    list-style: none;
    opacity: 1;
}

.info{
    list-style: none;
    opacity: 1;
}

.statement{ 
    list-style: none;
    opacity: 1;
}

.home{
    list-style: none;
    opacity: 1;
}

.home .statement p{
    
}

/*End JQuery classes*/





/********** sub menus - not in use **********/ 
/*#top li:hover li{  
   height:20px;  
   margin-top:2px;  
   margin-bottom: 2px;  
   background: #333333;
   border-radius: 5px;  
} */
  
#top li li:first-of-type {  
  padding-top: 0px;  
}  

/*#top li:hover li a {  
  color: rgba(255,102,0,.8);  
} */ 

#top li li a:hover {  
  color:#ffffff; 
}   


/*li .submenu{
  list-style: none; 
  float: center;
  width: 110px;
  height: 15px;
}*/
/********** sub menus - not in use **********/ 

/*Menu and Navigation*/



</style>
<title>KevinLitzenberg.html</title>
<!-- <title>html_video_player11.html</title> --><!-- Photos with realistic web sizes -->

</head>
<body>
<div id="bookPage">

<div id="divTopPage">

<div class="menu_container">
    <nav id="top">  
      <ul>
        <li class="home"><a class="toplink" href="#">Home</a>  
          <!-- <ul>  
            <li><a href="#">Drop Menu 1</a></li>  
            <li><a href="#">Drop Menu 2</a></li>  
            <li><a href="#">Drop Menu 3</a></li>  
          </ul>  -->
        </li>  
      
         <li class="video"> <a class="toplink" href="#">Dust to Ashes</a>  
          <!-- <ul>  
            <li><a href="#">Drop Menu 1</a></li>  
            <li><a href="#">Drop Menu 2</a></li>  
            <li><a href="#">Drop Menu 3</a></li>  
          </ul> --> 
        </li>  
        
        <li class="card"><a class="toplink" href="#">SlideLuck2012</a>  
          <ul>  
           <!-- <li class="card submenu"><a href="#">Postcard</a></li>  
            <li class="info submenu"><a href="#">Event Info</a></li>  
           <li><a href="#">Slide Luck 2012 Artist Statement</a></li> -->  
          </ul>  
        </li> 
      
        <li class="info"><a class="toplink" href="#">Information</a>  
          <ul>  
           <!-- <li class="card submenu"><a href="#">Postcard</a></li>  
            <li class="info submenu"><a href="#">Event Info</a></li>  
           <li><a href="#">Slide Luck 2012 Artist Statement</a></li> -->  
          </ul>  
        </li>  
        
        <li class="statement"><a class="toplink" href="#">Artist Statement</a>  
          <!-- <ul>  
            <li><a href="#">Drop Menu 1</a></li>  
            <li><a href="#">Drop Menu 2</a></li>  
            <li><a href="#">Drop Menu 3</a></li>  
          </ul> -->  
        </li>  
        
      </ul>  
    </nav>  
</div><!--menu_container-->
</div><!--divTopPage-->

<div id="divMiddlePage">
    <div id="divContentHolder">

        <div id="videoContainer640x480">
            <video id="video_container" width="640" height="480" preload controls="controls">
                         
		        <source src="Our_Exhibition640x480.webm" type="video/webm"> 
		        <source src="Our_Exhibition640x480.ogg" type="video/ogg">
		        <source src="Our_Exhibition640x480.mp4" type="video/mp4">
		        BOOO! Your lame browser does not support the video tag.
	        </video>   
        </div>
        
	        <img id="image1_container" src="SlideLuck_Front800x532_600dpi.jpg" alt=""/>
	        
	        <img id="image2_container" src="SlideLuck_Info800x532_600dpi.jpg" alt=""/>

             <div id="statement_container">
                 <h1>A Collaborative Effort by Ellie and Kevin Litzenberg</h1>
                 <hr style="height:0.5px; width:90%; color:orange;"></hr>
                 <p>Kevin and Ellie Litzenberg are San Francisco based multi-media artists with a passion for hunting down and collecting discarded memorabilia. 
                 <br><br><br>
                 <p>They thrive to transform abandoned objects of all kinds into new unusual pieces. "Dust to Ashes" encompasses this process by reviving glimpses of the past with eerie and dark undertones.
                 <br><br><br>
                 <!-- <p>"Dust to Ashes" image manipulation focuses on the analog process.  This means no image or effect was digitally produced up until the images was scanned in.  The images are raw slides, manipulated using our own techniques and methods. -->
             </div><!--Statement-->
             
             <div id="home">
                 <h1>Kevin Litzenberg</h1>
                 <hr style="height:0.5px; width:90%; color:orange;"></hr>
                 <p>Professional Experience: <a href="http://www.linkedin.com/pub/kevin-litzenberg/1/563/169" target="blank">LinkedIn Profile</a>
                 <p>Personal Photo Blog: <a href="http://www.facingsf.com" target="blank">www.facingsf.com</a>
                 <p>Github: <a href="https://github.com/KevinLitzenberg" target="blank">Github Profile</a>
                 <p>Contact: <a href="mailto:kevin.litzenberg@gmail.com" target="blank">kevin.litzenberg@gmail.com</a>
                 
             </div><!--Statement-->
        
    </div><!--divContentHolder-->
</div><!--divMiddlePage-->

<div id="divBottomPage">

    <a href="http://network.slideluckpotshow.com/events/slideluck-potshow-san-francisco-iv" target="blank"><img class="slideluck" src="SlideLuck_white_bg.jpg" alt=""/></a>

	<a href="http://vimeo.com/53117489" target="blank"><img class="vimeo" src="vimeo_logo_dark.jpg" alt=""/></a>


     
</div><!--divBottomPage-->


</div><!--bookPage-->
</body>

</html>
