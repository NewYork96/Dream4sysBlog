<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

   /**
    * The roles that belong to the Post
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    */
   public function tag()
   {
        return $this->belongsToMany(Tag::class);
   }

   protected $fillable = ['title', 'short', 'text'];
}
