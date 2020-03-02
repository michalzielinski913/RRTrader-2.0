 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
 <title>RRTrader- login</title>
 <link rel="stylesheet" href="https://pizza-bot.pl/panel/theme.min.css">
<script src='https://www.google.com/recaptcha/api.js'></script>


  </head>

  <body>



    <div class="container">
      <div class="row">
<!-- Admin Panel -->
        <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
          <!-- Sign In -->
          <div class="sign__container">

            <div class="row">
                <div class="col-md-12">
                                </div>
            </div>
			@isset($error)

@if($error==1)	
				<div class="alert alert-danger">
                                Wrong email or password!
                            </div>
@endif				
@if($error==2)
	<div class="alert alert-warning">
                                Captcha Error!
                            </div>
	@endif
							@endisset
            <div class="panel panel-default">

              <div class="panel-heading">
                <h4 class="panel-title">
                  Login
                </h4>
              </div> <!-- / .panel-heading -->

              <div class="panel-body">
                <form method="post" action="">
                  <div class="form-group">
				  {!! csrf_field() !!}
                    <label for="sign-in__password">Email</label>
                    <input type="text" class="form-control" name="login" id="sign-in__password" required>
                    <label for="sign-in__password">Password</label>
                    <input type="password" class="form-control" name="password" id="sign-in__password" required>
                  </div>
<center><div class="g-recaptcha" data-sitekey="6Ld_i5YUAAAAALF_xW99lUiXm8LRFQ11hmrn17aU"></div></center>
</br>
                                    <button type="submit" name="next" class="btn btn-block btn-primary">
                    Log In
                  </button>
                </form>
				              </div> <!-- / .panel-body -->



            </div> <!-- / .panel -->
<center><a href="/">Return to main page</a></center>
          </div> <!-- / .sign__conteiner -->

        </div>


      </div>
    </div>




  </body>
</html>