@extends('layouts.auth')

@section('content')
<livewire:user.avaluos.crear-avaluo-button>

<livewire:user.avaluos.avaluos-list :misAvaluos=$misAvaluos>

@endsection
