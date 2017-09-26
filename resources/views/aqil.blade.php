<?php 
    $pageTitle = 'Aqil | Asraha.com';
   
 ?>

  <link rel="stylesheet" href="/css/component.css">
<link rel="stylesheet" media="screen and (min-device-width: 800px)" href="/css/paralaxx.css" />
<link rel="stylesheet" href="/css/mobile.css">

<style>

	.container-fluid.res-header-desktop {
		display: none;
	}
	.footer {
		display: none;
	}
  .home-btn {
    color: #adadad;
    display: inline-block;
    border: 1px solid #adadad;
    padding: 7px 13px;
    border-radius: 3px;
  }
  .home-btn:hover {
    background: #fff;
    color: #333;
  }
  .wbox {
        margin-top: 20px;
}
.wbox img {
    width: 100%;
    height: 220px;
    object-fit: cover;
    box-shadow: 0px 5px 5px 0px rgba(0, 0, 0, 0.2);
}
.wbox p {
  color: #fff;
  text-align: center;
}
.see-my-work {

}
.container.see-my-work{
  overflow-y: auto;
}

.fsocial.profile li a {
    
    border: 1px solid #ddd;
    border-radius: 3px;
    margin-left: 6px;
    margin-right: 6px;
    margin-top: 20px;
}
.exp-time {
  list-style: none;
    border-left: 2px solid #fff;
    margin-left: 0;
    padding-left: 20px;
    margin-left: 100px;
}
.exp-time li {
    position: relative;
  margin-bottom: 50px;
}
.exp-time li:before {
 content: '';
    height: 10px;
    width: 10px;
    background: #fff;
    display: block;
    position: absolute;
    left: -26px;
}
.freelance-list a {
  color: #fff;
    margin-left: 10px;
    margin-right: 10px;
    border: 1px solid #fff;
    padding: 4px;
    font-size: 20px;
}
.freelance-list a:hover {
  background: #fff;
  color: #000;
}

</style>

@extends('layouts.master')
@section('content')
    <div class="hidden-xs" style="position: fixed;
    z-index: 1000;
    right: 40px;
    top: 45%;
    cursor: pointer;
    ">
         <a class="home-btn" data-action="next" style="display: block;
    margin-bottom: 30px;">NEXT</a>
        <a class="home-btn" data-action="prev">PREV</a>
      </div>

