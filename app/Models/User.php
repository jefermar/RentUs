<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{ 

    public function roles(){
        return $this->belongsToMany(Rol::class); 
    }
     public function property(){
        return $this->hasMany(Property::class);
    }
     public function contractLandlord(){
        return $this->hasMany(Contract::class);
    }
     public function contractTenant(){
        return $this->hasMany(Contract::class);
    }
     public function rating(){
        return $this->hasMany(Rating::class);
    }
     public function report(){
        return $this->hasMany(Report::class);
    }
     public function maintenance(){
        return $this->hasMany(Maintenance::class);
    }
     public function rental_request(){
        return $this->hasMany(RentalRequest::class);
    }
     public function ratingAuthor(){
        return $this->hasOne(RentalRequest::class);
    }
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
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
}
