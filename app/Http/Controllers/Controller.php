<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Controller
{
    
    public function login(Request $request) {

        $email = $request->input('email');
        $password = $request->input('password');
        $admin = DB::select('select * from adminUser');


foreach ($admin as $user) {

    if($user->email == $email  && $user->userPassword == $password) {

        $ok = true;
        $user = $user->firstName;
        break;

    }

}

    if(isset($ok)) {

        session(['admin' => $user]);
        return redirect()->route('dashboard2');

    } else {

        $error = true;
        return view('welcome', $error);

    }

    }

    public function addcontacts(Request $request) {

        $image = $request->file('image');
     $url = Storage::disk('public_uploads')->put('uploads', $image);
        
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $address = $request->input('address');
        $company = $request->input('company');
        $date = $request->input('date');

        DB::table('contacts')->insert([
            'firstName' => $firstName,
            'lastName' => $lastName,
            'phone' => $phone,
            'email' => $email,
            'address' => $address,
            'company' => $company,
            'birthDate' => $date,
            'image' => $url,
        ]);
        

        $ok = true;

        return view('addcontacts', ['ok' => $ok]);

    }

    public function getcontact() {

        $contacts = DB::select('select * from contacts');

        return view('contacts',['contacts' => $contacts]);

    }

    public function image(Request $request) {

        $contactId = $request->input('id');

        $image = DB::table('contacts')
        ->where('contactID', $contactId)
        ->value('image');  // Fetch single value    
       
        return view('image',['image' => $image]);

    }

    public function delete(Request $request) {

        $contactId = $request->input('id2');

        DB::delete("delete from contacts where contactID = '$contactId'");
        
        
        return view('delete');
    }
    
    public function getdashboard() {

        $count = DB::table('contacts')->count();

        return view('dashboard2',['count' => $count]);

    }

    public function logout() {

        session()->forget('admin');

        return redirect()->route('welcome');

    }

}
