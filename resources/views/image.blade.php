<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('/css/image.css')}}">

</head>
<body>
       
    @include('dashboard')

    <section class="p-4 sm:ml-64">

        <div style="display: flex; justify-content: center; margin-top: 2em">
            <div>
                <h1 class="titlePic">Contact Picture</h1>
                <img class="imageStyle" src="{{asset('uploads/' . $image) }}" alt="">
            </div>
           
        </div>

    </section>
</body>
</html>