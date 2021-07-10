<?php
class Helper{
    private const ENV_MODE = 'mode';
    private const ENV_MODE_REAL = 'real';
    
    /**
     * To check if state of the environement
     * @return boolean True if it's a real environment else False for test environment
     */
    public static function real_mode()
    {
        $env_mode = $_GET[Helper::ENV_MODE];
        $real_mode = $env_mode == Helper::ENV_MODE_REAL;
        return $real_mode;
    }

    /**
     * To get real mode's value
     * @return string real mode's value
     */
    public static function get_real_mode(){
        return Helper::ENV_MODE_REAL;
    }
}