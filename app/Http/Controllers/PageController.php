<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Gallery;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home.index');
    }

    public function about()
    {
        $certificates = Certificate::all();

        return view('pages.about.index', ['certificates' => $certificates]);
    }
    public function consultations()
    {
        return view('pages.consultations.index');
    }
    public function puppy()
    {
        return view('pages.puppy.index');
    }
    public function choice()
    {
        return view('pages.help-choice.index');
    }
    public function petsitting()
    {
        return view('pages.petsitting.index');
    }

    public function gallery()
    {

        $images = Gallery::all();


        return view('pages.gallery.index', ['images' => $images]);
    }
    public function contact()
    {
        return view('pages.contact.index');
    }
}
