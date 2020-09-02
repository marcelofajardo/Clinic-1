@extends('theme.backoffice.layouts.admin')

@section('title','Página demo')
    
@section('head')

@endsection
@section('content')
        
    <div class="section">
        <p class="caption"><strong>Rol : </strong> {{$role->name}}</p>
        <div class="divider"></div>
        <div id="basic-form" class="section">
            <div class="row">
                <div class="col s12 m8 offset-m2">
                    <div class="card-panel">
                        <h4 class=" header2">Usuarios con el Rol de : {{$role->name}} </h4>
                        
                        <div class="row">
                                <p><strong>Descripción: </strong>{{$role->description}}</p>
                                <p><strong>Slug: </strong>{{$role->slug}}</p>
                        </div>                    

                    </div>

                </div>
            </div>

        </div>

    </div>

@endsection

@section('foot')    
@endsection
    