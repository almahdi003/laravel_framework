<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <title> Blog Posts </title>

</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary mb-4">
        <div class="container">
            <div class="d-flex align-items-center">
                <a class="navbar-brand mb-0 h1" href="#">Codzilla Blog Posts</a>
                <a class="nav-link active ms-4" href="#">All Posts</a>
            </div>
        </div>
    </nav>

    <div class="container mb-4 d-flex justify-content-center">
        <button type="button" class="btn btn-sm btn-success">Create Post</button>
    </div>

    <div class="container md-4">
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Posted By</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                @foreach ($Posts as $post)
                    <tr>
                        <td>{{$post["ID"]}}</td>
                        <td>{{$post["Title"]}}</td>
                        <td>{{$post["Posted By"]}}</td>
                        <td>{{$post["Created At"]}}</td>
                        <td>
                            <a href="{{route('posts.show', $post['ID'])}}" type="button" class="btn btn-sm btn-success">View</a>
                            <a type="button" class="btn btn-sm btn-primary">Edit</a>
                            <a type="button" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                
            </table>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>


</body>
</html>