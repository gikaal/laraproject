<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Home() {

        return view ("pages.Home");
    }



    // about page
    public function About() {

        return view ("pages.About");
    }



    // contact page
    public function Contact() {

        return view ("pages.Contact");
    }


}
