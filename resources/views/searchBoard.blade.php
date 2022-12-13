<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </head>
  <body class="container">
    <form class="jumbotron" action="{{ url('/') }}" method="POST">
    @csrf
    <div>
    <div class="form-inline">
        <div class="form-group">
            <label class="sr-only" for="searchInput">Give your input</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" id="searchInput" name="searchInput" placeholder="Search">
            </div>
        </div>
        <input type="submit" class="btn btn-default" value="Search"/>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">uu_id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
            <tr>
                <td>{{$d->uu_id}}</td>
                <td>{{$d->name}}</td>
                <td>{{$d->email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>{{$data->render()}}</div>
    </div>
    </form>
  </body>
</html>
