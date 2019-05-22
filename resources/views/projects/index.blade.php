<!doctype html>
<head>
    <title>Projects</title>
</head>
<body>

<ul>
    @foreach($projects as $project)
        <li><a href="{{ $project->path() }}">{{ $project->title }}</a></li>
    @endforeach
</ul>

</body>
</html>