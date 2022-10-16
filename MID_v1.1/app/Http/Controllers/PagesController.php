<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use App\Http\Requests\StorePagesRequest;
use App\Http\Requests\UpdatePagesRequest;

class PagesController extends Controller
{
    public function index()
    {
        $message = "Welcome";
        return View('home')->with('message', $message);
    }
    public function product()
    {
        $names = array("Burger", "Fries", "Hotdog", "BBQ Chicken");
        return view('product')
            ->with('names', $names);
    }
    public function contact()
    {
        $phone = ": 01711223344";
        $fax = ": +880-1131451";
        $email = ": arnob@gmail.com";
        return view('contact')
            ->with('phone', $phone)
            ->with('fax', $fax)
            ->with('email', $email);
    }
    public function about()
    {
        return view('about');
    }
    public function team()
    {
        $person1 = array("Name: Arjun", "Phone: 01511223344", "Email: arjun@gmail.com");
        $person2 = array("Name: Kumar", "Phone: 01712345156", "Email: kumar@gmail.com");
        $person3 = array("Name: Bose", "Phone: 01511223344", "Email: bose@gmail.com");
        return view('team')
            ->with('person1', $person1)
            ->with('person2', $person2)
            ->with('person3', $person3);
    }
}
