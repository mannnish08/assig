<center>
    <h1>User Data</h1>
    <table>
        <tr>
            <td>Name</td>
            <td>Email</td>
        </tr>
        <tr>
            <td>{{ Auth::user()->name }}</td>
            <td>{{ Auth::user()->email }}</td>
        </tr>
        <tr>
            <td><a href="edit/"{{ Auth::user()->id }}>Edit</a></td>
        </tr>

    </table>
</center>
