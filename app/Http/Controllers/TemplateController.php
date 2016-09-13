<?php

namespace App\Http\Controllers;

use App\Payments;
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
        $templatesMain = Template::lists("name","id")->toArray();

        return view('dashboard.templates.index',compact('templates','templatesMain'));
    }

    public function all()
    {
        $templates = Template::all();
        return view('dashboard.templates.templates',compact('templates'));
    }

    public function lista()
    {
        
        $templates = TemplateUser::all();
        return view('dashboard.templates.lista',compact('templates'));
    }

    public function payments()
    {
        $payments = Payments::all();

        return view('dashboard.templates.payments',compact('payments'));
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
        //Test
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

        return view('dashboard.templates.show',compact('template','templateMain','id'));
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

        return 1;
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
        $infoTemplate = TemplateUser::where('id',$id)->first();

        if ( !empty($infoTemplate) ) {
            $user = User::findOrFail($infoTemplate->user_id);
            Mail::send('emails.content-mail',
                array(
                    'name' => $user->name,
                    'email' => $user->email,
                    'id_template' => $id
                ), function($message) {
                    $message->from('fernando@ibisservicios.com','Admin Site');
                    $message->to('lariosly2@gmail.com', 'Admin Site')->subject('Plantilla Personalizada');
                }
            );

            flash()->success("Su mensaje ha sido enviado");
            return redirect()->back();

        } else {
            flash()->error("Hubo un error al tratar de enviar la plantilla por correo");
            return redirect()->back();
        }


    }

    public function change($id)
    {
        $templatesMain = Template::lists("name","id")->toArray();
        $templates = Template::all();
        
        return view('dashboard.templates.change',compact('id','templates','templatesMain'));
    }

    public function templateChange(Request $request)
    {

        $templateMain = Template::findOrFail($request["template"]);

        $template = TemplateUser::findOrFail($request["template_user"]);

        $template->content = $templateMain->content;
        $template->template_id = $templateMain->id;
        //$template->changed = 1;

        $template->save();

        flash()->success("La Plantilla ha sido cambiada");
        return redirect('dashboard/templates/');
    }

    public function imprimir($id)
    {
        $template = TemplateUser::findOrFail($id);
        $templateMain = Template::findOrFail($template->template_id);

        return view('templates.print',compact('template','templateMain'));
    }
}
