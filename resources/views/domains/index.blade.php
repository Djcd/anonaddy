@extends('layouts.app')

@section('content')
    <div class="container py-8">
        @include('shared.status')

        <domains :initial-domains="{{json_encode($domains)}}" />
    </div>
@endsection