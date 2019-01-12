<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'CRUD operation using Laravel')</title>
 <!--   <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}"/>-->
    		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    


</head>
<body>

  			<!-- Nav Bar Section -->
	<nav class="navbar navbar-inverse  ">
		<div class="container-fluid">
			<div class="navbar-header ">
				<a class="navbar-brand" href="#">DWSS Pb.</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="/zones">Home</a></li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Data Entry
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Add GPF Advance</a></li>
						<li><a href="#">Edit GPV Advance</a></li>
						<li><a href="#">Add GI Pipe</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Approvals
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="adapproval.php">Admin Approval</a></li>
						<li><a href="tech_app.php">Tech. Approval</a></li>
						<li><a href="#">Contract Awarded</a></li>
						<li><a href="#">NOC Received</a></li>
					</ul>
				</li>
				<li><a href="#">Blank</a></li>
				<li><a href="#">Reports</a></li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Estimate
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="estimate_basic.php">Basic Report</a></li>
						<li><a href="estimate_tech.php">Technical Report</a></li>
						<li><a href="estimate_fin.php">Financial Report</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">GPF Reports
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="/gpfadvances">Advances List</a></li>
						<li><a href="/gpfadvances/create">New Advance</a></li>
						<li><a href="#">Financial Report</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Salary Reports
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="/adminapprovals">Monthly Salary</a></li>
						<li><a href="#">Technical Report</a></li>
						<li><a href="#">Financial Report</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
    {{-- <div class="container well">
        <h4 class="text-center" style="margin-top: 0px; padding-top: 0;">Prepare Estimate</h4>
    </div> --}}

    <div class="container">
        @yield('mainContent')
    </div>
    @yield('script')
    
    <div style="position: fixed; bottom: 10px; right: 10px; color: green;">
        <strong>
            &copy Punjabwater.net
        </strong>
    </div>
</body>
</html>