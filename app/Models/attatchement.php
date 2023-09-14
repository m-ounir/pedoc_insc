<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attatchement extends Model
{
    use HasFactory;
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'user_id',
        'cin',
        'cv',
        'bac',
        'bac3',
        'note_bac3',
        'bac5',
        'note_bac5',
        
    ];
}
