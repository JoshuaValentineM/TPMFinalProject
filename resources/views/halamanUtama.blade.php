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
    <link href="CSS/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="Assets/LogoTS.svg" id="navbar-logo"></a>
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
                  <li><a class="dropdown-item" href="#">Champion Prizes</a></li>
                  <li><a class="dropdown-item" href="#">Mentor & Jury</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Details
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">About</a></li>
                  <li><a class="dropdown-item" href="#">FAQ</a></li>
                  <li><a class="dropdown-item" href="#">Timeline</a></li>
                </ul>
              </li>
              <button class="btn btn-outline-success" type="submit">Login</button>
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
          <iframe src="https://drive.google.com/file/d/1Hy-lQHIp9Qb8rQ0jrnaj0aPMBkVAnHm3/preview" width="640" height="360" allow="autoplay"></iframe>
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
      <h1>Prizes</h1>
      <div>
        <div class="prize-container"></div>
        <div class="prize-container"></div>
        <div class="prize-container"></div>
      </div>
    </section>
    <section class="container-fluid" id="why-participate">
      <h1>Why You Should Participate</h1>

    </section>
    <timeline class="container-fluid" id="timeline">

    </timeline>
    <section class="container-fluid" id="mentor">

    </section>
    <section class="container-fluid" id="jury">

    </section>
    <section class="container-fluid" id="FAQ">

    </section>
    <section class="container-fluid" id="other-event">

    </section>
    <section class="container-fluid" id="sponsors">

    </section>
    <section class="container-fluid" id="med-part">

    </section>
    <section class="container-fluid" id="get-in-touch">

    </section>
    <section class="container-fluid" id="footage">

    </section>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
