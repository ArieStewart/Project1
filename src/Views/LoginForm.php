<?php

namespace Views;


class LoginForm extends View
{
    public function __construct()
    {
        $this->content = <<<LOGIN_FORM
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login Form</title>
        <link rel="stylesheet" type="text/css" href="http://localhost/Project1/public/css/LoginStyle.css">
    </head>
    <body>
        <p>Welcome</p>

        <div align="center">
            <form method="POST" action="/auth">
                Username: <input type="text" name="username" size="15" /><br />
                Password: <input type="password" name="password" size="15" /><br />
                <p><input type="submit" value="Login" /></p>
            </form>
        </div>
    </body>
</html>
LOGIN_FORM;
    }
}
