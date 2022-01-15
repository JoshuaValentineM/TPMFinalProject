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
        <h2>Edit - {{ $leaders[0]->username }}</h2>
        <div id="dashboard-container">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Role</th>
                  <th scope="col">Name</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Leader</th>
                  <td>{{ $leaders[0]->fullName }}</td>
                  <td><button onclick="window.location.href='{{ route('editParticipantLeader', ['id'=>$leaders[0]->id]) }}'" class="btn-admin btn rounded-pill edit-button">Edit</button></td>
                  <td><button class="btn-admin btn rounded-pill edit-button">Delete</button></td>
                </tr>
                @foreach ($members as $member)
                <tr>
                    <th scope="row">Member</th>
                    <td>{{ $member->fullName }}</td>
                    <td><button onclick="window.location.href='{{ route('editParticipantMember', ['id'=>$leaders[0]->id, 'memberid'=>$member->id])}}'" class="btn-admin btn rounded-pill edit-button">Edit</button></td>
                    <td>
                        <form action="{{ route('deleteParticipantMember', ['id'=>$leaders[0]->id, 'memberid'=>$member->id])}}" method="post">
                            @csrf
                            @method('delete')
                        <button type="submit" class="btn-admin btn rounded-pill edit-button">Delete</button>
                    </form>
                </td>
                </tr>
                @endforeach
                {{-- <tr>
                    <th scope="row">Member 2</th>
                    <td>{{ $members[1]->fullName }}</td>
                    <td><button onclick="window.location.href='{{ route('editParticipantMember', ['id'=>$leaders[0]->id])}}'" class="btn-admin btn rounded-pill edit-button">Edit</button></td>
                    <td><button class="btn-admin btn rounded-pill edit-button">Delete</button></td>
                </tr>
                <tr>
                    <th scope="row">Member 3</th>
                    <td>{{ $members[2]->fullName }}</td>
                    <td><button onclick="window.location.href='{{ route('editParticipantMember', ['id'=>$leaders[0]->id])}}'" class="btn-admin btn rounded-pill edit-button">Edit</button></td>
                    <td><button class="btn-admin btn rounded-pill edit-button">Delete</button></td>
                </tr> --}}
              </tbody>
            </table>
        </div>
      </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
