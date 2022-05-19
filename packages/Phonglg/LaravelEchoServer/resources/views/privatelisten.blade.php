
<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>EventsMessageNotification</title>
</head>
<body>
    <div id="app">
        <private-component></private-component>
    </div> 
    <script src="{{ asset('/packages/js/vue/SocketIO/privatesocketio.js') }}"></script>
</body>
</html>
