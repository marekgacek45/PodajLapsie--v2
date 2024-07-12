<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'content',
        'published_at',
        'featured',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'published_at' => 'datetime',
        'featured' => 'boolean',
    ];


    public function getExcerpt()
    {
        return Str::limit(strip_tags($this->content), 150);
    }
    public function getThumbnailUrl()
    {
        return  asset('storage/' . $this->thumbnail);
    }
    public function getPublishedDate()
    {
        return  $this->published_at->diffForHumans();
    }

    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }
}
