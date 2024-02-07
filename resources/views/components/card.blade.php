@props([
    /** @var \App\Models\Project */
    'project'
])

<div {{ $attributes->class(['w-full md:w-1/2 lg:w-1/3 p-3']) }}>
    <div class="bg-white rounded shadow p-3 h-[200px]">
        <h3 class="text-xl py-3 border-l-4 -ml-3 pl-4 border-[#b0eaff]
                  "><a href="{{ $project->path() }}">{{ $project->title }}</a></h3>

        <div class="mt-1 text-black/50">
            {{Str::limit($project->description) }}
        </div>
    </div>
</div>