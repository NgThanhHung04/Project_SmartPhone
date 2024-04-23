<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Slide;


class PageController extends Controller
{
    public function getIndex()
    {
        // $slide = Slide::all();

       
        // print_r($slide);
        // exit;
        return view('page.trangchu');
        // return view('page.trangchu',['slide'=>$slide]);
    }

    public function getLoaiSp(){
        return view('page.loai_sanpham');
    }
    public function getChitiet(){
        return view('page.chitiet_sanpham');
    }

    public function getLienhe(){
        return view('page.lienhe');
    }
    public function getGioiThieu(){
        return view('page.gioithieu');
    }
}
