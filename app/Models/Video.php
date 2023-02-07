<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
     protected $table = 'videos';
    protected $fillable = [
      'title', 'video'
  ];

  public function course()
  {
    return $this->belongsTo(Course::class);
  }

    public function scopeContainingVideoPath($query)
    {
        return $query->where('video', 'LIKE', '%videos/firstlevel/%');
    }
    public function scopeContainingVideo2Path($query)
    {
        return $query->where('video', 'LIKE', '%videos/secondlevel/%');
    }
}
