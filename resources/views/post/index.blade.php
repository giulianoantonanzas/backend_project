@extends('base')
@section('title') Post Index @endsection
@section('content')
    <table>
        <thead>
            <tr>
                <th>{{ "ID "}}</th>
                <th>{{ "TITLE"}}</th>
                <th>{{}}</th>
                <th>{{}}</th>
            </tr>
        </thead>

        <tbody>
            @if (count($posts)>=1)
                
            @else
                
            @endif
        </tbody>

    </table>
@endsection
