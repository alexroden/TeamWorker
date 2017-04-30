<?php

/*
 * This file is part of TeamWorker.
 *
 * (c) Alex Roden <b.r_alex@hotmail.co.uk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ABR\TeamWorker\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

/**
 * This is the verify csrf token class.
 *
 * @author Alex Broom-Roden <b.r_alex@hotmail.co.uk>
 */
class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
