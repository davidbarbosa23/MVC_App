<?php

/**
 * The default home controller, called when no controller/method has been passed
 * to the application.
 */
class Register extends Controller
{
    /**
     * The default controller method.
     *
     * @return void
     */
    public function index($params = [])
    {
        $this->view('register/index');
    }

    public function create($params = [])
    {
        $user = [
            'description' => isset($params['description']) ? $params['description'] : '',
            'location' => isset($params['location']) ? $params['location'] : '',
            'amount' => isset($params['amount']) ? $params['amount'] : '',
            
            'name' => isset($params['name']) ? $params['name'] : '',
            'email' => isset($params['email']) ? $params['email'] : '',
            'password' => isset($params['password']) ? $params['password'] : '',
        ];

        User::create($user);

        $this->view('register/index', $user);
    }
}
