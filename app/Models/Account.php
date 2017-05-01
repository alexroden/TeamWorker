<?php

namespace ABR\TeamWorker\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * This is the account class.
 *
 * @author Alex Broom-Roden <b.r_alex@hotmail.co.uk>
 */
class Account extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'account_name',
        'type',
        'name',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var string[]
     */
    protected $casts = [
        'account_name' => 'string',
        'type'         => 'int',
        'name'         => 'string',
    ];

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'account_name' => 'required|string',
        'type'         => 'required|int',
        'name'         => 'required|string',
    ];
}
