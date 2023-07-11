<?php

namespace App\Http\Controllers;

use App\Models\Distination;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class AdminDistinationController extends Controller
{
    public function index()
    {
        return view('admin.distinations.index',[
            'distinations'=>Distination::latest('id')->get()
        ]);
    }

    public function create()
    {
        return view('admin.distinations.create');
    }

    public function store()
    {
        $formData = request()->validate([
            'name'=>['required',Rule::unique('distinations','name')]
        ]);
        $formData['slug'] = Str::slug($formData['name']);

        Distination::create($formData);
        return redirect('/admin/distinations');
    }

    public function destroy(Distination $distination)
    {
        
        $distination->delete();
        return redirect('/admin/distinations');
    }

    public function edit(Distination $distination)
    {
        return view('admin.distinations.edit',[
            'distination'=>$distination
        ]);
    }

    public function update(Distination $distination)
    {
        $formData = request()->validate([
            'name'=>['required',Rule::unique('distinations','name')->ignore($distination->id)]
        ]);
        $formData['slug'] = Str::slug($formData['name']);

        $distination->update($formData);
        return redirect('/admin/distinations');
    }
}
