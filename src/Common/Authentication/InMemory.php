<?php
/**
 * Created by PhpStorm.
 * User: arielstewart
 * Date: 3/23/15
 * Time: 6:04 PM
 */

namespace Common\Authentication;


class InMemory implements IAuthentication {

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
        // TODO: Implement authenticate() method.
    }
}