<?php

namespace App;

use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $guard = 'admins';

    /**

     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'c_password', 'job_title',
    ];

    /**

     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'c_password', 'remember_token',
    ];

    /** 
     * to get db password field
     */
    public function getAuthPassword()
    {
        return $this->c_password;
    }
}
