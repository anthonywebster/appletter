
@extends('layouts.dashboard.master')

@section('title','Payment')

@section('breadcrumbs')
    @parent
    <li><a href="active">Payment</a></li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form class="form-horizontal">
                <div class="panel panel-default tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Datos Personales</a></li>
                        <li><a href="#tab-second" role="tab" data-toggle="tab">Historial de pagos</a></li>

                    </ul>
                    <div class="panel-body tab-content">
                        <div class="tab-pane active" id="tab-first">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum dolor sem, quis pharetra dui ultricies vel. Cras non pulvinar tellus, vel bibendum magna. Morbi tellus nulla, cursus non nisi sed, porttitor dignissim erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc facilisis commodo lectus. Vivamus vel tincidunt enim, non vulputate ipsum. Ut pellentesque consectetur arcu sit amet scelerisque. Fusce commodo leo eros, ut eleifend massa congue at.</p>

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Nombre</label>
                                <div class="col-md-6 col-xs-12">
                                    <input type="text" class="form-control" value="Jonathan Abzalon"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Apellidos</label>
                                <div class="col-md-6 col-xs-12">
                                    <input type="text" class="form-control" value="Cortez Mendiola"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Fecha de Nacimiento</label>
                                <div class="col-md-2">
                                    <select class="form-control select">
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                        <option selected="selected">04</option>
                                        <option>05</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <select class="form-control select">
                                        <option>01</option>
                                        <option selected="selected">02</option>
                                        <option>03</option>
                                        <option>04</option>
                                        <option>05</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <select class="form-control select">
                                        <option>1985</option>
                                        <option>1986</option>
                                        <option>1987</option>
                                        <option>1988</option>
                                        <option selected="selected">1989</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-xs-12 control-label">Tipo de pago</label>
                                <div class="col-md-2">
                                    <select class="form-control select">
                                        <option selected="selected">PayPal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-xs-12 control-label">E-mail</label>
                                <div class="col-md-6 col-xs-12">
                                    <input type="text" class="form-control" value="jonathan_cortes@hotmail.es"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">E-mail</label>
                                <div class="col-md-6 col-xs-12">
                                    <label class="check"><input type="checkbox" class="icheckbox" checked="checked"/> Deseo recibir email</label>

                                </div>
                            </div>

                        </div>
                        <div class="tab-pane" id="tab-second">
                            <p>Donec tristique eu sem et aliquam. Proin sodales elementum urna et euismod. Quisque nisl nisl, venenatis eget dignissim et, adipiscing eu tellus. Sed nulla massa, luctus id orci sed, elementum consequat est. Proin dictum odio quis diam gravida facilisis. Sed pharetra dolor a tempor tristique. Sed semper sed urna ac dignissim. Aenean fermentum leo at posuere mattis. Etiam vitae quam in magna viverra dictum. Curabitur feugiat ligula in dui luctus, sed aliquet neque posuere.</p>
                        </div>

                        <div class="panel-footer">
                            <button class="btn btn-primary pull-right">Guardar Cambios <span class="fa fa-floppy-o fa-right"></span></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection