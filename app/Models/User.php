<?php

namespace App\Models;

use App\Notifications\ResetPasswordQueue;
use App\Notifications\VerifyEmailQueue;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable //implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'status',
    ];

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }
    public function trainings()
    {
        return $this->hasMany(Training::class);
    }
    public function clubs()
    {
        return $this->hasMany(Club::class);
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];




    //override for sending the verification email using queue
    // public function sendEmailVerificationNotification()
    // {
    //     $this->notify(new VerifyEmailQueue());
    // }

    // // override for sending the reset password using queue
    // public function sendPasswordResetNotification($token)
    // {
    //     $this->notify(new ResetPasswordQueue($token));
    // }
}
