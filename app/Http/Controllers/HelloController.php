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
        $items = DB::table('people')->get();
        return view('hello.index', ['items' => $items]);
    }

    public function add (Request $request)
    {
        return  view('hello.add');
    }

    public function create (Request $request)
    {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::insert('insert into people(name,mail,age) values(:name,:mail,:age)', $param);
        return  redirect('/hello');
    }
    public function show (Request $request)
    {
        $id = $request->id;
        $items = DB::table('people')->where('id', '<=', $id)->get();
        return view('hello.show', ['items' => $items]);
    }
}
