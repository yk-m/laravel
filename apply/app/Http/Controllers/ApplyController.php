<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplyController extends Controller
{
  public function exec(Request $request) {
    return response()->json($request->aids, 200);
  }
}
