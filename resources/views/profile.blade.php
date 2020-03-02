
@extends('head')
@extends('menu')
@section('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                </br>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Profile Data
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<label for="nickname">Nickname</label>
                          <input class="form-control" id="nickname" type="text" placeholder="{{ $NickName}}" disabled="">
						  </br>
						  <div class="form-group">
                                                <label for="id_rr">Profile ID</label>
                                                <input class="form-control" id="id_rr" type="text" placeholder="{{ $id}}" disabled="">
                                            </div>
										
						  <label for="tg">Telegram handle</label>
						  <div class="form-group input-group">
							
                                            <span class="input-group-addon">@</span>
                                            <input type="text" class="form-control" id="tg" placeholder="{{ $TG}}" disabled="">
                                        </div>
										@if($Rank==1)
										<strong>Profile Status: </strong> <p style="color: green;">Verified</p>
										</br>
										@endif
										@if($Rank==0)
										<strong>Profile Status: </strong> <p style="color: red;">Not Verified</p>
										</br>
										@endif
										@if($Rank==2)
										<strong>Profile Status: </strong> <p style="color: rgb(255, 204, 0);">Mod</p>
										</br>
										@endif
										@if($Rank==3)
										<strong>Profile Status: </strong> <p style="color: purple;">Founder</p>
										</br>
										@endif
										@if($Rank==4)
										<strong>Profile Status: </strong> <p style="color: blue;">Admin</p>
										</br>
										@endif
										@if($Rank==5)
										<strong>Profile Status: </strong> <p style="color: rgb(153, 0, 51);">Banned</p>
										</br>
										@endif
										@isset($me)
										<p>
										<button type="button" class="btn btn-primary">Change Password</button>
										<button type="button" class="btn btn-primary">Change nickname</button>
										</p>
										@endisset
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
				@isset($me)
				@if($Rank!==0)
				@if($Rank!==5)
                <div class="col-lg-6">
			@isset($return)
			<div class="alert alert-success">
                               Offers successfully saved
                            </div>
							@endisset
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Offers
                        </div>
                        <!-- /.panel-heading -->
                     <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab" aria-expanded="true">Premium</a>
                                </li>
                              
                                <li><a href="#messages" data-toggle="tab">Gold</a>
                                </li>
                                <li><a href="#settings" data-toggle="tab">Resources</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="home">
								
                                   <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
								<form method="post" action="/edit/premium">
								  {!! csrf_field() !!}
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapsemonth" aria-expanded="false" class="collapsed">For one month</a>
                                        </h4>
                                    </div>
                                    <div id="collapsemonth" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
										<p>Price [in kkk]</p>
										<input class="form-control" name="month" id="id_rr" type="number" placeholder="700">
										<br>
                                        
										</div>
                                    </div>
									
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapsesix" class="collapsed" aria-expanded="false">For six months</a>
                                        </h4>
                                    </div>
                                    <div id="collapsesix" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
										<p>Price [in kkk]</p>
										<input class="form-control" name="six_months" id="id_rr" type="number" placeholder="700">
										<br>
                                                                           
										</div>
                                    </div>
                                </div>
								<br>
                                     <button type="submit" class="btn btn-success">Save Changes</button>  
									 </form>
                            <p>If you set price to 0 your offer will be removed</p>      
                            </div>
							</form>
                                </div>
                                <div class="tab-pane fade" id="profile">
                                 
                                </div>
								
                                <div class="tab-pane fade" id="messages">
                                   <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
								<form method="post" action="/edit/gold">
								  {!! csrf_field() !!}
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" class="collapsed">Description</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
<textarea class="form-control" rows="4" cols="50"></textarea>
                                        
										</div>
                                    </div>
									
                                </div>
                             
                              
                            </div>
							<p>
										<button type="submit" class="btn btn-success">Update Offer</button>
										</form>
										<br>
										If your description box is empty offer is hidden
										</p>
                                </div>
								
                                <div class="tab-pane fade" id="settings">
                                  <div class="panel-group" id="accordion">
								  <form method="post" action="/edit/resources">
								  {!! csrf_field() !!}
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseoil" aria-expanded="false" class="collapsed">Oil</a>
                                        </h4>
                                    </div>
                                    <div id="collapseoil" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
											Price:
                                           <input class="form-control" type="number" name="oil"><br>
										   Amount:
										   <input class="form-control" type="number" name="oil_Amount:"><br>
										</div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseore" class="collapsed" aria-expanded="false">Ore</a>
                                        </h4>
                                    </div>
                                    <div id="collapseore" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
											Price:
                                            <input class="form-control" type="number" name="ore"><br>
											Amount:
										   <input class="form-control" type="number" name="ore_number"><br>
										</div>
                                    </div>
                                </div>
                               <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapsediamonds" class="collapsed" aria-expanded="false">Diamonds</a>
                                        </h4>
                                    </div>
                                    <div id="collapsediamonds" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
											Price:
                                            <input class="form-control" type="number" name="diamond"><br>
											Amount:
										   <input class="form-control" type="number" name="diamond_number"><br>
										</div>
                                    </div>
                                </div>
								 <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseuranium" class="collapsed" aria-expanded="false">Uranium</a>
                                        </h4>
                                    </div>
                                    <div id="collapseuranium" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
											Price:
                                            <input class="form-control" type="number" name="uranium"><br>
											Amount:
										   <input class="form-control" type="number" name="uranium_number"><br>
										</div>
                                    </div>
                                </div>
								 <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapsecash" class="collapsed" aria-expanded="false">State Cash</a>
                                        </h4>
                                    </div>
                                    <div id="collapsecash" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
											Price:
											<input class="form-control" type="number" name="gold"><br>
											Amount:
										   <input class="form-control" type="number" name="gold_Amount:"><br>
										</div>
                                    </div>
                                </div>
								 <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapsegold" class="collapsed" aria-expanded="false">State Gold</a>
                                        </h4>
                                    </div>
                                    <div id="collapsegold" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                            Price:
											<input class="form-control" type="number" name="cash"><br>
											Amount:
										   <input class="form-control" type="number" name="cash_Amount:"><br>
										</div>
                                    </div>
                                </div>
								
                            </div>
							<button type="submit" class="btn btn-success">Save Changes</button>
							</form>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
				@endif
				@endif
				@endisset
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->

            <!-- /.row -->

            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->




@endsection('content')
