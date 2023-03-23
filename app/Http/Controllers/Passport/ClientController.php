<?php

namespace App\Http\Controllers\Passport;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Illuminate\Contracts\View\View;

class ClientController extends Controller
{
    public function index(Request $request): View
    {
        $clients = $request->user()->clients;
        return view('clients.dashboard', compact('clients'));
    }

    public function create(Request $request): View
    {
        return view('clients.create');
    }
}
