@section('menu')
<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">RRTrader v2.0</a>
        </div>
	
        <!-- /.navbar-header -->
@if(null!==request()->session()->get('nick'))
        <ul class="nav navbar-top-links navbar-right" style="display: inline;">

            <li class="dropdown" id="profile" >
                <a class="dropdown-toggle" data-toggle="dropdown" onhover="open_modal()" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
				
                <ul class="dropdown-menu dropdown-user">
				 <li><a><i class="fa fa-user fa-fw"></i>Logged as: {{ request()->session()->get('nick') }}</a>
                    </li>
			
                    <li><a href="/profile/{{ request()->session()->get('id') }}"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>

                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
		@else
<ul class="nav navbar-top-links navbar-right">
<li id="profile" >
                <a class="dropdown-toggle" data-toggle="dropdown" onhover="open_modal()" href="#">
                    Login/Register
                </a>
				
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="/login"><i class="fa fa-user fa-fw"></i>Login</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="/register"><i class="fa fa-sign-out fa-fw"></i> Register</a>
                    </li>
                </ul>

                <!-- /.dropdown-user -->
            </li>
</ul>
			@endif
			
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">

                    <li>
                        <a href="/"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Premium<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level" id="premium" aria-expanded="true">
                            <li>
                                <a href="/premium/month">Month</a>
                            </li>
                            <li>
                                <a href="/premium/six_months">Six months</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="/gold"><i class="fa fa-table fa-fw"></i>Gold</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i> Resources<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/resource/oil">Oil</a>
                            </li>
                            <li>
                                <a href="/resource/ore">Ore</a>
                            </li>
                            <li>
                                <a href="/resource/diamond">Diamond</a>
                            </li>
                            <li>
                                <a href="/resource/uranium">Uranium</a>
                            </li>
                            <li>
                                <a href="/resource/cash">State Cash</a>
                            </li>
                            <li>
                                <a href="/resource/gold">Gold</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="/generator"><i class="fa fa-sitemap fa-fw"></i>Random number generator</a>

                        <!-- /.nav-second-level -->
                    </li>

                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>
@endsection
