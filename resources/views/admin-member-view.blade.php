<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technoscape</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{ ('img/favicon-32x32.png') }}" type="image/gif">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-transparent">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('halamanUtama') }}"><img src="{{ ('img/LogoTSfull.svg') }}" id="navbar-logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('getAdminDashboard') }}">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('getAdminParticipant') }}">Participants</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('logout') }}">Logout</a>
              </li>
            </ul>
          </div>
          </div>
    </nav>
    <section id="admin-dashboard">
      <div class=middle-admin>
        <h2> {{ $leaders[0]->fullName }}</h2>
        <div id="dashboard-container">
            @foreach ($members as $member )
            <br>
            <h1>Nama Member : {{ $member->fullName}}</h1>
            <h3>Email:</h3>
            <p>{{ $member->email}}</p>
            <hr>
            <h3>Whatsapp Number:</h3>
            <p>{{ $member->whatsappNumber}}</p>
            <hr>
            <h3>LINE ID:</h3>
            <p>{{ $member->lineID}}</p>
            <hr>
            <h3>GitHub.GitLab ID:</h3>
            <p>{{ $member->githubGitlabID}}</p>
            <hr>
            <h3>Birth Place:</h3>
            <p>{{ $member->birthPlace}}</p>
            <hr>
            <h3>Birth Date:</h3>
            <p>{{ $member->dayBirthDate}}//{{ $member->monthBirthDate}}//{{ $member->yearBirthDate}}</p>
            <hr>
            <h3>Curriculum Vitae</h3>
            <button class="btn" type="submit"><i class="fas fa-download"></i> &nbsp Download</button>
            <hr>
            <h3>Flazz / ID Card</h3>
            <button class="btn" type="submit"><i class="fas fa-download"></i> &nbsp Download</button>
            <br>
            @endforeach
        </div>
      </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
