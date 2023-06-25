{{--  SE SI USA UN LAYOUT  --

@yield('nome section', 'contents')

-------- OPPURE --------

@yield('nome section')

<CONTENT>

@endsection  --}}

@extends('layouts.base')

{{-- title della pagina --}}
@section('title', 'DC - Home')

{{-- main --}}
@section('main')

    {{-- jumbo --}}
    <div class="jumbo"></div>

    {{-- card comics --}}
    @include('partials.comics')

    {{-- icons --}}
    @include('partials.icon')

@endsection