<a href="{{ route('workers.index') }}">main page</a> <br>
<a href="{{ route('positions.create') }}">Add position</a>

@if(session('success'))
    <p style="color: red">{{ session('success') }}</p>
@endif

<h2>Positions:</h2>

<ol>
    @foreach($positions as $position)
        <li>
            <div>title: {{ $position->title }}</div>
            <div>salary: {{ $position->salary }}</div>

            <a href="{{ route('positions.edit', $position) }}">Edit</a>
            <a href="{{ route('positions.show', $position) }}">Show</a>

            <form action="{{ route('positions.destroy', $position)  }}" method="post">
                @csrf
                @method('delete')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ol>
