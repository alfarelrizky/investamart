<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvestamartController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function optimistic()
    {
        return view('index-2');
    }
    public function yolo()
    {
        return view('index-3');
    }
    public function quiz()
    {
        $id = 0;
        return view('quiz',compact(['id']));
    }
    public function quizm($id)
    {
        if ($id == null) {
            $id = 1;
        }elseif ($id == 10) {
            return redirect('/quiz');
        }else{
            $id += 1;
        }
        return view('quizm',compact(['id']));
    }
    public function quizn($id)
    {
        if ($id == null or $id == 1) {
            return redirect('/quiz');
        }else{
            $id -= 1;
        }
        return view('quizm',compact(['id']));
    }
}
