<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function env()
    {
        echo getenv('APP_NAME');
    }
   
    public function students()
    {
	return $this->response->setJSON(db_connect()->table('students')->get()->getResultArray());
    }
}
