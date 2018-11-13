<?php
class Register extends Controller
{
    protected $user;

    public function __construct() {
        $this->user = $this->model('user');
    }

    /**
     * The default controller method.
     *
     * @return void
     */
    public function index($params = [])
    {
        $this->view('register/index');
    }

    /**
     * Create user into database
     * 
     * @param  array  $params register form
     * @return void
     */
    public function create($params = [])
    {
        $continue = true;
        $params['unique_id'] = $this->uniqueID();
        $params['message'] = 'Todos los campos son requeridos';
        if (User::where('email', '=', $params['email'])->first()) 
        {
            $params['message'] = 'Usuario con el correo "' . $params['email'] . '" ya registrado';
            $continue = false;
        }

        if ($continue) 
        {
            if ($this->verify($params)) 
            {
                $params['message'] = 'Email inválido';
                if (filter_var($params['email'], FILTER_VALIDATE_EMAIL)) {
                    $params['message'] = 'La contraseña no coincide';
                    if ($this->checkPass($params['password'], $params['confirmpassword'])) 
                    {
                        $params['message'] = 'Usuario creado, por favor ingrese <a href="' . HTTP_ROOT . '/login">aquí</a>';
                        User::create($this->parseParams($params));
                    }
                }
            }
        }

        $this->view('register/index', $params);
    }

    /**
     * Set parameters to insert
     * 
     * @param  array $params 
     * @return array
     */
    private function parseParams($params) {
        $user = [];

        foreach ($this->user->fillable as $value) {
            $user[$value] = $params[$value];
            if ($value == 'password')
                $user[$value] = password_hash($params[$value], PASSWORD_DEFAULT);
        } 

        return $user;
    }

    /**
     * If password is equal to confirmpassword
     * 
     * @param  string $pass     
     * @param  string $confPass 
     * @return void           
     */
    private function checkPass($pass, $confPass) 
    {
        return $pass === $confPass;
    }

    /**
     * Verify if all fields are filled
     * 
     * @param  array  $user 
     * @return bool
     */
    private function verify($user = []) 
    {
        $return = true;
        $params = $this->user->fillable;
        array_push($params, 'confirmpassword');

        foreach ($params as $value) {
            if (!isset($user[$value]) OR empty($user[$value]))
            {
                $return = false;
                break;
            }
        }

        return $return;
    }

    /**
     * Requested unique ID
     * 
     * @param  integer $length
     * @return string
     */
    private function uniqueID($length = 8) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
