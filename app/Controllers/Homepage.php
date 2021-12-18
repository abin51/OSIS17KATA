<?php

namespace App\Controllers;

class Homepage extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'OSIS17KATA'
        ];
        return view("Homepage/index", $data);
    }

    public function user()
    {
        $data = [
            'title' => 'OSIS17KATA'
        ];
        return view("Homepage/user", $data);
    }
}
