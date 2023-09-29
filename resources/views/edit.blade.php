<form action="{{route('update-student')}}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$data->id}}">
    Name <input type="text" name="name" value="{{$data->name}}"><br><br>
    <button type="submit">Submit</button>
</form>