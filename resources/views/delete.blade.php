<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('css/delete.css')}}">

</head>
<body>

    @include('dashboard')

    <h1 class="deleteStyle">Deleted Successfully</h1>

    <script>

        setTimeout(() => {

            window.location.href = "/contacts"

        }, 2000);

    </script>

</body>
</html>