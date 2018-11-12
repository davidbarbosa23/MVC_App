<?php

/**
 * Login Controller
 */
class Login extends Controller
{
    /**
     * The default controller method.
     *
     * @return void
     */
    public function index($name = 'David', $mood = 'Programmer')
    {
        $user = $this->model('user');
        $user->name = $name;

        $this->view('login/index', [
            'name' => $user->name,
            'mood' => $mood
        ]);
    }
}
