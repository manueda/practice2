{"filter":false,"title":"app.blade.php","tooltip":"/message-board/resources/views/layouts/app.blade.php","undoManager":{"mark":3,"position":3,"stack":[[{"start":{"row":0,"column":0},"end":{"row":10,"column":7},"action":"remove","lines":["<!DOCTYPE html>","<html>","    <head>","        <meta charset=\"utf-8\">","        <title>MessageBoard</title>","    </head>","","    <body>","        @yield('content')","    </body>","</html>"],"id":2},{"start":{"row":0,"column":0},"end":{"row":13,"column":0},"action":"insert","lines":["<!DOCTYPE html>","<html>","    <head>","        <meta charset=\"utf-8\">","        <title>MessageBoard</title>","    </head>","","    <body>","        @include('commons.error_messages')","","        @yield('content')","    </body>","</html>",""]}],[{"start":{"row":7,"column":4},"end":{"row":12,"column":7},"action":"remove","lines":["<body>","        @include('commons.error_messages')","","        @yield('content')","    </body>","</html>"],"id":3},{"start":{"row":7,"column":4},"end":{"row":16,"column":7},"action":"insert","lines":["<body>","        @include('commons.navbar')","        ","        <div class=\"container\">","            @include('commons.error_messages')","            ","            @yield('content')","        </div>","    </body>","</html>"]}],[{"start":{"row":0,"column":0},"end":{"row":5,"column":11},"action":"remove","lines":["<!DOCTYPE html>","<html>","    <head>","        <meta charset=\"utf-8\">","        <title>MessageBoard</title>","    </head>"],"id":4},{"start":{"row":0,"column":0},"end":{"row":11,"column":11},"action":"insert","lines":["<!DOCTYPE html>","<html>","    <head>","        <meta charset=\"utf-8\">","","        <title>MessageBoard</title>","","        <!-- Bootstrap -->","        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">","        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>","        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>","    </head>"]}],[{"start":{"row":0,"column":0},"end":{"row":11,"column":11},"action":"remove","lines":["<!DOCTYPE html>","<html>","    <head>","        <meta charset=\"utf-8\">","","        <title>MessageBoard</title>","","        <!-- Bootstrap -->","        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">","        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>","        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>","    </head>"],"id":5},{"start":{"row":0,"column":0},"end":{"row":13,"column":11},"action":"insert","lines":["<!DOCTYPE html>","<html>","    <head>","        <meta charset=\"utf-8\">","        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">","        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">","","        <title>MessageBoard</title>","","        <!-- Bootstrap -->","        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">","        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>","        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>","    </head>"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":13,"column":11},"end":{"row":13,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1528436216745,"hash":"0d24db4ae766a796f326fa7068aac83be3116673"}