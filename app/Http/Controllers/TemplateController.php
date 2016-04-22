<?php

namespace App\Http\Controllers;

use App\Template;
use App\TemplateUser;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Mail;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->id;
        $templates = TemplateUser::where('user_id',$user)->get();


        return view('dashboard.templates.index',compact('templates'));
    }

    public function all()
    {
        $templates = Template::all();

        return view('dashboard.templates.templates',compact('templates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $template = TemplateUser::findOrFail($id);
        $templateMain = Template::findOrFail($template->template_id);

        return view('dashboard.templates.show',compact('template','templateMain'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $template = TemplateUser::findOrFail($id);
        $templateMain = Template::findOrFail($template->template_id);

        return view('dashboard.templates.edit',compact('template','templateMain'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $info = TemplateUser::findOrFail($id);
        $info->update($request->all());

        return $request["content"];
    }

    public function updateContent($content)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function send($id)
    {
        $user = User::findOrFail($id);
        Mail::send('emails.content-mail',
            array(
                'name' => $user->name,
                'email' => $user->email,
                'id_template' => $id
            ), function($message) {
                $message->from('lariosly2@gmail.com','Admin Site');
                $message->to('fernando@ibisservicios.com', 'Admin Site')->subject('Plantilla Personalizada');
            }
        );

        flash()->success("Su mensaje ha sido enviado");
        return redirect()->back();

    }

    public function imprimir($id)
    {
        $template = TemplateUser::findOrFail($id);
        $templateMain = Template::findOrFail($template->template_id);

        return view('templates.print',compact('template','templateMain'));
    }
}
