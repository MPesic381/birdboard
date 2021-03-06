@extends ('layouts.app')

@section('content')
    <header class="flex items-center mb-3 py-4">
        <div class="flex justify-between items-end w-full">
            <p class="text-grey text-sm font-normal">
                <a href="/projects" class="text-grey text-sm font-normal no-underline hover:underline">My Projects</a> / {{ $project->title }}
            </p>

            <a href="/projects/create" class="button">New Project</a>
        </div>
    </header>

    <main>
        <div class="lg:flex -mx-3">
            <div class="lg:w-3/4 px-3 mb-6">
                <div class="mb-8">
                    <h2 class="text-lg text-grey font-normal mb-3">Tasks</h2>
                    @foreach($project->tasks as $task)
                        <div class="card mb-3">
                            <form action="{{ route('project.tasks.update', [$project->id, $task->id]) }}" method="post">
                                @method('PATCH')
                                @csrf

                                <div class="flex">
                                    <input type="text" name="body" value="{{ $task->body }}" class="w-full {{ $task->completed ? 'text-grey' : '' }}">
                                    <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked ' : '' }}>
                                </div>
                            </form>
                        </div>
                    @endforeach
                    <div class="card mb-3">
                        <form action="{{ route('project.tasks.store', $project->id) }}" method="post">
                            @csrf
                            <input class="w-full" type="text" name="body" placeholder="Add new task...">
                        </form>
                    </div>
                </div>

                <div>
                    <h2 class="text-lg text-grey font-normal mb-3">General Notes</h2>

                    {{-- general notes --}}
                    <form action="{{ route('projects.update', $project->id) }}" method="post">
                        @method('PATCH')
                        @csrf

                        <textarea
                                class="card w-full"
                                style="min-height: 200px"
                                name="notes"
                                placeholder="Anyithing special that you want to make a note?"
                        >{{ $project->notes }}</textarea>
                        <button type="submit" class="button">Update</button>
                    </form>
                </div>
            </div>

            <div class="lg:w-1/4 px-3 lg:py-8">
                @include ('projects.card')
            </div>
        </div>
    </main>


@endsection
