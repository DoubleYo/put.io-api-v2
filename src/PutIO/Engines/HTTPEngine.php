<?php

/**
 * Copyright (C) 2012-2015 Nicolas Oelgart
 * 
 * @author Nicolas Oelgart
 * @license MIT http://opensource.org/licenses/MIT
 *
 * All HTTP engines must implement this interface.
 */
namespace PutIO\Engines;

/**
 * Interface HTTPEngine
 * @package PutIO\Interfaces\HTTP
 */
interface HTTPEngine
{
    /**
     * Makes an HTTP request to put.io's API and returns the response.
     *
     * @param string $method       HTTP request method. Only POST and GET are
     *                                 supported.
     * @param string $url          Remote path to API module.
     * @param array  $params       Variables to be sent.
     * @param string $outFile      If $outFile is set, the response will be
     *                                  written to this file instead of StdOut.
     * @param bool   $returnBool
     * @param string $arrayKey     Will return all data on a specific array key
     *                                  of the response.
     * @param bool   $verifyPeer   If true, will use proper SSL peer/host
     *                                  verification.
     * @return mixed
     */
    public function request(
        $method,
        $url,
        array $params = [],
        $outFile = '',
        $returnBool = \false,
        $arrayKey = '',
        $verifyPeer = \true
    );
}
