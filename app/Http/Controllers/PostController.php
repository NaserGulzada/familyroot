<?php
/**
 * @desc: Post controller for the admin user 
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Repositories\PostInterface;
use Session;
class PostController extends Controller
{
    protected $post;
    /**
    * @desc: construction method to check if user is valid
     */
    public function __construct(PostInterface $post)
    {
        $this->post = $post;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //providing custom functions in post repository and calling by interface
        //$posts = $this->post->getAll();
        $posts = $this->post->getWithPaginate(5);
        //dd($posts);
        //$posts = Post::orderBy('created_at','desc')->paginate(5);
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate form input
        $this->validate($request, array(
            'title' => 'required|max:150',
            'slug'  => 'required|max:150|alpha_dash|unique:posts,slug',
            'body'  => 'required'
        ));
        //save into the database
        $post = new Post;
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->body = $request->body;
        $post->save();
        //reddirect to the view function
        //return redirect('/posts')->with('success','Post saved successfully');
        //set session flash message
        Session::flash('success','Post saved successfully!');
        return redirect()->route('posts.show', ['id' => $post->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Post::find($id);
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit')->withPost($post);
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
        if($request->input('slug') == $post->slug)
        {
            $this->validate($request, array(
                'title' => 'required|max:150',
                'body'  => 'required'
             ));   
        }
        else
        {
            $this->validate($request, array(
                'title' => 'required|max:150',
                'slug'  => 'required|max:150|alpha_dash|unique:posts,slug',
                'body'  => 'required'
             ));
        }
        
        $post = Post::findOrFail($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->slug = $request->input('slug');
        $post->save();
        //set flush message
        Session::flash('success','The post updated successfully.');
        return redirect()->route('posts.show',['id' => $post->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        //set session
        Session::flash('success','The post deleted successfully.');
        return redirect()->route('posts.index');
    }
}
