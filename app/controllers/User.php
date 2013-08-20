<?php

class UserController extends HomeController {
	
	protected $layout = 'layouts.master';

	public function showProfile()
	{
		$this->layout->content = View::make('user.profile');
	}
}