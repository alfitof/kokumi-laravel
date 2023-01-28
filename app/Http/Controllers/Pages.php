<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pages extends Controller
{
    public  function index(){
        $data = [
            'judul' => 'Home | Kokumi コクミ'
        ];
        return view('home', $data);
    }
    public  function login(){
        $data = [
            'judul' => 'Login | Kokumi コクミ'
        ];
        return view('login', $data);
    }
    public  function contact(){
        $data = [
            'judul' => 'Contact | Kokumi コクミ'
        ];
        return view('contact', $data);
    }
    public  function menu(){
        $data = [
            'judul' => 'Menu | Kokumi コクミ'
        ];
        return view('menu', $data);
    }
}
