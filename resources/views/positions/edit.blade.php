<form action="{{ route('positions.update', $position) }}" method="post">
    @csrf
    @method('put')
    <input type="text" name="title" placeholder="title" value={{ $position->title }} required> <br>
    <input type="number" name="salary" placeholder="salary" value={{ $position->salary }} required> <br>
    <button type="submit">Update</button>
</form>
