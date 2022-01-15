<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technoscape</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{ ('img/favicon-32x32.png') }}" image="image/gif">
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
        <h2> < Edit - Leader - {{$leaders[0]->username}}</h2>
        <div id="dashboard-container">
            <form action="{{route('updateParticipantLeader', ['id' => $leaders[0]->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="mb-3">
                  <label for="fullName" class="form-label">Full Name</label>
                  <input name="fullName" type="text" class="form-control rounded-pill" value="{{$leaders[0]->fullName}}" id="fullName" required>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input name="email" type="email" class="form-control rounded-pill" value="{{$leaders[0]->email}}" id="email" required>
                </div>
                <div class="mb-3">
                  <label for="whatsappNumber" class="form-label">Whatsapp Number</label>
                  <input name="whatsappNumber" type="text" class="form-control rounded-pill" value="{{$leaders[0]->whatsappNumber}}" id="whatsappNumber" placeholder="+62" required>
                </div>
                <div class="mb-3">
                  <label for="lineID" class="form-label">Line ID</label>
                  <input name="lineID" type="text" class="form-control rounded-pill" value="{{$leaders[0]->lineID}}" id="lineID" required>
                </div>
                <div class="mb-3">
                  <label for="githubGitlabID" class="form-label">Github/Gitlab ID</label>
                  <input name="githubGitlabID" type="text" class="form-control rounded-pill" value="{{$leaders[0]->githubGitlabID}}" id="githubGitlabID" required>
                </div>
                <div class="mb-3">
                  <label for="birthPlace" class="form-label">Birthplace</label>
                  <input name="birthPlace" type="text" class="form-control rounded-pill" value="{{$leaders[0]->birthPlace}}" id="birthPlace" required>
                </div>
                <div class="mb-3">
                  <label for="birthDate" class="label">Birth Date</label>
                  <div class="birthdate">
                    <div class="mb-3">
                      <label for="dayBirthDate" class="form-label" style="font-size: 10pt;">Day</label>
                      <input name="dayBirthDate" type="text" class="form-control" value="{{$leaders[0]->dayBirthDate}}" id="dayBirthDate" placeholder="DD" required>
                    </div>
                    <div class="mb-3">
                      <label for="monthBirthDate" class="form-label" style="font-size: 10pt;">Month</label>
                      <input name="monthBirthDate" type="text" class="form-control" value="{{$leaders[0]->monthBirthDate}}" id="monthBirthDate" placeholder="MM" required>
                    </div>
                    <div class="mb-3">
                      <label for="yearBirthDate" class="form-label"style="font-size: 10pt;" >Year</label>
                      <input name="yearBirthDate" type="text" class="form-control" value="{{$leaders[0]->yearBirthDate}}" id="yearBirthDate" placeholder="YYYY" required>
                    </div>
                  </div>
                  <div class="mb-3">
                      <label for="CV" class="form-label">Curriculum Vitae (CV)</label>
                      <input name="CV" type="file" class="form-control" value="{{$leaders[0]->CV}}" id="CV" required>
                  </div>
                  <div class="mb-3">
                      <label for="IDCard" class="form-label">Flazz Card/ID Card</label>
                      <input name="IDCard" type="file" class="form-control" value="{{$leaders[0]->IDCard}}" id="IDCard" required>
                  </div>
                  <button type="submit" class="btn btn-primary rounded-pill">Edit</button>
              </form>
        </div>
      </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
