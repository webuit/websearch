@include('layouts.header')
<style>
	.navbar-default{
		background: #00979C;
	}
	.col-sm-10{
		padding-left: 25px;
		padding-right: 20px;
	}
	h1{
		color: #00979C;
	}
</style>
<body style="background: white">
	@include('layouts.menu')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 ">
				<div class="row main">
			<div class="panel-heading">
				<div class="panel-title text-center">
					<h1 class="title">Đăng bài</h1>
					<hr />
				</div>
			</div> 

			{{-- Xuất thông báo về đăng nhập --}}
			@if( count($errors)>0 )
			<div class="alert alert-danger">
				@foreach($errors->all() as $arr)
				<li>{{$arr}}</li>
				@endforeach
			</div>
			@endif
			@if(session('error_login'))
			<div class="alert alert-danger">
				{{session('error_login')}}
			</div>
			@endif

			<form class="form-horizontal" action="test">
				<div class="form-group">
					<label class="control-label col-sm-2" for="email">Thể loại:</label>
					<div class="col-sm-10">
						<select class="form-control" id="sel1">
							<option>Chọn thể loại</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd">Hình ảnh:</label>
					<div class="col-sm-10">          
						<input type="file" class="form-control" id="" name="">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd"> Website:</label>
					<div class="col-sm-10">          
						<input type="text" class="form-control" id="" name="pwd" placeholder="Địa chỉ website">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd"> Địa chỉ:</label>
					<div class="col-sm-10">          
						<input type="text" class="form-control" id="" name="pwd" placeholder="Địa chỉ công ty">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd"> Số điện thoại:</label>
					<div class="col-sm-10">          
						<input type="number" class="form-control" id="pwd" name="pwd" placeholder="Số điện thoại liên lạc">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd"> Mô tả:</label>
					<div class="col-sm-10">          
						<textarea name="" class=" form-control" placeholder="Mô tả cho công ty"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd"> Giờ mở cửa (7:30:SA):</label>
					<div class="col-sm-10">          
						<input type="time" class="form-control" id="" name="n_open_time">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd"> Giờ đóng cửa (5:30:CH):</label>
					<div class="col-sm-10">          
						<input type="time" class="form-control" id="" name="" >
					</div>
				</div>
				<div class="form-group">        
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-primary">Đăng</button>
					</div>
				</div>
			</form>
		</div>
			</div>
		</div>
	</div>
	@include('layouts.footer')
	<script  type="text/javascript" charset="utf-8" async defer>
		$(document).ready(function($) {
			$('#menu').css('display', 'none');
		});
	</script>
</body>
</html>