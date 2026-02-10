<form action="{{ route('workers.update', $worker) }}" method="post">
    @csrf
    @method('put')
    <input type="text" name="name" placeholder="name" value={{ $worker->name }} required> <br>
    <input type="text" name="surname" placeholder="surname" value={{ $worker->surname }} required> <br>
    <button type="submit">Update</button>
</form>
