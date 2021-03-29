<?php
class Globals
{
    private $POST;
    private $ENV;
    public function __construct()
    {
        $this->POST = filter_input(INPUT_POST, 'nom');
        $this->ENV = $_SERVER['PHP_SELF'];
    }

    public function getPOST()
    {
        return $this->POST;
    }

    public function getENV()
    {
        return $this->ENV;
    }
}
