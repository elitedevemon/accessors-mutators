<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
  /**
   * Method store
   *
   * @param Request $request [explicite description]
   *
   * @return RedirectResponse
   */
  public function store(Request $request): RedirectResponse
  {
    $request->validate([
      'name' => 'required',
      'email' => 'required|email',
      'password' => 'required'
    ]);

    User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => $request->password
    ]);

    return back();
  }
}