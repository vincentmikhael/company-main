<html lang="en">
  <link type="text/css" rel="stylesheet" id="dark-mode-custom-link">
<link type="text/css" rel="stylesheet" id="dark-mode-general-link">
<style lang="en" type="text/css" id="dark-mode-custom-style"></style>
<style lang="en" type="text/css" id="dark-mode-native-style"></style>
<style lang="en" type="text/css" id="dark-mode-native-sheet"></style>
<head>
  <style>body {transition: opacity ease-in 0.2s; } 
  body[unresolved] {opacity: 0; display: block; overflow: hidden; position: relative; } 
</style>
<!-- Global site tag (gtag.js) - Google Analytics -->
{{-- <script type="text/javascript" async="" src="https://app.ardalio.com/log7.js"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-CGP3XGGD5C&amp;l=dataLayer&amp;cx=c"></script><script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-136158943-1"></script> --}}
{{-- <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-136158943-1');
</script> --}}

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>{{$main->title}}</title>
    <meta name="description" content="{{$main->main_deskripsi}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/'.$main->icon_website)}}">
    <!-- <script src="js/modernizr.min.js"></script> -->

    <meta property="og:url" content="">
    <meta property="og:title" content="{{$main->meta_title}}">
    {{-- <meta property="og:image" content="http://www.ktb.co.id/sources/images/share.png"> --}}
    <meta property="og:description" content="{{$main->meta_deskripsi}}">
    <meta property="og:site_name" content="{{$main->sitename}}">

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css" integrity="sha512-4e743y/yh7ffjixFn2DBKvAA0j02JNn0iQ/bIq6usesbp6TRPcZFW0XHnwfSnpTtsTmMGh0UmvbXY26aJfIb0Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Custom CSS -->
    <style>
        @font-face {
    font-family: "montserrat-medium";
    src: url(../fonts/Montserrat-Light.ttf);
}
* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
html,body{
    font-family: 'montserrat-medium';
    color: #4D4D4D;
    font-size: 14px;
    overflow-x :hidden;
    text-align: justify;
    -webkit-animation-duration: 3s;
}
h2{
  font-weight: bold;
  font-size: 1.2em;
  text-align: center;
}
ul {
    list-style-image: url('../images/list.png');
}
#container-top{
  margin-top: 30px;
  margin-bottom: 25px;
}
#second-container{
  width: 100%;
  padding: 0px;
  margin-bottom: 50px;
}
#centers{
  text-align: center;
  z-index: 1000;
}
#centers h1{
  font-size: 2em;
  font-weight: bold;
}
#centers div{
 font-size: 1em;
  font-weight: bold;
}
#fuso-car{
  width: 500px;
  position: absolute;
  right: -150px;
  bottom: 10px;
  -webkit-animation-duration: 1s;
  cursor: pointer;
}
#pajero-car{
  width:100%;
  width: 430px;
  position: absolute;
  left: -150px;
  bottom: 10px;
  -webkit-animation-duration: 2s;
  cursor: pointer;
}
#left-tri{
  position: absolute;
  left: 0px;
  -webkit-animation-duration: 2s;
}
#right-tri{
  position: absolute;
  right: 0px;
  -webkit-animation-duration: 2s;   
}
#arrow{
  cursor: pointer;
}
#arrow2{
  transform: rotate(180deg);margin-bottom: 10px;
}
#backtop{
  position: absolute;bottom:20px;right:20px;padding: 10px;text-align: center;background: rgba(0,0,0,.1);cursor: pointer;
}
.button-link{
  z-index: 1010;
  position: absolute;
}
.button-left{
  left:70%;
  bottom: 70px;
  width: 175px;
  text-align: center;
}
.button-right{
  right:100%;
  top:20px;
  width: 175px;
}
.button-link a{
  display: block;
  padding: 5px 8px;
  background: rgba(0,0,0,0.6);
  color:#fff;
  font-weight: bold;
  font-size: 1em;
  position: relative;
}
.glyphicon{
  position: absolute;
  color:#e04749;
  font-size: 1.3em;
  top:6px;
  right:10px;
}
.pos-relative{
  position: relative;
  height: 520px;
}
.display-table{
  display: table;
}
.display-table-cell{
  display: table-cell;
  vertical-align: middle;
  height: 470px;
}
.footer-text{
  text-align: right;
}