<div class="">

  <section class="background bgGreen noise overlay" style="background: url(img/designer.jpeg); background-size: cover;">

    <div class="content-wrapper">
      <div class="container">


      <a href="/" class="home-btn">Home</a>
      <div class="row">
        <div class="col-md-6">
          <h1 class="hi wow fadeInDown">Hello <br class="hidden-xs"> I am <br class="hidden-xs"> Aqil</h1>
          
        </div>
        <div class="col-md-6">
          <div class="hi2">
              <h1 class="wow fadeInLeft">
                Front-End Developer <br> and Web Designer based <br> in Delhi
              </h1>
            </div>
        </div>
      </div>
      <div class="text-center _mbfix"> 
          <a href="/img/resume.pdf" class="home-btn" download>Download Resume</a>

      </div>
      </div>
    </div>
  </section>

 

 
  <section class="background bgGray noise">
    <div class="content-wrapper">
      <div class="container see-my-work">
        <h1 class="bigheading fw300">See My Work</h1>
        <div class="row">
          <div class="col-md-3 col-xs-6"> 
              <div class="wbox"> 
                <a href="http://www.edunuts.com/" target="_blank">
                    <img src="portfolio-img/edunuts.png" alt="">
                    <p>Edunuts</p>
                </a>
              </div>
          </div>
            <div class="col-md-3 col-xs-6"> 
              <div class="wbox">  
                 <a href="http://www.edunuts.com/academy/" target="_blank">
                     <img src="portfolio-img/eacademy.png" alt="">
                     <p>Edunuts Academy</p>
                 </a>
              </div>
          </div>
            <div class="col-md-3 col-xs-6"> 
              <div class="wbox">  
                  <a href="http://biglytech.net/" target="_blank">
                      <img src="portfolio-img/bigly.png" alt="">
                        <p>Bigly</p>
                  </a>
              </div>
            </div>
           <div class="col-md-3 col-xs-6"> 
              <div class="wbox">  
                  <a href="http://asraha.com" target="_blank">
                      <img src="portfolio-img/asr.png" alt="">
                      <p>Asraha</p>
                  </a>
              </div>
            </div>
            <div class="col-md-3 col-xs-6"> 
              <div class="wbox">  
                  <a href="http://bigradar.io/" target="_blank">
                      <img src="portfolio-img/bigradar.png" alt="">
                      <p>Bigradar</p>
                  </a>
              </div>
            </div>    
            <div class="col-md-3 col-xs-6"> 
              <div class="wbox">  
                  <a href="http://nmicanada.com/NMI/" target="_blank">
                      <img src="portfolio-img/NMI-Canada.jpg" alt="">
                      <p>NMI Canada</p>
                  </a>
              </div>
            </div>  
              <div class="col-md-3 col-xs-6"> 
              <div class="wbox">  
                  <a href="http://kursy.co.in/" target="_blank">
                      <img src="portfolio-img/kursy.jpg" alt="">
                      <p>Kursy</p>
                  </a>
              </div>
            </div>  
            <div class="col-md-3 col-xs-6"> 
              <div class="wbox">  
                  <a href="http://www.sketchut.com/" target="_blank">
                      <img src="portfolio-img/sketchut.jpg" alt="">
                      <p>Sketchut</p>
                  </a>
              </div>
            </div>  
          <div class="col-md-3 col-xs-6"> 
              <div class="wbox">  
                  <a href="http://asraha.com/india" target="_blank">
                      <img src="portfolio-img/india.jpg" alt="">
                      <p>Asraha/India</p>
                  </a>
              </div>
            </div>  
              <div class="col-md-3 col-xs-6"> 
                <div class="wbox">  
                    <a href="http://www.justdesk.in/" target="_blank">
                        <img src="portfolio-img/justdesk.jpg" alt="">
                        <p>Just Desk</p>
                    </a>
                </div>
            </div>    
            <div class="col-md-3 col-xs-6"> 
                <div class="wbox">  
                    <a href="http://www.dmadelhi.com/" target="_blank">
                        <img src="portfolio-img/dmadelhi.jpg" alt="">
                        <p>DMA Delhi</p>
                    </a>
                </div>
            </div>  

           <div class="col-md-3 col-xs-6"> 
                <div class="wbox">  
                    <a href="http://biglytech.net:1122/" target="_blank">
                        <img src="portfolio-img/Centigrademedia.jpg" alt="">
                        <p>Centigrademedia</p>
                    </a>
                </div>
            </div>    
            <div class="col-md-3 col-xs-6"> 
                <div class="wbox">  
                    <a href="http://blockchainmagazine.org/" target="_blank">
                        <img src="portfolio-img/block.png" alt="">
                        <p>blockchainmagazine</p>
                    </a>
                </div>
            </div>  


          </div>
      </div>

    </div>
  </section>
  

  <!-- <section class="background bg-black">
    <div class="content-wrapper">
      <p class="content-title">Etiam consequat lectus.</p>
      <p class="content-subtitle">Nullam tristique urna sed tellus ornare congue. Etiam vitae erat at nibh aliquam dapibus.</p>
    </div>
  </section>
  -->
  <section class="background bgBlue noise">
    <div class="content-wrapper">
      <div class="container por">
        <div class="row">
          <div class="col-md-4">
            <div class="aboutbox">
              <h1 class="abutmetext">About me</h1>
                  <h3 class="fw300 abtpra">
                    
                     Computers have been my passion from ever. I could spend hours learning about coding and designing. However, this passion got wings when I grabbed a job as a UI/UX designer and developer. Though money cannot be totally ignored, even if it wasn’t there, I couldn’t be separated from designing and coding. I think I can totally relate to how 
                   </h3>
            </div>
          </div>
          <div class="col-md-8">
           <img class="aqil-img" src="img/style1.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="background overlay noise" style="background-image: url(img/skills.jpeg);">
    <div class="content-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h1 class="abutmetext" style="top:185px;left: -280;">Skillset</h1>
            <h1 class="mh2">My Proficiencies</h1>
            <div class="pgl">
            <h3 class="fw300">HTML</h3>
              <div class="progress">
                <div class="progress-bar" role="progressbar" 
                    style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            <h3 class="fw300">CSS</h3>
              <div class="progress">
                <div class="progress-bar" role="progressbar" 
                    style="width: 25%; height: 5px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
              <h3 class="fw300">javaScript</h3>
              <div class="progress">
                <div class="progress-bar" role="progressbar" 
                    style="width: 25%; height: 5px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
               <h3 class="fw300">Photoshop</h3>
              <div class="progress">
                <div class="progress-bar" role="progressbar" 
                    style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
               <h3 class="fw300">Illustrator</h3>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
            </div>
          </div>
          <div class="col-md-4">
            <h1 class="">&nbsp;</h1>

            <ul class="skil-list">
              <li>Responsive/Progressive Enhancement/mobile first layouts</li>
              <li>
                CSS3 Keyframe, HTML5 Greensock/GSAP, SVG and Canvas animation.
              </li>
              <li>
                Working knowledge of JavaScript and jQuery, PHP & Laravel
              </li>
              <li>
                Boostrap, Materialize, Animate.css, wow.js, scrollMagic  
              </li>
             
            </ul>
          </div>
          <div class="col-md-4">
            <h1 class="">What I Use</h1>
            <ul class="skil-list">
              <li>Windows or Mac</li>
              <li>Sublime Text 3, Visual Studio</li>
              <li>Photoshop, Illustrator, After Effects, Google Web Designer, wireframing - Balsamiq,</li>
              <li>SASS, Less, Jade, blade, twig, xampp myql</li>
            </ul>
          </div>
        </div>
      </div>
    
    </div>
  </section>


  <section class="background overlay" style="background-image: url(portfolio-img/expereince.jpeg);">
    <div class="content-wrapper">
     <div class="container">
      <div class="" style="position: relative;                                                                                                                                                                                                                                                                                                                              ">
        <h1 class="abutmetext" style="top:70px;left: -380;">Experience</h1>
          
          <ul class="exp-time">
            <li>
               <h4 class="fw300">1-1-2015 - Present</h4>
                  <h2 class="fw300">Edunuts</h2>
                   <p class="lead">
                   I come from a small village, named Asraha, 
                  </p>

            </li>
              <li>
               <h4 class="fw300">Self Employed</h4>
                  <h2 class="fw300">freelance</h2>
                   <p class="lead freelance-list">
                    
                      <a href="http://biglytech.net/" target="_blank">Bigly </a>
                      <a href="http://asraha.com" target="_blank"> Asraha</a>
                  <a href="http://kursy.co.in/" target="_blank"> Kursy</a>
                  <a href="http://www.sketchut.com/" target="_blank">
                      Sketchut
                  </a>
                      <a href="http://biglytech.net:1122/" target="_blank">
                        Centigrademedia
                    </a>
                 <a href="http://www.justdesk.in/" target="_blank">
                        Just Desk
                    </a>
                     <a href="http://asraha.com/india" target="_blank">
                      Asraha/India
                  </a>
                  </p>

            </li>
          </ul>
        
         
      </div>


      </div>
    </div>
  </section>


  <section class="background bgOrange noise">
    <div class="content-wrapper">
        <div class="container">
        <h1 class="hidden-xs" style="margin-top: 50px;">&nbsp;</h1>
          <div class="row">
              <div class="col-md-5">

              <div class="text-center">
          <h1 class="fw300">Contact Me</h1>

          <h3 class="fw300">Phone: 7210562014</h3>
          <h3 class="fw300">Email: aqilali381@gmail.com</h3>
           <ul class="list-inline fsocial profile">
                <li>
                  <a href="https://www.facebook.com/profile.php?id=100011049845433">
                    <img src="/img/facebook.png" alt="">
                  </a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/in/md-aqil-09430a109/" target="_blank">
                    <img src="/img/linkedin.png" alt="">
                  </a>
                </li>
                <li>
                <a href="tel:7210562014" title="7210562014">
                <img  src="/img/whatsapp.png" alt="">
                </a>
                </li>
                <li><a href="https://twitter.com/aqil4k">
                <img src="/img/twitter.png" alt=""></a></li>  
                <li>
                <a href="https://www.youtube.com/channel/UC61XYpVLeBp8g_BqUo6lvsw"><img src="/img/youtube.png" alt=""></a></li>
                
              </ul>
        </div>



              </div>
              <div class="col-md-7">
                <div class="demo-1">
                  <!-- a low-tech hack for pre-loading the img -->
                  <div class="preload" style="overflow: hidden; width: 0px; height: 0px">
                    <img src="img/site1.jpg" />
                    <img src="img/site2.jpg" />
                    <img src="img/site3.jpg" />
                    <img src="img/site3r.jpg" />
                    <img src="img/site4.jpg" />
                    <img src="img/site4r.jpg" />
                  </div>
                  <!-- Top Navigation -->
                
                  <div class="main clearfix">
                    <div class="md-slider">
                      <div class="md-device-wrapper">
                        <div class="md-device md-device-1">
                          <a href="#"><img src="img/site1.jpg" /></a>
                          <div class="md-border-element"></div>
                          <div class="md-base-element"></div>
                        </div>
                      </div>
                    </div>
                  
                  </div>
                </div>
              </div>
          </div>
        </div>
    </div>
  </section>



</div>

@endsection