<form action="{{ route('create_thread') }}" method="POST">
    {{ csrf_field() }}
    <input type="text" name="title"><br>
    <textarea name="body">Write something...</textarea><br>
    <button type="submit">Submit</button>
</form>
