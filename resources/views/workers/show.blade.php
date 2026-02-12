<div>name: {{$worker->name}}</div>
<div>surname: {{$worker->surname}}</div>

@if(isset($worker->position))
    <div>position: {{ $worker->position->title }}</div>
    <div>salary: {{ $worker->position->salary }}</div>
@endif

<br>
<a href="{{ route('workers.index') }}">main page</a>
