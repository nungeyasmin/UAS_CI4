<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $menu = [
            'berenda' => [
                'title' => 'Beranda',
                'link' => base_url(),
                'icon' => 'fa-solid fa-house',
                'aktif' => 'active',
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
                'aktif' => '',
            ],
            'layanan' => [
                'title' => 'layanan',
                'link' => base_url() . '/layanan',
                'icon' => 'fa-solid fa-list',
                'aktif' => '',
            ],
        ];

        $breadcrumb = '<div class="col-sm-6">
                            <h1 class="m-0">Beranda</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">Beranda</li>
                            </ol>
                        </div>';    
        $data['menu'] = $menu;
        $data['breadcrumb'] = $breadcrumb;
        $data['title_card'] = "Welcome to loundry p2s2";
        $data['selamat_datang'] = "Selamat datang di aplikasi sedeharna";
        return view('template/content', $data);
    }
}