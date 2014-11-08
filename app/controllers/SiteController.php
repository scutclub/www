<?php

class SiteController extends BaseController {

	public function homePage($clubname)
	{
		return $clubname;
	}

	public function withPattern($clubname,$str)
	{
        if (View::exists($str))
        {
            return $str;
        }
		return Response::view('errors.404', array(), 404);
	}
}
