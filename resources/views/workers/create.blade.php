<form action="{{ route('workers.store') }}" method="post">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" placeholder="name" required> <br>
    <label for="name">Surname:</label>
    <input type="text" name="surname" placeholder="surname" required> <br>

    <label for="positional_id">Positional:</label>
    <select name="position_id">
        <option value="">--Please choose an option--</option>
        @foreach($positions as $position)
            <option value="{{ $position->id }}">{{ $position->title }}</option>
        @endforeach
    </select>

    <br>
    <button type="submit">Create</button>
</form>
