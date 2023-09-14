<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class choix extends Model
{
    use HasFactory;

    public function Formation()
    {
        return $this->HasMany(Formation::class);
    }
    public function User()
    {
        return $this->HasMany(User::class);
    }
    public function axes_sujet()
    {
        return $this->HasMany(axes_sujet::class);
    }

    protected $fillable = [
        'user_id',
        'formation_id',
        'axe_id',
    ];
}
