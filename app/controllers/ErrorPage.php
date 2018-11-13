<?php
class ErrorPage extends Controller
{
    /**
     * The default controller method.
     *
     * @return void
     */
    public function index($params = [])
    {
        $this->view('error/404');
    }
}
