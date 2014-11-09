<?php

class SiteController extends BaseController {

	public function homePage($clubname)
	{
        if (file_exists("./sites/".$clubname."/conf.json")){
            $conf_file = "./sites/".$clubname."/conf.json";
            $conf_str = file_get_contents($conf_file);
            $conf = json_decode($conf_str, true);
        }
        if (View::exists('sites.'.$clubname.'.index'))
        {
            return View::make('sites.'.$clubname.'.index', $conf);
        }
        return Response::view('errors.404', array(), 404);

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
