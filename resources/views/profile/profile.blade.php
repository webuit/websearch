@include('layouts.header')
<style>
	.navbar-default{
		background: #00979C;
	}
	.panel-info > .panel-heading {
    background-color: #317E8C!important;
    color: #fff !important;
	}

	.panel-default>.panel-heading {
    color: #fff;
    background-color: #317E8C;
    border-color: #317E8C;
	}
</style>
@include('layouts.menu')
<body>
<div class="container-fluid">
  <div class="row">
  <!-- <div class="col-md-6  toppad  pull-right col-md-offset-3 ">
   <br>
  </div> -->
    <div class="col-md-9">


      <div class="panel panel-info">
        <div class="panel-heading">
          <h2 class="panel-title">Thành Viên</h2>
        </div>
        <div class="panel-body" style="font-size: 16px;">
          <div class="row">
            <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="images_profile/z580306926891_f009030c34d9e9bfeaa8242f0c06df0a.jpg " class="img-circle img-responsive"> </div>
            
            <div class=" col-md-9 col-lg-9 "> 
              <table class="table table-user-information">
                <tbody>
                  <tr>
                    <td>Tên Thành Viên</td>
                    <td>Dũng</td>
                  </tr>
                  <tr>
                    <td>Ngày Sinh</td>
                    <td>16-10-2001</td>
                  </tr>
                  
               
                     <tr>
                         </tr><tr>
                    <td> Giới Tính</td>
                    <td>Nam</td>
                  </tr>
                    <tr>
                    <td>Địa Chỉ</td>
                    <td>282, Ấp TÂn Định ,xã Minh Tân,Huyện Dầu Tiếng,Tỉnh Bình DƯơng</td>
                  </tr>

                  <tr>
                    <td>Trường </td>
                    <td>UIT</td>
                  </tr>

                  <tr>
                    <td>Email</td>
                    <td><a href="mailto:info@support.com">trandinhphu2606@gmail.com</a></td>
                  </tr>

                  <tr>
                    <td>Phone Number</td>
                    <td>0974755854<br>
                    </td>
                  </tr>
                  


                 
                </tbody>
              </table>
              <a href="edit_account.php"><button class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> Chỉnh Sửa</button></a>
            </div>
          </div>
        </div>
             <div class="panel-footer">
                    <br>
                    

                </div>
        
      </div>
    </div>
    <!-- End left -->
    <div class="col-md-3">
    	


<div class="panel-group shadowpanel-2 wow slideInRight" data-wow-offset="150" style="visibility: visible; animation-name: slideInRight;">
			  <div class="panel panel-default">
				<div class="panel-heading">
					<h4><i class="fa fa-bookmark" aria-hidden="true"></i> Bài viết mới nhất</h4>
				</div>
				<div class="panel-body">
				<div class="newpost">
										<img src="images/rss.png" width="25px"> <a href="baiviet.php?Huong-dan-hit-dat-dung-cach-cho-nu,-trong-3-tuan-la-thanh-“su-phu”&#10;&amp;id=26.html">Hướng dẫn hít đất đúng cách cho nữ, trong 3 tuần là thành “sư phụ”
</a>
										<hr>
									</div><div class="newpost">
										<img src="images/rss.png" width="25px"> <a href="baiviet.php?Tap-the-hinh-nu-de-co-Body-mong-muon&amp;id=20.html">Tập thể hình nữ để có Body mong muốn</a>
										<hr>
									</div><div class="newpost">
										<img src="images/rss.png" width="25px"> <a href="baiviet.php?7-vi-tri-co-the-cua-nam-gioi-tap-the-hinh-cuon-hut-phai-dep&amp;id=8.html">7 vị trí cơ thể của nam giới tập thể hình cuốn hút phái đẹp</a>
										<hr>
									</div>					</div>
				<div class="panel-heading">
					<center>
					  <img id="avatar" class="img-circle" width="150px" height="150px" src="images/profile2.jpg">
					  <p class="p_info"><b>GYM OLYMPUS</b></p>
					  <p class="p_info" style="font-size:15px;">GYM -&amp;&amp;- FITNESS</p>
					  <i class="fa fa-angellist fa-3x" aria-hidden="true" style="color:#FFFFFF; margin-bottom:3px;"></i>
					</center>
					
				</div>
				<div class="panel-body" style="font-size: 17px;">
					<!-- <div id="contact">
					  <span class="glyphicon glyphicon-calendar" aria-hidden="true" ></span><span class="spanitem">30/07/1997</span>
					</div> -->
					<div id="contact">
					  <i class="fa fa-envelope" aria-hidden="true"></i><span class="spanitem"> Mail : Olympusgym.info@gmail.com
					</span>
					</div>
					<div id="contact">
					  <i class="fa fa-phone-square" aria-hidden="true"></i><span class="spanitem">  Phone  : 0122 658 3219</span>
					</div>
					<div id="contact">
					  <i class="fa fa-map-marker" aria-hidden="true"></i><span class="spanitem"> Đc : Lầu 1, Nhà B3, KTX khu B, ĐHQG.</span>
					</div>
					<div id="contact">
					  <i class="fa fa-facebook-square" aria-hidden="true"></i><span class="spanitem"><a target="_black" id="link" href="http://fb.com/tnit97"> http://facebook.olympusgym.vn/
						</a></span>
					</div>
				</div>
				
			  </div>
			</div>
<div class="panel-group shadowpanel">
<div class="panel panel-default">
	<div class="panel-heading">
	 	Quảng Cáo
	</div>
	<div class="panel-body">
		<a href="#"><img class="img-responsive" src="https://lh4.googleusercontent.com/-np4UDMd9B3I/V-qHWTtl7NI/AAAAAAAAMPg/pMP_a1DYG_MaO9vo4SCQHuU_U0_FlP3OACL0B/s300-no/kiem-tien-voi-ung-dung-thanh-toan-viviet.gif"></a>


	</div>
</div>
</div>
    </div>

  </div>
</div>
</body>
@include('layouts.footer')