<?php
namespace App\Controllers;
use App\Models\ArtikelModel;
class Page extends BaseController
{
    public function about()
    {
        return view('about', [
            'title' => '',
            'content' => ''
            ]);
    }
    public function kontak()
    {
        return view('kontak', [
            'title' => '',
            'content' => ''
            ]);
    }
    public function artikel()
    {
        $title = 'Daftar Artikel';
        $model = new ArtikelModel();
        $artikel = $model->findAll();
        return view('artikel/index', compact('artikel', 'title'));
    }
    public function tos()
    {
    echo "ini halaman Term of Services";
    }

}