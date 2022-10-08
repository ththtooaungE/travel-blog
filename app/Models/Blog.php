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
            $query->whereHas('categories', function($query) use($slug){
                $query->where('slug',$slug);
            });
        });

        $query->when($filter['distination'] ?? false, function($query, $slug) {
            $query->whereHas('distination', function($query) use($slug) {
                $query->where('slug', $slug);
            });
        });
    }

    public function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function distination()
    {
        return $this->belongsTo(Distination::class);
    }
    //categories
    public function categories()
    {   
        return $this->belongsToMany(Category::class);
    }

    public function addCategory($category_id)
    {
        return $this->categories()->attach($category_id);
    }

    public function removeCategory($category_id)
    {
        return $this->categories()->detach($category_id);
    }

    public function updateCategories($category_ids)
    {
        return $this->categories()->sync($category_ids);
    }
    //comments
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    //suscribe
    public function subscribers()
    {
        return $this->belongsToMany(User::class);
    }

    public function subscribe()
    {
        return $this->subscribers()->attach(auth()->id());
    }

    public function unSubscribe()
    {
        return $this->subscribers()->detach(auth()->id());
    }
}