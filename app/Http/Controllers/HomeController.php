<?php

namespace App\Http\Controllers;

use App\Models\inquiryForm;
use Illuminate\Contracts\Session\Session;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Session\Session as SessionSession;

class HomeController extends Controller
{

    public function index() {
        $inquiryform = inquiryForm::latest()->paginate(10);
        return view('admin.dashboard', compact('inquiryform'));
    }
    
    // Display the specified resource.
    
    public function show($id)
    {
        $user = inquiryForm::find($id);
  
        return response()->json($user);
    }
}
