<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;

class Extracurriculars extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'description', 'mentor_name', 'quota', 'requirements', 'admin_id'
    ];
    
    function admin(){
        return $this->belongsTo(User::class, 'admin_id');
    }
}
