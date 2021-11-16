<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'OSIS17KATA'
        ];
        return view("Home/index", $data);
    }

    public function post()
    {
        $data = [
            'title' => 'OSIS17KATA'
        ];
        return view("Home/content", $data);
    }

    public function account()
    {
        $data = [
            'title' => 'OSIS17KATA'
        ];
        return view("Home/user", $data);
    }

    public function card()
    {
        $data = [
            'title' => 'OSIS17KATA'
        ];
        return view("Home/card", $data);
    }

    public function chat()
    {
        $data = [
            'title' => 'OSIS17KATA'
        ];
        return view("Home/chat", $data);
    }
}
