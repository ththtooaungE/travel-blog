<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query,$filter)
    {
        $query->when($filter['search'] ?? false,function($query, $search){
            $query->where('slug','LIKE','%'.$search.'%')
                ->orWhere('body','LIKE','%'.$search.'%');
        });

        $query->when($filter['category'] ?? false,function($query,$slug){
            $query->whereHas('category', function($query) use($slug){
                $query->where('slug',$slug);
            });
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {   
        return $this->belongsToMany(Category::class);
    }

}
