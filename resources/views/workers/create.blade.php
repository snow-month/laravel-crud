<form action="{{ route('workers.store') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="name" required> <br>
    <input type="text" name="surname" placeholder="surname" required> <br>
    <button type="submit">Create</button>
</form>
