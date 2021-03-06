<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageSwitchController extends Controller
{
    public function languageSwitch($local)
    {
        // Session::forget('changed_language');
        Session::put('changed_language', $local);
        return back();
    }
}
