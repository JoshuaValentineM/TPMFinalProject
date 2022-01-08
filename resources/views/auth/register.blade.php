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
</head>
<body>

    <!-- Register Page -->

    <section class="registerPage">
      <div class="leftRegisterPage">
        <div>logo</div>
        <h2>[tagline]</h2>

      </div>

      <div class="rightRegisterPage">
        <div class="headRegisterPage">
          <div style="color: rgb(161, 161, 161) ;">Already registered?</div>
          <a class="btn btn-link" href="{{ route('login') }}">
            {{ __('Login') }}
        </a>
        </div>

        <div class="registerForm">
          <h3>Register to TechnoScape</h3>

          <form>
            <div class="teamInformation">
              <h5>Team Information</h5>
              <div class="mb-3">
                <label for="teamName" class="form-label">Team Name</label>
                <input type="text" class="form-control" id="teamName" >
              </div>
              <div class="mb-3">
                <label for="passwordTeam" class="form-label">Password</label>
                <input type="password" class="form-control" id="passwordTeam" placeholder="Min. 8 characters containing an uppercase and lowercase letter, a number, and a symbol.">
              </div>
              <div class="mb-3">
                <label for="confirmPasswordTeam" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirmPasswordTeam">
              </div>
              <div class="checkboxStatus">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="binusian">
                  <label class="form-check-label" for="binusian">
                    Binusian
                </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="nonBinusian">
                  <label class="form-check-label" for="nonBinusian">
                    Non-Binusian
                  </label>
                </div>
              </div>
            </div>

            <div class="leaderInformation">
              <h5>Leader Information</h5>
              <div class="mb-3">
                <label for="fullName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fullName" >
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" >
              </div>
              <div class="mb-3">
                <label for="whatsappNumber" class="form-label">Whatsapp Number</label>
                <input type="text" class="form-control" id="whatsappNumber" placeholder="+62" >
              </div>
              <div class="mb-3">
                <label for="lineID" class="form-label">LINE ID</label>
                <input type="text" class="form-control" id="lineID" >
              </div>
              <div class="mb-3">
                <label for="githubGitlabID" class="form-label">Github/Gitlab ID</label>
                <input type="text" class="form-control" id="githubGitlabID" >
              </div>
              <div class="mb-3">
                <label for="birthPlace" class="form-label">Birth Place</label>
                <input type="text" class="form-control" id="birthPlace" >
              </div>
              <div class="mb-3">
                <label for="birthDate" class="label">Birth Date</label>
                <div class="birthdate">
                  <div class="mb-3">
                    <label for="dayBirthDate" class="form-label" style="font-size: 10pt;">Day</label>
                    <input type="text" class="form-control" id="dayBirthDate" placeholder="DD">
                  </div>
                  <div class="mb-3">
                    <label for="monthBirthDate" class="form-label" style="font-size: 10pt;">Month</label>
                    <input type="text" class="form-control" id="monthBirthDate" placeholder="MM">
                  </div>
                  <div class="mb-3">
                    <label for="yearBirthDate" class="form-label"style="font-size: 10pt;" >Year</label>
                    <input type="text" class="form-control" id="yearBirthDate" placeholder="YYYY">
                  </div>
                </div>
                <div class="mb-3">
                    <label for="CV" class="form-label">Curriculum Vitae (CV)</label>
                    <input type="file" class="form-control" id="CV" placeholder="Add file">
                  </div>
                  <div class="idCard">
                    <div class="mb-3">
                      <label for="flazzCard" class="form-label">Flazz Card (Binusian)</label>
                      <input type="file" class="form-control" id="flazzCard" >
                    </div>
                    <div class="mb-3">
                      <label for="IDCard" class="form-label">ID Card (Non-Binusian)</label>
                      <input type="file" class="form-control" id="IDCard" >
                    </div>
                  </div>
              </div>
            </div>
              <button type="submit" class="btn btn-secondary">Register</button>
            </form>
      </div>
      </div>

    </section>






</body>
</html>
