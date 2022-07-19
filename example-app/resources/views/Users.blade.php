{{-- link bootstrap cdn --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <h1 style="text-align: center; margin-top: 20px;">List of All user</h1>
    <table class="table table-striped table-hover m-auto" style="width: 800px;">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th colspan="2" align="right">Action</th>
        </tr>
        @foreach($Users as $user)
        <tr>
            <td>{{ $user->Id }}</td>
            <td>{{ $user->Name }}</td>
            <td>{{ $user->Email }}</td>
            <td>{{ $user->phone }}</td>
            <td>
                <a href="/edituser/{{ $user->Id }}" class="btn btn-primary">Edit</a>
                <a href="/deleteuser/{{ $user->Id }}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
