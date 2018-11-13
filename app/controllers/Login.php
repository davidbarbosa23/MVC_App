<?php
class Login extends Controller
{
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
        if ($this->verify($params))
        {
            $message = 'Usuario no encontrado';
            if ($user = User::where('email', '=', $params['email'])->first())
            {
                $user = $user->toArray();
                $message = 'Contraseña invalida';
                if (password_verify($params['password'], $user['password']))
                {
                    unset($user['password']);
                    unset($user['unique_id']);
                    $message = 'Éxito';
                    Session::add('user', $user);
                    header('Location: ' . HTTP_ROOT . '/viewuser');
                    exit();
                }

            }
        }

        $this->view('login/index', [
            'email' => isset($params['email']) ? $params['email'] : '',
            'message' => $message
        ]);
    }

    public function logout() {
        Session::close();
        header('Location: ' . HTTP_ROOT);
        exit();
    }

    private function verify($params = []) 
    {
        return isset($params['email']) && !empty($params['email']) && isset($params['password']) && !empty($params['password']);
    }
}
