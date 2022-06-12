<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <table class="table" style="margin-top: 15vh;">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Category ID</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Order</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Buttons</th>
                </tr>
            </thead>
            <tbody>
                @foreach($category as $data)
                <tr>
                    <th scope="row">{{$data->category_id}}</th>
                    <td>{{$data->category_name}}</td>
                    <td>{{$data->order}}</td>
                    <td>{{$data->created_at}}</td>
                    <td>
                        <a href="{{url('')}}" class="btn btn-warning">Edit</a>
                        <a href="{{url('')}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        <a href="{{url('/')}}" class="btn btn-dark">Back</a>
    </div>
</body>

</html>