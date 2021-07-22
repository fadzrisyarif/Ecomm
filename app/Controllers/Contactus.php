<?php

namespace App\Controllers;

class Contactus extends BaseController
{
	public function index()
	{
		$data = [
            'title' => 'Contact Us'
        ];
        return view('pages/contactus', $data);
	}
}
