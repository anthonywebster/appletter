@extends('layouts.dashboard.master')

@section('title','Pagos')

@section('breadcrumbs')
    @parent
    <li><a href="active">Lista de Pagos</a></li>
@endsection

@section('content')
    <h1>Lista de Plantillas</h1>

    @if (!empty($payments))

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>E-mail</th>
                    <th>Plantilla</th>
                    <th>Fecha Pago</th>
                    <th>Monto</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $payments as $payment)
                    <?php
                    $templateUser = \App\TemplateUser::findOrFail($payment->template_users_id);

                    $user = $templateUser->user;
                    $tmpl = $templateUser->template;
                    ?>
                    <tr>
                        <td>
                            {{ $user->name }}
                        </td>

                        <td>
                            {{ $user->email }}
                        </td>

                        <td>
                            {{ $tmpl->name }}
                        </td>
                        <td>
                            {{ $payment->created_at }}
                        </td>
                        <td>
                            U& {{ number_format($payment->amount,2) }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    @endif

@endsection