<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}

class WebController extends Controller
{
    public function index()
    {
        $customers = DB::table('customer')->get();

        return view('index', ['customers' => $customers]);
    }
}