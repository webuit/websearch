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
</style>
<body>
<div class="row" style="padding: 15px;">
	<div class="col-md-9">
		<div class="panel-group shadowpanel">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3>Nhà Hàng Hanuri</h3>
				</div>
				<div class="panel-body">
					<div class="row" style="height: 100%">
						<div class="col-md-4">
							<div class="photo">
								<img src="{{url('images/sp.jpg')}}" width="270px" height="250px" alt="">
							</div>
						</div>

						<div class="col-md-8">
							<div class="breadcrumb">
							  <a class="breadcrumb-item" href="#">TP.HCM</a><i> >> </i>
							  <a class="breadcrumb-item" href="#">Quận 1</a><i> >> </i>
							  <a class="breadcrumb-item" href="#">Bến Nghé</a>
							</div>

							<div class="main-info-title">
								<h1>Nhà Hàng Hanuri</h1>
							</div>

							<hr>
							<div class="address">
								<span class="fa fa-location-arrow locationicon"></span>
								<span>
									<a href=""><span>306 Nguyễn Tri Phương, P. 4, Quận 10 , TP.HCM</span></a>
								</span>
							</div>

							<div class="time-line">
								<span class="fa fa-clock-o houricon"></span>
								<span title=" | 09:00 AM - 10:00 PM">09:00 AM - 10:00 PM</span>
							</div>

							<div class="price">
								<span class="fa fa-tag minmaxpriceicon"></span>
								<span>28000đ - 89000đ</span>
							</div>
						</div>
					</div>
					<hr>
					<!-- END phần header -->
					<!-- Phần Body -->
					<div class="row">
						<div class="col-md-3 micro-item">
							<div class="micro-title">
								
								<a href="" data-toggle="modal" data-target="#modal-phone"><i class="fa fa-phone"></i> Gọi điện</a>
							</div>
						</div>

						<div class="col-md-3 micro-item">
							<div class="micro-title">							
								<a href=""><i class="fa fa-bookmark"></i> Bộ sưu tập </a>
							</div>
						</div>

						<div class="col-md-3 micro-item">
							<div class="micro-title">
								
								<a href=""><i class="fa fa-comment"></i> Bình luận</a>
							</div>
						</div>

						<div class="col-md-3 micro-item">
							<div class="micro-title">
								
								<a href=""><i class="fa fa-camera"></i> Hình Ảnh</a>
							</div>
						</div>
					</div>
					<hr>
					<!-- End Body -->
					<!-- Phần slider -->
					@include('showpost.micro-image')

					<!-- end slider -->
				</div>
			</div> 
		</div>

		<!-- End panel -->
		<!-- Phần Bình luận -->
		<div class="row" style="margin:0;">
			<div class="col-md-12" style="background: #fff;">
				<div class="comment" style="width: 100%;height: 70px;">
					<div class="comment-head" style="float: left;">
						<a href=""><img width="60px" height="60px" src="https://s12.postimg.org/46yha3jfh/item_6_180x200.png" class="img-responsive img-circle"></a>
					</div>
					<div class="comment-title" style="float: left;font-size: 15px;font-weight: 600;">
						<a href="">Việt Tiến</a>
					</div>
					<br>
					<div class="comment-time" style="display: inline-block;margin-left: -50px;">
						<i class="fa fa-clock-o houricon"></i><a href=""> 14/6/2017 20:07</a>
					</div>
				</div>
				<hr>
				<div class="title" style="font-size:14px;font-weight: 700;margin-left:50px;">
					<a href="">Nhà Hàng Hanuri</a>
				</div>

				<div class="content" style="text-align: justify;padding: 30px 50px 50px 50px;">
					<span>
						Mới đầu ở tầng trệt nhìn cứ tưởng khách sạn hay cái quán karaoke nào không á :)) Tầng phục vụ khách thì trên lầu, phòng có máy lạnh.
Ngay cửa phòng có 1 chú chó, nhưng nó hiền lắm nên bạn nào sợ chó thì có thể tạm yên tâm mà bước vào hen :))
Nhóm mình gọi ăn thử 3 loại mì cay: bò, hải sản và hào phô mai. Sợi mì dai, nước dùng ngon, cấp 2 cũng không cay lắm.
<p>- Mì cay bò 49k, chọn cay cấp độ 2, bò nhiều, có thêm xúc xích và cá viên nữa.</p>
<p>- Mì cay hải sản cũng 49k luôn, chủ yếu là mực, tôm và cá viên.</p>
<p>- Mì cay hào phô mai mắc hơn chút xíu, 59k. Hào nhỏ nhưng cũng nhiều, có thêm cá viên nữa, bên trên có phô mai nhưng ít lắm.</p>
<p>- Takoyaki thì không ngon, 30k được 6 viên.</p>
Nhân viên phục vụ ok. Nhà vệ sinh thì hơi hôi mùi chó, nên bạn nào có bị dị ứng chó mèo nhớ lưu ý nha.
					</span>
				</div>

			</div>		
		</div>
		<hr>
		<!-- End Bình Luận -->
		<!-- Phần để viết Bình luận -->
				THÊM PHẦN ĐỂ VIẾT BÌNH LUẬN VÀO ĐÂY
		<!-- End phần viết bình luận -->
	</div>
	<div class="col-md-3">
		<div class="panel-group shadowpanel">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>Bài Viết Mới</h4>
			</div>
			<div class="panel-body">
				<div class="col-md-12">
					<div class="col-md-3 image-post">
						<img width="60px" height="60px" src="https://media.foody.vn/res/g32/311135/s180x180/foody-mi-cay-omega-lac-long-quan-694-636330675884556469.jpg" class="img-responsive img-thumbnail">
					</div>
					<div class="col-md-9 post-content">
						<a href="">Quán Ăn Hàn Quốc Hanuri</a>
						<hr>
					</div>
				</div>
				<div class="clear-fix"></div>
				<hr>
				<div class="col-md-12" >
					<div class="col-md-3 image-post">
						<img width="60px" height="60px" src="https://media.foody.vn/res/g5/42857/prof/s480x300/foody-mobile-a1-jpg-219-635760098350582221.jpg" class="img-responsive img-thumbnail">
					</div>
					<div class="col-md-9 post-content">
						<a href="">Mì cay Naga Làng Đại Học</a>
						<hr>
					</div>
				</div>
			</div>
		</div> 
		</div>
	</div>

	<!-- End bài viết mới -->
</div>
<!-- Modal -->
  <div class="modal fade" id="modal-phone" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Điện Thoại</h4>
        </div>
        <div class="modal-body">
          <i class="fa fa-phone"></i>
          <span style="font-size: 16px;">0974755854</span>
        </div>
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
	
	
</body