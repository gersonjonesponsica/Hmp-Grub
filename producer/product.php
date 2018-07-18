<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">

	<link rel="stylesheet" type="text/css" href="../vendor/datatables/datatables.min.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<?php 
		$parent = basename(dirname($_SERVER['PHP_SELF']));
		$h = ($parent == 'customer' || $parent == 'producer') ? '../' : '';
		include '../includes/header.php';
	?>

	<!-- Title Page -->
	<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(../images/heading-pages-02.jpg);">
		<h2 class="l-text2 t-center">
			Women
		</h2>
		<p class="m-text13 t-center">
			New Arrivals Women Collection 2018
		</p>
	</section>


	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->
						<h4 class="m-text14 p-b-7">
							Categories
						</h4>

						<ul class="p-b-54">
							<li class="p-t-4">
								<a href="#" class="s-text13 active1">
									All
								</a>
							</li>

							<li class="p-t-4">
								<a href="#" class="s-text13">
									Women
								</a>
							</li>

							<li class="p-t-4">
								<a href="#" class="s-text13">
									Men
								</a>
							</li>

							<li class="p-t-4">
								<a href="#" class="s-text13">
									Kids
								</a>
							</li>

							<li class="p-t-4">
								<a href="#" class="s-text13">
									Accesories
								</a>
							</li>
						</ul>

						<!--  -->
						<h4 class="m-text14 p-b-32">
							Filters
						</h4>

						<div class="filter-price p-t-22 p-b-50 bo3">
							<div class="m-text15 p-b-17">
								Price
							</div>

							<div class="wra-filter-bar">
								<div id="filter-bar"></div>
							</div>

							<div class="flex-sb-m flex-w p-t-16">
								<div class="w-size11">
									<!-- Button -->
									<button class="flex-c-m size4 bg7 bo-rad-15 hov1 s-text14 trans-0-4">
										Filter
									</button>
								</div>

								<div class="s-text3 p-t-10 p-b-10">
									Range: $<span id="value-lower">610</span> - $<span id="value-upper">980</span>
								</div>
							</div>
						</div>

						<div class="filter-color p-t-22 p-b-50 bo3">
							<div class="m-text15 p-b-12">
								Color
							</div>

							<ul class="flex-w">
								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter1" type="checkbox" name="color-filter1">
									<label class="color-filter color-filter1" for="color-filter1"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter2" type="checkbox" name="color-filter2">
									<label class="color-filter color-filter2" for="color-filter2"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter3" type="checkbox" name="color-filter3">
									<label class="color-filter color-filter3" for="color-filter3"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter4" type="checkbox" name="color-filter4">
									<label class="color-filter color-filter4" for="color-filter4"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter5" type="checkbox" name="color-filter5">
									<label class="color-filter color-filter5" for="color-filter5"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter6" type="checkbox" name="color-filter6">
									<label class="color-filter color-filter6" for="color-filter6"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter7" type="checkbox" name="color-filter7">
									<label class="color-filter color-filter7" for="color-filter7"></label>
								</li>
							</ul>
						</div>

						<div class="search-product pos-relative bo4 of-hidden">
							<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search Products...">

							<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
								<i class="fs-12 fa fa-search" aria-hidden="true"></i>
							</button>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					<!--  -->
					<div class="flex-sb-m flex-w p-b-35">
						<div class="flex-w">
							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								<select class="selection-2" name="sorting">
									<option>Default Sorting</option>
									<option>Popularity</option>
									<option>Price: low to high</option>
									<option>Price: high to low</option>
								</select>
							</div>

							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								<select class="selection-2" name="sorting">
									<option>Price</option>
									<option>$0.00 - $50.00</option>
									<option>$50.00 - $100.00</option>
									<option>$100.00 - $150.00</option>
									<option>$150.00 - $200.00</option>
									<option>$200.00+</option>

								</select>
							</div>
						</div>

						<span class="s-text8 p-t-5 p-b-5">
							Showing 1–12 of 16 results
						</span>
					</div>

					<!-- Product -->
					<div class="row">
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
									<img src="../images/item-02.jpg" alt="IMG-PRODUCT">

									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Add to Cart
											</button>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="product-detail" class="block2-name dis-block s-text3 p-b-5">
										Herschel supply co 25l
									</a>

									<span class="block2-price m-text6 p-r-5">
										$75.00
									</span>
								</div>
							</div>
						</div>

						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
									<img src="../images/item-03.jpg" alt="IMG-PRODUCT">

									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Add to Cart
											</button>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="product-detail" class="block2-name dis-block s-text3 p-b-5">
										Denim jacket blue
									</a>

									<span class="block2-price m-text6 p-r-5">
										$92.50
									</span>
								</div>
							</div>
						</div>

						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
									<img src="../images/item-05.jpg" alt="IMG-PRODUCT">

									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Add to Cart
											</button>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="product-detail" class="block2-name dis-block s-text3 p-b-5">
										Coach slim easton black
									</a>

									<span class="block2-price m-text6 p-r-5">
										$165.90
									</span>
								</div>
							</div>
						</div>

						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
									<img src="../images/item-07.jpg" alt="IMG-PRODUCT">

									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Add to Cart
											</button>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="product-detail" class="block2-name dis-block s-text3 p-b-5">
										Frayed denim shorts
									</a>

									<span class="block2-oldprice m-text7 p-r-5">
										$29.50
									</span>

									<span class="block2-newprice m-text8 p-r-5">
										$15.90
									</span>
								</div>
							</div>
						</div>

						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
									<img src="../images/item-01.jpg" alt="IMG-PRODUCT">

									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Add to Cart
											</button>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="product-detail" class="block2-name dis-block s-text3 p-b-5">
										Herschel supply co 25l
									</a>

									<span class="block2-price m-text6 p-r-5">
										$75.00
									</span>
								</div>
							</div>
						</div>

						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
									<img src="../images/item-14.jpg" alt="IMG-PRODUCT">

									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Add to Cart
											</button>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="product-detail" class="block2-name dis-block s-text3 p-b-5">
										Denim jacket blue
									</a>

									<span class="block2-price m-text6 p-r-5">
										$92.50
									</span>
								</div>
							</div>
						</div>

						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
									<img src="../images/item-06.jpg" alt="IMG-PRODUCT">

									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Add to Cart
											</button>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="product-detail" class="block2-name dis-block s-text3 p-b-5">
										Herschel supply co 25l
									</a>

									<span class="block2-price m-text6 p-r-5">
										$75.00
									</span>
								</div>
							</div>
						</div>

						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
									<img src="../images/item-08.jpg" alt="IMG-PRODUCT">

									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Add to Cart
											</button>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="product-detail" class="block2-name dis-block s-text3 p-b-5">
										Denim jacket blue
									</a>

									<span class="block2-price m-text6 p-r-5">
										$92.50
									</span>
								</div>
							</div>
						</div>

						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
									<img src="../images/item-10.jpg" alt="IMG-PRODUCT">

									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Add to Cart
											</button>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="product-detail" class="block2-name dis-block s-text3 p-b-5">
										Coach slim easton black
									</a>

									<span class="block2-price m-text6 p-r-5">
										$165.90
									</span>
								</div>
							</div>
						</div>

						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
									<img src="../images/item-11.jpg" alt="IMG-PRODUCT">

									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Add to Cart
											</button>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="product-detail" class="block2-name dis-block s-text3 p-b-5">
										Frayed denim shorts
									</a>

									<span class="block2-oldprice m-text7 p-r-5">
										$29.50
									</span>

									<span class="block2-newprice m-text8 p-r-5">
										$15.90
									</span>
								</div>
							</div>
						</div>

						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
									<img src="../images/item-12.jpg" alt="IMG-PRODUCT">

									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Add to Cart
											</button>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="product-detail" class="block2-name dis-block s-text3 p-b-5">
										Herschel supply co 25l
									</a>

									<span class="block2-price m-text6 p-r-5">
										$75.00
									</span>
								</div>
							</div>
						</div>

						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
									<img src="../images/item-15.jpg" alt="IMG-PRODUCT">

									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Add to Cart
											</button>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="product-detail" class="block2-name dis-block s-text3 p-b-5">
										Denim jacket blue
									</a>

									<span class="block2-price m-text6 p-r-5">
										$92.50
									</span>
								</div>
							</div>
						</div>
					</div>

					<!-- Pagination -->
					<div class="pagination flex-m flex-w p-t-26">
						<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
						<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<table id="example" class="table table-striped table-bordered" style="width:100%">
		        <thead>
		            <tr>
		                <th>Name</th>
		                <th>Position</th>
		                <th>Office</th>
		                <th>Age</th>
		                <th>Start date</th>
		                <th>Salary</th>
		            </tr>
		        </thead>
		        <tbody>
		            <tr>
		                <td>Tiger Nixon</td>
		                <td>System Architect</td>
		                <td>Edinburgh</td>
		                <td>61</td>
		                <td>2011/04/25</td>
		                <td>$320,800</td>
		            </tr>
		            <tr>
		                <td>Garrett Winters</td>
		                <td>Accountant</td>
		                <td>Tokyo</td>
		                <td>63</td>
		                <td>2011/07/25</td>
		                <td>$170,750</td>
		            </tr>
		            <tr>
		                <td>Ashton Cox</td>
		                <td>Junior Technical Author</td>
		                <td>San Francisco</td>
		                <td>66</td>
		                <td>2009/01/12</td>
		                <td>$86,000</td>
		            </tr>
		            <tr>
		                <td>Cedric Kelly</td>
		                <td>Senior Javascript Developer</td>
		                <td>Edinburgh</td>
		                <td>22</td>
		                <td>2012/03/29</td>
		                <td>$433,060</td>
		            </tr>
		            <tr>
		                <td>Airi Satou</td>
		                <td>Accountant</td>
		                <td>Tokyo</td>
		                <td>33</td>
		                <td>2008/11/28</td>
		                <td>$162,700</td>
		            </tr>
		            <tr>
		                <td>Brielle Williamson</td>
		                <td>Integration Specialist</td>
		                <td>New York</td>
		                <td>61</td>
		                <td>2012/12/02</td>
		                <td>$372,000</td>
		            </tr>
		            <tr>
		                <td>Herrod Chandler</td>
		                <td>Sales Assistant</td>
		                <td>San Francisco</td>
		                <td>59</td>
		                <td>2012/08/06</td>
		                <td>$137,500</td>
		            </tr>
		            <tr>
		                <td>Rhona Davidson</td>
		                <td>Integration Specialist</td>
		                <td>Tokyo</td>
		                <td>55</td>
		                <td>2010/10/14</td>
		                <td>$327,900</td>
		            </tr>
		            <tr>
		                <td>Colleen Hurst</td>
		                <td>Javascript Developer</td>
		                <td>San Francisco</td>
		                <td>39</td>
		                <td>2009/09/15</td>
		                <td>$205,500</td>
		            </tr>
		            <tr>
		                <td>Sonya Frost</td>
		                <td>Software Engineer</td>
		                <td>Edinburgh</td>
		                <td>23</td>
		                <td>2008/12/13</td>
		                <td>$103,600</td>
		            </tr>
		            <tr>
		                <td>Jena Gaines</td>
		                <td>Office Manager</td>
		                <td>London</td>
		                <td>30</td>
		                <td>2008/12/19</td>
		                <td>$90,560</td>
		            </tr>
		            <tr>
		                <td>Quinn Flynn</td>
		                <td>Support Lead</td>
		                <td>Edinburgh</td>
		                <td>22</td>
		                <td>2013/03/03</td>
		                <td>$342,000</td>
		            </tr>
		            <tr>
		                <td>Charde Marshall</td>
		                <td>Regional Director</td>
		                <td>San Francisco</td>
		                <td>36</td>
		                <td>2008/10/16</td>
		                <td>$470,600</td>
		            </tr>
		            <tr>
		                <td>Haley Kennedy</td>
		                <td>Senior Marketing Designer</td>
		                <td>London</td>
		                <td>43</td>
		                <td>2012/12/18</td>
		                <td>$313,500</td>
		            </tr>
		            <tr>
		                <td>Tatyana Fitzpatrick</td>
		                <td>Regional Director</td>
		                <td>London</td>
		                <td>19</td>
		                <td>2010/03/17</td>
		                <td>$385,750</td>
		            </tr>
		            <tr>
		                <td>Michael Silva</td>
		                <td>Marketing Designer</td>
		                <td>London</td>
		                <td>66</td>
		                <td>2012/11/27</td>
		                <td>$198,500</td>
		            </tr>
		            <tr>
		                <td>Paul Byrd</td>
		                <td>Chief Financial Officer (CFO)</td>
		                <td>New York</td>
		                <td>64</td>
		                <td>2010/06/09</td>
		                <td>$725,000</td>
		            </tr>
		            <tr>
		                <td>Gloria Little</td>
		                <td>Systems Administrator</td>
		                <td>New York</td>
		                <td>59</td>
		                <td>2009/04/10</td>
		                <td>$237,500</td>
		            </tr>
		            <tr>
		                <td>Bradley Greer</td>
		                <td>Software Engineer</td>
		                <td>London</td>
		                <td>41</td>
		                <td>2012/10/13</td>
		                <td>$132,000</td>
		            </tr>
		            <tr>
		                <td>Dai Rios</td>
		                <td>Personnel Lead</td>
		                <td>Edinburgh</td>
		                <td>35</td>
		                <td>2012/09/26</td>
		                <td>$217,500</td>
		            </tr>
		            <tr>
		                <td>Jenette Caldwell</td>
		                <td>Development Lead</td>
		                <td>New York</td>
		                <td>30</td>
		                <td>2011/09/03</td>
		                <td>$345,000</td>
		            </tr>
		            <tr>
		                <td>Yuri Berry</td>
		                <td>Chief Marketing Officer (CMO)</td>
		                <td>New York</td>
		                <td>40</td>
		                <td>2009/06/25</td>
		                <td>$675,000</td>
		            </tr>
		            <tr>
		                <td>Caesar Vance</td>
		                <td>Pre-Sales Support</td>
		                <td>New York</td>
		                <td>21</td>
		                <td>2011/12/12</td>
		                <td>$106,450</td>
		            </tr>
		            <tr>
		                <td>Doris Wilder</td>
		                <td>Sales Assistant</td>
		                <td>Sidney</td>
		                <td>23</td>
		                <td>2010/09/20</td>
		                <td>$85,600</td>
		            </tr>
		            <tr>
		                <td>Angelica Ramos</td>
		                <td>Chief Executive Officer (CEO)</td>
		                <td>London</td>
		                <td>47</td>
		                <td>2009/10/09</td>
		                <td>$1,200,000</td>
		            </tr>
		            <tr>
		                <td>Gavin Joyce</td>
		                <td>Developer</td>
		                <td>Edinburgh</td>
		                <td>42</td>
		                <td>2010/12/22</td>
		                <td>$92,575</td>
		            </tr>
		            <tr>
		                <td>Jennifer Chang</td>
		                <td>Regional Director</td>
		                <td>Singapore</td>
		                <td>28</td>
		                <td>2010/11/14</td>
		                <td>$357,650</td>
		            </tr>
		            <tr>
		                <td>Brenden Wagner</td>
		                <td>Software Engineer</td>
		                <td>San Francisco</td>
		                <td>28</td>
		                <td>2011/06/07</td>
		                <td>$206,850</td>
		            </tr>
		            <tr>
		                <td>Fiona Green</td>
		                <td>Chief Operating Officer (COO)</td>
		                <td>San Francisco</td>
		                <td>48</td>
		                <td>2010/03/11</td>
		                <td>$850,000</td>
		            </tr>
		            <tr>
		                <td>Shou Itou</td>
		                <td>Regional Marketing</td>
		                <td>Tokyo</td>
		                <td>20</td>
		                <td>2011/08/14</td>
		                <td>$163,000</td>
		            </tr>
		            <tr>
		                <td>Michelle House</td>
		                <td>Integration Specialist</td>
		                <td>Sidney</td>
		                <td>37</td>
		                <td>2011/06/02</td>
		                <td>$95,400</td>
		            </tr>
		            <tr>
		                <td>Suki Burks</td>
		                <td>Developer</td>
		                <td>London</td>
		                <td>53</td>
		                <td>2009/10/22</td>
		                <td>$114,500</td>
		            </tr>
		            <tr>
		                <td>Prescott Bartlett</td>
		                <td>Technical Author</td>
		                <td>London</td>
		                <td>27</td>
		                <td>2011/05/07</td>
		                <td>$145,000</td>
		            </tr>
		            <tr>
		                <td>Gavin Cortez</td>
		                <td>Team Leader</td>
		                <td>San Francisco</td>
		                <td>22</td>
		                <td>2008/10/26</td>
		                <td>$235,500</td>
		            </tr>
		            <tr>
		                <td>Martena Mccray</td>
		                <td>Post-Sales support</td>
		                <td>Edinburgh</td>
		                <td>46</td>
		                <td>2011/03/09</td>
		                <td>$324,050</td>
		            </tr>
		            <tr>
		                <td>Unity Butler</td>
		                <td>Marketing Designer</td>
		                <td>San Francisco</td>
		                <td>47</td>
		                <td>2009/12/09</td>
		                <td>$85,675</td>
		            </tr>
		            <tr>
		                <td>Howard Hatfield</td>
		                <td>Office Manager</td>
		                <td>San Francisco</td>
		                <td>51</td>
		                <td>2008/12/16</td>
		                <td>$164,500</td>
		            </tr>
		            <tr>
		                <td>Hope Fuentes</td>
		                <td>Secretary</td>
		                <td>San Francisco</td>
		                <td>41</td>
		                <td>2010/02/12</td>
		                <td>$109,850</td>
		            </tr>
		            <tr>
		                <td>Vivian Harrell</td>
		                <td>Financial Controller</td>
		                <td>San Francisco</td>
		                <td>62</td>
		                <td>2009/02/14</td>
		                <td>$452,500</td>
		            </tr>
		            <tr>
		                <td>Timothy Mooney</td>
		                <td>Office Manager</td>
		                <td>London</td>
		                <td>37</td>
		                <td>2008/12/11</td>
		                <td>$136,200</td>
		            </tr>
		            <tr>
		                <td>Jackson Bradshaw</td>
		                <td>Director</td>
		                <td>New York</td>
		                <td>65</td>
		                <td>2008/09/26</td>
		                <td>$645,750</td>
		            </tr>
		            <tr>
		                <td>Olivia Liang</td>
		                <td>Support Engineer</td>
		                <td>Singapore</td>
		                <td>64</td>
		                <td>2011/02/03</td>
		                <td>$234,500</td>
		            </tr>
		            <tr>
		                <td>Bruno Nash</td>
		                <td>Software Engineer</td>
		                <td>London</td>
		                <td>38</td>
		                <td>2011/05/03</td>
		                <td>$163,500</td>
		            </tr>
		            <tr>
		                <td>Sakura Yamamoto</td>
		                <td>Support Engineer</td>
		                <td>Tokyo</td>
		                <td>37</td>
		                <td>2009/08/19</td>
		                <td>$139,575</td>
		            </tr>
		            <tr>
		                <td>Thor Walton</td>
		                <td>Developer</td>
		                <td>New York</td>
		                <td>61</td>
		                <td>2013/08/11</td>
		                <td>$98,540</td>
		            </tr>
		            <tr>
		                <td>Finn Camacho</td>
		                <td>Support Engineer</td>
		                <td>San Francisco</td>
		                <td>47</td>
		                <td>2009/07/07</td>
		                <td>$87,500</td>
		            </tr>
		            <tr>
		                <td>Serge Baldwin</td>
		                <td>Data Coordinator</td>
		                <td>Singapore</td>
		                <td>64</td>
		                <td>2012/04/09</td>
		                <td>$138,575</td>
		            </tr>
		            <tr>
		                <td>Zenaida Frank</td>
		                <td>Software Engineer</td>
		                <td>New York</td>
		                <td>63</td>
		                <td>2010/01/04</td>
		                <td>$125,250</td>
		            </tr>
		            <tr>
		                <td>Zorita Serrano</td>
		                <td>Software Engineer</td>
		                <td>San Francisco</td>
		                <td>56</td>
		                <td>2012/06/01</td>
		                <td>$115,000</td>
		            </tr>
		            <tr>
		                <td>Jennifer Acosta</td>
		                <td>Junior Javascript Developer</td>
		                <td>Edinburgh</td>
		                <td>43</td>
		                <td>2013/02/01</td>
		                <td>$75,650</td>
		            </tr>
		            <tr>
		                <td>Cara Stevens</td>
		                <td>Sales Assistant</td>
		                <td>New York</td>
		                <td>46</td>
		                <td>2011/12/06</td>
		                <td>$145,600</td>
		            </tr>
		            <tr>
		                <td>Hermione Butler</td>
		                <td>Regional Director</td>
		                <td>London</td>
		                <td>47</td>
		                <td>2011/03/21</td>
		                <td>$356,250</td>
		            </tr>
		            <tr>
		                <td>Lael Greer</td>
		                <td>Systems Administrator</td>
		                <td>London</td>
		                <td>21</td>
		                <td>2009/02/27</td>
		                <td>$103,500</td>
		            </tr>
		            <tr>
		                <td>Jonas Alexander</td>
		                <td>Developer</td>
		                <td>San Francisco</td>
		                <td>30</td>
		                <td>2010/07/14</td>
		                <td>$86,500</td>
		            </tr>
		            <tr>
		                <td>Shad Decker</td>
		                <td>Regional Director</td>
		                <td>Edinburgh</td>
		                <td>51</td>
		                <td>2008/11/13</td>
		                <td>$183,000</td>
		            </tr>
		            <tr>
		                <td>Michael Bruce</td>
		                <td>Javascript Developer</td>
		                <td>Singapore</td>
		                <td>29</td>
		                <td>2011/06/27</td>
		                <td>$183,000</td>
		            </tr>
		            <tr>
		                <td>Donna Snider</td>
		                <td>Customer Support</td>
		                <td>New York</td>
		                <td>27</td>
		                <td>2011/01/25</td>
		                <td>$112,000</td>
		            </tr>
		        </tbody>
		        <tfoot>
		            <tr>
		                <th>Name</th>
		                <th>Position</th>
		                <th>Office</th>
		                <th>Age</th>
		                <th>Start date</th>
		                <th>Salary</th>
		            </tr>
		        </tfoot>
		    </table>
		</div>
	</section>


	<!-- Footer -->
	<?php 
		$parent = basename(dirname($_SERVER['PHP_SELF']));
		$d = ($parent == 'customer' || $parent == 'producer') ? '../' : '';
		include '../includes/footer.php';
	?>


	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="../vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="../js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name')();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name')();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/noui/nouislider.min.js"></script>
	<script type="text/javascript">
		/*[ No ui ]
	    ===========================================================*/
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 50, 200 ],
	        connect: true,
	        range: {
	            'min': 50,
	            'max': 200
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]) ;
	    });

	    $(document).ready(function() {
		    $('#example').DataTable({
		    	select: true,
		    	keys: true,
		    	dom: 'Bfrtip',
			    buttons: [
			        'copy', 'excel', 'pdf'
			    ]
		    });
		} );
	</script>
<!--===============================================================================================-->
	<script src="../js/main.js"></script>

	<script type="text/javascript" src="../vendor/datatables/datatables.min.js"></script>

</body>
</html>
