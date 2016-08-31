<?php namespace App\Http\Controllers;

use App\Http\Requests;

class PagesController extends Controller {

	public function home(){
        $people = ['FirstPerson','TwoPerson', 'ThirdPerson'];


        return view('welcome_test')->withPeople($people);
    }

    public function about(){
        return view('about');
    }

    public function vueex(){

        return view('vue/vueex');

    }

    public function skills(){

        return view('vue/skills');

    }

    public function plans(){

        return view('vue/plans');

    }

    public function lessons(){

        return view('vue/lessons');

    }

}
