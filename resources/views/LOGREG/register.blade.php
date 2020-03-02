 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
 <title>Register to RRTrader</title>
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
			<div class="alert alert-success">
                               You have successfully registered! <a href="/login" class="alert-link">Login</a>.
                            </div>
							@endif	
			@if($error==2)	
				<div class="alert alert-danger">
                                Provided url doesnt belong to RR website!
                            </div>
@endif			
			@if($error==5)	
				<div class="alert alert-danger">
                                There is already an user with same email/nick/rr profile!
                            </div>
@endif	
			@if($error==99)	
				<div class="alert alert-warning">
                                Your password must be at least 8 characters long!
                            </div>
@endif		
@if($error==3)
	<div class="alert alert-warning">
                                Password or email doesnt match!
                            </div>
	@endif
	@if($error==4)
	<div class="alert alert-warning">
                                Captcha fail!
                            </div>
	@endif
							@endisset
            <div class="panel panel-default">

              <div class="panel-heading">
                <h4 class="panel-title">
                  Register Form
                </h4>
              </div> <!-- / .panel-heading -->

              <div class="panel-body">
                <form method="post" action="/register" enctype="multipart/form-data">
                  <div class="form-group">
				      {{ csrf_field() }}
                    <label for="sign-in__password">Email</label>
                    <input type="text" class="form-control" name="email" id="sign-in__password" required>
					<label for="sign-in__password">Repeat Email</label>
                    <input type="text" class="form-control" name="email_2" id="sign-in__password" required>
					<label for="sign-in__password">Nick</label>
                    <input type="text" class="form-control" name="nick" id="sign-in__password" required>
					<label for="sign-in__password">RR Profile Link</label>
                    <input type="text" class="form-control" name="link" id="sign-in__password" required>					
                    <label for="sign-in__password">Password</label>
                    <input type="password" class="form-control" name="password" id="sign-in__password" required>
                    <label for="sign-in__password">Repeat Password</label>
                    <input type="password" class="form-control" name="password_2" id="sign-in__password" required>					
                  </div>
<center><div class="g-recaptcha" data-sitekey="6Ld_i5YUAAAAALF_xW99lUiXm8LRFQ11hmrn17aU"></div></center>
</br>
                                    <button type="submit" name="next" class="btn btn-block btn-primary">
                    Register
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