@include('layouts.header')
@include('layouts.menu')
<style>
	.navbar-default{
		background: #00979C;
	}
	body{
		background: #fff;
		line-height: 1.8;
		background: #EEEEEE;
	}
	.photo img{
		border-radius: 8px;
	}

	.fa-location-arrow:before{
		content: "\f124";
	}

	.fa-clock-o:before {
    content: "\f017";
	}
	

	.micro-item{
		height: 50px;
		text-align: center;
		border: 1px solid #ddd;
		cursor: pointer;
	}

	
	.micro-item .micro-title>a{
		display: inline-block;
		text-decoration: none;
		padding-top: 10px;
		width: 100%;
		height: 48px;
		font-weight: 700;
	}
	.micro-item:hover{
		color: #046e96;
		background: #f8f8f8;
		outline: none;
	}
	.micro-item .micro-title>a:focus{
		outline: none;
	}

	.image-post img{
		float: left;
	}

	.image-post{
		padding: 0;
	}
	.post-content{
		float: left;
		font-size: 14px;
		font-weight: 600;
		line-height: 20px;
		
	}
	.post-content a{
		color: #333;
	}

	.clear-fix{
		clear: both;
	}

	tr, td {
		border: none
	}
</style>

<body style="background-color: white">
<div class="container">
	<h1 class="text-center">Thông tin cá nhân</h1>
	<div class="row">
		<div class="col-sm-4 ">
			<h2>Tên:</h2>
		</div>
		<div class="col-sm-8">
			<h2>{{$user->name}}</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4 ">
			<h2>Email:</h2>
		</div>
		<div class="col-sm-8">
			<h2>{{$user->email}}</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4 ">
			<h2>Ngày sinh:</h2>
		</div>
		<div class="col-sm-8">
			<h2>{{ Carbon\Carbon::parse($user->Profile->date_of_birth)->format('d-m-Y') }}</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4 ">
			<h2>Địa chỉ:</h2>
		</div>
		<div class="col-sm-8">
			<h2>{{$user->Profile->address}}</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4 ">
			<h2>Số điện thoại:</h2>
		</div>
		<div class="col-sm-8">
			<h2>{{$user->Profile->phone}}</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4 ">
			<h2>Hình đại diện:</h2>
		</div>
		<div class="col-sm-8">
			<img width="50em" height="60em" src="{{asset('upload/picture/profile/').'/'.$user->Profile->avatar}}" alt="">
		</div>
	</div>
 </div>


<script>
  $(document).ready(function(){

$('#itemslider').carousel({ interval: 3000 });

$('.carousel-showmanymoveone .item').each(function(){
var itemToClone = $(this);

for (var i=1;i<6;i++) {
itemToClone = itemToClone.next();

if (!itemToClone.length) {
itemToClone = $(this).siblings(':first');
}

itemToClone.children(':first-child').clone()
.addClass("cloneditem-"+(i))
.appendTo($(this));
}
});
});

</script>

@include('layouts.footer')
</body>