@extends('layouts.dashboard.master')

@section('title','Plantillas')

@section('breadcrumbs')
    @parent
    <li><a href="active">Plantillas</a></li>
@endsection

@section('content')
    <h1>Lista de Plantillas</h1>

    @if (!empty($templates))

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Plantilla</th>
                    <th>Fecha</th>
                    <th>Ver</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $templates as $template)
                    <?php
                    $user = $template->user;
                    $tmpl = $template->template;
                    ?>
                    <tr>
                        <td>
                            {{ $user->name }}
                        </td>
                        <td>
                            {{ $tmpl->name }}
                        </td>
                        <td>
                            {{ $template->created_at }}
                        </td>
                        <td>
                            <a class="btn btn-success" href="/dashboard/templates/{{ $template->id }}/imprimir">Ver</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    @endif

@endsection