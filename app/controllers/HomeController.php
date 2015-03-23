<?php

class HomeController extends BaseController {

	

	public function home()
	{
               
          //  Mail::send('emails.auth.Test',array('name'=>'Alex'),function($message){
           // $message->to('sanka4msl@gmail.com','gfgfgf')->subject('Test mail');});
		return View::make('home');
	}

}
