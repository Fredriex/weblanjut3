<?php

namespace App\Http\Controllers;

use App\Models\Aritmatika;
use App\Models\Hitung;
use Illuminate\Routing\Controller as baseController;

class Controller extends BaseController
{
    // public function prosestambah($a,$b)
    // {
    //     $h = new Hitung();
    //     echo $h->tambah($a,$b);
    // }

    public function latihan9($op, $x, $y)
    {
        $h = new Aritmatika();
        $result = '';

        switch ($op) {
            case 'tambah':
                $result = $h->tambah($x, $y);
                break;
            case 'kurang':
                $result = $h->kurang($x, $y);
                break;
            case 'kali':
                $result = $h->kali($x, $y);
                break;
            case 'bagi':
                $result = $h->bagi($x, $y);
                break;
            default:
                $result = "Operasi tidak valid";
        }

        return view('arit2',['hasil' => $result]);
    }
    public function latihan10()
    {
        return view('arit');
    }
}
