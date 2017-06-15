<h1>HHHHHH</h1>
@foreach($comment as $valueComment)
			<img style="float: left" src="{{asset('upload/picture/profile/').'/'.$valueComment->user->profile->avatar}}"  width="50em" height="45em" alt="">
			{{-- Tên user + time--}}
			<p >{{$valueComment->user->name}} <span style="padding-left: 2em">{{$valueComment->created_at}}</span></p>
			{{-- nội dung bình luận --}}
			<p>{{$valueComment->content}}</p>
			@endforeach
<h1>TTTTT</h1>