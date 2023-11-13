<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\HasMany;
class Comment extends Model
{
    protected $fillable = ['title', 'children_id'];

    public function children(): HasMany
    {
        return $this->hasMany(Comment::class, 'children_id', 'id');
    }
}
