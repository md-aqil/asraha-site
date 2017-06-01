<?php 
    $page_title = 'Aqil Prtfolio';
 ?>
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
</style>

@extends('layouts.master')
@section('content')

<div class="">
  <section class="background bgGreen noise overlay" style="background: url(img/designer.jpeg); background-size: cover;">
    <div class="content-wrapper">
      <div class="container">
      <a href="" class="home-btn">Home</a>
      <div class="row">
        <div class="col-md-6">
          <h1 class="hi wow fadeInDown">Hello <br> I am <br> Aqil</h1>
          
        </div>
        <div class="col-md-6">
          <div class="hi2">
              <h1 class="wow fadeInLeft">
                Front-End Developer <br> and Web Designer based <br> in Delhi
              </h1>
            </div>
        </div>
      </div>
      </div>
    </div>
  </section>

  <section class="background bgOrange noise">
    <div class="content-wrapper">
        <div class="container">
        <h1 style="margin-top: 50px;">&nbsp;</h1>
          <div class="row">
              <div class="col-md-5">
                <h1 class="bigheading">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                  <span class="fw300">Laborum ut culpa optio officiis quisquam molestias ipsa </span> 
                </h1>
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



  <section class="background  bgBlue noise">
    <div class="content-wrapper">
     <div class="container por">
       <div class="row">
         <div class="col-md-6">
         <div class="aboutbox">
           <h1 class="abutmetext">About me</h1>
               <h3 class="fw300 abtpra">
                 
                  Computers have been my passion from ever. I could spend hours learning about coding and designing. However, this passion got wings when I grabbed a job as a UI/UX designer and developer. Though money cannot be totally ignored, even if it wasn’t there, I couldn’t be separated from designing and coding. I think I can totally relate to how one feels when one loves what one does :)
                   
                   Also, I love to watch English movies and T.V. series and I have recently developed a love for travel, I am looking forward to exploring a lot of new places in the coming years. 
                </h3>
         </div>
         </div>
           <div class="col-md-6">
           <img class="aqil-img" src="img/style1.png" alt="">
         </div>
       </div>
       
     </div>
    </div>
  </section>


 
  <section class="background bgGray">
    <div class="content-wrapper innerdiv100">
    <h1>img here</h1>
     
    </div>
  </section>
  <section class="background bg-black">
    <div class="content-wrapper">
      <p class="content-title">Etiam consequat lectus.</p>
      <p class="content-subtitle">Nullam tristique urna sed tellus ornare congue. Etiam vitae erat at nibh aliquam dapibus.</p>
    </div>
  </section>
 
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
            <img class="style-5img" src="img/style5.png" class="" alt="">
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
            <h1>My Proficiencies</h1>
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

  <section class="background overlay hidden-xs" style="background-image: url(img/designer.jpeg);">
    <div class="content-wrapper">
     <div class="container">
        <div class="atvImg" style="height: 80%">
           <div class="atvImg-layer" data-img="img/layer4.png"></div>
           <div class="atvImg-layer" data-img="img/layer2.png"> 
           </div>
        </div>
      </div>
    </div>
  </section>
</div>

@endsection