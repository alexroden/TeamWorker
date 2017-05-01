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
 * This is the activity class.
 *
 * @author Alex Broom-Roden <b.r_alex@hotmail.co.uk>
 */
class Activity extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'title',
        'catalogue_id',
        'description',
        'deadline',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var string[]
     */
    protected $casts = [
        'title'        => 'string',
        'catalogue_id' => 'int',
        'description'  => 'string',
        'deadline'     => 'date',
    ];

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'title'        => 'required|string',
        'catalogue_id' => 'nullable|int',
        'description'  => 'nullable|string',
        'deadline'     => 'nullable|date',
    ];
}
