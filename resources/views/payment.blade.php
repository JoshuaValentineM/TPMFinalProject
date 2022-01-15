<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechnoScape</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/stylepayment.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/925d587583.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link rel="icon" href="{{ ('img/favicon-32x32.png') }}" type="image/gif">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-transparent">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('halamanUtama') }}"><img src="{{ ('img/LogoTSfull.svg') }}" class="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('getDashboard') }}">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ '/payment' }}">Payment</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ '/timeline' }}">Timeline</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('logout') }}">Logout</a>
              </li>
            </ul>
          </div>
          </div>
    </nav>

    <!-- payment-->

    <section id="payment" >
        <h2>Registration Period</h2>
        <div class="none-and-gradient">
            <h1>Opens in</h1>
            <h1 class="gradient-font">12 days, 5 hours, 4 minutes</h1>
          </div>

        <div class="box-container">
          <div class="payment-container">
            <h3>Registration Payment</h3>
            <h4>Early Bird Offer</h4>

            <div class="box-container">
              <div class="earlyBird-container">
                <h4>7 days 0 hours left</h4>
                <div class="price">
                    <p class="rp">Rp</p>
                    <p class="nominal">720.000,-</p>
                  </div>
              </div>
            </div>

            <div class="box-container">
              <div class="normalPrice-container">
                <div class="binusian-price">
                    <h4 class="gradient-font">Binusian</h4>
                    <div class="gradient-font">
                      <div class="price">
                        <p class="rp">Rp</p>
                        <p class="nominal">960.000,-</p>
                      </div>

                    </div>
                </div>
                <div class="nonBinusian-price">
                    <h4>Non-Binusian</h4>
                    <div class="price">
                        <p class="rp">Rp</p>
                        <p class="nominal">1.200.000,-</p>
                      </div>
                </div>
              </div>
            </div>

            <div class="box-container">
                <div class="rekeningTransfer">
                <div class="rekeningTujuan">
                   <p>via Bank Transfer to</p>
                   <p class="norek">XXX-XXX-XXXX</p>
                    <p>BCA</p>
                    <p>a.n. Andi Budi</p>
                </div>
                <div class="qrCode">
                    <img src="{{ ('img/Barcode.svg') }}" alt="barcode">
                </div>
            </div>
            </div>
          </div>
        </div>


        <div class="paymentVerification">
            <p>Waiting for verification...</p>

            <div class="box-container">
                <img src="{{ ('img/Payment Indicator (Shape).svg') }}" alt="payment-indicator">
            </div>
            <form action="{{route('createPayment', ['id'=>$teamId])}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div>
                <div class="upload-file-button">
                    <input name="payment" type="file" class="form-control file" id="payment" placeholder="Add file">
                    <label for="payment"><i class="fas fa-upload"></i>Add File</label>
                  </div>

            </div>
            <button type="submit" class="btn btn-primary">Submit Bukti</button>
            </form>
             {{-- <div class="box-container">
              <div class="payment-indicator">
                <div class="payment-proof">
                  <img src="{{ ('img/Status (Finished - Checklist).svg') }}" alt="finished">
                  <p>Upload Proof of Payment</p>
                </div>
                <div class="status-verification">
                  <img src="{{ ('img/Status (Pending - Clock).svg') }}" alt="pending">
                  <p>Verification</p>
                </div>
                <div class="payment-ready">
                  <img src="{{ ('img/Status (Pending - Dotted Circle).svg') }}" alt="pending dotted">
                  <p>You're ready to go!</p>
                </div>
              </div>
            </div> --}}
        </div>
        <div>
            <button onclick="window.location.href='{{ route('downloadCV') }}'" type="submit" class="btn btn-primary">Download Bukti</button>
        </div>



    </section>



</body>
</html>
