<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Laravel-Pusher</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="container">
        <div class="row" id="app" >
            <div class="col-md-3"></div>

            <ul class="list-group col-md-6">
                <li class="list-group-item active text-center">Chat/Comment/Notification</li>
                <component v-for="value in chat.message">
                    @{{ value }}
                </component>
                <input type="text" class="form-control" name="" placeholder="Type your message..." 
                v-model='message' @keyup.enter='send'>

            </ul>

            <div class="col-md-3"></div>
        </div>
    </div>

    <script src="{{ asset('/js/app.js') }}"> </script>
</body>
</html>