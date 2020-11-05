<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Cachable;
    use HasFactory;

    protected static $unguarded = true;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
