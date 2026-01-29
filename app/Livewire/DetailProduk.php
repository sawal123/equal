<?php

namespace App\Livewire;

use Livewire\Component;

class DetailProduk extends Component
{
    public $produk;


    public function mount($id)
    {
        $produkList = [
            [
                'title' => 'Equallfresh 220ml',
                'gambar' => '1.jpg',
                'deskripsi' => 'Equallfresh 220ml adalah air minum dalam kemasan yang praktis dan higienis. Cocok untuk aktivitas harian, rapat, perjalanan, maupun acara formal.',
                'volume' => '220 ml',
                'kegunaan' => 'Rapat, event, sekolah, konsumsi pribadi',
            ],
            [
                'title' => 'Equallfresh 500ml',
                'gambar' => '2.jpg',
                'deskripsi' => 'Equallfresh 500ml dirancang untuk menemani aktivitas Anda sepanjang hari. Ukurannya pas, mudah dibawa, dan menjaga tubuh tetap terhidrasi.',
                'volume' => '500 ml',
                'kegunaan' => 'Olahraga, kerja, perjalanan jauh',
            ],
            [
                'title' => 'Equallfresh 19L',
                'gambar' => '3.jpg',
                'deskripsi' => 'Equallfresh 19L merupakan solusi air minum keluarga dan kantor. Lebih hemat, bersih, dan aman untuk dikonsumsi setiap hari.',
                'volume' => '19 Liter',
                'kegunaan' => 'Rumah tangga, kantor, usaha',
            ],
        ];

        abort_if(!isset($produkList[$id]), 404);

        $this->produk = $produkList[$id];
    }
    public function render()
    {
        return view('livewire.detail-produk')->layout('layouts.app');
    }
}
