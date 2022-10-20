<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image'];

    public function getImageAttribute($value){
        return $value ? 'storage/' . $value : '';
    }

    public function getCreatedAtAttribute($value){
        return $value ? date('d/m/Y') . ' às ' . date('H:i:s') : '';
    }
}
