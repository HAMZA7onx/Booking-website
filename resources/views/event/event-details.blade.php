@extends('layout.layout')
@section('content')
    <div class="h-full flex items-center justify-center">
        <livewire:event-details :event="$event"/>
    </div>
@endsection
