<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home User',
        ];
        return view('user/index', $data);
    }
}
