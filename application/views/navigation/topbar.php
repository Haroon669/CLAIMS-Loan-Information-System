<!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top">
			<div class="container-fluid">
			<div class="navbar-wrapper">
				<?
				$site = $_SERVER['PATH_INFO'];
				if( $site == '/dashboard'){?>
				<a class="navbar-brand font-weight-bold" href="<? echo base_url();?>dashboard">Dashboard</a>
				<?}elseif(strpos($site, 'borrowers/')) {?>
				<a class="navbar-brand font-weight-bold" href="<? echo base_url();?>borrowers/create-borrowers">Manage Borrowers</a>
				<?}elseif(strpos($site, 'borrowers/profile')){?>
				<a class="navbar-brand font-weight-bold" href="<? echo base_url();?>borrowers/create-borrowers">Client Profile</a>
				<?}elseif(strpos($site,'loan/')){?>
				<a class="navbar-brand font-weight-bold" href="<? echo base_url();?>loan/create-loan">Manage Loan</a>
				<?}elseif(strpos($site,'payments/')){?>
				<a class="navbar-brand font-weight-bold" href="<? echo base_url();?>payments/loan_details">Manage Payments</a>
				<?}elseif(strpos($site,'reports')){?>
				<a class="navbar-brand font-weight-bold" href="<? echo base_url();?>reprots">Manage Reports</a>
				<?}elseif(strpos($site,'staff')){?>
				<a class="navbar-brand font-weight-bold" href="<? echo base_url();?>staff">Manage Staff</a>
				<?}elseif(strpos($site,'my-profile')){?>
				<a class="navbar-brand font-weight-bold" href="<? echo base_url();?>staff">My Profile</a>
				<?}elseif(strpos($site, 'back-up')){?>
				<a class="navbar-brand font-weight-bold" href="<? echo base_url();?>staff">Manage Files</a>
				<?}else{
					
				}?>
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
				<span class="sr-only">Toggle navigation</span>
				<span class="navbar-toggler-icon icon-bar"></span>
				<span class="navbar-toggler-icon icon-bar"></span>
				<span class="navbar-toggler-icon icon-bar"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end">
				<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="<? echo base_url();?>dashboard" rel="tooltip" title="Dashboard">
					<i class="material-icons">dashboard</i>
					<p class="d-lg-none d-md-block">
						Stats
					</p>
					</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link" href="#" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="material-icons">person</i>
					<p class="d-lg-none d-md-block">
						Account
					</p>
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
					<a class="dropdown-item" href="<? echo base_url().'my-profile/'.$this->session->userdata('username');?>">Profile</a>
					<a class="dropdown-item" href="#">Change Password</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="<? echo base_url();?>logout">Log out</a>
					</div>
				</li>
				</ul>
			</div>
			</div>
		</nav>
		<!-- End Navbar -->