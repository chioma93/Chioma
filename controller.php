<?php

namespace App\Http\Controllers;


class PagesController extends Controller{


	public function getIndex(){
		return "Home";


	}

	public function getAbout(){
		return "About me";


	}

	public function  getContact(){
			return "Hello!!! Welcome to my contact page";


   
   }
 
}
