<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Requests\HellowRequest;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        if (isset($request->id)) {
            $param = ['id' => $request->id];
            $items = DB::select('select * from people where id = :id', $param);
        } else {
            $items = DB::select('select * from people');
        }
        return view('hello.index', ['items' => $items]);
    }
}
