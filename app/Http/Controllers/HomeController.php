<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Slink;
use Date;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $jumlahview = Slink::select(DB::raw("SUM(view) as jumlah"))->first();
        // session form top rate
        if ($request->session()->has('formtoprate')) {
            $datatoprate = $request->session()->get('formtoprate');
        } else {
            $datatoprate = Date('m');
        }
        if ($request->session()->has('formtanggal')) {
            $datatanggal = $request->session()->get('formtanggal');
        } else {
            $datatanggal = Date('m');
        }
        if ($request->session()->has('formtopreferer')) {
            $datatopreferer = $request->session()->get('formtopreferer');
        } else {
            $datatopreferer = Date('m');
        }
        
        return view('admin.beranda',compact('jumlahview','datatoprate','datatanggal','datatopreferer'));
    }

    public function shortlink()
    {
        $slink = Slink::all();
        return view('admin.slink.index',compact('slink'));
    }

    public function post($data, Request $request)
    {
        if (isset($_POST['bulan'])) {
            $bulan = $_POST['bulan'];
            switch ($data) {
                case 'toprate':
                    $request->session()->put('formtoprate',$bulan);
                    break;
                case 'topreferer':
                    $request->session()->put('formtopreferer',$bulan);
                    break;
                case 'tanggal':
                    $request->session()->put('formtanggal',$bulan);
                    break;
                
                default:
                    # code...
                    break;
            }
            return redirect('/cikara/home');
        }
    }
}
