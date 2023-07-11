<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class AdminCategoryController extends Controller
{
    public function index()
    {
        return view('admin.categories.index',[
            'categories'=>Category::latest('id')->get()
        ]);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store()
    {
        $formData = request()->validate([
            'name'=>['required',Rule::unique('categories','name')]
        ]);
        $formData['slug'] = Str::slug($formData['name']);

        Category::create($formData);
        return redirect('/admin/categories');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit',[
            'category'=>$category
        ]);
    }

    public function update(Category $category)
    {
        $formData = request()->validate([
            'name'=>['required',Rule::unique('categories','name')->ignore($category->id)]
        ]);
        $formData['slug'] = Str::slug($formData['name']);

        $category->update($formData);
        return redirect('/admin/categories');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect('/admin/categories');
    }
}
