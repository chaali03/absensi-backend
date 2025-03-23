<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['name', 'email', 'password', 'role'];

    protected $hidden = ['password'];

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
}

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'date', 'is_present', 'reason'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
