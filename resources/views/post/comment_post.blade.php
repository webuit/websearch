
@include('layouts.header')
<body style="background-color: white">
	<div class="container">
		<h1>Title: {{$post->title}}</h1>
		<div class="form-group">
			<label class="control-label col-sm-2" for="pwd"> Comment:<span style="color: red">*</span></label>
			<form action="">
			<div class="col-sm-10">          
			<textarea id="demo" name="n_des" class="form-control ckeditor" placeholder="Mô tả cho công ty"></textarea>
			</div>
			@if(Auth::check())
				{{-- Biến user login --}}
				@php
					$user = App\User::find(Auth::user()->id);
					$urlComment = {{route('ajax_comment')}}.'/'.{{$post->id}}; 
				@endphp
				<button type="button" class="btn btn-primary cl_sm" id="{{$post->id}}" name="{{route('ajax_comment')}}.'/'.{{$post->id}}">Đăng</button>
			@else
			<button type="submit" disabled class="btn btn-primary">Đăng nhập để bình luận</button>
			@endif
			</form>
		</div>
		{{-- hiển thị bình luận --}}
		<h1>.......</h1>
		<div id="ajaxComment">
			@foreach($comment as $valueComment)
			<img style="float: left" src="{{asset('upload/picture/profile/').'/'.$valueComment->user->profile->avatar}}"  width="50em" height="45em" alt="">
			{{-- Tên user + time--}}
			<p >{{$valueComment->user->name}} <span style="padding-left: 2em">{{$valueComment->created_at}}</span></p>
			{{-- nội dung bình luận --}}
			<p>{{$valueComment->content}}</p>
			@endforeach
		</div>

	</body>
</div>
</html>

<script>
	$(document).ready(function(){
		$(".cl_sm").click(function(){
			var url = $(this).attr('name');
			alert(url);
			$.get(url , function(data){
				$("#ajaxComment").html(data);
			});
		});
	});
</script>
