<?php
class Viewuser extends Controller
{
    protected $user;

    public function __construct() 
    {
        $this->user = $this->model('user');
    }

    /**
     * The default controller method.
     *
     * @return void
     */
    public function index($params = [])
    {   
        $this->view('view/index', Session::get('user'));
    }

    /**
     * Edit form
     * 
     * @param  array  $params
     * @return void      
     */
    public function edit($params = [])
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
                    unset($params['password']);
                    $message = 'Éxito';
                    User::where('email', '=', $params['email'])->update($params);
                    Session::add('user', $user);
                }

            }
        }
        if (!empty($params))
            $params['message'] = $message;
        else 
            $params = Session::get('user');

        $this->view('view/edit', $params);
    }

    /**
     * List all rows into user table
     * 
     * @param  array  $params
     * @return void
     */
    public function all($params = []) {
        $registers = [];

        if ($registers = User::all()) {
            $registers = $registers->toArray();  
            if (isset($params[0]) && in_array($params[0], $this->user->fillable))
                $registers = User::orderBy($params[0])->get()->toArray();
            if (isset($params[1]) && in_array($params[1], ['asc', 'desc']))
                $registers = User::orderBy($params[0], $params[1])->get()->toArray();

        }

        $this->view('view/all', ['users' => $registers, 'url' => $params]);
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
        $indexUniqueId = array_search('unique_id', $params);
        unset($params[$indexUniqueId]);

        foreach ($params as $value) {
            if (!isset($user[$value]) OR empty($user[$value]))
            {
                $return = false;
                break;
            }
        }

        return $return;
    }
}
