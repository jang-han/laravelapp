<?php

namespace App\Http\Controllers;

use App\Http\Requests\HelloRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

global $head, $style, $body, $end;
$head = '<html><head>';
$style = <<<EOF
<style>
body {font-size:16pt; color:#999;}
h1 {font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px;}
</style>
EOF;
$body = '</head><body>';
$end = '</body></html>';

function tag($tag, $txt){
    return "<{$tag}>".$txt."</{$tag}>";
}

class HelloController extends Controller
{
    public function index(Request $request)
    {
        return view('hello.index', ['msg'=>'フォームを入力：']);
    }

    public function post(HelloRequest $request)
    {
        return view('hello.index', ['msg'=>'正しく入力されました！']);
    }

    public function other()
    {
        global $head, $style, $body, $end;
        $html = $head . tag('title','Hello/Other') . $style . $body . tag('h1', 'Other') . tag('p', 'this is Other page')
                . $end;
        return $html;
    }

    public function __invoke()
    {
        return <<<EOF
        <html>
        <head>
        <title>Hello</title>
        <style>
        body {font-size:16pt; color:#999;}
        h1 {font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px;}
        </style>
        </head>
        <body>
        <h1>Single Action</h1>
        <p>これは、シングルアクションコントローラのアクションです。</p>
        </body>
        </html>
        EOF;
    }
}
