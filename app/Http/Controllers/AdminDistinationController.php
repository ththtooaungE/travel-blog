<?php

namespace App\Http\Controllers;

use App\Models\Distination;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminDistinationController extends Controller
{
    public function index()
    {
        return view('admin.distinations.index',[
            'distinations'=>Distination::latest()->get()
        ]);
    }

    public function create()
    {
        return view('admin.distinations.create');
    }

    public function store()
    {
        $formData = request()->validate([
            'name'=>['required',Rule::unique('distinations','name')],
            'slug'=>['required',Rule::unique('distinations','slug')]
        ]);

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
            'name'=>['required',Rule::unique('distinations','name')->ignore($distination->id)],
            'slug'=>['required',Rule::unique('distinations','slug')->ignore($distination->id)]
        ]);

        $distination->update($formData);
        return redirect('/admin/distinations');
    }
}
