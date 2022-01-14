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
                <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Participants</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Logout</a>
              </li>
            </ul>
          </div>
          </div>
    </nav>
    <section id="admin-dashboard">
      <div class=middle-admin>
        <h2> < Edit - Member - Nama Tim</h2>
        <div id="dashboard-container">
            <form>
                <div class="mb-3">
                  <label for="userfullname" class="form-label">Full Name</label>
                  <input type="text" class="form-control rounded-pill" id="userfullname" required>
                </div>
                <div class="mb-3">
                  <label for="useremail" class="form-label">Email</label>
                  <input type="email" class="form-control rounded-pill" id="useremail" required>
                </div>
                <div class="mb-3">
                  <label for="usernumber" class="form-label">Whatsapp Number</label>
                  <input type="text" class="form-control rounded-pill" id="usernumber" placeholder="+62" required>
                </div>
                <div class="mb-3">
                  <label for="userline" class="form-label">Line ID</label>
                  <input type="text" class="form-control rounded-pill" id="userline" required>
                </div>
                <div class="mb-3">
                  <label for="usergit" class="form-label">Github/Gitlab ID</label>
                  <input type="text" class="form-control rounded-pill" id="usergit" required>
                </div>
                <div class="mb-3">
                  <label for="userbirthplace" class="form-label">Birthplace</label>
                  <input type="text" class="form-control rounded-pill" id="userbirthplace" required>
                </div>
                <div class="mb-3">
                  <label for="birthDate" class="label">Birth Date</label>
                  <div class="birthdate">
                    <div class="mb-3">
                      <label for="dayBirthDate" class="form-label" style="font-size: 10pt;">Day</label>
                      <input type="text" class="form-control" id="userdayBirthDate" placeholder="DD" required>
                    </div>
                    <div class="mb-3">
                      <label for="monthBirthDate" class="form-label" style="font-size: 10pt;">Month</label>
                      <input type="text" class="form-control" id="usermonthBirthDate" placeholder="MM" required>
                    </div>
                    <div class="mb-3">
                      <label for="yearBirthDate" class="form-label"style="font-size: 10pt;" >Year</label>
                      <input type="text" class="form-control" id="useryearBirthDate" placeholder="YYYY" required>
                    </div>
                  </div>
                  <div class="mb-3">
                      <label for="CV" class="form-label">Curriculum Vitae (CV)</label>
                      <input type="file" class="form-control" id="userCV" required>
                  </div>
                  <div class="mb-3">
                      <label for="flazzCard" class="form-label">Flazz Card/ID Card</label>
                      <input type="file" class="form-control" id="userCard" required>
                  </div>
                  <button type="submit" class="btn btn-primary rounded-pill">Edit</button>
              </form>
        </div>
      </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
