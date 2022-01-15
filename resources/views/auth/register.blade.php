{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<head>
    <link rel="stylesheet" type="css" href="styleRegister.css">
 </head>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechnoScape</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./styleRegisterPage.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/styleRegister.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ ('img/favicon-32x32.png') }}" image="image/gif">
</head>
<body>

    <!-- Register Page -->

    <section class="registerPage">
      <div class="leftRegisterPage">
        <div>
            <a href="{{ route('halamanUtama') }}"><img src="{{ ('img/LogoTSfull.svg') }}" ></a>
        </div>
        <h2>[tagline]</h2>

      </div>

      <div class="rightRegisterPage">
        <div class="headRegisterPage">
          <div style="color: rgb(161, 161, 161) ;">Already registered?</div>
          {{-- <a class="btn btn-link" href="{{ route('login') }}">
            {{ __('Login') }}
        </a> --}}
        <button onclick="window.location.href='{{ route('login') }}'" class="btn btn-secondary rounded-pill" type="submit">Login</button>
        </div>

        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
          @csrf
        <div class="registerForm">
            <h3>Register to TechnoScape</h3>

            <div class="teamInformation">
              <h5>Team Information</h5>
              <div class="mb-3">
                <label for="username" class="form-label">Team Name</label>
                <div class="mb-3">
                <input name="username" type="text" class="form-control" id="username" oninput="validateusername()" >
              </div>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="mb-3">
                <input name="password" type="password" class="form-control" id="password" placeholder="Min. 8 characters containing an uppercase and lowercase letter, a number, and a symbol." oninput="validatepassword()">
              </div>
              </div>
              <div class="mb-3">
                <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                <div class="mb-3">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" oninput="confirmpassword()">
              </div>
              </div>
              <div class="checkboxStatus">
                <div class="form-check">
                  <input name="binusian" class="form-check-input" type="checkbox" value="binusian" id="binusian">
                  <div class="mb-3">
                  <label class="form-check-label" for="binusian">
                    Binusian
                </label>
                </div>
                </div>
                <div class="form-check">
                  <input name="binusian" class="form-check-input" type="checkbox" value="nonbinusian" id="nonBinusian">
                  <div class="mb-3">
                  <label class="form-check-label" for="nonBinusian">
                    Non-Binusian
                  </label>
                </div>
                </div>
              </div>
            </div>

            <div class="leaderInformation">
              <h5>Leader Information</h5>

              <div class="mb-3">
                <label for="fullName" class="form-label">Full Name</label>
                <div class="mb-3">
                <input name="fullName" type="text" class="form-control" id="fullName" required oninput="validatefullName()">
              </div>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email Leader</label>
                <div class="mb-3">
                <input name="email" type="email" class="form-control" id="email" required oninput="validateemail()">
              </div>
              </div>
              <div class="mb-3">
                <label for="whatsappNumber" class="form-label">Whatsapp Number</label>
                <div class="mb-3">
                <input name="whatsappNumber" type="text" class="form-control" id="whatsappNumber" placeholder="+62" required oninput="validatewhatsappNumber()">
              </div>
              </div>
              <div class="mb-3">
                <label for="lineID" class="form-label">LINE ID</label>
                <div class="mb-3">
                <input name="lineID" type="text" class="form-control" id="lineID" required>
              </div>
              </div>
              <div class="mb-3">
                <label for="githubGitlabID" class="form-label">Github/Gitlab ID</label>
                <div class="mb-3">
                <input name="githubGitlabID" type="text" class="form-control" id="githubGitlabID" required>
              </div>
              </div>
              <div class="mb-3">
                <label for="birthPlace" class="form-label">Birth Place</label>
                <div class="mb-3">
                <input name="birthPlace" type="text" class="form-control" id="birthPlace" required >
              </div>
              </div>
              <div class="mb-3">
                <label for="birthDate" class="label">Birth Date</label>
                <div class="birthdate">
                  <div class="mb-3">
                    <label for="dayBirthDate" class="form-label" style="font-size: 10pt;">Day</label>
                    <div class="mb-3">
                    <input name="dayBirthDate" type="text" class="form-control" id="dayBirthDate" placeholder="DD" required >
                  </div>
                  </div>
                  <div class="mb-3">
                    <label for="monthBirthDate" class="form-label" style="font-size: 10pt;">Month</label>
                    <div class="mb-3">
                    <input name="monthBirthDate" type="text" class="form-control" id="monthBirthDate" placeholder="MM" required >
                  </div>
                  </div>
                  <div class="mb-3">
                    <label for="yearBirthDate" class="form-label"style="font-size: 10pt;" >Year</label>
                    <div class="mb-3">
                    <input name="yearBirthDate" type="text" class="form-control" id="yearBirthDate" placeholder="YYYY" required >
                  </div>
                  </div>
                </div>
                <div class="mb-3">
                    <label for="CV" class="form-label">Curriculum Vitae (CV)</label>
                    <div>
                        <input name="CV" type="file" class="form-control file" id="CV" accept="application/pdf, image/png, image/jpg, image/jpeg" required>
                        <label for="CV"><i class="fas fa-upload"></i>Add File</label>
                      </div>
                  </div>
                  <div class="idCard">
                    {{-- <div class="mb-3">
                      <label for="IDCard" class="form-label">Flazz Card (Binusian)</label>
                      <input name="IDCard" type="file" class="form-control" id="IDCard" >
                    </div> --}}
                    <div class="mb-3">
                      <label for="IDCard" class="form-label">ID Card (Non-Binusian) / FlazzCard (Binusian)</label>
                      <div>
                        <input name="IDCard" type="file" class="form-control file" id="IDCard" accept="application/pdf, image/png, image/jpg, image/jpeg" required>
                        <label for="IDCard"><i class="fas fa-upload"></i>Add File</label>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div>
              <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
            </div>
            </form>
      </div>
      </div>

    </section>
    <script src="{{asset('js/tesvalidate.js')}}"></script>
</body>
</html>
