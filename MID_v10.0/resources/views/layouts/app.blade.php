<html>

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/profile">Arnob! :D</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="/hello">Home</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> User <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/userList">User List</a></li>
                        <li><a href="/userCreate">User Create</a></li>
                    </ul>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Student <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/studentList">Student List</a></li>
                        <li><a href="/studentCreate">Student Create</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Teacher <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/teacherList">Teacher List</a></li>
                        <li><a href="/teacherCreate">Teacher Create</a></li>
                    </ul>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="/login">Login</a></li>
                <li><a href="/logout">Logout</a></li>
            </ul>
        </div>
    </nav>
    @yield('content')
</body>

</html>