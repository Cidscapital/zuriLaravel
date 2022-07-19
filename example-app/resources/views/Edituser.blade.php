
    {{-- link bootstrap cdn --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        form {
            width: 500px;
        }
    </style>


    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        {{Session::forget('success')}}
    @endif
    
    
    <form action="/updateuser/{{ $user->Id }}" method="post" class="m-auto">
        <h1>Edit user</h1>
        @csrf

    <div class="form-group">
        <label for="">ID</label>
        <input type="number" class="form-control" name="Id"  value="{{ $user->Id }}" readonly>
    </div>
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" name="Name"  value="{{ $user->Name }}">
    </div>
    <div class="form-group">
    <label for="">Email address</label>
    <input type="email" class="form-control" aria-describedby="emailHelp" name="Email" value="{{ $user->Email }}">
    </div>
    <div class="form-group">
        <label for="">Phone</label>
        <input type="number" class="form-control" name="phone"  value="{{ $user->phone }}">
    </div>

    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>