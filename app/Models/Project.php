<?php

namespace ABR\TeamWorker\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * This is the project class.
 *
 * @author Alex Broom-Roden <b.r_alex@hotmail.co.uk>
 */
class Project extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'slug',
        'account_id',
        'project_manager_id',
        'description',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var string[]
     */
    protected $casts = [
        'name'               => 'string',
        'slug'               => 'string',
        'account_id'         => 'int',
        'project_manager_id' => 'int',
        'description'        => 'string',
    ];

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'name'               => 'required|string',
        'slug'               => 'required|string',
        'account_id'         => 'required|int',
        'project_manager_id' => 'required|int',
        'description'        => 'nullable|string',
    ];
}
