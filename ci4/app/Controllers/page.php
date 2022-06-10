<?php

namespace App\controllers;

class Page extends BaseController
{
    public function about()
    {
        echo "Ini halaman About";
    }

    public function contact()
    {
        echo "ini halaman Contact";
    }

    public function faqs()
    {
        echo "Ini halaman FAQ";
    }
}