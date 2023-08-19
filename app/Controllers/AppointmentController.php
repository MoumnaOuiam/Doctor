<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Models;

class AppointmentController extends Controller
{
    public function __construct()
    {
       helper(['url', 'form']);
    }
   public function save()
   {
    $validation=$this->validate([
        'surname'=>[
            'rules'=>'required',
            'errors'=>[
                'required'=>'<span class="msg text-danger fw-bold text-center">Surname field is required ! </span>',
             ]
        ],

        'name'=>[
            'rules'=>'required',
            'errors'=>[
                'required'=>'<span class="msg text-danger fw-bold text-center">Name field is required ! </span>',
             ]
        ],

        'email'=>[
            'rules'=>'required|valid_email|is_unique[rendezvous.email]',
            'errors'=>[
                'required'=>'<span class=" msg text-danger fw-bold text-center">Email field is required ! </span>',
                'valid_email'=>'<span class="msg text-danger fw-bold text-center">Invalid email address!</span>',
                'is_unique'=>'<span class="msg text-danger fw-bold text-center">This email address is already in use ! </span>',
             ]
        ],   
    ]);

    if (!$validation) {
        echo "<script>
        window.location.href = '#contact';  
      </script>";
        return view('welcome_message', ['validation' => $this->validator]);
    }
     else{
       $surname= $this->request->getPost('surname');
       $name= $this->request->getPost('name');
       $email= $this->request->getPost('email');
       $gender= $this->request->getPost('gender');
       $day= $this->request->getPost('day');
       $hour= $this->request->getPost('hour');

       $values= [
        'surname'=>$surname,
        'name'=>$name,
        'email'=>$email,
        'gender'=>$gender,
        'day'=>$day,
        'hour'=>$hour,
       ];


       $AppointmentModel = new \App\Models\AppointmentModel();

       try {
           $query = $AppointmentModel->insert($values);
       
           if ($query === false) {
               return redirect()->back()->with('fail', 'An error occurred during registration.');
           } else {
               return redirect()->to('/#contact')->with('success', 'You have been successfully registered');
           }
       } catch (\Exception $e) {
           return redirect()->back()->with('fail', 'An error occurred during registration.');
       }
       
    
    }

   }

}