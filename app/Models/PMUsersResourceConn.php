<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PMUsersResourceConn extends Model
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'pm_users_resource_conn';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['user_id', 'resource_id'];
}
