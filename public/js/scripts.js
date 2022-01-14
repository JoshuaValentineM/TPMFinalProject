// homepage why participate

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
      var slides = document.getElementsByClassName("actgroupwhy");
      var dots = document.getElementsByClassName("doti");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "flex";
      dots[slideIndex-1].className += " active";
    }


    setInterval(function() {
      showSlides(plusSlides(+1))
  },5000);


//   mentor jury selector

function showDesign() {
    document.getElementById("Design").style.opacity = 1;
    document.getElementById("Technology").style.opacity = 0.5;
    document.getElementById("Business").style.opacity = 0.5;

    document.getElementById("design-mentor1").style.display = "flex";
    document.getElementById("technology-mentor1").style.display = "none";
    document.getElementById("business-mentor1").style.display = "none";
    document.getElementById("design-mentor1-cap").style.display = "flex";
    document.getElementById("technology-mentor1-cap").style.display = "none";
    document.getElementById("business-mentor1-cap").style.display = "none";

    document.getElementById("design-mentor2").style.display = "flex";
    document.getElementById("technology-mentor2").style.display = "none";
    document.getElementById("business-mentor2").style.display = "none";
    document.getElementById("design-mentor2-cap").style.display = "flex";
    document.getElementById("technology-mentor2-cap").style.display = "none";
    document.getElementById("business-mentor2-cap").style.display = "none";

    document.getElementById("design-mentor3").style.display = "flex";
    document.getElementById("technology-mentor3").style.display = "none";
    document.getElementById("business-mentor3").style.display = "none";
    document.getElementById("design-mentor3-cap").style.display = "flex";
    document.getElementById("technology-mentor3-cap").style.display = "none";
    document.getElementById("business-mentor3-cap").style.display = "none";
}

function showTechnology() {
    document.getElementById("Technology").style.opacity = 1;
    document.getElementById("Design").style.opacity = 0.5;
    document.getElementById("Business").style.opacity = 0.5;

    document.getElementById("design-mentor1").style.display = "none";
    document.getElementById("technology-mentor1").style.display = "flex";
    document.getElementById("business-mentor1").style.display = "none";
    document.getElementById("design-mentor1-cap").style.display = "none";
    document.getElementById("technology-mentor1-cap").style.display = "flex";
    document.getElementById("business-mentor1-cap").style.display = "none";

    document.getElementById("design-mentor2").style.display = "none";
    document.getElementById("technology-mentor2").style.display = "flex";
    document.getElementById("business-mentor2").style.display = "none";
    document.getElementById("design-mentor2-cap").style.display = "none";
    document.getElementById("technology-mentor2-cap").style.display = "flex";
    document.getElementById("business-mentor2-cap").style.display = "none";

    document.getElementById("design-mentor3").style.display = "none";
    document.getElementById("technology-mentor3").style.display = "flex";
    document.getElementById("business-mentor3").style.display = "none";
    document.getElementById("design-mentor3-cap").style.display = "none";
    document.getElementById("technology-mentor3-cap").style.display = "flex";
    document.getElementById("business-mentor3-cap").style.display = "none";
}
function showBusiness() {
    document.getElementById("Business").style.opacity = 1;
    document.getElementById("Technology").style.opacity = 0.5;
    document.getElementById("Design").style.opacity = 0.5;

    document.getElementById("design-mentor2").style.display = "none";
    document.getElementById("technology-mentor2").style.display = "none";
    document.getElementById("business-mentor2").style.display = "flex";
    document.getElementById("design-mentor2-cap").style.display = "none";
    document.getElementById("technology-mentor2-cap").style.display = "none";
    document.getElementById("business-mentor2-cap").style.display = "flex";

    document.getElementById("design-mentor3").style.display = "none";
    document.getElementById("technology-mentor3").style.display = "none";
    document.getElementById("business-mentor3").style.display = "flex";
    document.getElementById("design-mentor3-cap").style.display = "none";
    document.getElementById("technology-mentor3-cap").style.display = "none";
    document.getElementById("business-mentor3-cap").style.display = "flex";

    document.getElementById("design-mentor1").style.display = "none";
    document.getElementById("technology-mentor1").style.display = "none";
    document.getElementById("business-mentor1").style.display = "flex";
    document.getElementById("design-mentor1-cap").style.display = "none";
    document.getElementById("technology-mentor1-cap").style.display = "none";
    document.getElementById("business-mentor1-cap").style.display = "flex";
}

// mentor carousel
var slideIndexMentor = 1;
    showSlidesmentor(slideIndexMentor);

    function plusSlidesmentor(m) {
      showSlidesmentor(slideIndexMentor += m);
    }

    function currentSlidementor(m) {
      showSlides(slideIndexMentor = m);
    }

    function showSlidesmentor(m) {
      var imentor;
      var slidesmentor = document.getElementsByClassName("actgroupmentor");
      var dotsmentor = document.getElementsByClassName("doti");
      if (m > slidesmentor.length) {slideIndexMentor = 1}
      if (m < 1) {slideIndexMentor = slidesmentor.length}
      for (imentor = 0; imentor < slidesmentor.length; imentor++) {
          slidesmentor[imentor].style.display = "none";
      }
      for (imentor = 0; imentor < dotsmentor.length; imentor++) {
          dotsmentor[imentor].className = dotsmentor[imentor].className.replace(" active", "");
      }
      slidesmentor[slideIndexMentor-1].style.display = "flex";
      dotsmentor[slideIndexMentor-1].className += " active";
    }


    setInterval(function() {
      showSlidesmentor(plusSlidesmentor(+1))
  },5000);

  // jury carousel
  var slideIndexjury = 1;
    showSlidesjury(slideIndexjury);

    function plusSlidesjury(b) {
      showSlidesjury(slideIndexjury += b);
    }

    function currentSlidejury(b) {
      showSlidesjury(slideIndexjury = b);
    }

    function showSlidesjury(b) {
      var ijury;
      var slidesjury = document.getElementsByClassName("actgroupjury");
      var dotsjury = document.getElementsByClassName("doti");
      if (b > slidesjury.length) {slideIndexjury = 1}
      if (b < 1) {slideIndexjury = slidesjury.length}
      for (ijury = 0; ijury < slidesjury.length; ijury++) {
          slidesjury[ijury].style.display = "none";
      }
      for (ijury = 0; ijury < dotsjury.length; ijury++) {
          dotsjury[ijury].className = dotsjury[ijury].className.replace(" active", "");
      }
      slidesjury[slideIndexjury-1].style.display = "flex";
      dotsjury[slideIndexjury-1].className += " active";
    }


    setInterval(function() {
      showSlidesjury(plusSlidesjury(+1))
  },5000);
// contactform
const form = document.getElementById("contact-us-form")
form.addEventListener('submit', (e) => {
    e.preventDefault();
    validatelogin();
});

function validatelogin() {
  const name = document.getElementById("contactname").value;
  const email = document.getElementById("contactemail").value;
  const subject = document.getElementById("contactsubject").value;
  const message = document.getElementById("contactmessage").value;
  if (name== null ||name== "") {
    alert("Please enter your name.");
    return false;
}
  if (email== null ||email== "") {
      alert("Please enter your email.");
      return false;
  }
  if (subject == null || subject == "") {
      alert("Please enter a subject.");
      return false;
  }
  if (message== null ||message== "") {
    alert("Please enter your message.");
    return false;
}
alert('Message sent!');
}

function buatContactUs(){
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
}
