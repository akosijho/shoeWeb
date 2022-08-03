@extends('layout.master')
@section('content') 
@include('layout.header2') 
<section class="section_about">
<img src="Images/curve.png" class="curve">
    <div class="about_row">
        <div class="about_col">
            
            <h1>We are Fluravels</h1>
            <p>We are a team of people passionate about building products that people love.</p>

        </div>

    </div>

    <div class="about_row_2">
        <div class="about_col_1">
        <p>We are a team of designers and developers that create technology solutions to change the world. We
            love to build products that people love to use! With our team’s diverse skill set – user experience,
             design, branding, web and mobile development, product strategy and business analysis – Symph is
              constantly turning our customer’s ideas into successful realities.</p>
                                </div> 

    </div>


    
    <div class="teamtitle_row">
        <div class="teamtitle">
            <h1>Our Team</h1>
            <p>The awesome people behind amazing things.</p>

        </div>

        </div>

    
    
    <div class="teamrow_1">
    
    
        <div class="box">
            <div class="boximage">
                <div class="faceid">
                        <video width="328" height="227" class="baby" muted loop autoplay>
                        <source src="Video/jhobert.mp4" type="video/mp4"  muted loop autoplay>
                         
                        </video>
                </div>
           
            <div class ="about_content"></div>
                <h2>Jhobert Panerio</h2>
                <p>Mobile Developer</p>
            </div>
        </div>

        <div class="box">
            <div class="boximage">
                <div class="faceid">
                        <video width="328" height="227"  class="baby"  muted loop autoplay>
                        <source src="Video/pansang.mp4" type="video/mp4"muted loop autoplay>
                         
                        </video>
                </div>
           
            <div class ="about_content"></div>
                <h2>Maria Jessa E. Camposo</h2>
                <p>Mobile Developer</p>
            </div>
        </div>

        <div class="box">
            <div class="boximage">
                <div class="faceid">
                        <video width="328" height="227"class="baby" muted loop autoplay>
                        <source src="Video/ilven.mp4" type="video/mp4"  muted loop autoplay>
                         
                        </video>
                </div>
           
            <div class ="about_content"></div>
                <h2>Ilven Rex Brina</h2>
                <p>Mobile Developer</p>
            </div>
        </div>

           
    </div>


    <div class="teamrow_2">
            
        <div class="box">
            <div class="boximage">
                <div class="faceid">
                        <video width="328" height="227" class="baby" muted loop autoplay>
                        <source src="Video/gadon.mp4" type="video/mp4"  muted loop autoplay>
                         
                        </video>
                </div>
           
            <div class ="about_content"></div>
                <h2>John Christian D. Gadon</h2>
                <p>Mobile Developer</p>
            </div>
        </div>

        <div class="box">
            <div class="boximage">
                <div class="faceid">
                        <video width="328" height="227" class="baby"  muted loop autoplay>
                        <source src="Video/baral.mp4" type="video/mp4" muted loop autoplay>
                         
                        </video>
                </div>
           
            <div class ="about_content"></div>
                <h2>Mark Russel T. Baral</h2>
                <p>Web Developer</p>
            </div>
        </div>

        <div class="box">
            <div class="boximage">
                <div class="faceid">
                        <video width="328" height="227" class="baby" muted loop autoplay>
                        <source src="Video/ako.mp4" type="video/mp4"  muted loop autoplay>
                         
                        </video>
                </div>
           
            <div class ="about_content"></div>
                <h2>John Christian B. Narbaja</h2>
                <p>Web Developer</p>
            </div>
        </div>

           
    </div>


</section>
@include('layout.home.whatareyouwaiting')
@include('layout.footer') 
@endsection