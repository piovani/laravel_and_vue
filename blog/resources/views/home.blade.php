@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <painel titulo="Dashboard">

                    <div class="row">
                        <div class="col-md-4">
                            <painel titulo="Conteudo 1" cor="blue">
                                teste de conteudo 1
                            </painel>
                        </div>

                        <div class="col-md-4">
                            <painel titulo="Conteudo 2" cor="orange">
                                teste de conteudo 2
                            </painel>
                        </div>

                        <div class="col-md-4">
                            <painel titulo="Conteudo 3" cor="yellow">
                                teste de conteudo 3
                            </painel>
                        </div>
                    </div>

                </painel>
            </div>
        </div>
    </div>
@endsection
