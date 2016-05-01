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
    .margin {
        margin-bottom:300px;
    }
@endsection

@section('plugins')
    <script type="text/javascript" src="{{ asset('js/plugins/summernote/summernote.js') }}"></script>
@endsection

@section('content')

    <div class="content-frame">


        {!! Form::open(['url' => 'host', 'method' => 'POST', 'id' => 'save-template']) !!}

            @if ($template->changed != 1)
            <a class="btn btn-info" href="/dashboard/templates/{{ $template->id }}/cambiar">Cambiar Plantilla</a>
            @endif
            <button id="edit" class="btn btn-primary" type="button">Edit Contenido</button>
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

    <div class="margin"></div>

@endsection

@section('scripts')

<script type="text/javascript">
    $(function()
    {
        $("#edit").click(function() {
            $('.summernote').summernote({focus: true});
        });

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