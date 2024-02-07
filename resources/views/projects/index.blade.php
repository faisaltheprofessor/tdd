@extends('layout')

@section('content')
   <div class="flex justify-between">
       <h1 class="text-2xl font-bold">Billboard with TDD</h1>
       <a href="/projects/create" class="bg-teal-600 text-white hover:bg-teal-700 px-3 py-2 rounded font-bold txt-xs">New</a>
   </div>

   <div class="flex mt-4">

       @forelse($projects as $project)
           <div class="bg-white mr-4 rounded shadow w-1/3 p-5 h-[200px]">
               <h3 class="text-xl py-2">{{ $project->title }}</h3>

               <div class="mt-1 text-black/50">
                   {{Str::limit($project->description) }}
               </div>
           </div>

       @empty
           <p>No Projects yet.</p>
       @endforelse
   </div>

@endsection
