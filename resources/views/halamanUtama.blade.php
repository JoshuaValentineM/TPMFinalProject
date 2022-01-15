{{-- @extends('layout.main')

@section('container')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>HACKATON 5.0</h1>
        <h2>[Tagline]</h2>

        <h1>About Us</h1>
        <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia aliquam, temporibus dolor maiores, cupiditate necessitatibus ratione iste rem dolore molestias accusamus non quaerat rerum sed reprehenderit facere nostrum pariatur minus reiciendis et fugit est ullam. Et exercitationem dolorem rem quas asperiores molestias non tempore sed, rerum eos? Laboriosam error vero possimus esse officiis atque, maxime recusandae eligendi quas tempora? Repudiandae aperiam laboriosam architecto enim tempora inventore nobis excepturi. Nemo recusandae in reiciendis adipisci sunt eius neque quaerat beatae! Nulla, iste vero. Illum eum delectus temporibus quaerat earum molestias nemo veniam? Est ullam veritatis sunt labore incidunt quod quia quam cupiditate.</h5>

</body>
</html>

@endsection --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technoscape</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{ ('img/favicon-32x32.png') }}" image="image/gif">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-transparent">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="{{ ('img/logoTS.svg') }}" id="navbar-logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Competition
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#prizes">Champion Prizes</a></li>
                  <li><a class="dropdown-item" href="#mentor">Mentor & Jury</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Details
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#about-section">About</a></li>
                  <li><a class="dropdown-item" href="#FAQ">FAQ</a></li>
                  <li><a class="dropdown-item" href="#timeline">Timeline</a></li>
                </ul>
              </li>
              <button onclick="window.location.href='{{ route('login') }}'" class="btn btn-outline-success rounded-pill" type="submit">Login</button>
            </ul>
          </div>
          </div>
    </nav>
    <section class="container-fluid" id="home-section">
        <div class="hometext">
        <h1>>HACKATHON 5.0_</h1>
        <h3>[Tagline]</h3>
    </div>
    <div>
      <img src="{{ ('img/Landing Page Decoration.svg') }}" class="landingimg">
    </div>
    </section>
    <section class="container-fluid" id="about-section">
      <div class="container-fluid" id="about-container">
        <div class="about-video">
          <iframe class="round-corners" src="https://drive.google.com/file/d/1Hy-lQHIp9Qb8rQ0jrnaj0aPMBkVAnHm3/preview" width="640" height="360" allow="autoplay"></iframe>
        </div>
        <div class="about-text-btn">
            <h1 id="landing-page-text">About<br> Hackathon 5.0_</h1>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores accusantium illum alias quasi laudantium dolorum culpa repellat illo assumenda, eius vero suscipit est reiciendis pariatur, aut perferendis quia aperiam quo!</p>
          <div class="about-btn">
            <button onclick="window.location.href='{{ route('register') }}'" class="btn btn-outline-success rounded-pill" type="submit">Register NOW!</button>
            <button onclick="window.location.href='https://drive.google.com/drive/folders/1cIpdLUcnFWNNNNblFVaZj7W1PM8IIsVA?usp=sharing'" class="btn btn-outline-success rounded-pill" type="submit">Download Guidebook</button>

          </div>
        </div>
      </div>
    </section>
    <section class="container-fluid" id="prizes">
      <h1 class="main-title">Prizes</h1>
      <div>
        <img src="{{ ('img/1st Place.svg') }}">
        <img src="{{ ('img/2nd Place.svg') }}">
        <img src="{{ ('img/3rd Place.svg') }}">
      </div>
    </section>
    <section class="container-fluid" id="why-participate">
      <h1 class="main-title">Why You Should Participate</h1>
      <div class="slideshowcontainer">
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <div class="actgroupwhy fadewhy">
        <img src="{{ ('img/WYSP - 1.svg') }}" class="round-corners why-participate-assets">
      </div>
      <div class="actgroupwhy fadewhy">
            <img src="{{ ('img/WYSP - 2.svg') }}" class="round-corners why-participate-assets">
      </div>
      <div class="actgroupwhy fadewhy">
            <img src="{{ ('img/WYSP - 3.svg') }}" class="round-corners why-participate-assets">
      </div>
      <div class="actgroupwhy fadewhy">
        <img src="{{ ('img/WYSP - 4.svg') }}" class="round-corners why-participate-assets">
      </div>
      <div class="actgroupwhy fadewhy">
        <img src="{{ ('img/WYSP - 5.svg') }}" class="round-corners why-participate-assets">
      </div>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <div class="sliderprogress">
        <span class="doti"></span>
        <span class="doti"></span>
        <span class="doti"></span>
    </div>
    </section>
    <timeline class="container-fluid" id="timeline">
      <h1 class="main-title">Timeline</h1>
      <div class="timeline-container">
        <img src="{{ ('img/Open Reg.svg') }}" class="timeline-part">
        <img src="{{ ('img/Close Reg.svg') }}" class="timeline-part">
        <a href="https://zoom.us/"><img src="{{ ('img/TechMeet.svg') }}" class="timeline-part"></a>
        <a href="https://zoom.us/"><img src="{{ ('img/Comp Day.svg') }}"  class="timeline-part"></a>
      </div>
    </timeline>
    <section class="container-fluid" id="mentor">
        <h1 class="mentor-jury-title">>Our Mentor_</h1>
      <div class="toggle-mentor-jury">
        <a onclick="showDesign()" id="Design" class="mentor-jury-selector mentor-jury-selector-active"><h3>Design</h3></a>
        <a onclick="showTechnology()" id="Technology" class="mentor-jury-selector"><h3>Technology</h3></a>
        <a onclick="showBusiness()" id="Business" class="mentor-jury-selector"><h3>Business</h3></a>
      </div>
      <div class="mentor-carousel-segment">

        <div>
            <div class="slideshowcontainermentor">
            <div class="actgroupmentor fadewhy">
                <img src="{{ ('img/Design1.svg') }}" class="round-corners mentor-sizing" id="design-mentor1">
                <img src="{{ ('img/Tech1.svg') }}" class="round-corners mentor-sizing" id="technology-mentor1">
                <img src="{{ ('img/Business1.svg') }}" class="round-corners mentor-sizing"  id="business-mentor1">
            </div>
            <div class="actgroupmentor fadewhy">
                <img src="{{ ('img/Design2.svg') }}" class="round-corners mentor-sizing" id="design-mentor1">
                <img src="{{ ('img/Tech2.svg') }}" class="round-corners mentor-sizing" id="technology-mentor1">
                <img src="{{ ('img/Business2.svg') }}" class="round-corners mentor-sizing"  id="business-mentor1">
            </div>
            <div class="actgroupmentor fadewhy">
                <img src="{{ ('img/Design3.svg') }}" class="round-corners mentor-sizing" id="design-mentor1">
                <img src="{{ ('img/Tech3.svg') }}" class="round-corners mentor-sizing" id="technology-mentor1">
                <img src="{{ ('img/Business3.svg') }}" class="round-corners mentor-sizing"  id="business-mentor1">
            </div>
            </div>
            <div class="slideshow-controls">
              <a class="prevmentor" onclick="plusSlidesmentor(-1)">&#10094;</a>
              <a class="nextmentor" onclick="plusSlidesmentor(1)">&#10095;</a>
            </div>
            <div class="sliderprogress">
              <span class="doti"></span>
              <span class="doti"></span>
              <span class="doti"></span>
          </div>
        </div>
      </div>
    </section>
    <section class="container-fluid" id="jury">
        <h1 class="mentor-jury-title main-title ">>Our Jury_</h1>
        <div class="jury-carousel-segment">

            <div>
                <div class="slideshowcontainerjury">
                <div class="actgroupjury fadewhy">
                    <img src="{{ ('img/Jury1.svg') }}" class="round-corners mentor-sizing">
                </div>
                <div class="actgroupjury fadewhy">
                    <img src="{{ ('img/Jury2.svg') }}" class="round-corners mentor-sizing">
                </div>
                <div class="actgroupjury fadewhy">
                    <img src="{{ ('img/Jury3.svg') }}" class="round-corners mentor-sizing">
                </div>
                </div>
                <div class="slideshow-controls">
                  <a class="prevjury" onclick="plusSlidesjury(-1)">&#10094;</a>
                  <a class="nextjury" onclick="plusSlidesjury(1)">&#10095;</a>
                </div>
                <div class="sliderprogress">
                  <span class="doti"></span>
                  <span class="doti"></span>
                  <span class="doti"></span>
              </div>
            </div>
          </div>
    </section>
    <section class="container-fluid" id="FAQ">
      <div class="FAQ-left"><h1>FAQs</h1></div>
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              FAQ #1
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia a beatae modi doloribus molestiae id veniam. Numquam quibusdam id esse molestiae! Sed eaque exercitationem aut sequi ipsa dignissimos laborum illo.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              FAQ #2
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum explicabo, at quo repellendus molestiae eveniet quas harum autem dolores iure inventore vero corrupti vel perferendis, quod nam corporis a voluptatum.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              FAQ #3
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis molestiae vero, assumenda dolorem placeat iure consequuntur sunt ullam maxime tempora sequi, voluptate ipsa laboriosam. Voluptas debitis architecto praesentium nesciunt quis?
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              FAQ #4
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis molestiae vero, assumenda dolorem placeat iure consequuntur sunt ullam maxime tempora sequi, voluptate ipsa laboriosam. Voluptas debitis architecto praesentium nesciunt quis?
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              FAQ #5
            </button>
          </h2>
          <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis molestiae vero, assumenda dolorem placeat iure consequuntur sunt ullam maxime tempora sequi, voluptate ipsa laboriosam. Voluptas debitis architecto praesentium nesciunt quis?
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingSix">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
              FAQ #6
            </button>
          </h2>
          <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis molestiae vero, assumenda dolorem placeat iure consequuntur sunt ullam maxime tempora sequi, voluptate ipsa laboriosam. Voluptas debitis architecto praesentium nesciunt quis?
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="container-fluid" id="other-event">
        <h1 class="main-title">Other Event</h1>
      <div class="event-container">
        <div class="events round-corners-event" id="virtualconference">
            <img src="{{ ('img/Virtual Conference - Shaped.svg') }}" class="events round-corners-event">
          <h2>Virtual Conference</h2>
          <button onclick="window.location.href='https://technoscape.id/virtual-conference'" class="rounded-pill btn grad">Find out More</button>
        </div>
        <div class="events round-corners-event" id="developerworkshop">
            <img src="{{ ('img/Developer Workshop - Shaped.svg') }}" class="events round-corners-event">
          <h2>Developer Workshop</h2>
          <button onclick="window.location.href='https://technoscape.id/developer-workshop'" class="rounded-pill btn grad">Find out More</button>
        </div>
      </div>
    </section>
    <section class="container-fluid" id="sponsors">
      <h1 class="main-title">Sponsors</h1>
      <img src="{{ ('img/Gojek.svg') }}" class="platinum-sponsor round-corners">
      <div class="gold-sponsor-container">
        <img src="{{ ('img/dicoding.svg') }}" class="gold-sponsor round-corners">
        <img src="{{ ('img/Dewaweb.svg') }}" class="gold-sponsor round-corners">
        <img src="{{ ('img/Geforce RTX.svg') }}" class="gold-sponsor round-corners">
      </div>
      <div class="silver-sponsor-container">
        <img src="{{ ('img/Sirclo.svg') }}" class="silver-sponsor round-corners">
        <img src="{{ ('img/Investree.svg') }}" class="silver-sponsor round-corners">
        <img src="{{ ('img/Bahaso.svg') }}" class="silver-sponsor round-corners">
        <img src="{{ ('img/Codex.svg') }}" class="silver-sponsor round-corners">
        <img src="{{ ('img/Qiscus.svg') }}" class="silver-sponsor round-corners">
        <img src="{{ ('img/Indonesian Cloud.svg') }}" class="silver-sponsor round-corners">
      </div>
      <div class="silver-sponsor-container">
      </div>
    </section>
    <section class="container-fluid" id="med-part">
      <h1 class="main-title">Media Partners</h1>
      <div class="marquee">
        <div class="track">
          <div class="content">
            <img src="{{ ('img/HIMTI.svg') }}">
            <img src="{{ ('img/filemagz.svg') }}">
            <img src="{{ ('img/Petani Kode.svg') }}">
            <img src="{{ ('img/Eventkampus.svg') }}">
            <img src="{{ ('img/Ruang Mahasiswa.com.svg') }}">
            <img src="{{ ('img/CSC Binus.svg') }}">
          </div>
        </div>
        <div class="track2">
          <div class="content">
            <img src="{{ ('img/HIMTI.svg') }}">
            <img src="{{ ('img/filemagz.svg') }}">
            <img src="{{ ('img/Petani Kode.svg') }}">
            <img src="{{ ('img/Eventkampus.svg') }}">
            <img src="{{ ('img/Ruang Mahasiswa.com.svg') }}">
            <img src="{{ ('img/CSC Binus.svg') }}">
          </div>
        </div>
      </div>
    </section>
    <section class="container-fluid" id="get-in-touch">
      <div class="get-in-touch-wrap">
        <div class="text-social-media-contact">
          <div class="contact-text">
            <h1>>Git in touch_</h1>
            <p>Fill up the form and send us an email,<br> or reach out to us via social media</p>
          </div>
          <div class="social-media-logos">
            <a href="https://www.instagram.com/bnccbinus/"><img src="{{ ('img/instagram.svg') }}"></a>
            <a href="mailto:kelompok2tpm@gmail.com"><img src="{{ ('img/mail.svg') }}"></a>
            <a href="https://twitter.com/BNCC_Binus"><img src="{{ ('img/Twitter.svg') }}"></a>
            <a href="https://www.facebook.com/bina.nusantara.computer.club/"><img src="{{ ('img/Facebook.svg') }}"></a>
            <a href="https://www.linkedin.com/company/bina-nusantara-computer-club/?originalSubdomain=id"><img src="{{ ('img/Linkedin.svg') }}"></a>
          </div>
        </div>
        <div class="contact-form round-corners">
          <form action="https://formspree.io/f/mbjwdjdr" method="POST" id="my-form">
            <div class="mb-3">
              <label for="contactname" class="form-label">Your Name</label>
              <input type="text" name="name" class="form-control" id="contactname" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
              <label for="contactemail" class="form-label">Email Address</label>
              <input type="email" name="_replyto" class="form-control" id="contactemail" placeholder="Enter your email address" required>
            </div>
            <div class="mb-3">
              <label for="contactsubject" class="form-label">Subject</label>
              <input type="text" class="form-control" id="contactsubject" placeholder="Enter Subject" required>
            </div>
            <div class="mb-3">
              <label for="contactmessage" class="form-label">Message</label>
              <textarea name="message" class="form-control" id="contactmessage" rows="3"  placeholder="Enter your message" required></textarea>
            </div>
            <p id="my-form-status"></p>
            <button onclick="buatContactUs()" type="submit" id="my-form-button" class="rounded-pill btn grad">Send Message</button>
          </form>
          {{-- <script>
            var form = document.getElementById("my-form");

            async function handleSubmit(event) {
              event.preventDefault();
              var status = document.getElementById("my-form-status");
              var data = new FormData(event.target);
              fetch(event.target.action, {
                method: form.method,
                body: data,
                headers: {
                    'Accept': 'application/json'
                }
              }).then(response => {
                status.innerHTML = "Thanks for your submission!";
                form.reset()
              }).catch(error => {
                status.innerHTML = "Oops! There was a problem submitting your form"
              });
            }
            form.addEventListener("submit", handleSubmit)
        </script> --}}
        </div>
      </div>

    </section>
    {{-- <section class="container-fluid" id="footage">
      <h1>Footage</h1>
    </section> --}}
    <footer>
      <div class="footer-container">
        <img src="{{ ('img/logoTSfull.svg') }}" id="logoTSfooter">
        <a href="#home"><p class="footer-heading">Home</p></a>
        <div class="footer-competition">
          <p class="footer-heading">Competition</p>
          <a href="#prizes"><p>Champion Prizes</p></a>
          <a href="#mentor"><p>Mentor & Jury</p></a>
        </div>
        <div class="footer-details">
          <p class="footer-heading">Details</p>
          <a href="#about-us"><p>About</p></a>
          <a href="#FAQ"><p>FAQ</p></a>
          <a href="#timeline"><p>Timeline</p></a>
        </div>
        <div class="footer-contact">
          <p class="footer-heading">Contact Us</p>
          <div class="footer-logo">
            <a href="https://www.instagram.com/bnccbinus/"><img class="footer-logo-size" src="{{ ('img/instagram.svg') }}"></a>
            <a href="mailto:kelompok2tpm@gmail.com"><img class="footer-logo-size" src="{{ ('img/mail.svg') }}"></a>
            <a href="https://twitter.com/BNCC_Binus"><img class="footer-logo-size" src="{{ ('img/Twitter.svg') }}"></a>
            <a href="https://www.facebook.com/bina.nusantara.computer.club/"><img class="footer-logo-size" src="{{ ('img/Facebook.svg') }}"></a>
            <a href="https://www.linkedin.com/company/bina-nusantara-computer-club/?originalSubdomain=id"><img class="footer-logo-size" src="{{ ('img/Linkedin.svg') }}"></a>
          </div>
        </div>
      </div>
      <div class="copyright">
        <p class="footer-copyright">Powered and Organized by Kelompok 2 TPM 2022</p>
        <p class="footer-copyright">Privacy Policy and Terms of Service</p>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
</body>
</html>
