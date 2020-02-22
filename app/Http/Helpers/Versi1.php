<?php

if (! function_exists('createshortlink')) {
    function createshortlink($domain)
    {
        // definisikan huruf yang akan muncul
        $karakter = 'ABCDEFGHIJKLMNOPQRSTUPWXYZabcdefghijklmnopqrstupwxyz1234567890';
        // tempat menyimpan hasil huruf yang sudah diacak;
        $string = '';
        // lakukan proses pengulangan sebanyak jumlah huruf yang diinginkan
        // untuk saat ini adalah 4 huruf
        for ($i=0; $i < 4; $i++) { 
            // lakukan random data dengan nilai awal 0
            // dan nilai akhir sebanyak value "$karakter"
            $pos = rand(0, strlen($karakter)-1);
            // melakukan penggabungan antara nilai di kiri
            // dengan nilai kanan
            $string .= $karakter{$pos};
        }
        $shortlink = $domain.'/'.$string;
        return $shortlink;
    }
}

if (! function_exists('randomid')) {
    function randomid()
    {
        // definisikan huruf yang akan muncul
        $karakter = '123456789';
        // tempat menyimpan hasil huruf yang sudah diacak;
        $string = '';
        // lakukan proses pengulangan sebanyak jumlah huruf yang diinginkan
        // untuk saat ini adalah 4 huruf
        for ($i=0; $i < 1; $i++) { 
            // lakukan random data dengan nilai awal 0
            // dan nilai akhir sebanyak value "$karakter"
            $pos = rand(0, strlen($karakter)-1);
            // melakukan penggabungan antara nilai di kiri
            // dengan nilai kanan
            $string .= $karakter{$pos};
        }
        return $string;
    }
}

if (! function_exists('domain')) {
    function domain($domain)
    {
        if ($domain) {
            $nama_domain = $domain->nama_domain;
        } else {
            $nama_domain = '';
        }
        return $nama_domain;
    }
}

if (! function_exists('postblog')) {
    function postblog($post)
    {
        $p = explode('<br>',$post);
        return $p;
    }
}

if (! function_exists('getmenu')) {
    function getmenu($menu,$shortlink)
    {
    //    code
    }
}

// change date to indonesia date
if (! function_exists('date_indo')) {
    function date_indo($date)
    {
        if (!is_null($date)) {
            $tgl			= substr($date, 8,2);
            $bulan			= substr($date, 5,2);
            $tahun			= substr($date, 0,4);
            return $tgl.' '.bulan_indo($bulan).' '.$tahun;
        } else {
            $notif = 'Date Not Found';
            return $notif;
        }
    }
}


// date indo
if (! function_exists('bulan')) {
    function bulan()
    {
        $bulan 		= [	'01' => 'Januari',
                        '02' => 'Februari',
                        '03' => 'Maret',
                        '04' => 'April',
                        '05' => 'Mei',
                        '06' => 'Juni',
                        '07' => 'Juli',
                        '08' => 'Agustus',
                        '09' => 'September',
                        '10' => 'Oktober',
                        '11' => 'November',
                        '12' => 'Desember'];
        return $bulan;
    }
}
if (! function_exists('bulan_indo')) {
    function bulan_indo($m)
    {
        $bulan = bulan();
        return $bulan[$m];
    }
}

## mengambil bulan ini
if (! function_exists('getmonthindo')) {
    function getmonthindo() {
		return bulan_indo(date('m'));
	}
}

if (! function_exists('anymore')) {
    function anymore($data) {
        $string = '. . .';
        if (strlen($data) > 49) {
            return $string;
        }
	}
}
	
