<?php

/**
 * Login Controller
 */
class Login extends Controller
{
    protected $user;

    /**
     * The default controller method.
     *
     * @return void
     */
    public function index($params = [])
    {
        $this->view('login/index');
    }

    public function signin($params = [])
    {
        $message = 'Todos los campos son requeridos';
        if (isset($params['email']) && !empty($params['email']) && isset($params['password']) && !empty($params['password']))
        {
            $message = 'Usuario no encontrado';
            if ($user = User::where('email', '=', $params['email'])->first())
            {
                $user = $user->toArray();
                $message = 'Contraseña invalida';
                if ($user['password'] === $params['password']) {
                    unset($user['password']);
                    $message = 'Éxito';
                    Session::add('user', $user);
                }

            }
        }

        $this->view('login/index', [
            'email' => isset($params['email']) ? $params['email'] : '',
            'message' => $message
        ]);
    }

    public function forgot($params = [])
    {
        // $user = $this->model('user');
        // $user->name = $name;
        $this->view('login/forgot', [
            // 'name' => $user->name,
            // 'mood' => $mood
        ]);
    }

    public function reset($params = [])
    {
        // $user = $this->model('user');
        // $user->name = $name;
        $this->view('login/reset', [
            // 'name' => $user->name,
            // 'mood' => $mood
        ]);
    }


    private function verify($params = []) 
    {
        return empty($params['email']) OR empty($params['password']);
    }
}
