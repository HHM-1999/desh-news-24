	<!-- top-search-box -->
	<div id="searchcontainer" class="hidden">
		<div id="search" class="search_block">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<form id="cse-search-box" action="/keywordsearch" method="get">
							<div class="search_logo display-flex">
								<input type="hidden" name="cx" value="ea09f3fc43677ad37">
								<input type="hidden" name="cof" value="FORID:10">
								<input type="hidden" name="ie" value="UTF-8">
								<input name="search" class="search-bar" placeholder="অনুসন্ধান করুন" title="Search" type="search">
								<button onclick="performSearch()"><i id="searchButton" class="fa fa-search"></i></button>
								<a onclick="hideSearchBox()" class="close-search" id="closeButton" href="#"><i class="fa fa-times"></i></a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<header class="news-header">
		<!-- top-header -->
		<div class="container">
			<div class="row">
				<div class="col-lg-4 m-auto">
					<p class="d-lg-flex ">
						<span>
							রোববার ০৩ সেপ্টেম্বর ২০২৩ || ভাদ্র ১৯ ১৪৩০
						</span>
					</p>
				</div>
				<div class="col-lg-4 col-sm-12 ">
					<a class="brand-logo-top d-lg-flex d-none  justify-content-center align-items-center" title="Desh News 24" href="#">
						<img class="img-fluid" src="media/common/D-news-Logo.png" title="Desh News 24" alt="Desh News 24">
					</a>
				</div>
				<div class="col-lg-4 m-auto">
					<div class="d-lg-flex d-none justify-content-end social-media-icons">
						<a href="#" aria-label="Facebook" target="_blank">
							<div class="social-icon facebook"><i class="fa-brands fa-facebook-f"></i></div>
						</a>
						<a href="#" aria-label="Youtube" target="_blank">
							<div class="social-icon youtube"><i class="fa-brands fa-youtube"></i></div>
						</a>
						<a href="#" aria-label="Twitter" target="_blank">
							<div class="social-icon twitter"><i class="fa-brands fa-twitter"></i></div>
						</a>
						<a href="#" aria-label="Instagram" target="_blank">
							<div class="social-icon instagram"><i class="fa-brands fa-instagram"></i></div>
						</a>
						<a href="#" aria-label="Linkedin" target="_blank">
							<div class="social-icon linkedin"><i class="fa-brands fa-linkedin-in"></i></div>
						</a>
						<a href="#">
							<div class="social-icon" onclick="showSearchBox()" style="background: #F34A38"><i class="fas fa-search" style="cursor:pointer"></i>
							</div>

						</a>
					</div>
				</div>

			</div>
		</div>

		<!-- main navbar -->
		<div class="DHeaderNav stickyNav " id="sticky-navbar">
			<div class="container">
				<div class="row ">
					<div class="col-lg-12">
						<nav class="navbar navbar-default navbar-expand-lg navbar-inverse ">
							<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
								<ul class="nav navbar-nav">

									<li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-home" aria-hidden="true"></i></a></li>
									<li class="nav-item"><a class="nav-link" href="#">জাতীয়</a></li>
									<li class="nav-item"><a class="nav-link" href="#">আন্তর্জাতিক</a></li>
									<li class="nav-item"><a class="nav-link" href="#">আইন ও আদালত</a></li>
									<li class="nav-item"><a class="nav-link" href="#">রাজনীতি</a></li>
									<li class="dropdown">
										<a href="#" class="nav-link btn dropdown-toggle " role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">পার্বত্য চট্টগ্রাম<span class="caret"></span></a>
										<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
											<li class="nav-item"><a class="nav-link" href="#">বান্দরবান</a></li>
											<li class="nav-item"><a class="nav-link" href="#">রাঙ্গামাটি</a></li>
											<li class="nav-item"><a class="nav-link" href="#">খাগড়াছড়ি</a></li>
										</ul>
									</li>
									<li class="nav-item"><a class="nav-link" href="#">খেলা</a></li>
									<li class="nav-item"><a class="nav-link" href="#">বিনোদন</a></li>
									<li class="nav-item"><a class="nav-link" href="#">তথ্য প্রযুক্তি</a></li>
									<li class="nav-item"><a class="nav-link" href="#">সারাদেশ</a></li>
									<li class="nav-item"><a class="nav-link" href="#">স্বাস্থ্য</a></li>
									<li class="nav-item"><a class="nav-link" href="#">শিক্ষা</a></li>
									<li class="dropdown">
										<a href="#" class="nav-link  btn dropdown-toggle " type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ধর্ম<span class="caret"></span></a>
										<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
											<li class="nav-item"><a class="nav-link" href="#">ইসলাম</a></li>
											<li class="nav-item"><a class="nav-link" href="#">হিন্দু</a></li>
											<li class="nav-item"><a class="nav-link" href="#">বৌদ্ধ</a></li>
											<li class="nav-item"><a class="nav-link" href="#">খ্রিষ্টান</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="#" class="nav-link " id="dropdownMenuButton" data-toggle="dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bars"></i> অন্যান্য<span class="caret"></span></a>
										<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<li class="nav-item"><a class="nav-link" href="#">জেলা সংবাদ</a></li>
											<li class="nav-item"><a class="nav-link" href="#">চট্টগ্রাম সংবাদ</a></li>
											<li class="nav-item"><a class="nav-link" href="#">অর্থনীতি- ব্যবসা</a></li>
											<li class="nav-item"><a class="nav-link" href="#">আইন-বিচার</a></li>
											<li class="nav-item"><a class="nav-link" href="#">রাশিফল </a></li>
											<li class="nav-item"><a class="nav-link" href="#">লাইফস্টাইল</a></li>
											<li class="nav-item"><a class="nav-link" href="#">উন্নয়ন</a></li>
											<li class="nav-item"><a class="nav-link" href="#">কৃষি</a></li>
											<li class="nav-item"><a class="nav-link" href="#">ইত্যাদি</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>
	<header class="news-header2">
		<div class="DHeaderNav  stickyNav" id="sticky-navbar">
			<div class="row">
				<div class="col-3">
					<nav class="navbar navbar-default navbar-expand-lg ">
						<button class="d-flex justify-content-between navbar-toggler navbar-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
							<div class="offcanvas-header   d-flex ">
								<a class="nav-link justify-content-start" href="#"> <span class="d-flex align-items-center Dnews-date">
										০৩ সেপ্টেম্বর ২০২৩ || রোববার
									</span></a>
								<button type="button" class="btn-close justify-content-end" data-bs-dismiss="offcanvas" aria-label="Close"></button>
							</div>
							<div class="offcanvas-body">
								<div id="navbarTogglerDemo01">
									<ul class="nav navbar-nav">

										<li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-home" aria-hidden="true"></i></a></li>
										<li class="nav-item"><a class="nav-link" href="#">জাতীয়</a></li>
										<li class="nav-item"><a class="nav-link" href="#">আন্তর্জাতিক</a></li>
										<li class="nav-item"><a class="nav-link" href="#">আইন ও আদালত</a></li>
										<li class="nav-item"><a class="nav-link" href="#">রাজনীতি</a></li>
										<li class="dropdown "><a href="#" class="nav-link dropdown-toggle " role="button" id="dropdownMenuButton" data-toggle="dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> পার্বত্য চট্টগ্রাম<span class="caret"></span></a>
											<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">


												<li class="nav-item"><a class="nav-link" href="#">বান্দরবান</a></li>
												<li class="nav-item"><a class="nav-link" href="#">রাঙ্গামাটি</a></li>
												<li class="nav-item"><a class="nav-link" href="#">খাগড়াছড়ি</a></li>
											</ul>
										</li>
										<li class="nav-item"><a class="nav-link" href="#">খেলা</a></li>
										<li class="nav-item"><a class="nav-link" href="#">বিনোদন</a></li>
										<li class="nav-item"><a class="nav-link" href="#">তথ্য প্রযুক্তি</a></li>
										<li class="nav-item"><a class="nav-link" href="#">সারাদেশ</a></li>
										<li class="nav-item"><a class="nav-link" href="#">স্বাস্থ্য</a></li>
										<li class="nav-item"><a class="nav-link" href="#">শিক্ষা</a></li>
										<li class="dropdown "><a href="#" class="nav-link dropdown-toggle " role="button" id="dropdownMenuButton" data-toggle="dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ধর্ম<span class="caret"></span></a>
											<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">

												<li class="nav-item"><a class="nav-link" href="#">ইসলাম</a></li>
												<li class="nav-item"><a class="nav-link" href="#">হিন্দু</a></li>
												<li class="nav-item"><a class="nav-link" href="#">বৌদ্ধ</a></li>
												<li class="nav-item"><a class="nav-link" href="#">খ্রিষ্টান</a></li>
											</ul>
										</li>
										<li class="dropdown"><a href="#" class="nav-link " id="dropdownMenuButton" data-toggle="dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bars"></i> অন্যান্য<span class="caret"></span></a>
											<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												<li class="nav-item"><a class="nav-link" href="#">জেলা সংবাদ</a></li>
												<li class="nav-item"><a class="nav-link" href="#">চট্টগ্রাম সংবাদ</a></li>
												<li class="nav-item"><a class="nav-link" href="#">অর্থনীতি- ব্যবসা</a></li>
												<li class="nav-item"><a class="nav-link" href="#">আইন-বিচার</a></li>
												<li class="nav-item"><a class="nav-link" href="#">রাশিফল </a></li>
												<li class="nav-item"><a class="nav-link" href="#">লাইফস্টাইল</a></li>
												<li class="nav-item"><a class="nav-link" href="#">উন্নয়ন</a></li>
												<li class="nav-item"><a class="nav-link" href="#">কৃষি</a></li>
												<li class="nav-item"><a class="nav-link" href="#">ইত্যাদি</a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</nav>
				</div>
				<div class="col-6">
					<a class="brand-logo-top  " title="Desh News 24" href="#">
						<img class="img-fluid" src="media/common/D-news-Logo.png" alt="Desh News 24">
					</a>
				</div>
				<div class=" col-3">
					<a class="searchIcon">
						<div onclick="showSearchBox()"><i class="fas fa-search"></i>
						</div>
					</a>
				</div>
			</div>
		</div>
	</header>