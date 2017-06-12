@include('layouts.header')

<body style="background: white">
	<div class="container">
		<div class="row main">
			<div class="panel-heading">
				<div class="panel-title text-center">
				<h1 class="title">Đăng nhập</h1>
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

			<div class="col-md-8 col-md-offset-2">

			<div class="main-login main-center">
				<form class="form-horizontal" method="post" action="process_login">
				{{csrf_field()}}
					<div class="form-group">
						<label for="email" class="cols-sm-2 control-label">Địa chỉ Email</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
								<input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="Nhập địa chỉ Email"/>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="password" class="cols-sm-2 control-label">Mật khẩu</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
								<input type="password" class="form-control" name="password" id="password"  placeholder="Nhập mật khẩu"/>
							</div>
						</div>
					</div>

					<div class="form-group ">
						<button type="submit" class="btn btn-primary btn-lg btn-block login-button">Đăng nhập</button>
					</div>
					<div class="login-register">
						<a href="register_form">Đăng ký</a>
					</div>
				</form>
			</div>

			</div>

		</div>
	</div>
</body>
</html>