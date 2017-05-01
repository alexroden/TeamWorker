<?php

/*
 * This file is part of TeamWorker.
 *
 * (c) Alex Roden <b.r_alex@hotmail.co.uk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ABR\TeamWorker\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * This is the account user class.
 *
 * @author Alex Broom-Roden <b.r_alex@hotmail.co.uk>
 */
class AccountUser extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'account_id',
        'user_id',
        'role',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var string[]
     */
    protected $casts = [
        'account_id' => 'int',
        'user_id'    => 'int',
        'role'       => 'int',
    ];

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'account_id' => 'required|int',
        'user_id'    => 'required|int',
        'role'       => 'required|int',
    ];
}
