<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 9 CRUD</title>
    {{-- link bootstrap cdn --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        form {
            width: 500px;
            margin-top: 0 auto;
        }
    </style>
</head>
<body>
{{-- link bootstrap cdn --}}

    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        {{Session::forget('success')}}
    @endif
    
    <form action="/adduser" method="post">
        <h1>Users Form</h1>
        @csrf
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" name="Name"  placeholder="Enter name">
    </div>
    <div class="form-group">
    <label for="">Email address</label>
    <input type="email" class="form-control" aria-describedby="emailHelp" name="Email" placeholder="Enter email address">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="">Phone</label>
        <input type="number" class="form-control" name="phone">
    </div>

    
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>