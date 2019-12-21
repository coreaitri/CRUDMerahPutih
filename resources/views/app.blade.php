<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MPMedia - @yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css"
        integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#FF0000; font-family:cursive">
        <a class="navbar-brand" href="{{ route('index')}}">MPData</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a href="{{ route('findbyname')}}" class="nav-link">Nama ab</a>
            </li>
            <li class="nav-item active">
                <a href="{{ route('findbyage')}}" class="nav-link">Umur 20</a>
            </li>
            <li class="nav-item active">
                <a href="{{ route('findbyphoto')}}" class="nav-link">Photo Null</a>
            </li>
          </ul>
          <form action="{{route('search')}}" class="form-inline my-2 my-lg-0" >
            <input class="form-control mr-sm-2" type="text" placeholder="Search by Kecamatan"
                name="query" id="query" value="{{request()->input('query')}}">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
            {{-- <form
    action="{{route('search')}}"
    class="pull-right"
    >
    <input class="form-control" placeholder="Search by Kecamatan" type="text" name="query" id="query" value="{{request()->input('query')}}"/>
    <button type="submit"><i class="fas fa-search"></i></button>
          </form> --}}
        </div>
      </nav>

   @yield('context')

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js"
        integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous">
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
    	// Activate tooltip
    	$('[data-toggle="tooltip"]').tooltip();
    });
    </script>
</body>

</html>
