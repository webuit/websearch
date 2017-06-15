<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\category;
use App\post;
use App\comment;

class PostController extends Controller
{
    // Thêm bài post
    public function getAddPost()
    {
    	// Kiểm tra có thể loại trước khi thêm
    	$category = category::all();
    	if(count($category) == 0)
    	{
    		return view('post.error_category');
    	}

    	return view('post.add_post', ['category'=>$category]);
    }

    // Xử lý post bài
    public function post_process_add_post(Request $request)
    {
    	// Validate
    	$this->validate($request, 
    		[
    			'n_category' => 'required',
    			'n_title' => 'required|min:5|max:100',
    			'n_des' => 'required',
    		],
    		[
                'n_category.required' => "Bạn chưa chọn thể loại.",
                'n_title.required' => "Bạn chưa nhập tiêu đề.",
                'n_title.min' => "Độ dài Tiêu đề tối thiểu phải 5 ký tự.",
    			'n_title.max' => "Độ dài Tiêu đề tối đa là 100 ký tự.",
    			'n_des.required' => "Bạn chưa nhập nội dung.",
    		]
    	);
    	// id user
    	$idUser = Auth::user()->id;
    	// id thể loại
    	$idCategory = $request->n_category;
    	$title = $request->n_title;
    	$website = $request->n_website;
    	$address = $request->n_address;
    	$phone = $request->n_phone;
    	$des = $request->n_des;
    	$openTime = $request->n_open_time;
    	$closeTime = $request->n_close_time;

    	$post = new Post();

    	// Xử lý upload hình ảnh lên
    	if($request->hasFile('n_picture'))
    	{
    		$picture = $request->File('n_picture');
    		$namePicture = $picture->getClientOriginalName();
    		// random tên hình để ko trùng
    		$namePicture = str_random(4)."_".$namePicture;
    		while(file_exists("upload/picture/".$namePicture))
    		{
    			$namePicture = str_random(4)."_".$namePicture;
    		}
    		// lưu hình upload
    		$picture->move('upload/picture', $namePicture);
    		$post->photo = $namePicture;
       	}
    	else
    	{
    		$post->photo = "";
    	}
    	
    	// Lưu database
    	$post->category_id = $idCategory;
    	$post->user_id = $idUser;
    	$post->title = $title;
    	$post->website = $website;
    	$post->phone = $phone;
    	$post->address = $address;
    	$post->description = $des;
    	$post->open_time = $openTime;
    	$post->close_time = $closeTime;
    	$post->save();

    	return redirect('add_post')->with('notice_success', 'Bạn đã đăng bài thành công');
    }

    // Danh sách bài post
    public function getListPost()
    {
        $post = Post::all();
        return view ('post.list_post', ['post'=>$post]);
    }

    // Comment bai post
    public function getComment($idPost)
    {
        $post = post::find($idPost);
        $comment = comment::where('post_id', $idPost)->orderBy('created_at','desc')->get();
        return view('post.comment_post', ['post'=>$post, 'comment'=>$comment]);
    }

    // Ajax comment
    public function getAjaxComment()
    {
        $comment = comment::where('post_id', 1)->orderBy('created_at','desc')->get();
        return view('post.ajax_comment', ['comment'=>$comment]);
    }
}
