<script>
function goBack() {
window.history.back();
}
</script>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" >


    <title>SMP CENDEKIA BAZNAS</title>
  </head>
  <body>
    <div class="container">
    <div class="mt-log">
    <div class="mb-5">
    <div class="card" >
    <div class="row">
    <div class="col-sm">

        <img src="/klorofil/img/lOGIN.jpg">
    </div>
    <div class="col-sm">

    <div class="mt-5">
      <h5 class="card-title">DAFTAR</h5>
      <p class="card-text"><div class="panel panel-default">

      <div class="panel-body">
                  <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                      {{ csrf_field() }}

                      <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                          <label for="nama" class="control-label">Nama</label>


                              <input id="nama" type="text" class="form-control" name="nama" value="{{ old('nama') }}" required autofocus>

                              @if ($errors->has('nama'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('nama') }}</strong>
                                  </span>
                              @endif

                      </div>

                      <div class="form-group{{ $errors->has('nis') ? ' has-error' : '' }}">
                          <label for="nis" class="control-label">NIS</label>


                              <input id="nis" type="text" class="form-control" name="nis" value="{{ old('nis') }}" required autofocus>

                              @if ($errors->has('nis'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('nis') }}</strong>
                                  </span>
                              @endif

                      </div>

                      <div class="form-group{{ $errors->has('kelas') ? ' has-error' : '' }}">
                          <label for="kelas" class="control-label">Kelas</label>


                              <input id="kelas" type="text" class="form-control" name="kelas" value="{{ old('kelas') }}" required autofocus>

                              @if ($errors->has('kelas'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('kelas') }}</strong>
                                  </span>
                              @endif

                      </div>

                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label for="email" class="control-label">Alamat Surel</label>


                              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                              @if ($errors->has('email'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif

                      </div>


                          </div>
                          </div>
                      </div>
</div>
    <div class="col-sm">
    <div class="form-group">
    <div class="mt-6">

    <div class="col-md-8">
    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                          <label for="password" class="control-label">Kata Sandi</label>


                              <input id="password" type="password" class="form-control" name="password" required>

                              @if ($errors->has('password'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                              @endif
                          </div>
                          </div>
                          <div class="col-md-8">
                            <label for="password-confirm" class="control-label">Konfirmasi Kata Sandi</label>


                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>


                        <div class="mt-3">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"> Daftar </button>
                            <a class="btn btn-link" onclick="goBack()">Masuk</a>
                        </div>
                    </form>
                </div>
            </div></p>
      </div>
      </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="/js/bootstrap.min.js"></script>
  </body>
</html>
