<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slink;
use App\Artikel;
use App\Kategori;
use App\Domain;
use App\Menu;

class HomepageController extends Controller
{
    public function index()
    {
        $kategori = FALSE;
        return view('index', compact('kategori'));
    }

    public function link($shortlink = null, Request $request)
    {
        // get domain shortlink
        if (is_null($shortlink)) {
            $domain = Domain::where('status','aktif')->first();
            return redirect(domain($domain));
        } else{
            $menu = Menu::where('nama',$shortlink)->first();
            if ($menu) {
                return view('menu',compact('menu'));
            } else {
                // save shortlink to session
                $request->session()->put('shortlink',$shortlink);
                $artikel = Artikel::find(randomid());
                return redirect('/blog/detail/'.$artikel->id);
            }
            
        }
    }
    
    public function detail(Artikel $artikel, Request $request)
    {
        // cek session
        if ($request->session()->has('shortlink')) {
            $domain = Domain::where('status','aktif')->first();
            $shortlink = domain($domain).'/'.$request->session()->get('shortlink');

            $link = Slink::where('link_short',$shortlink)->first();
            if ($link) {
                $view = $link->view + 1;
                // put view shorlink
                Slink::where('id',$link->id)->update([
                    'view' => $view,
                ]);
            } else {
                $link = FALSE;
            }
        } else {
            $link = FALSE;
        }
        $artikels = Artikel::where('id','<>',$artikel->id)->limit(3)->get();
        $kategori = Kategori::all();
        return view('blog.detail',compact('artikel','link','artikels','kategori'));
    }
}
