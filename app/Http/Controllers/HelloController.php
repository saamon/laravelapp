<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(Request $request,Response $response)
    {
        return view('hello.index',[
            'url' => $request->url(),
            'status' => $response->status(),
        ]);
    }
    public function list() {
        // allメソッドはコレクションを返す
        $data = [
            'books' => Book::all()
        ];
        // Viewに渡すデータを変数($data)に格納
        return view('hello.list', $data);
    }
}
