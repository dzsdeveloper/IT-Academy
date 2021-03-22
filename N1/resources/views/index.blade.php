@extends('layouts.app')

@section('content')

    <div class="text-center m-5">
        @if ($name)
            <h1>Bienvenido/a a la sección <strong>principal</strong>, {{ $name }}</h1>
        @else
            <h1>Bienvenido/a a la sección <strong>principal</strong></h1>
        @endif
    </div>

@endsection
