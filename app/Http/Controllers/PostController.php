<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use Image;
use Storage;


use Illuminate\Http\Request;


class PostController extends Controller
{

    public function __construct()
    {
       $this->middleware(['auth', 'verified']);
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(5);

        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('posts.create')->withCategories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
                'title' => 'required|max:255',
                'slug' => 'required|alpha_dash|min:5|max:255',
                'category_id' => 'required|numeric',
                'body'  => 'required',
                'featured_image' => 'sometimes|image'
         ));

         $post = new Post;

         $post->title = $request->title;
         $post->description = $request->body;
         $post->slug = $request->slug;
         $post->category_id = $request->category_id;

         if($request->hasFile('featured_image')) {
             $image = $request->file('featured_image');
             $filename = time() . '.' . $image->getClientOriginalExtension();
             $location = public_path('images/' . $filename);
             Image::make($image)->resize(800, 400)->encode('webp')->save($location);

             $post->image = $filename;
         }

         $post->save();

         return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        return view ('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $post = Post::find($id);
        $categories = Category::all();
        return view('posts.edit')->withPost($post)->withCategories($categories);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $post = Post::find($id);
        
            $this->validate($request, array(
            'title' => 'required|max:255',
            'slug' => "required|alpha_dash|min:5|max:255|unique:posts,slug,$id",
            'category_id' => 'required | integer',
            'description'  => 'required',
            'featured_image' => 'image'
        ));

    

     $post = Post::find($id);

     $post->title = $request->input('title');
     $post->slug = $request->input('slug');
     $post->category_id = $request->input('category_id');
     $post->description = $request->input('description');

        
     if($request->hasFile('featured_image')) {

        $image = $request->file('featured_image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename);
        Image::make($image)->resize(800, 400)->save($location);
        $oldFilename = $post->image;

        $post->image = $filename;

        Storage::delete($oldFilename);
    }


     $post->save();

     return redirect()->route('posts.show', $post->id)->with('status', 'Update Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        Storage::delete($post->image);

        $post->delete();

        return redirect()->route('posts.index')->with('status', 'Blog is successfully deleted');
    }

    public function post()
    {
        // $posts = Post::all();

        // return view('blog')->withPosts($posts);
    }
}
