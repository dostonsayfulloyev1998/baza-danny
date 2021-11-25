<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-3 m-5">
            <form method="get" action="" enctype="multipart/form-data">

                @csrf
                @method('put')
                <input type="hidden" value="{{$id}}" name="id">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter name" value="{{$name}}" name="name">

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Surname</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Surname" value="{{$surname}}" name="surname">
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile" name="image">
                    <label class="custom-file-label" for="customFile">Choose image</label>
                </div>
                <button type="submit" class="btn btn-primary my-3">Submit</button>
            </form>
        </div>
    </div>
</div>


</body>
</html>
