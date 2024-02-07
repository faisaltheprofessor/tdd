@extends('layout')

@section('content')
    <header class="flex justify-between items-center flex-wrap">
        <h1 class="text-gray-500 text-sm font-normal">My Projects</h1>
        <a href="/projects/create"
           class="bg-[#47cdff] text-white text-sm font-bold hover:bg-[#b0eaff] px-6 py-2 rounded-lg">Add Project</a>
    </header>

    <div class="flex mt-4 flex-wrap -mx-6">

        @forelse($projects as $project)
        <x-card :project="$project"/>
        @empty
            <p>No Projects yet.</p>
        @endforelse
    </div>

@endsection
