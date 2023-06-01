<?php

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Homepagina'
        ];

        $this->view('home/index', $data);
    }
}