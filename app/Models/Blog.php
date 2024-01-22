<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Blog extends Model
{
    use HasFactory;

    // protected $fillable =['title','excerpt','deskripsi'];
    // Mass Assingment $guarded & $fillable
    protected $guarded=['id'];

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
}
