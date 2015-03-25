<?php
/**
 * Created by PhpStorm.
 * User: arielstewart
 * Date: 3/23/15
 * Time: 6:00 PM
 */

namespace Common\Authentication;


class FileBased implements  IAuthentication
{
    private $csv;

    /**
     * Function authenticate
     *
     * @param string $username
     * @param string $password
     * @return mixed
     *
     * @access public
     */
    public function authenticate($username, $password)
    {


        return false;
    }
}