<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
        $data = [
            'title' => 'Home | Fadzri Syarif'
        ];
		return view('pages/home', $data);
	}
    public function about()
    {   
        $data = [
            'title' => 'About Me'
        ];
        return view('pages/about', $data);
    }
}
