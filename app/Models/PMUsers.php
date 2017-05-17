<?php

namespace App\Models;


use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class PMUsers extends Authenticatable
{
    public $incrementing = false;

    use Notifiable;

       /**
     * Table name
     * @var string
     */
    protected $table = 'users';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'name', 'email', 'password'];

    /**
     * Fields which will be hidden
     * @var array
     */
    protected $hidden = ['password', 'remember_token',];

    function roleConnection()
    {
        return $this->belongsToMany(PMRoles::class, 'pm_user_roles_conn', 'user_id', 'role_id');
    }


}