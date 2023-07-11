<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Distination;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\support\Str;

class AdminBlogController extends Controller
{
    public function __construct() {
        $this->middleware('mustBeAuthor')->only('edit');
    }

    public function index()
    {
        return view('admin.blogs.index', [
            'blogs' => Blog::latest('id')->paginate(10)
        ]);
    }

    public function create()
    {
        return view('admin.blogs.create', [
            'categories' => Category::latest()->get(),
            'distinations' => Distination::latest()->get(),
        ]);
    }

    public function store()
    {
        // dd(request()->all());
        $formData = request()->validate([
            'title' => ['required', 'max:255', Rule::unique('blogs', 'slug')],
            'body' => 'required',
            'categories' => 'required|array:0,1|exclude',
            'distination_id' => ['required', Rule::exists('distinations', 'id')],
            'categories.0' => [Rule::exists('categories', 'id')],
            'categories.1' => ['nullable', Rule::exists('categories', 'id')],
            'image' => ['required', 'image'],
            'created_at' => ['nullable', 'date']
        ], [
            'categories.array' => 'The miximum number of categories is two!',
            'distination_id.required' => 'Distination field is required!'
        ]);

        $formData['slug'] = Str::slug($formData['title']);
        if ($formData['created_at'] == null) $formData['created_at'] = now();
        $formData['user_id'] = auth()->user()->id;
        $formData['image'] = request()->file('image')->store('images');

        $blog = Blog::create($formData);
        $blog->addCategories(request('categories'));

        return redirect('/admin/blogs');
    }

    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', [
            'blog' => $blog,
            'categories' => Category::latest('id')->get(),
            'distinations' => Distination::latest()->get(),
        ]);
    }

    public function update(Blog $blog)
    {
        $formData = request()->validate([
            'title' => ['required', 'max:255', Rule::unique('blogs', 'slug')->ignore($blog->id)],
            'body' => 'required',
            'categories' => 'required|array:0,1|exclude',
            'distination_id' => ['required', Rule::exists('distinations', 'id')],
            'categories.0' => [Rule::exists('categories', 'id')],
            'categories.1' => ['nullable', Rule::exists('categories', 'id')],
            'image' => ['nullable', 'image'],
        ], [
            'categories.array' => 'The miximum number of categories is two!',
            'distination_id.required' => 'Distination field is required!'
        ]);

        $formData['slug'] = Str::slug($formData['title']);
        $formData['updated_at'] = now(); //update blog eventhough only 'categories' is updated
        if (request('image')) $formData['image'] = request()->file('image')->store('images');

        $blog->update($formData);
        $blog->updateCategories(request('categories'));

        return redirect('/admin/blogs');
    }

    public function destroy(Blog $blog)
    {
        $blog->removeCategories();
        $blog->delete();
        return redirect('/admin/blogs');
    }
}
