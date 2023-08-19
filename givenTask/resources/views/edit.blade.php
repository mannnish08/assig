<center>
    <h1>Update Data</h1>
    <form action="edit" method="POST">
        @csrf
        <input type="hidden" value={{ Auth::user()->id }}>
        <input type="text" name="name" placeholder="" value="{{ Auth::user()->name }}"> <br> <br>
        <input type="text" name="name" placeholder="" value="{{ Auth::user()->email }}"> <br> <br>
        <button type="submit">Update</button>
    </form>
</center>
