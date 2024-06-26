<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function categorie() {
        return $this->belongsTo(Categorie::class);
    }
    use HasFactory;
    public function user() {
        return $this->belongsTo(User::class);
    }
}
