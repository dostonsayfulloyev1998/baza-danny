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
           <div>
               <a href="{{url('/')}}" class="btn btn-primary">add student</a>
           </div>
            <table class="table table-bordered">
                 <thead>
                     <tr>
                         <th>id </th> <th>name</th> <th>surname</th> <th>image</th> <th>aciton</th>
                       </tr>
                 </thead>

                <tbody>
                {{$id = 0}}
                    @foreach(\App\Models\Student::all() as $item)
                     <tr>
                        <td>{{++$id}}</td> <td>{{$item->name}}</td> <td>{{$item->surname}}</td> <td><img width="100" src="{{asset("storage/".$item->image)}}" alt=""> </td>
                         <td><a href="{{url('/student-edit/'.$item->id)}}" class="btn btn-success">edit</a> </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


</body>
</html>
