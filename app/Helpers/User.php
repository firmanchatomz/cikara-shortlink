<?php
namespace App\Helpers;

use Illuminate\Support\Facades\DB;
use Date;

class User {
    public static function totalartikelkategori($kategori_id) {
        $total = DB::table('artikel')->where('kategori_id', $kategori_id)->count();
        return $total;
    }

    public static function getmenu() {
        $menu = DB::table('menu')->get();
        return $menu;
    }

    public static function totaldata($table)
    {
        $total = DB::table($table)->count();
        return $total;
    }

    public static function chart1($bulan)
    {
        $bulan  = Date('Y').'-'.$bulan.'-';
        
        $string = null;
        for ($i=1; $i <= Date('d'); $i++) { 
            if ($i < 10) {
                $tgl = '0'.$i;
            } else {
                $tgl = $i;
            }
            $slink = DB::table('slink')->select(DB::raw('SUM(view) as jumlah'))->whereDate('created_at', $bulan.$tgl)->first();
            if ($slink->jumlah > 1) {
                $jumlah = $slink->jumlah;
            } else {
                $jumlah = '0';
            }
            
            $string .= $jumlah.',';
        }
        return rtrim($string,',');
    }
    public static function chart2()
    {
        $string = null;
        for ($i=1; $i <= 12; $i++) { 
            if ($i < 10) {
                $bulan = '0'.$i;
            } else {
                $bulan = $i;
            }
            $slink = DB::table('slink')->select(DB::raw('SUM(view) as jumlah'))->whereMonth('created_at',$bulan)->first();
            if ($slink->jumlah > 1) {
                $jumlah = $slink->jumlah;
            } else {
                $jumlah = '0';
            }
            
            $string .= $jumlah.',';
        }
        return rtrim($string,',');
    }

    public static function chart3($bulan)
    {
        $slink = DB::table('slink')->orderby('view','DESC')->whereMonth('created_at',$bulan)->limit(3)->get();
        return $slink;
    }




}