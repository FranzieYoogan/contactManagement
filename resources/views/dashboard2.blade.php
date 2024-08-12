<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('/css/dashboard2.css')}}">

</head>
<body>

    @include('dashboard')

    <section class="p-4 sm:ml-64">

        <div class="containerAll">

            <div class="containerItems">
                
              
            <h1 class="valueStyle">Contacts List: {{$count}}</h1>

        </div>
        
        </div>



    </section>
    
</body>
</html>