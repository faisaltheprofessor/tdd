@extends('layout')

@section('content')
    <a href="/projects" class="bg-teal-600 text-white hover:bg-teal-700 px-3 py-2 rounded font-bold txt-x">&larr; Back</a>
    <div class="mt-4">
        <h1 class="text-2xl font-bold">{{ $project->title }}</h1>
        <p class="text-sm"> {{ $project->description  }}</p>
    </div>
@endsection