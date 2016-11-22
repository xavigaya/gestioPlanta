@extends('master')
@section('title', 'Contacte')
@section('content')
    <div class ="container col-md-8 col-md-offset-2">
        <div class ="well well bs-component">
            <form class ="form-horizontal" method="post">
                @foreach ($errors->all() as $error)
                    <p class ="alert alert-danger">{{ $error }}</p>
                @endforeach
                @if (session('status'))
                    <div class ="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <fieldset>
                    <legend>Afegir un Contacte</legend>
                    <div class ="form-group">
                        <label for ="name" class ="col-lg-2 control-label">Nom</label>
                        <div class ="col-lg-10">
                            <input type="text" class ="form-control" id ="name" placeholder="Nom client" name="name">
                        </div>
                    </div>
                    <div class ="form-group">
                        <label for ="surname" class ="col-lg-2 control-label">Cognom</label>
                        <div class ="col-lg-10">
                            <input type="text" class ="form-control" id ="surname" placeholder="Cognom" name="surname">
                        </div>
                    </div>
                    <div class ="form-group">
                        <label for ="address" class ="col-lg-2 control-label">Adreça</label>
                        <div class ="col-lg-10">
                            <input type="text" class ="form-control" id ="address" placeholder="Adreça" name="address">
                        </div>
                    </div>
                    <div class ="form-group">
                        <label for ="phone1" class ="col-lg-2 control-label">Tlf. Principal</label>
                        <div class ="col-lg-10">
                            <input type="text" class ="form-control" id ="phone1" placeholder="" name="phone1">
                        </div>
                    </div>
                    <div class ="form-group">
                        <label for ="phone2" class ="col-lg-2 control-label">Tlf. Secundari </label>
                        <div class ="col-lg-10">
                            <input type="text" class ="form-control" id ="phone2" placeholder="" name="phone2">
                        </div>
                    </div>
                    <div class ="form-group">
                        <label for ="courtesy" class ="col-lg-2 control-label">Adreçament</label>
                        <div class ="col-lg-10">
                            <input type="text" class ="form-control" id ="courtesy" placeholder="" name="courtesy_id">
                        </div>
                    </div>
                    <div class ="form-group">
                        <label for ="company" class ="col-lg-2 control-label">Empresa</label>
                        <div class ="col-lg-10">
                            <input type="text" class ="form-control" id ="company" placeholder="" name="company_id">
                        </div>
                    </div>
                    <div class ="form-group">
                        <label for ="position" class ="col-lg-2 control-label">Càrrec</label>
                        <div class ="col-lg-10">
                            <input type="text" class ="form-control" id ="position" placeholder="Càrrec" name="position">
                        </div>
                    </div>
                    
                    <div class ="form-group">
                        <div class ="col-lg-10 col-lg-offset-2">
                            <button type="reset" class ="btn btn-default">Cancel·lar</button>
                            <button type="submit" class ="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection