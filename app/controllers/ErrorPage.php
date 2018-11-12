<?php

/**
 * The default home controller, called when no controller/method has been passed
 * to the application.
 */
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
