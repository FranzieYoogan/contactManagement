<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('/css/contacts.css')}}">

</head>
<body>

    @include('dashboard')

    <section class="p-4 sm:ml-64">

        <div class="containerTitle">
            
            <img class="contactIcon" src="{{asset('/images/contact.png')}}" alt=""><h1 class="contactTitle">Contact Management</h1>
        
        </div>




<div class="tableStyle relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Address
                </th>
                <th scope="col" class="px-6 py-3">
                    email
                </th>
                <th scope="col" class="px-6 py-3">
                    Phone
                </th>
                <th scope="col" class="px-6 py-3">
                    Company
                </th>

                <th scope="col" class="px-6 py-3">
                    BirthDate
                </th>
            </tr>
        </thead>
        <tbody>

            @foreach ($contacts as $contact)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                
              
                    
               
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$contact->firstName}} {{$contact->lastName}}
                </th>
                <td class="px-6 py-4">
                    {{$contact->address}}
                </td>
                <td class="px-6 py-4">
                    {{$contact->email}}
                </td>
                <td class="px-6 py-4">
                    {{$contact->phone}}
                </td>

                <td class="px-6 py-4">
                    {{$contact->company}}
                </td>

                <td class="tdFinal px-6 py-4">
                    {{$contact->birthDate}} 
                    <form method="POST" action="/image">
                    <input type="text" name="id" style="display: none" value="{{$contact->contactID}}">
                   
           
                        @csrf
                    
                        <button type="submit"><img class="icons" src="{{asset('/images/eye.png')}}" alt=""></button>
                </form>
                </td>

            </tr>

            @endforeach
            
        </tbody>
    </table>
</div>


       


    </section>
    
</body>
</html>