@media (max-width: 480px){
  #backtop {
    position: static;
    background: rgba(0,0,0,0);
  }
}

@media (max-width: 768px){
  #display-table{
    display: block;
    position: relative;
  }
  #second-container .col-sm-4{
   height: 650px; 
  }
  #fuso-car{
      top:0px;
      width:250px;
      min-width: auto;
      right:-100px;
  }
  #pajero-car{
      bottom:-150px;
      width: 250px;
      left:-100px;
  }
  #right-tri{
    top:0px;
    width:400px;
    right: 0px;
    opacity: .8;
  }
  #left-tri{
    bottom:-150px;
    width:400px;
    left: 0px;
    opacity: .8;
  }
  .button-link{
    font-size: .8em;
  }
  .button-left {
    width: 150px;
    left: 145px;
  }
  .button-right{
    width: 150px;
    right:140px;
  }
  .footer-text{
    text-align: center;
  }
}
    </style>


<style type="text/css" data-asas-style="">body, div, a, p, span{ user-select: text !important; }p, h1, h2, h3, h4, h5, h6{ cursor: auto; user-select: text !important; }::selection{ background-color: #338FFF !important; color: #fff !important; }</style></head>

<body class="no-js" id="te">
<!-- Begin Web-Stat code v 6.3 -->
<span id="wts1884052">&nbsp;<script type="text/javascript" async="" src="https://wts.one/4/1884052/log6_2.js"></script></span><script>
var wts=document.createElement('script');wts.type='text/javascript';
wts.async=true;wts.src='https://wts.one/4/1884052/log6_2.js';
document.getElementById('wts1884052').appendChild(wts);
</script><noscript><a href="https://www.web-stat.com">
<img src="https://wts.one/6/4/1884052.gif" 
alt="Web-Stat site stats"></a></noscript>
<!-- End Web-Stat code v 6.3 -->

    <div id="container-top" class="container">
        <div class="row">
            <div class="col-xs-12 img-logo" style="text-align: right; vertical-align: bottom;">
                <img src="{{asset('images/'.$main->icon1)}}" style="float: left;">
                <img src="{{asset('images/'.$main->icon2)}}" style="">
                <img src="{{asset('images/'.$main->icon3)}}" style="margin-left: 10px">
            </div>                 
        </div>
    </div>
    <div id="second-container" class="container">
        <div class="row">
            <div class="col-xs-2 col-sm-4">
                <div class="hover1" style="cursor: pointer;" href="http://www.mitsubishi-motors.co.id/">
                    <div class="pos-relative">
                        <div class="button-link button-left"><a id="btn-one" style="cursor:pointer;">{{$main->judul_link1}}<span class="glyphicon glyphicon-menu-right"></span></a></div>
                        <img id="left-tri" src="{{asset('images/'.$main->bg1)}}" class="" style="width: 754px; opacity: 1;">
                        <img id="pajero-car" src="{{asset('images/'.$main->mobil1)}}" class="" >
                    </div>
                </div>
            </div>        
            <div class="col-xs-8 col-sm-4 display-table" id="centers">
                <div class="display-table-cell">
                    <h1>INFORMASI PENTING</h1>
                    <div>SELENGKAPNYA</div>
                    <a href="#desc" id="arrow" class=""><img src="https://ktb.co.id/sources/images/forma.png"></a>
                </div>
            </div>        
            <div class="col-xs-2 col-sm-4">
                <div class="hover2" style="cursor: pointer;">
                    <div class="pos-relative">
                        <div class="button-link button-right"><a id="btn-two" style="cursor:pointer;">{{$main->judul_link2}}<span class="glyphicon glyphicon-menu-right"></span></a></div>
                        <div style="position: relative;">
                            <img id="right-tri" src="{{asset('images/'.$main->bg2)}}" class="" style="width: 767px; opacity: 1;">
                        </div>
                        <img id="fuso-car" src="{{asset('images/'.$main->mobil2)}}" class="">
                    </div>
                </div>
            </div>        
        </div>
    </div>
    <div class="container" style="margin-bottom: 45px;">
        <div class="row">
            <div class="col-xs-12" id="desc" style="padding-left: 20px;padding-right: 20px;">
                {!!$main->deskripsi!!}
            </div>
        </div>
    </div>
    <div style="position: relative;">
        <div id="backtop">
            <div id="arrow2" class=""><img src="https://ktb.co.id/sources/images/forma.png"></div>
            <div>BACK TO TOP</div>
        </div>
    </div>
    <div class="container" style="margin: 20px auto;">
        <div class="row">
            <div class="col-xs-12 col-md-6">Copyright © 2024. All Right Reserved</div>
            <div class="col-md-6"></div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js" integrity="sha512-AFwxAkWdvxRd9qhYYp1qbeRZj6/iTNmJ2GFwcxsMOzwwTaRwz2a/2TX225Ebcj3whXte1WGQb38cXE5j7ZQw3g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
$(document).ready(function(){
    $.fn.extend({
        animateCss: function (animationName) {
            var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
            this.addClass('animated ' + animationName).one(animationEnd, function() {
                $(this).removeClass('animated ' + animationName);
            });
        }
    });

    $('#arrow').click(function(){
        $('html, body').animate({
           scrollTop : $("#desc").offset().top
        }, 1000);
    });

    $('#arrow2').click(function(){
        $('html, body').animate({
           scrollTop : 0
        }, 1000);
        $('#left-tri').animateCss('slideInLeft');
        $('#right-tri').animateCss('slideInRight');
        $('#pajero-car').animateCss('slideInLeft');
        $('#fuso-car').animateCss('slideInRight');
    });

    $('body').animateCss('zoomIn');
    $('#left-tri').animateCss('slideInLeft');
    $('#right-tri').animateCss('slideInRight');
    $('#pajero-car').animateCss('slideInLeft');
    $('#fuso-car').animateCss('slideInRight');

    setInterval(function(){ 
        $('#arrow').animateCss('bounceIn'); 
        $('#arrow2').animateCss('fadeIn'); 
    }, 2000);

    //EFFECT ZOOM ON CAR HOVER
    $('.hover1').mouseenter(function(){
        $('#pajero-car').animate({
            width: "+=30px"
        },300);
        $('#left-tri').animate({
            width: "-=50px",
            opacity:.6
        },300);
    });
    $('.hover1').mouseleave(function(){
        $('#pajero-car').animate({
            width: "-=30px"
        },200);
         $('#left-tri').animate({
            width: "+=50px",
            opacity:1
        },200);
    });
    $('.hover2').mouseenter(function(){
        $('#fuso-car').animate({
            width: "+=30px"
        },300);
         $('#right-tri').animate({
            width: "-=50px",
            opacity:.6
        },300);
    });
    $('.hover2').mouseleave(function(){
        $('#fuso-car').animate({
            width: "-=30px"
        },200);
         $('#right-tri').animate({
            width: "+=50px",
            opacity:1
        },200);
    });

    //Redirect link on click
    $('.hover1').click(function(e){
	e.preventDefault();
        window.open ('{{$main->link1}}');
		console.log('x');
    });
    $('.hover2').click(function(e){
	e.preventDefault();
        window.open ('{{$main->link2}}');
    });

});
</script>

</body></html>