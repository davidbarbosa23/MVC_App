<?php

/**
 * The default home controller, called when no controller/method has been passed
 * to the application.
 */
class Home extends Controller
{
    /**
     * The default controller method.
     *
     * @return void
     */
    public function index($params = [])
    {
        $user = $this->model('user');
        $user->name = isset($params[0]) ? $params[0] : 'David';
        $user->description = isset($params[1]) ? $params[1] : 'developer';

        $this->view('home/index', [
            'name' => $user->name,
            'mood' => $user->description
        ]);
    }
}
