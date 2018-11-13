<?php
class Home extends Controller
{
    /**
     * The default controller method.
     *
     * @return void
     */
    public function index($params = [])
    {
        $this->view('home/index');
    }
}
