<?php

class Session
{
    /**
     * Init Session
     */
    static public function init()
    {
        session_start();
    }

    /**
     * Add element to session
     * 
     * @param string $key
     * @param string $value
     */
    static public function add($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    /**
     * Return specific session
     * @param string $key 
     * 
     * @return array 
     */
    static public function get($key)
    {
        return !empty($_SESSION[$key]) ? $_SESSION[$key] : null;
    }

    /**
     * All setted session
     * 
     * @return array
     */
    static public function getAll()
    {
        return $_SESSION;
    }

    /**
     * Remove specific key of session
     * 
     * @param string $key
     */
    static public function remove($key)
    {
        if(!empty($_SESSION[$key]))
            unset($_SESSION[$key]);
    }

    /**
     * Close and destroy all session
     */
    static public function close()
    {
        session_unset();
        session_destroy();
    }

    /**
     * Status of session
     * 
     * @return int
     */
    static public function getStatus()
    {
        return session_status();
    }
}