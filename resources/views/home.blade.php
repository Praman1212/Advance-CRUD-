<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advance CRUD</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container" style="margin: 20vh 0 0 70vh;">
        <div class="row">
            <div class="col">
                <div class="card text-bg-primary mb-3" style="width: 28rem; ">
                    <div class="card-header">
                        <h1>CRUD Application</h1>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-5">
                                <a href="{{ url('/create') }}" class="btn btn-success" name = "create">Create</a>
                               <a href="{{ url('/show/{id}') }}" class="btn btn-warning" name="view">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>