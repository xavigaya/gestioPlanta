@extends('master')
@section('title', 'Contactes')
@section('content')

        <div class="container col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Contactes</h2>
                </div>
                @if (session('status'))
                    <div class ="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                @if(!isset($contacts))
                    <p>No hi ha cap tipus de contacte</p>
                @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th>Cognoms</th>
                                <th>Adreça</th>
                                <th>Tlf. principal</th>
                                <th>Tlf. Secundari</th>
                                <th>Adreçament</th>
                                <th>Empresa</th>
                                <th>Càrrec</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $contact)
                                <tr>
                                    <td>
                                        {!! $contact->id !!}
                                    </td>
                                    <td>
                                        {!! $contact->name !!}
                                    </td>
                                    <td>
                                        {!! $contact->surname !!}
                                    </td>
                                    <td>
                                        {!! $contact->address !!}
                                    </td>
                                    <td>
                                        {!! $contact->phone1 !!}
                                    </td>
                                    <td>
                                        {!! $contact->phone2 !!}
                                    </td>
                                    <td>
                                        {!! $contact->courtesy !!}
                                    </td>
                                    <td>
                                        {!! $contact->company !!}
                                    </td>
                                    <td>
                                        {!! $contact->position !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>


@endsection