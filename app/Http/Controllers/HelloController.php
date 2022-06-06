<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Requests\HellowRequest;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        // $validator = Validator::make($request->query(), [
        //     'msg' => 'required',
        //     'pass' => 'required',
        // ]);
        if ($request->hasCookie('msg')) {
            $msg = 'Cookie:' . $request->cookie('msg');
        } else {
            $msg = '※クッキーはありません。';
        }
        return view('hello.index', ['msg' => $msg]);
    }

    public function post(Request $request)
    {
        // $rules = [
        //     'name' => 'required',
        //     'email' => 'email',
        //     'age' => 'numeric',
        // ];
        // $messages = [
        //     'name.required' => '名前は必ず入力してください。',
        //     'email.email' => 'メールアドレスが必要です',
        //     'age.numeric' => '年齢を整数で記入してください',
        //     'age.min' => '年齢は0歳以上で記入ください',
        //     'age.max' => '年齢は200歳以下で記入ください',
        // ];;
        // $validator = Validator::make($request->all(), $rules, $messages);

        // $validator->sometimes('age','min:0', function($input){
        //     return is_numeric($input->age);
        // });
        // $validator->sometimes('age','max:200', function($input){
        //     return is_numeric($input->age);
        // });

        // if ($validator->fails()) {
        //     return redirect('/hello')
        //                     ->withErrors($validator)
        //                     ->withInput();
        // }

        $validate_rule = [
            'msg' => 'required',
        ];
        $this->validate($request, $validate_rule);
        $msg = $request->msg;
        $response = response()->view('hello.index',
            ['msg' => '「'. $msg . '」'. 'をクッキーに保存しました']);
        $response->cookie('msg', $msg, 100);
        return $response;
    }
}
