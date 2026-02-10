<a href="{{ route('workers.create') }}">Add worker</a>

@if(session('success'))
    <p style="color: red">{{ session('success') }}</p>
@endif

<h2>Workers:</h2>

<ol>
    @foreach($workers as $worker)
        <li>
            name: {{$worker->name}} <br>
            surname: {{$worker->surname}} <br>

            <a href="{{ route('workers.edit', $worker) }}">Edit</a>
            <a href="{{ route('workers.show', $worker) }}">Show</a>

            <form action="{{ route('workers.destroy', $worker)  }}" method="post">
                @csrf
                @method('delete')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ol>
