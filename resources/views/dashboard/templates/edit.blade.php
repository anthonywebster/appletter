@extends('layouts.dashboard.master')

@section('title','Mis plantillas')

@section('breadcrumbs')
    @parent
    <li><a href="active">Mis Plantillas</a></li>
@endsection

@section('files-templates')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/summernote/summernote.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset($templateMain->template_name.'/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset($templateMain->template_name.'/css/mama_1.css') }}">
@endsection

@section('css')
    #save-template {
        float:right;
    }
    #Cont_Carta {
        height: 900px;
    }
@endsection

@section('plugins')
    <script type="text/javascript" src="{{ asset('js/plugins/summernote/summernote.js') }}"></script>
@endsection

@section('content')

    <div class="content-frame">

        {!! Form::open(['url' => 'host', 'method' => 'POST', 'id' => 'save-template']) !!}

            <input type="submit" value="Guardar" class="btn btn-success">
            <input type="hidden" id="id-template" value="{{ $template->id }}">
        {!! Form::close() !!}
        <br><br>
        <?php $dirImage = asset($templateMain->template_name.'/img\/'); ?>

        <div>
            <div id="main">
                {!! str_replace('img/',$dirImage,$template->content) !!}
            </div>
        </div>


    </div>

@endsection

@section('scripts')

    <script type="text/javascript">
        $(function()
        {
            $('#save-template').submit(function(e) {
                e.preventDefault();

                $('.summernote').destroy();
                var content = $("#main").html();
                var idTemplate = $("#id-template").val();
                var token = $("input[name='_token']").val();

                if (typeof(content) !== 'undefined' ) {
                    $.ajax({
                        url: '{{ env('URL') }}dashboard/templates/'+idTemplate,
                        headers: {'X-CSRF-TOKEN': token},
                        data: { content: content },
                        type: 'PATCH',
                        success: function(data){
                            if (data == 1)
                            {
                                alert("La Plantilla ha sido actualizada");
                                location.reload();
                            }
                        }
                    });
                }

            })
        });
    </script>
@endsection