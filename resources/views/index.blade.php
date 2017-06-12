@extends('layouts.master')
@section('content')
	<header class="header">
<div class="row" style="background-image: url('images/item-1.jpg');background-size: cover;background-repeat: no-repeat;">
	<canvas id="constellationel"></canvas>
	<div class="col-md-12" style="z-index: 200">
		<div style=" position: absolute;height: 100%;width: 100%;opacity: 0.4;"></div>
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button id="menu" type="button" class="navbar-toggle" data-toggle="collapse"><span class="glyphicon glyphicon-align-justify"></span></button>

					<button type="button" id="hide-toggle" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" style="font-family: 'Monoton', cursive;font-size: 30px;" href="#">ITFood</a>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<!-- <li><a href="#">Link</a></li> -->
					</ul>
					<ul class="nav navbar-nav navbar-right">
						{{-- Begin thông tin user --}}
						@if(Auth::check())
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li>
								<a href="#"><i class="fa fa-user" aria-hidden="true"></i> <span style="padding-left: 1.5em">{{Auth::user()->name}}</span></a>
								</li>
								<li><a href="logout"><i class="fa fa-sign-out" aria-hidden="true"></i><span style="padding-left: 1.5em">Logout</span></a></li>
							</ul>
						</li>
						<li style="margin-top: 10px;"><button class="btn btn-success"><a href="add_post" style="color:white">Đăng Bài</a></button></li>
						@else
						{{-- End thông tin user --}}
						<li><a href="register_form">Đăng Ký</a></li>
						<li><a href="login_form">Đăng Nhập</a></li>
						<li style="margin-top: 10px;"><button class="btn btn-success"><a href="add_post" style="color:white">Đăng Bài</a></button></li>
						@endif
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>

		<div class="row">
			<div class="col-md-12">
				<center><h2 style="color: #fff;font-size: 24px;font-weight: 600;">ẨM THỰC XUNG QUANH BẠN</h2></center>
			</div>
		</div>

		<form action="{{route('getPosition')}}" method="get">
			<div class="hide-search row">
			<div class="search col-md-6 col-md-offset-3">
				<div class="search-icon col-sm-6 col-xs-12">
					<div class="input-group">
				      <input type="text" class="form-control" value="{{old('keyword')}}" name="keyword" placeholder="Tìm Kiếm..." id="keyword">
				      <span class="input-group-btn">
				        <button  class="btn btn-secondary" type="submit" id="search"><span class="glyphicon glyphicon-search" ></span></button>
				      </span>
				    </div>
				</div>

				<div class="col-sm-6 col-xs-12">
					<div class="input-group">
				      <input type="text" class="form-control" value="{{old('positionName')}}" name="positionName" id="tenvitri" placeholder="Vị trí...">
				      <input type="text" id="vitri"  name="vitri">
				      <span class="input-group-btn">
				        <button class="btn btn-secondary" id="getPosition" type="button"><span class="glyphicon glyphicon-map-marker"></span></button>
				      </span>
				    </div>
				</div>
			</div>
		</div>
		</form>

		<!-- END SEACH -->

		<div class="hide-banner row">
			<div class="col-md-offset-3 col-md-6 col-md-offset-3" style="margin-top: 30px;margin-bottom: 30px;color: #fff">
				<div class="col-sm-3 col-xs-3">
					<div class="fourbanner">
						<div style="margin-top: -8px;">
							<img src="{{asset('images/1.png')}}" class="img-responsive">
						</div>
						<div>
							<p style="font-weight: bold;">Cam kết giá thấp nhất</p>
						</div>
					</div>

				</div>

				<div class="col-sm-3 col-xs-3">
					<div class="fourbanner">
						<div>
							<img src="{{asset('images/2.png')}}" class="img-responsive">
						</div>
						<div>
							<p style="font-weight: bold;">Nhiều sự lựa chọn phù hợp</p>
						</div>
					</div>
				</div>


				<div class="col-sm-3 col-xs-3">
					<div class="fourbanner">
						<div>
							<img src="{{asset('images/3.png')}}" class="img-responsive">
						</div>
						<div>
							<p style="font-weight: bold;">Sẵn sàng hỗ trợ tư vấn</p>
						</div>
					</div>
				</div>


				<div class="col-sm-3 col-xs-3">
					<div class="fourbanner">
						<div>
							<img src="{{asset('images/4.png')}}" class="img-responsive">
						</div>
						<div>
							<p style="font-weight: bold;">Bảo vệ quyền lợi khách hàng</p>
						</div>
					</div>
				</div>


			</div>
		</div>

		<!-- END PHẦN FOUR BANNER -->	
	</div>
</div>
</header>
<!-- END PHẦN HEADER -->

<!-- BẮT ĐẦU PHẦN CONTENT -->

