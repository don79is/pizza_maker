<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PMResource extends Model
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'pm_resource';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'mime_type','path','width','height','size'];
}
