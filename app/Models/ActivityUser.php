<?php

namespace ABR\TeamWorker\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * This is the activity user class.
 *
 * @author Alex Broom-Roden <b.r_alex@hotmail.co.uk>
 */
class ActivityUser extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'activity_id',
        'user_id',
        'role',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var string[]
     */
    protected $casts = [
        'activity_id' => 'int',
        'user_id'     => 'int',
        'role'        => 'int',
    ];

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'activity_id' => 'required|int',
        'user_id'     => 'required|int',
        'role'        => 'required|int',
    ];
}
