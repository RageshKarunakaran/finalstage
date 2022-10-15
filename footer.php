<style type="text/css">
 
input.input-field, textarea, select {
    width: 100%;
    border: 1px solid #dfd3d3;
    padding: 1rem 2rem;
    border-radius: 7px;
    box-shadow: 0 0 18px 5px #00000017;
}
.form-modal{
    position:relative;
    width:850px;
    height:auto;
    margin-top:4em;
    left:50%;
    transform:translateX(-50%);
    background:#fff;
    border-top-right-radius: 20px;
    border-top-left-radius: 20px;
    border-bottom-right-radius: 20px;
    box-shadow:0 3px 20px 0px rgba(0, 0, 0, 0.1)
}

.form-modal button{
    cursor: pointer;
    position: relative;
    text-transform: capitalize;
    font-size:1em;
    z-index: 2;
    outline: none;
    background:#fff;
    transition:0.2s;
}

.form-modal .btn{
    border-radius: 20px;
    border:none;
    font-weight: bold;
    font-size:1.2em;
    padding:0.8em 1em 0.8em 1em!important;
    transition:0.5s;
    border:1px solid #ebebeb;
    margin-bottom:0.5em;
    margin-top:0.5em;
}

.form-modal .login , .form-modal .signup{
    background:linear-gradient(45deg, #1737a5, #29da92);
    color:#fff;
}

.form-modal .login:hover , .form-modal .signup:hover{
    background:#222;
}

.form-toggle{
    position: relative;
    width:100%;
    height:auto;
}

.form-toggle button{
    width:50%;
    float:left;
    padding:1.5em;
    margin-bottom:1.5em;
    border:none;
    transition: 0.2s;
    font-size:1.1em;
    font-weight: bold;
    border-top-right-radius: 20px;
    border-top-left-radius: 20px;
}

.form-toggle button:nth-child(1){
    border-bottom-right-radius: 20px;
}

.form-toggle button:nth-child(2){
    border-bottom-left-radius: 20px;
}

#login-toggle{
    background:linear-gradient(45deg, #1737a5, #29da92);
    color:#ffff;
}

.form-modal form{
    position: relative;
    width:90%;
    height:auto;
    left:50%;
    transform:translateX(-50%);  
}

#login-form , #signup-form{
    position:relative;
    width:100%;
    height:auto;
    padding-bottom:1em;
}

#signup-form{
    display: none;
}


#login-form button , #signup-form button{
    width:100%;
    margin-top:0.5em;
    padding:0.6em;
}

.form-modal input, .form-modal textarea, .form-modal select{
    position: relative;
    width:100%;
    font-size:1em;
    padding:1.2em 1.7em 1.2em 1.7em;
    margin-top:0.6em;
    margin-bottom:0.6em;
    border-radius: 20px;
    border:none;
    background:#fff;
    outline:none;
    font-weight: bold;
    transition:0.4s;
}

.form-modal input:focus , .form-modal input:active{
    transform:scaleX(1.02);
}

.form-modal input::-webkit-input-placeholder{
    color:#222;
}


.form-modal p{
    font-size:16px;
    font-weight: bold;
}

.form-modal p a{
    color:#57b846;
    text-decoration: none;
    transition:0.2s;
}

.form-modal p a:hover{
    color:#222;
}


.form-modal i {
    position: absolute;
    left:10%;
    top:50%;
    transform:translateX(-10%) translateY(-50%); 
}

.fa-google{
    color:#dd4b39;
}
.owl-five .support_slide img{
  width: 138px!important;
  height: auto;
}
.fa-linkedin{
    color:#3b5998;
}

.fa-windows{
    color:#0072c6;
}

.-box-sd-effect:hover{
    box-shadow: 0 4px 8px hsla(210,2%,84%,.2);
}

@media only screen and (max-width:500px){
    .form-modal{
        width:100%;
    }
}

@media only screen and (max-width:400px){
    i{
        display: none!important;
    }
}
</style>
<section class="htc__appoinment__area" id="contact">
            <div class="container">
                <div class="row justify-content-center pb-5">
