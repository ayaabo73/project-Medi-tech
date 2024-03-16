<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\doctorLoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class doctorcontroller extends Controller
{
   
    public function index()
    {
        //
    }

 
    public function create()
    {
        //
    }

  
    public function store(doctorLoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::DOCTOR);
    }

   
    public function show(string $id)
    {
        //
    }

  
    public function edit(string $id)
    {
        //
    }

   
    public function update(Request $request, string $id)
    {
        //
    }

   
    public function destroy(Request $request)
    {
        Auth::guard('doctor')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
