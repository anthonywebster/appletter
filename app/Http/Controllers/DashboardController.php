<?php

namespace App\Http\Controllers;

use App\Template;
use App\TemplateUser;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct(){
        
    }

    public function index()
    {
        $userId = \Auth::user()->id;
        $templateUser = TemplateUser::where('user_id',$userId)->first();

        if ( !empty($templateUser) ) {

            $templates = TemplateUser::where('user_id',$userId)->get();
            $templatesMain = Template::lists("name","id")->toArray();

            return view('dashboard.templates.index',compact('templates','templatesMain'));

        } else {
            $templates = Template::all();
            $new = true;
            return view('dashboard.templates.templates',compact('templates','new'));
        }

        return view('dashboard.index');
    }
}
