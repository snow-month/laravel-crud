<form action="{{ route('workers.update', $worker) }}" method="post">
    @csrf
    @method('put')
    <label for="name">Name:</label>
    <input type="text" name="name" placeholder="name" value={{ $worker->name }} required> <br>
    <label for="name">Surname:</label>
    <input type="text" name="surname" placeholder="surname" value={{ $worker->surname }} required> <br>

    @if($worker->position)
        <div>Current position: {{ $worker->position->title }}</div>
    @else
        <div>Current position: no</div>
    @endif

    <label for="positional_id">Positional:</label>
    <select name="position_id">
        <option value="">--Please choose an option--</option>
        @foreach($positions as $position)
            <option value="{{ $position->id }}">{{ $position->title }}</option>
        @endforeach
    </select>

    <br>
    <button type="submit">Update</button>
</form>
