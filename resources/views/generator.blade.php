@extends('head')
@extends('menu')
@section('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Random number generator</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
<script src='https://www.google.com/recaptcha/api.js'></script>
            <!-- /.row -->
            <div class="row">
			@isset($me)
                <div class="col-lg-6">
                 <div class="panel panel-default">
                        <div class="panel-heading">
                            Generate a number
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						@isset($error)
@if($error==0)	
				<div class="alert alert-success">
                            Succeded, sometimes you may need to <a href="/generator">refresh</a> page to see your results
                            </div>
@endif

@if($error==1)	
				<div class="alert alert-danger">
                            You need to choose bigger range to generate unique values
                            </div>
@endif	
@if($error==2)	
				<div class="alert alert-danger">
                            You can generate up to 10 numbers in one generate or you choosed below zero numbers
                            </div>
@endif	
@if($error==3)	
				<div class="alert alert-danger">
                              Maximal value must be bigger than minimal one
                            </div>
@endif	
@if($error==4)	
				<div class="alert alert-danger">
                           Min/Max/Amount number wasnt integer
                            </div>
@endif	
@if($error==5)	
				<div class="alert alert-danger">
                            CAPTCHA error
                            </div>
@endif	
				
@endisset
						                <form method="post" action="/generator">
				  {!! csrf_field() !!}
		<p>Minimal value:</p>	<input style="max-width: 50%;" name="min" type="number" class="form-control"  required>
		</br>
		<p>Maximal value:</p>	<input style="max-width: 50%;" name="max"  type="number" class="form-control"required>
		</br>
	<p>How many numbers do you want to generate?</p>	<input name="amount" style="max-width: 50%;" type="number" class="form-control"  value=1 placeholder="1" required>
                       </br> <label>


                                                    <input name="unique" type="checkbox" > Generate unique values
                                                </label>
												<script>
							
						</script>
						</br>	</br>
						<div class="g-recaptcha" data-sitekey="6Ld_i5YUAAAAALF_xW99lUiXm8LRFQ11hmrn17aU"></div>
						<button type="submit" class="btn btn-success">Submit</button>
					</form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
@endisset                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Last 20 numbers
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Date</th>
                                            <th>Value</th>
                                            <th>Range</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									 @foreach($last as $last)
                                        <tr>
                                            <td>{{ $last['NickName'] }}</td>
                                           <td>{{ $last['Date'] }}</td>
                                            <td>{{ $last['Value'] }}</td>
                                            <td>{{ $last['NumericalInterval'] }}</td>
                                        </tr> 
									@endforeach										
                                    </tbody>
                                </table>
                            </div>
                         <div class="col-lg-6">
			   </div>
			   <div class="col-lg-6">
<form method="post" action="/generator/search">
	  {!! csrf_field() !!}
			   <input type="text" name="id" class="form-control" placeholder="Paste RR profile link to check total random numbers history of specific user:">
			   </br><button type="submit" class="btn btn-primary btn-xs">Check</button>
			   </form>
			   </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
			   <div class="row">
			   
			   </div>
            <!-- /.row -->

            <!-- /.row -->

            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->


    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

@endsection('content')
