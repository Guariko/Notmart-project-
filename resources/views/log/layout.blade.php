<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("model")</title>
    <link rel="stylesheet" href="{{ url('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ url('css/log_styles.css') }}">
    <script src="https://kit.fontawesome.com/67f918e73f.js" crossorigin="anonymous"></script>
</head>

<body>

    <main class="main">
        @yield("content")
    </main>

</body>

</html>