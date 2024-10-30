<?php

namespace App\Models;



class Aritmatika 
{
    public function tambah($a,$b)
    {
        $c= $a + $b;
        return $c;
    }
    public function kurang($a,$b)
    {
        $c= $a - $b;
        return $c;
    }
    public function kali($a,$b)
    {
        $c= $a * $b;
        return $c;
    }
    public function bagi($a,$b)
    {
        $c= $a / $b;
        return $c;
    }
}
