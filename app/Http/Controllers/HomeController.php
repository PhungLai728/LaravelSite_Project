<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    function store(Request $request){
        $name = $request->name;
        return redirect()->route('thanks',['name' => $name]);
    }
    function thanks($name, Request $request){
        return view('pages.thankyou')->with(compact('name'));
    }
    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function home()
    {
        return view('pages.home');
    }
}
