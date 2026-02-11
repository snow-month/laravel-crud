<form action="{{ route('positions.store') }}" method="post">
    @csrf
    <input type="text" name="title" placeholder="title" required> <br>
    <input type="number" name="salary" placeholder="salary" required> <br>
    <button type="submit">Create</button>
</form>
