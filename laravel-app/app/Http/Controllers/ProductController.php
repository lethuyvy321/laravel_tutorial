<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $title = 'Laravel Course';
        $x = 1;
        $y = 2;
        $name = 'Hadi';
        $myphone = [
            'name' => 'iphone 14',
            'year' => 2022
        ];
        // with chỉ chuyền được 1 paramenter
        // compact chuyền được nhiều parameters
        // return view('products.index', compact('title', 'x','y'));
        // return view('products.index')->with('myphone', $myphone);
        // return view ('products.index', [
        //     'myphone' => $myphone
        // ]);
        print_r(route('products'));
        return view('products.index');
    }

    public function detail($id) {

        return 'Product is id = '.$id;
        // $phones =[
        //     'iphone' => 'iphone 12',
        //     'iphone 15' => 'iphone 15',
        //     'samsung' => 'samsung A50'
        // ];
        // return view('products.index', [
        //     'product' => $phones[$name] ?? 'Không tìm thấy!!!'
        // ]);
    }
}
