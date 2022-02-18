<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index(){

        return view('index', [
            'news' => News::select('*')->orderby('created_at', 'desc')->paginate(10)
        ]);
    }
}
