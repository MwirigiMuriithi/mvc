<?php

class User
{
    use Model;
    protected $table = "users";
    protected $allowedColumns = [
        'name',
        'email',
    ] ;

    public function validate($data)
    {
        $this->errors = [];
        if (empty($data['name'])) {
            $this->errors['name'] = 'A name is required';
        }
        if (empty($data['email'])) {
            $this->errors['email'] = 'Email is required';
        }
        if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
            $this->errors['email'] = 'Email is invalid';
        }
        if(empty($data['password'])){
            $this->errors['password'] = 'Password is required';
        }
        if (empty($this->errors))
        {
            return true;
        }
        return false;
    }
}