<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Elektron Jurnallar tizimi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('/img/favicon.png')}} " rel="icon">
  <link href="{{asset('/img/apple-touch-icon.png')}} " rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <link rel="stylesheet" href="{{asset('/vendor/bootstrap/css/bootstrap.min.css')}}" >
  <link rel="stylesheet" href="{{asset('/vendor/bootstrap-icons/bootstrap-icons.css')}}" >
  


  <link rel="stylesheet" href="{{asset('css/style.css')}}" >

  
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                
                <div class="card mb-3">
                  <div class="d-flex justify-content-center py-2">
                   
                        <img src="{{asset('img/emblem.jpg')}}" class="text-center align-items-center justify-content-center" alt="" style="height:200px">
                     
                    
                  </div><!-- End Logo -->

                <div class="card-body">

                  <div class="pt-4 pb-2">

                    <h5 class="card-title text-center py-2 pb-0 fs-4">Elektron Jurnallar tizimi</h5>
                  </div>

                  <form class="row g-3" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">{{ __('Login') }}</label>
                      <div class="input-group has-validation">
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="yourUsername"  value="{{ old('email') }}" autofocus required>
                        @error('email')
                        <div class="invalid-feedback">
                            Login kiriting!

                        </div>
                        @enderror
                      </div>
                    </div>

                    <div class="col-12">

                      <label for="yourPassword" class="form-label">{{ __('Parol') }}</label>
                      
                      <input type="password" @error('password') is-invalid @enderror name="password" required class="form-control" id="yourPassword">
                      @error('password')
                      <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                    </div>

                  
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">
                        {{ __('Kirish') }} 

                      </button>
                     
                    </div>
                  
                  </form>

                </div>
              </div>

             

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('/vendor/php-email-form/validate.js')}}"></script>

  <!--  Main JS File -->
  <script src="{{asset('/js/main.js')}}"></script>

</body>

</html>