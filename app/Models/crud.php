<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class crud extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'nim', 'jurusan'];
    protected $table = 'crud';
    public $timestamps = false;
    
}