<section class="content-container">
	<div class="row">
		<div class="col-md-12">
			<div id="menu-left" class="col-md-2 no-padding sidebar-left">
				<div class="menu-left-fix">
					<p style="margin-top: 20px;font-size: 16px;font-weight: bold;padding-left: 25px;"> Danh sách các nhà hàng </p>

					<ul class="menu-v">
						<li class="menu-v"><a class="menu-v-a href="#">Ngoại Ngữ</a></li>
						<li><a class="menu-v-a" href="#">Tin Học</a>
							<ul class="sub-menu">
								<li><a href="#">Ngoại Ngữ</a></li>
								<li><a href="#">Ngoại Ngữ</a></li>
								<li><a href="#">Ngoại Ngữ</a></li>
								<li><a href="#">Ngoại Ngữ</a></li>
							</ul>
						</li>
						<li><a class="menu-v-a" href="#">Ngoại Ngữ</a></li>
						<li><a class="menu-v-a" href="#">Ngoại Ngữ</a></li>
						<li><a class="menu-v-a" href="#">Ngoại Ngữ</a></li>
						<li><a class="menu-v-a" href="#">Ngoại Ngữ</a></li>
						<li><a class="menu-v-a" href="#">Ngoại Ngữ</a></li>
						<li><a class="menu-v-a" href="#">Ngoại Ngữ</a></li>
						<li><a class="menu-v-a" href="#">Ngoại Ngữ</a></li>
						<li><a class="menu-v-a" href="#">Ngoại Ngữ</a></li>
					</ul>
				</div>
			</div>
			<div id="menu-right" class="col-md-10 sidebar-right" >
				<div class="col-md-12 realdata">
					<div class="col-md-6 mini-padding">
						<div style="font-size:16px;padding-bottom:10px;" class="">
		                    <a data-bind="attr: {href: '/khoa-hoc-' + NormalizedStringHyphen(Name)}" class="sub-link-index sub-title" href="/khoa-hoc-php">
		                        Các Nhà Hàng <span data-bind="text: Name"></span>
		                    </a>
		                </div>
					</div>

					<div class="col-md-6 add-padding mini-padding " style="margin-bottom:10px">
		                <a data-bind="attr: {href:'#carouselIR-' + $index()}, visible: CoursesViewModel.length > 4" role="button" data-slide="next" style="margin:0 5px" class="pull-right view-all-btn btn btn-default" href="#carouselIR-0">
		                    <h5 style="margin-top:0;margin-bottom:0"><i class="fa fa-chevron-right" aria-hidden="true"></i></h5>
		                </a>
		                <a data-bind="attr: {href:'#carouselIR-' + $index()}, visible: CoursesViewModel.length > 4" role="button" data-slide="prev" style="margin:0 5px" class="pull-right view-all-btn btn btn-default" href="#carouselIR-0">
		                    <h5 style="margin-top:0;margin-bottom:0"><i class="fa fa-chevron-left" aria-hidden="true"></i></h5>
		                </a>
		                <a data-bind="visible: CoursesViewModel.length > 4, attr: {href: '/khoa-hoc-' + NormalizedStringHyphen(Name) + extendparam}" class="pull-right sub-link-index view-all-btn" href="/khoa-hoc-php"><h5 style="margin-top:0;margin-bottom:0"><i class="fa fa-plus-circle" aria-hidden="true"></i> Xem thêm</h5></a>
		            </div>

		            <div class="col-md-12 no-padding detail">
						<?php
						$web = 'https://maps.googleapis.com/maps/api/place/nearbysearch/json?location='.$vitri.'&radius=5000&keyword='.$keyword.'&key=AIzaSyD0FewE444l6H8yw3-XVMOxF_kS27xIcAg';
						$web = str_replace(' ','-',$web);
						  error_reporting(0);
						    $url = file_get_contents($web);
						    $xml = json_decode($url,true);
						    foreach ($xml['results'] as $value) {
						    	$lat = $value['geometry']['location']['lat'];
						    	$long = $value['geometry']['location']['lng'];
						    	$end = $lat.','.$long;

						      	foreach ($value['photos'] as $array) {
								    $photo = "https://maps.googleapis.com/maps/api/place/photo?maxwidth=400&photoreference=".$array['photo_reference']."&key=AIzaSyD0FewE444l6H8yw3-XVMOxF_kS27xIcAg";
								    	
								  
						        ?>
								
						        <div class="col-md-3 size-product">
				            <div class="product-item">
					              <div class="pi-img-wrapper">
						                <img src="<?php echo $photo; ?>" class="img-responsive" width="250px" height="250px" alt="Cửa Hàng Bánh Ngọt" style="overflow: hidden;">
						                <div>
						                  <a href="direct/{{$vitri}}/{{$end}}/{{$ogrigin}}/{{$value['name']}}" class="btn">Xem chi tiết</a>
						                </div>
					              </div>
					              
					              <div class="col-md-12" style="font-size: 14px;">
					              	<div style="height: 30px;margin-top: 10px;"><a class="course-title" href="shop-item.html">Bánh hiện đại</a></div>
					              	<div style="margin-top: 10px;"><i class="fa fa-graduation-cap" aria-hidden="true"></i> <a href="#"><?php echo $value['name']; ?></a></div>

					              	<div style="margin-top: 5px;margin-bottom: 30px;"><i class="fa fa-lg fa-map-marker icon-color-coffee"></i> <a href="#"><?php echo $value['vicinity']; ?></a></div>
					              </div>
					              <div class="sticker sticker-new"></div>

				            </div>
				        </div>
						        <?php
						      }
						    }
						?>
				        <!-- END PHẦN LIST ITEM -->

		            </div>

					<!-- LIST 2 -->
				</div>
<!-- LIST 2 -->
			</div>
		</div>
	</div>
</section>

<!-- XONG PHẦN CONTENT -->
@endsection