<div class="col-md-7 text-center heading-section aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
<!-- <span class="subheading">Contact</span> -->
<h2 class="mb-3">Contact Us</h2>
</div>
</div>

        <div class="row align-items-center">
            <div class="form-modal">
    
    <div class="form-toggle">
        <button id="login-toggle" onclick="toggleLogin()">Student</button>
        <button id="signup-toggle" onclick="toggleSignup()">Doctor</button>
    </div>

    <div id="login-form">
        <form>
            <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="input-field" placeholder="Name" required>
                        </div>
                        <div class="col-md-6">
                             <input type="number" class="input-field" placeholder="Age" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="input-field" placeholder="Gender" required>
                        </div>
                        <div class="col-md-6">
                             <input type="text" class="input-field" placeholder="Qualifications" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="input-field" placeholder="Medical Registration No" required>
                        </div>
                        <div class="col-md-6">
                             <input type="text" class="input-field" placeholder="Location" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <textarea placeholder="Address"></textarea>
                        </div>
                       
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="number" class="input-field" placeholder="Phone" required>
                        </div>
                        <div class="col-md-6">
                             <input type="email" class="input-field" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <option selected>Open this select menu</option>
            <option value="1">Masters in Aesthetic  Medicine & Hair Science
            <option value="2">PG Diploma in Aesthetics & Reconstruction </option>
            <option value="3">PG Diploma in clinical Cosmetology & Advance</option>
            <option value="4">PG Diploma in Medical Trichology & Hair Transplant </option>
            <option value="5">Fellowship in Aesthetic Medicine & Skin Lasers</option>
            <option value="6">Fellowship in Medical Trichology ( Clinical & Cosmetic )</option>
            <option value="7">Certificate in Trichology</option>
            <option value="8">Certificate in Botox, Fillers & Threads</option>
            <option value="9">Certificate in Anti –ageing & Skin Ceuticals</option>
            <option value="10">Certificate in Micro blading & Micro needling </option>
            <option value="11">Certificate in Skin Lasers</option>
            <option value="12">Cosmetology Assistant</option>
            <option value="13">Internship</option>

                        </select>
                        </div>
                    </div>
                    <div class="row">
                        <button type="button" class="btn signup">Submit</button>
                    </div>

                        <div class="row social_login justify-content-center align-items-center mt-5">
                            <div class="col-md-10 text-center">
                                <h4 class="text-center">Or</h4>
                                <hr>
                                <div class="s_icons text-center">
                                    <a href=""><img src="images/facebook.png"></a>
                                    <a href=""><img src="images/google.png"></a>
                                    <a href=""><img src="images/instagram.png"></a>

                                </div>
                            </div>
                        </div>
        </form>
    </div>

    <div id="signup-form">
        <form>
            <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="input-field" placeholder="Name" required>
                        </div>
                        <div class="col-md-6">
                             <input type="number" class="input-field" placeholder="Age" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="input-field" placeholder="Gender" required>
                        </div>
                        <div class="col-md-6">
                             <input type="text" class="input-field" placeholder="Qualifications" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="input-field" placeholder="Medical Registration No" required>
                        </div>
                        <div class="col-md-6">
                             <input type="text" class="input-field" placeholder="Location" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <textarea placeholder="Address"></textarea>
                        </div>
                       
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="number" class="input-field" placeholder="Phone" required>
                        </div>
                        <div class="col-md-6">
                             <input type="email" class="input-field" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="row">
                        <button type="button" class="btn signup">Submit</button>
                    </div>
            <hr/>
           
        </form>
    </div>

</div>
      
        </div>


                <!-- <div class="row justify-content-center align-items-center">

                            <div class="col-xl-5 col-lg-5 col-md-6">
                                <img src="images/DOC.jpg" class="img-fluid rounded" style="filter:drop-shadow(2px 4px 6px #413e3e9c);">
                            </div>

                    <div class="col-xl-7 col-lg-7 col-md-6">
                        
                        <div class="htc__appoinment__wrap">
                            <div class="htc__appoinment__form">
                                <form action="#">
                                    <div class="htc__app__box__inner">
                                        <div class="htc__app__box">
                                            <div class="input_inner">
                                                <input type="text" placeholder="Type Your Full Name">
                                            </div>
                                        </div>
                                     </div>
                                    <div class="htc__app__box__inner">
                                        <div class="htc__app__box">
                                            <input type="email" placeholder="Type Your E-mail">
                                        </div>
                                    </div>
                                   
                                    <div class="htc__app__box__inner">
                                        <div class="htc__app__box">
                                            <input type="text" placeholder="Consulting Subject">
                                        </div>
                                        <div class="htc__app__box psy__calendar">
                                            <input class="date__dropdown hasDatepicker" placeholder="Appoinment Date" type="text" id="datepicker">
                                        </div>
                                    </div> 
                                    
                                    <div class="appoinment_message">
                                        <div class="htc__app__box message">
                                           <textarea name="Message" placeholder="Type Additional Message"></textarea>
                                        </div>
                                        <div class="ht__appoin__btn">
                                            <button type="submit">Send Request</button>
                                        </div>
                                    </div>
                                </form>
                            </div>                            
                        </div>      
                        <div class="mt-5 text-center justify-content-center">   
                        <p class="text-center">(OR)</p>

                                    <div class="whatsapp">
                                            <button type="submit">Chat with WhatsApp</button>
                                        </div>   
                                        </div>                
                    </div>
                    
                </div> -->
            </div>
        </section>



