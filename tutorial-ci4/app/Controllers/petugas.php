<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class petugas extends BaseController
{
    public function index()
    {
        $menu = [
            'berenda' => [
                'title' => 'Beranda',
                'link' => base_url(),
                'icon' => 'fa-solid fa-house',
                'aktif' => '',
            ],
            'santri' => [
                'title' => 'santri',
                'link' => base_url() . '/santri',
                'icon' => 'fa-solid fa-users',
                'aktif' => '',
            ],
            'petugas' => [
                'title' => 'petugas',
                'link' => base_url() .'/petugas',
                'icon' => 'fa-solid fa-address-card',
                'aktif' => 'active',
            ],
            'layanan' => [
                'title' => 'layanan',
                'link' => base_url() . '/layanan',
                'icon' => 'fa-solid fa-list',
                'aktif' => '',
            ],
        ];

        $breadcrumb = '<div class="col-sm-6">
                            <h1 class="m-0">petugas</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="' . base_url() .'">Beranda</a></li>
                                <li class="breadcrumb-item active">petugas</li>
                            </ol>
                        </div>';    
        $data['menu'] = $menu;
        $data['breadcrumb'] = $breadcrumb;
            return view('petugas/content', $data);
    
    }
}