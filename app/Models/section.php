<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class section extends User
{
    protected $table = 'sections';
    protected $primarykey = 'id';
    protected $fillable = ['name','email','password'];
    
    use HasFactory;
}