<footer class="ftco-footer">
<div class="container-xl">
<div class="row mb-5 justify-content-between">
<div class="col-md-6 col-lg">
<div class="ftco-footer-widget mb-4">
<h2 class="ftco-heading-2 logo d-flex">
<a class="navbar-brand align-items-center" href="index.html">
<img src="images/final_logo.png" width="250px">
</a>
</h2>
<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
<ul class="ftco-footer-social list-unstyled mt-2">
<li><a href="https://twitter.com/DrEdumed?t=G6GNL7ZQzmOPee6rnqJTTQ&s=09"><span class="fa fa-twitter"></span></a></li>
<li><a href="https://www.facebook.com/people/Dr-EduMed/100086190526106/"><span class="fa fa-facebook"></span></a></li>
<li><a href="https://www.instagram.com/dredumed/?igshid=YmMyMTA2M2Y%3D"><span class="fa fa-instagram"></span></a></li>
<li><a href="https://www.linkedin.com/authwall?trk=bf&trkInfo=AQFZilOMiWOrHQAAAYO2rXbINHT7tv45P5sNJjzCghe-mglRRbErQFFfD_ILaL_Gecg-mX5JMKrPKDk6Exqt7hRdaIJ6H6u9CzdJKKV5QrRJwFJm4aWYkCP19uCqMi28gdlYiUg=&original_referer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Fedumed-bangalore%2F"><span class="fa fa-linkedin"></span></a></li>

</ul>
</div>
</div>
<div class="col-md-6 col-lg-2">
<div class="ftco-footer-widget mb-4">
<h2 class="ftco-heading-2">Explore</h2>
<ul class="list-unstyled">
<li><a href="about-us.php"><span class="ion ion-ios-arrow-round-forward me-2"></span>About Us</a></li>
<li><a href="./#courses"><span class="ion ion-ios-arrow-round-forward me-2"></span>Courses</a></li>
<li><a href="./#review"><span class="ion ion-ios-arrow-round-forward me-2"></span>Review</a></li>

</ul>
</div>
</div>
<div class="col-md-6 col-lg-2">
<div class="ftco-footer-widget mb-4">
<h2 class="ftco-heading-2">Quick Links</h2>
<ul class="list-unstyled">
<li><a href="./#contact"><span class="ion ion-ios-arrow-round-forward me-2"></span>Contact Us</a></li>
<li><a href="privacy-policy.php"><span class="ion ion-ios-arrow-round-forward me-2"></span>Privacy</a></li>
<li><a href="./#contact"><span class="ion ion-ios-arrow-round-forward me-2"></span>Feedbacks</a></li>
<li><a href="./#contact"><span class="ion ion-ios-arrow-round-forward me-2"></span>Blog</a></li>

