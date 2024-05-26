<?php

namespace App\Http\Controllers;

use App\Models\Main;
use Illuminate\Http\File;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $main = Main::first();
        return view('dashboard',compact('main'));
    }

    public function icon(Request $request){
        $main = Main::first();
        if($request->icon1){
            if(file_exists('images/'.$main->icon1)){
                unlink('images/'.$main->icon1);
            }
            $imageName = '1' + time().'.'.$request->icon1->extension();
            $request->icon1->move(public_path('images'), $imageName);
            Main::where('id',1)->update([
                'icon1' => $imageName
            ]);
        }
        if($request->icon2){
            if(file_exists('images/'.$main->icon2)){
                unlink('images/'.$main->icon2);
            }
            $imageName = '2' + time().'.'.$request->icon2->extension();
            $request->icon2->move(public_path('images'), $imageName);
            Main::where('id',1)->update([
                'icon2' => $imageName
            ]);
        }
        if($request->icon3){
            if(file_exists('images/'.$main->icon3)){
                unlink('images/'.$main->icon3);
            }
            $imageName = '3' + time().'.'.$request->icon3->extension();
            $request->icon3->move(public_path('images'), $imageName);
            Main::where('id',1)->update([
                'icon3' => $imageName
            ]);
        }

        return redirect()->back()->with('success','Icon berhasil diubah');

    }

    public function banner(Request $request){
        $main = Main::first();
        if($request->bg1){
            if(file_exists('images/'.$main->bg1)){
                unlink('images/'.$main->bg1);
            }
            $imageName = '1' + time().'.'.$request->bg1->extension();
            $request->bg1->move(public_path('images'), $imageName);
            Main::where('id',1)->update([
                'bg1' => $imageName
            ]);
        }
        if($request->bg2){
            if(file_exists('images/'.$main->bg2)){
                unlink('images/'.$main->bg2);
            }
            $imageName = '2' + time().'.'.$request->bg2->extension();
            $request->bg2->move(public_path('images'), $imageName);
            Main::where('id',1)->update([
                'bg2' => $imageName
            ]);
        }
        if($request->mobil1){
            if(file_exists('images/'.$main->mobil1)){
                unlink('images/'.$main->mobil1);
            }
            $imageName = '3' + time().'.'.$request->mobil1->extension();
            $request->mobil1->move(public_path('images'), $imageName);
            Main::where('id',1)->update([
                'mobil1' => $imageName
            ]);
        }
        if($request->mobil2){
            if(file_exists('images/'.$main->mobil2)){
                unlink('images/'.$main->mobil2);
            }
            $imageName = '4' + time().'.'.$request->mobil2->extension();
            $request->mobil2->move(public_path('images'), $imageName);
            Main::where('id',1)->update([
                'mobil2' => $imageName
            ]);
        }

        return redirect()->back()->with('success','Pengaturan banner berhasil diubah');
    }

    public function deskripsi(Request $request){
        Main::where('id',1)->update([
            'deskripsi' => $request->editor1
        ]);

        return redirect()->back()->with('success','Deskripsi berhasil diubah');
    }

    public function link(Request $request){
        Main::where('id',1)->update($request->except(['_token']));
        return redirect()->back()->with('success','Pengaturan link berhasil diubah');
    }
}
