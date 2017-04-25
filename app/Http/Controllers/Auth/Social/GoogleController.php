<?php

namespace App\Http\Controllers\Auth\Social;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GoogleController extends BaseSocialController
{
    public function getService()
    {
        return 'google';
    }
}
