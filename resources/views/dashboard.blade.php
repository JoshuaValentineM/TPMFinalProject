<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TechnoScape</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/userdashboard.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="{{ asset('css/userdashboard.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('halamanUtama') }}"><img src="{{ ('img/logoTSfull.svg') }}" id="navbar-logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('getDashboard') }}">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Payment</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Timeline</a>
              </li>
              <button onclick="window.location.href='{{ route('logout') }}'" class="btn btn-outline-success" type="submit">Logout</button>
            </ul>
          </div>
          </div>
    </nav>
    <section id="user-dashboard">
      <div class="userdashboard-container">
        <h1>welcome,
        @foreach ($leaders as $leader )
        {{ $leader->fullName }}
        @endforeach
    </h1>
        <hr>
        <div id="user-members">
            <h4 class="text-center">Members</h4>

            <tbody>
                @foreach ($members as $member )
                <tr>
                    <div>
                        <th scope="column">{{ $member->fullName}}</th>
                    </div>
                </tr>
                @endforeach
            </tbody>
            <div>

            </div>
            <button class="btn btn-outline-success" type="submit">Add member</button>
        </div>
        <hr>
        <div id="user-information">
            <h4 class="text-center">Member Information</h4>
            <form action="{{route('createMember', ['id'=>$teamId])}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="mb-3">
                <label for="fullName" class="form-label">Full Name</label>
                <input name="fullName" type="text" class="form-control" id="fullName">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" id="email">
              </div>
              <div class="mb-3">
                <label for="whatsappNumber" class="form-label">Whatsapp Number</label>
                <input name="whatsappNumber" type="text" class="form-control" id="whatsappNumber" placeholder="+62">
              </div>
              <div class="mb-3">
                <label for="lineID" class="form-label">Line ID</label>
                <input name="lineID" type="text" class="form-control" id="lineID">
              </div>
              <div class="mb-3">
                <label for="githubGitlabID" class="form-label">Github/Gitlab ID</label>
                <input name="githubGitlabID" type="text" class="form-control" id="githubGitlabID">
              </div>
              <div class="mb-3">
                <label for="birthPlace" class="form-label">Birthplace</label>
                <input name="birthPlace" type="text" class="form-control" id="birthPlace">
              </div>
              <div class="mb-3">
                <label for="birthDate" class="label">Birth Date</label>
                <div class="birthdate">
                  <div class="mb-3">
                    <label for="dayBirthDate" class="form-label" style="font-size: 10pt;">Day</label>
                    <input name="dayBirthDate" type="text" class="form-control" id="dayBirthDate" placeholder="DD">
                  </div>
                  <div class="mb-3">
                    <label for="monthBirthDate" class="form-label" style="font-size: 10pt;">Month</label>
                    <input name="monthBirthDate" type="text" class="form-control" id="monthBirthDate" placeholder="MM">
                  </div>
                  <div class="mb-3">
                    <label for="yearBirthDate" class="form-label"style="font-size: 10pt;" >Year</label>
                    <input name="yearBirthDate" type="text" class="form-control" id="yearBirthDate" placeholder="YYYY">
                  </div>
                </div>
                <div class="mb-3">
                    <label for="CV" class="form-label">Curriculum Vitae (CV)</label>
                    <input name="CV" type="file" class="form-control" id="CV" placeholder="Add file">
                </div>
                <div class="mb-3">
                    <label for="IDCard" class="form-label">Flazz Card/ID Card</label>
                    <input name="IDCard" type="file" class="form-control" id="IDCard" >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
