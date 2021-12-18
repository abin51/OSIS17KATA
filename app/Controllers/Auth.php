<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'OSIS17KATA'
        ];
        return view("Auth/index", $data);
    }

    public function login()
    {
        $data = [
            'title' => 'OSIS17KATA'
        ];
        return view("Auth/login", $data);
    }

    public function register()
    {
        $data = [
            'title' => 'OSIS17KATA'
        ];
        return view("Auth/register", $data);
    }

    public function register1()
    {
        $data = [
            'title' => 'OSIS17KATA'
        ];
        return view("Auth/register1", $data);
    }

    public function register2()
    {
        $data = [
            'title' => 'OSIS17KATA'
        ];
        return view("Auth/register2", $data);
    }

    public function register3()
    {
        $data = [
            'title' => 'OSIS17KATA'
        ];
        return view("Auth/register3", $data);
    }

    public function register4()
    {
        $data = [
            'title' => 'OSIS17KATA'
        ];
        return view("Auth/register4", $data);
    }

    public function register5()
    {
        $data = [
            'title' => 'OSIS17KATA'
        ];
        return view("Auth/register5", $data);
    }

    public function forget()
    {
        $data = [
            'title' => 'OSIS17KATA'
        ];
        return view("Auth/forget", $data);
    }

    public function logout()
    {
        $data = [
            'title' => 'OSIS17KATA'
        ];
        return view("Auth/logout", $data);
    }
}
