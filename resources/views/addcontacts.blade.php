<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('/css/contact.css')}}">

    <title>Document</title>
</head>
<body>  

    @include('dashboard')
   
   
    <form method="POST" action="/addcontacts" class="p-4 sm:ml-64" enctype="multipart/form-data">
        @csrf
        <div class="containerTitle">
            <h1 class="contactTitle">Add contact</h1>
        </div>
      

    <div class="containerInput1">
        <input name="image" class="fileInput block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" required>
        
       <input name="firstName" type="text" class="inputStyle" placeholder="firstName" required>
       <input name="lastName" type="text" class="inputStyle" placeholder="LastName" required>

    </div>

    <div class="containerInput2">
       
       <input name="phone" type="text" class="inputStyle" placeholder="Phone Number" required>
       <input name="email" type="text" class="inputStyle" placeholder="Email" required>
       <input name="address" type="text" class="inputStyle" placeholder="Address" required>

    </div>

    <div class="containerInput3">
       
        <input name="company" type="text" class="inputStyle" placeholder="Company" required>
        <input name="date" type="date" class="inputStyle" required>
 
     </div>


     <div class="containerButton">

        <button type="submit" class="buttonStyle focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Add Contact</button>
        
     </div>

     @if(isset($ok))
     <h1 class="alertStyle">Contact Added Successfully</h1>
     <script>

        setTimeout(() => {

            window.location.href = "/addcontacts"

        }, 2000);

     </script>
     @endif

    </form

    
    
</body>
</html>