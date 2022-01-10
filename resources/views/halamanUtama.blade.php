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
              <button onclick="window.location.href='{{ route('login') }}'" class="btn btn-outline-success" type="submit">Login</button>
            </ul>
          </div>
          </div>
    </nav>
    <section class="container-fluid" id="home-section">
        <h1>HACKATHON 5.0</h1>
        <h3>[Tagline]</h3>
    </section>
    <section class="container-fluid" id="about-section">
      <div class="container-fluid" id="about-container">
        <div class="about-video">
          <iframe class="round-corners" src="https://drive.google.com/file/d/1Hy-lQHIp9Qb8rQ0jrnaj0aPMBkVAnHm3/preview" width="640" height="360" allow="autoplay"></iframe>
        </div>
        <div class="about-text-btn">
          <h1>About Hackathon 5.0</h1>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores accusantium illum alias quasi laudantium dolorum culpa repellat illo assumenda, eius vero suscipit est reiciendis pariatur, aut perferendis quia aperiam quo!</p>
          <div class="about-btn">
            <button class="btn btn-outline-success" type="submit">Register NOW!</button>
            <button class="btn btn-outline-success" type="submit">Download Guidebook</button>
          </div>
        </div>
      </div>
    </section>
    <section class="container-fluid" id="prizes">
      <h1 class="main-title">Prizes</h1>
      <div>
        <div class="prize-container round-corners"></div>
        <div class="prize-container round-corners"></div>
        <div class="prize-container round-corners"></div>
      </div>
    </section>
    <section class="container-fluid" id="why-participate">
      <h1 class="main-title">Why You Should Participate</h1>
      <div class="slideshowcontainer">
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <div class="actgroupwhy fadewhy">
        <img src="{{ ('img/temp.jpg') }}" class="portofolio round-corners">
            <p class="imgcap">reason 1</p>
      </div>
      <div class="actgroupwhy fadewhy">
        <img src="{{ ('img/temp.jpg') }}" class="portofolio round-corners">
            <p class="imgcap">reason 2</p>
      </div>
      <div class="actgroupwhy fadewhy">
        <img src="{{ ('img/temp.jpg') }}" class="portofolio round-corners">
            <p class="imgcap">reason 3</p>
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
      <img src="Assets/">
    </timeline>
    <section class="container-fluid" id="mentor">
      <div class="toggle-mentor-jury">
        <a onclick="showDesign()" id="Design" class="mentor-jury-selector mentor-jury-selector-active"><h3>Design</h3></a>
        <a onclick="showTechnology()" id="Technology" class="mentor-jury-selector"><h3>Technology</h3></a>
        <a onclick="showBusiness()" id="Business" class="mentor-jury-selector"><h3>Business</h3></a>
      </div>
    </section>
    <section class="container-fluid" id="jury">

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
      <h1>Other Event</h1>
      <div class="event-container">
        <div class="events round-corners" id="virtualconference">
          <h2>Virtual Conference</h2>
          <button>Find out More</button>
        </div>
        <div class="events round-corners" id="developerworkshop">
          <h2>Developer Workshop</h2>
          <button>Find out More</button>
        </div>
      </div>
    </section>
    <section class="container-fluid" id="sponsors">
      <h1 class="main-title">Sponsors</h1>
      <div class="platinum-sponsor round-corners"></div>
      <div class="gold-sponsor-container">
        <div class="gold-sponsor round-corners"></div>
        <div class="gold-sponsor round-corners"></div>
        <div class="gold-sponsor round-corners"></div>
      </div>
      <div class="silver-sponsor-container">
        <div class="silver-sponsor round-corners"></div>
        <div class="silver-sponsor round-corners"></div>
        <div class="silver-sponsor round-corners"></div>
        <div class="silver-sponsor round-corners"></div>
        <div class="silver-sponsor round-corners"></div>
      </div>
      <div class="silver-sponsor-container">
        <div class="silver-sponsor round-corners"></div>
        <div class="silver-sponsor round-corners"></div>
        <div class="silver-sponsor round-corners"></div>
        <div class="silver-sponsor round-corners"></div>
        <div class="silver-sponsor round-corners"></div>
      </div>
    </section>
    <section class="container-fluid" id="med-part">
      <h1 class="main-title">Media Partners</h1>
      <marquee>
          <div class="media-partner round-corners"></div>
          <div class="media-partner round-corners"></div>
          <div class="media-partner round-corners"></div>
          <div class="media-partner round-corners"></div>
          <div class="media-partner round-corners"></div>
      </marquee>
    </section>
    <section class="container-fluid" id="get-in-touch">
      <div class="get-in-touch-wrap">
        <div class="text-social-media-contact">
          <div class="contact-text">
            <h1>>Git in touch_</h1>
            <p>Fill up the form and send us an email, or reach out to us via social media</p>
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
          <form action="https://formspree.io/f/xwkypdyy" method="POST" id="contact-us-form">
            <div class="mb-3">
              <label for="contactname" class="form-label">Your Name</label>
              <input type="text" name="message" class="form-control" id="contactname" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
              <label for="contactemail" class="form-label">Email Address</label>
              <input type="email" name="sender's email" class="form-control" id="contactemail" placeholder="Enter your email address" required>
            </div>
            <div class="mb-3">
              <label for="contactsubject" class="form-label">Subject</label>
              <input type="text" class="form-control" id="contactsubject" placeholder="Enter Subject" required>
            </div>
            <div class="mb-3">
              <label for="contactmessage" class="form-label">Message</label>
              <textarea class="form-control" id="contactmessage" rows="3"  placeholder="Enter your message" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
          </form>
        </div>
      </div>

    </section>
    <section class="container-fluid" id="footage">
      <h1>Footage</h1>
    </section>
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
    <script src="Scripts/scripts.js"></script>
</body>
</html>
