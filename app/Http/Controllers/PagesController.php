<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = "Welcome Home Page 2020";
        // return view('pages.index'); // for call folder indext
        return view('pages.index')-> with('title', $title);

    }

    // public function about() {
    //     return view('pages.about');
    // }

    // public function contact() {
    //     return view('pages.contact');
    // }

    public function about() {
        $title = "Welcome About Page 2020";
        return view('pages.about')-> with('title', $title);

    }

    public function contact() {
        $data = array(
            'title' => 'Information',
            'infos' => [
                'email' => 'senghorkhen96@gmail.com',
                'phone' => '081975873',
                'position' => 'Student',
                'age' => '23',
            ]
            );
        return view('pages.contact')-> with($data);
    }
}
