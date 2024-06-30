<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PatchRequest;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Validation\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::paginate(2);
        $category = Category::find(1);

        return view('dashboard.post.index', compact('posts'));

        // Post::create([
        //     'title' => 'test title',
        //     'slug' => 'test slug',
        //     'description' => 'test description',
        //     'content' => 'test content',
        //     'image' => 'test image',
        //     'posted' => 'not',
        //     'category_id' => 1
        // ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::pluck('id', 'title')->all();
        $infoPost = new Post();

        return view('dashboard.post.create', compact('categories', 'infoPost'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    // public function store(Request $request )
    {
        //
        // $request->validate([
        //     'title' => 'required|min:5|max:500',
        //     'slug' => 'required|min:5|max:500',
        //     'description' => 'required|min:5|max:255',
        //     'content' => 'required|min:5|max:255',
        //     'posted' => 'required',
        //     'category_id' => 'required|integer'
        // ]);
        // dump($request->validated());

        // $validated = FacadesValidator::make($request->all(), [
        //     'title' => 'required|min:5|max:500',
        //     'slug' => 'required|min:5|max:500',
        //     'description' => 'required|min:5|max:255',
        //     'content' => 'required|min:5|max:255',
        //     'posted' => 'required',
        //     'category_id' => 'required|integer'
        // ]);

        // dd($validated->fails());

        if ($request->validated()) {
            // if(!$validated->fails()){
            // dd('here');
            $allData = (object)$request->all();
            // Post::create($request->all());

            Post::create([
                'title' => $allData->title,
                'slug' => $allData->slug,
                'description' => $allData->description,
                'content' => $allData->content,
                // 'image' => $allData->            // 'image' => $allData->,
                'posted' => $allData->posted,
                'category_id' => $allData->category_id
            ]);
        }

        return to_route('post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $infoPost = $post;
        $categories = Category::pluck('id', 'title')->all();

        return view('dashboard.post.edit', compact('infoPost', 'categories'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PatchRequest $request, Post $post)
    {
        // dd('here');
        // dd($request->validated());
        $validatedRequest = $request->validated();

        if (isset($validatedRequest['image'])) {
            $validatedRequest['image'] = $fileName = time() . '.' .  $validatedRequest['image']->extension();
            $request->image->move(public_path('uploads/posts'), $fileName);
        }

        $post->update($validatedRequest);

        return to_route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return to_route('post.index');
    }
}
