<?php

namespace App\Controllers;
use App\Models\User; //import users model
class Home extends BaseController
{
    public function index()
    {
        $msg = session('message');
        return view('login',['message' => $msg]);
    }

    public function homePage()
    {
        return view('homePage');
    }

    public function login(){// retrieves user data using POST
        $email = $this->request->getPost('email');
        $pwd = $this->request->getPost('pwd');
        $user = new User();

        $userData = $user->getUser(['email' => $email]);

        if($userData){
            if(password_verify($pwd,$userData[0]['pwd'])){
                $data = [   
                    'name' => $userData[0]['name'],
                    'admin' => $userData[0]['admin']
                ];
                $session = session(); // start session
                $session->set($data); // save user data to session
                return redirect()->to(base_url('/home'))->with('msg','1'); // redirect to homePage
            }
            return redirect()->to(base_url('/'))->with('error','Wrong password'); // redirects the user to the specified url and displays the message
            // takes a key, which will identify the message and the message itself
        }
        return redirect()->to(base_url('/'))->with('error','User not found');
    }
}
