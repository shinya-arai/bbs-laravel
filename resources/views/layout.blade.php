<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>postsOnly</title>
</head>
<body style="background-color: antiquewhite;">
    <div class="ui raised segment">
        <h3 class="ui center aligned icon header">
            <i class="twitter icon"></i>
            <div class="ui secondary menu">
                <a href="/" class="active item">Home</a>
                <div class="right menu">
                    <a href="/posts/create" class="active blue item">Tweet</a>
                </div>
            </div>
        </h3>
    </div>
    

    <div class="ui container">
        @yield('content')
    </div>
</body>
</html>