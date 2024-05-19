<?php

namespace App\Http\Controllers;

use App\Models\Main;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function index(){
        $main = Main::first();
        return view('seo',compact('main'));
    }

    public function post(Request $request){
        $main = Main::first();
        if($request->icon_website){
            if(file_exists('images/'.$main->icon_website)){
                unlink('images/'.$main->icon_website);
            }
            $imageName = '1' + time().'.'.$request->icon_website->extension();
            $request->icon_website->move(public_path('images'), $imageName);
            Main::where('id',1)->update([
                'icon_website' => $imageName
            ]);
        }
        Main::where('id',1)->update($request->except(['_token','icon_website']));
        return redirect()->back()->with('success','Data berhasil diubah');
    }
}
