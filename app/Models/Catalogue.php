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
 * This is the catalogue class.
 *
 * @author Alex Broom-Roden <b.r_alex@hotmail.co.uk>
 */
class Catalogue extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'title',
        'project_id',
        'owner_id',
        'description',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var string[]
     */
    protected $casts = [
        'title'       => 'string',
        'project_id'  => 'int',
        'owner_id'    => 'int',
        'description' => 'string',
    ];

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'title'       => 'required|string',
        'project_id'  => 'required|int',
        'owner_id'    => 'nullable|int',
        'description' => 'nullable|string',
    ];
}
