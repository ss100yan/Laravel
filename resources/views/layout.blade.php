

<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        -->
    </head>
    <body>
 
        <div class="container">
        <div class="topnav">
  <a class="active" href="/">Home</a>
    <a href="/users">Users</a>
  <a href="/contact">Contact</a>
  <a href="/about">About</a>
  <a href="/students">Students</a>
  <a href="/test">Test</a>
</div>
            <div class="content">
                <div class="title">@yield('content')</div>
            </div>
        </div>

        <div class="footer">
        <p>Footer</p>
       </div>
    </body>

</html>