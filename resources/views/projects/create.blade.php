@extends('layout')
@section('content')
    <a href="/projects" class="bg-teal-600 text-white hover:bg-teal-700 px-3 py-2 rounded font-bold">&larr; Back</a>
    <h1 class="text-2xl font-bold my-4">Create a project</h1>

    <form action="/projects" method="post">
        @csrf
        <div class="mt-4">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>

        <div class="mt-4">
            <label for="description">Description</label>
            <textarea type="text" name="description" id="description" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
        </div>

        <div class="mt-4">
            <input type="submit" name="submit" id="submit" class="bg-teal-600 text-white hover:bg-teal-700 px-3 py-2 rounded font-bold txt-x">
        </div>

    </form>
@endsection
