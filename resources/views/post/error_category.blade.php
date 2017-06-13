{{-- Lỗi khi chưa có category --}}
@include('layouts.header')
<h1 class="text-center">Lỗi</h1>
<div class=" alert alert-danger text-center">
	Hiện chưa có bất kỳ thể loại nào. Bạn không thể đăng bài được
	<br>
	<a href="{{ url()->previous() }}"><strong><h1><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>Quay lại</strong></h1></a>
</div>
