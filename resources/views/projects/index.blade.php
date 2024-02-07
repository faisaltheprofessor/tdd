@extends('layout')

@section('content')
   <div class="flex justify-between">
       <h1 class="text-2xl font-bold">Billboard with TDD</h1>
       <a href="/projects/create" class="bg-teal-600 text-white hover:bg-teal-700 px-3 py-2 rounded font-bold txt-xs">New</a>
   </div>
   <ul role="list" class="divide-y divide-gray-100">
     @foreach($projects as $project)
           <a href="{{ $project->path() }}">
               <li class="flex justify-between gap-x-6 py-5">
                   <div class="flex min-w-0 gap-x-4">
                       <div class="min-w-0 flex-auto">
                           <p class="text-sm font-semibold leading-6 text-gray-900">{{ $project->title }}</p>
                           <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ $project->description }}</p>
                       </div>
                   </div>
               </li>
           </a>
     @endforeach
   </ul>
@endsection
