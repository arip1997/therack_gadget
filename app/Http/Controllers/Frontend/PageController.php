<?php

namespace App\Http\Controllers\Frontend;
use App\Gambar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // Front End
    public function home()
    {
        return view ('frontend.page.home');
    }

    public function home1()
    {
        return view ('frontend.page.home1');
    }

    public function home2()
    {
        return view ('frontend.page.home2');
    }

    public function home3()
    {
        return view ('frontend.page.home3');
    }

    public function product()
    {
        $gambars = Gambar::get();
        // return view ('frontend.page.product');
        return view('frontend.page.product',['gambars' => $gambars]);

    }

    public function productdetail()
    {
        return view ('frontend.page.productdetail');
    }
    public function cart()
    {
        return view ('frontend.page.cart');
    }

    public function blog()
    {
        return view ('frontend.page.blog');
    }

    public function blogdetail()
    {
        return view ('frontend.page.blogdetail');
    }

    public function about()
    {
        return view ('frontend.page.about');
    }

    public function contact()
    {
        return view ('frontend.page.contact');
    }

    public function formlogin()
    {
        return view ('frontend.page.formlogin');
    }

    public function admin()
    {
        return view ('backend.page.admin');
    }

    public function coba()
    {
        return view ('layouts.coba');
    }

    // Back End

    public function products()
    {
        return view ('backend.page.products');
    }

    // Authentivication

    public function homeauth()
    {
        return view ('authhome.page.homeauth');
    }

    public function productauth()
    {
        return view ('authhome.page.productauth');
    }

    public function productdetailauth()
    {
        return view ('authhome.page.productdetailauth');
    }

    public function cartauth()
    {
        return view ('authhome.page.cartauth');
    }

    public function blogauth()
    {
        return view ('authhome.page.blogauth');
    }

    public function blogdetailauth()
    {
        return view ('authhome.page.blogdetailauth');
    }

    public function aboutauth()
    {
        return view ('authhome.page.aboutauth');
    }

    public function contactauth()
    {
        return view ('authhome.page.contactauth');
    }
        //Ubah Password
    public function ubahpassword()
    {
        return view ('auth.passwords.ubahpassword');
    }

    public function suksesubah()
    {
        return view ('auth.passwords.suksesubah');
    }










}
