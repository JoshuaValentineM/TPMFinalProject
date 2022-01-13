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
        <h2>Payment Confirmation</h2>
        <div id="dashboard-container">
            <div class="dashboard-tools">
                <form id="dashboard-tools" type="get" action="{{route('searchTeam')}}">
                  <input class="form-control me-2 search-length" name="query" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>

                  <div class="toggleswitch">
                    Verified &nbsp
                    <label class="switch">
                        <a href="{{ route('verifiedTeamParticipantList') }}">
                      <input type="checkbox">
                      <span class="slider round"></span>
                      {{-- <a href="{{ route('verifiedTeamParticipantList') }}">
                        <i class="icon-dashboard"></i>
                        <span class="slider round"> </span> --}}
                    </a>
                    </label>
                  </div>
                  <select class="form-select sort-button" aria-label="Default select example">
                    <option selected>Sort</option>
                    <option value="1">A-Z</option>
                    <option value="2">Z-A</option>
                  </select>
                  <button type="submit" class="btn btn-secondary rounded-pill sortbtn">Sort!</button>
                </form>

            </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Status</th>
                  <th scope="col">Team Name</th>
                  <th scope="col">Payment</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($teams as $team )
                <tr>
                    @if ($team->verification===1)
                  <th scope="row"><i class="fas fa-check-circle"></i></th>
                    @else
                  <th scope="row"><i class="fas fa- dash-icon"></i></th>
                  @endif
                  <td>{{ $team->username}}</td>
                  <td>Rp 7.200.000,-</td>
                  <td><button>View</button></td>
                  <td><form action="{{route('verifyTeam', ['id'=>$team->id])}}" method="post">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-primary">Verify</button>
                </form></td>
                  @endforeach



                </tr>
                {{-- <tr>
                  <th scope="row"><i class="fas fa-circle"></i></th>
                  <td>Team Name 1</td>
                  <td>Rp 7200.000,-</td>
                  <td><button>View</button></td>
                  <td><button>Verify</button></td>
                </tr>
                <tr>
                  <th scope="row"><i class="fas fa-circle"></i></th>
                  <td>Team Name 1</td>
                  <td>Rp 7200.000,-</td>
                  <td><button>View</button></td>
                  <td><button>Verify</button></td>
                </tr> --}}
              </tbody>
            </table>
        </div>
    </div>
    </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
