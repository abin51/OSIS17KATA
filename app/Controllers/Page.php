<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function version()
    {
        $data = [
            'title' => 'OSIS17KATA'
        ];
        return view("Page/version", $data);
    }
}
