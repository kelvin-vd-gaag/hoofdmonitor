<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

//    public function users()
//    {
//        return $this->hasMany(User::class);
//    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function employee()
    {
        return $this->hasOne(Employee::class, 'email', 'email');
    }

    protected static function booted()
    {
        static::creating(function ($user) {
            if (!$user->role_id) {
                if ($user->email === "k.vandergaag@tcrmbo.nl") {
                    $defaultRole = Role::where('name', 'admin')->first();
                }else{
                    $defaultRole = Role::where('name', 'employee')->first();
                }
                $user->role_id = $defaultRole->id;
            }
        });
    }
}
