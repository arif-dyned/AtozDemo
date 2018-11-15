<?php

namespace App\Http\Controllers;

use App\Http\Libraries\Assets;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->data['title'] = 'AtozDemo';
        $this->data['css'] = Assets::load('css', ['style', 'app']);
        $this->data['js'] = Assets::load('js', []);
    }

    public function index()
    {
        return view('main')
            ->with('data', $this->data)
            ->nest('content', 'dashboard', []);
    }

    public function register()
    {
        return view('main')
            ->with('data', $this->data)
            ->nest('content', 'register.index', ['data' => '']);
    }
}