</ul>
</div>
</div>
<!-- <div class="col-md-6 col-lg">
<div class="ftco-footer-widget mb-4">
<h2 class="ftco-heading-2">Recent Posts</h2>
<div class="block-21 mb-4 d-flex">
<a class="blog-img img rounded" style="background-image:url(images/ximage_1.jpg.pagespeed.ic.UgmmPhXrdT.jpg)"></a>
<div class="text">
<div class="meta">
<div><a href="#"><span class="fa fa-calendar"></span> Jan. 18, 2021</a></div>
<div><a href="#"><span class="fa fa-user"></span> Admin</a></div>
</div>
<h3 class="heading"><a href="#">Creativity and Inspiration</a></h3>
</div>
</div>
<div class="block-21 mb-4 d-flex">
<a class="blog-img img rounded" style="background-image:url(images/ximage_2.jpg.pagespeed.ic.VzEAApnz9L.jpg)"></a>
<div class="text">
<div class="meta">
<div><a href="#"><span class="fa fa-calendar"></span> Jan. 18, 2021</a></div>
<div><a href="#"><span class="fa fa-user"></span> Admin</a></div>
</div>
<h3 class="heading"><a href="#">Creativity and Inspiration</a></h3>
</div>
</div>
<div class="block-21 mb-4 d-flex">
<a class="blog-img img rounded" style="background-image:url(images/ximage_4.jpg.pagespeed.ic.QcOUqWK7Iz.jpg)"></a>
<div class="text">
<div class="meta">
<div><a href="#"><span class="fa fa-calendar"></span> Jan. 18, 2021</a></div>
<div><a href="#"><span class="fa fa-user"></span> Admin</a></div>
</div>
<h3 class="heading"><a href="#">Creativity and Inspiration</a></h3>
</div>
</div>
</div>
</div> -->
<div class="col-md-6 col-lg">
<div class="ftco-footer-widget mb-4">
<h2 class="ftco-heading-2">Address</h2>
<div class="block-23 mb-3">
<ul>
<li><span class="icon fa fa-map marker"></span><span class="text">3R Plaza 28, 2nd Floor, 100 Feet Road, 2A Stage, Hal, Indiranagar, Bengaluru, Karnataka 560038</span></li>
<li><a href="#"><span class="icon fa fa-phone"></span><span class="text">1800 202 6112</span></a></li>

</ul>
</div>
</div>
</div>
</div>
</div>
<div class="container-fluid px-0 py-3 bg-darken">
<div class="container-xl">
<div class="row">
<div class="col-md-12 text-center">
<p class="mb-0" style="font-size: 14px;">Copyright &copy;<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved  by <a href="./" target="_blank" rel="nofollow noopener"> Edu-Med</a></p>
</div>
</div>
</div>
</div>
</footer>
<script type="text/javascript" src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
<script src="js/tiny-slider.js"></script>
<script type="text/javascript" src="https://cldup.com/S6Ptkwu_qA.js"></script>
<script src="js/glightbox.min.js%20aos.js%20google-map.js%20main.js.pagespeed.jc.CNHUYLpEWQ.js"></script><script>eval(mod_pagespeed_7_hPlGGYt1);</script>
<script>eval(mod_pagespeed_QuG92EaMQX);</script>
<script src="../../maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script>eval(mod_pagespeed_mTpoFW8ALW);</script>
<script>eval(mod_pagespeed_omftQ6ch3C);</script>

<script async="" src="../../gtag/js?id=UA-23581568-13"></script>
<script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-23581568-13');
    </script>
<script defer="" src="../../beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"73eb8705ce83b2af","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.8.0","si":100}' crossorigin="anonymous"></script>
<script type="text/javascript">
       // ParticlesJS Config.
particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 80,
      "density": {
        "enable": true,
        "value_area": 700 } },


    "color": {
      "value": "#ffffff" },

    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000000" },

      "polygon": {
        "nb_sides": 5 } },


    "opacity": {
      "value": 0.5,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false } },


    "size": {
      "value": 3,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false } },


    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#ffffff",
      "opacity": 0.4,
      "width": 1 },

    "move": {
      "enable": true,
      "speed": 6,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200 } } },



  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "grab" },

      "onclick": {
        "enable": true,
        "mode": "push" },

      "resize": true },

    "modes": {
      "grab": {
        "distance": 140,
        "line_linked": {
          "opacity": 1 } },


      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3 },

      "repulse": {
        "distance": 200,
        "duration": 0.4 },

      "push": {
        "particles_nb": 4 },

      "remove": {
        "particles_nb": 2 } } },



  "retina_detect": true });

