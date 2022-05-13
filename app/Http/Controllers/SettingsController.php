<?php

namespace App\Http\Controllers;

use App\Core\Contracts\BuddyConfiguration;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index(BuddyConfiguration $configuration)
    {
        return view('dashboard.settings', [
            'configuration' => $configuration,
        ]);
    }

    public function update(Request $request, BuddyConfiguration $configuration)
    {
        //
    }
}