</script>
<script type="text/javascript">
$('.owl-one').owlCarousel({
    items:1,
    loop:true,
    dots: true,
    nav:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:5500,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
$('.owl-two').owlCarousel({
    items:1,
    loop:true,
    dots: true,
    nav:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3500,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:2
        },
        1200:{
            items:3
        }
    }
})
$('.owl-three').owlCarousel({
    items:1,
    loop:true,
    dots: true,
    nav:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
$('.owl-four').owlCarousel({
    items:1,
    loop:true,
    dots: true,
    nav:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3500,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
$('.owl-five').owlCarousel({
    items:1,
    loop:true,
    dots: true,
    nav:true,
    margin:20,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:4
        },
        1000:{
            items:6
        }
    }
})
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
<script type="text/javascript">
	gsap.to(".bubble--container", 20, {
  rotation: 360,
  transformOrigin: "left 50%",
  repeat: -1,
  ease: "none"
});

var quotes = [
  '"Thank you so much for all of your help with everything!',
  '"Hands down the best support I have ever received."',
  '"The best service I have ever received!"',
  '"We could not have done it without you!"',
  '"Beyond grateful for the service I received!"',
  '"A wonderful experience all around!"'
];

var previousInt = 0;

function animateOut() {
  gsap.fromTo(".texttest", 2, { opacity: 1 }, { opacity: 0 });
}

function animateIn() {
  gsap.fromTo(".texttest", 2, { opacity: 0 }, { opacity: 1 });
}

// returns a random integer for the quote randomizer
function getRandomInt() {
  return Math.floor(Math.random() * quotes.length);
}

function handleAnimation() {
  var randomInt = getRandomInt();

  // prevents the new quote from being the same as the previous quote
  while (randomInt == previousInt) {
    randomInt = getRandomInt();
  }

  previousInt = randomInt;

  // fades the animation out after a second
  setTimeout(() => {
    animateOut();
  }, 1000);

  // changes the texttest of the quote after 2.8 seconds
  setTimeout(() => {
    document.querySelector(".texttest").innerHTML = quotes[randomInt];
  }, 2800);

  // fades the quote back in after 3 seconds
  setTimeout(() => {
    animateIn();
  }, 3000);
}

// changes the quote every 7 seconds
setInterval(handleAnimation, 7000);

</script>
<script type="text/javascript">

function toggleButtonOne(){
    var mybtn = document.getElementById('menu_toggle_one');
    
      mybtn.classList.toggle("show");
}

</script>
<script type="text/javascript">
    function toggleButtonTwo(){
    var mybtntwo = document.getElementById('menu_toggle_two');
    
      mybtntwo.classList.toggle("show");
}
</script>
<script type="text/javascript">
    function toggleButtonThree(){
    var mybtntwo = document.getElementById('menu_toggle_three');
    
      mybtntwo.classList.toggle("show");
}
</script>
<script type="text/javascript">
    function toggleSignup(){
   document.getElementById("login-toggle").style.background="#fff";
    document.getElementById("login-toggle").style.color="#222";
    document.getElementById("signup-toggle").style.background="linear-gradient(45deg, #1737a5, #29da92)";
    document.getElementById("signup-toggle").style.color="#fff";
    document.getElementById("login-form").style.display="none";
    document.getElementById("signup-form").style.display="block";
}

function toggleLogin(){
    document.getElementById("login-toggle").style.background="linear-gradient(45deg, #1737a5, #29da92)";
    document.getElementById("login-toggle").style.color="#fff";
    document.getElementById("signup-toggle").style.background="#fff";
    document.getElementById("signup-toggle").style.color="#222";
    document.getElementById("signup-form").style.display="none";
    document.getElementById("login-form").style.display="block";
}
</script>
<script type="text/javascript">
    window.addEventListener("resize", function() {
            "use strict"; window.location.reload(); 
          });
         document.addEventListener("DOMContentLoaded", function()
         {
         /////// Prevent closing from click inside dropdown
         document.querySelectorAll('.dropdown-menu').forEach(function(element)
         {
                 element.addEventListener('click', function(e)
                 {
                         e.stopPropagation();
                 });
         })
         // make it as accordion for smaller screens
         if (window.innerWidth < 992)
         {
                 // close all inner dropdowns when parent is closed
                 document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown)
                 {
                         everydropdown.addEventListener('hidden.bs.dropdown', function()
                         {
                                 // after dropdown is hidden, then find all submenus
                                 this.querySelectorAll('.submenu')
                                         .forEach(function(everysubmenu)
                                         {
                                                 // hide every submenu as well
                                                 everysubmenu
                                                         .style
                                                         .display =
                                                         'none';
                                         });
                         })
                 });
                 document.querySelectorAll('.dropdown-menu a').forEach(function(element)
                 {
                         element.addEventListener('click', function(e)
                         {
                                 let nextEl = this.nextElementSibling;
                                 if (nextEl && nextEl.classList
                                         .contains('submenu'))
                                 {
                                         // prevent opening link if link needs to open dropdown
                                         e.preventDefault();
                                         console.log(nextEl);
                                         if (nextEl.style.display ==
                                                 'block')
                                         {
                                                 nextEl.style.display =
                                                         'none';
                                         }
                                         else
                                         {
                                                 nextEl.style.display =
                                                         'block';
                                         }
                                 }
                         });
                 })
         }
         // end if innerWidth
         });
         // DOMContentLoaded  end
</script>
