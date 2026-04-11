<?php

namespace App\DTO;

use App\Models\User;

class UserDTO{

    public string first_name ;
    public string last_name;
    public string email;
    public string role;

    public function __construct(private User $user)
    {
        $this->first_name = $user->first_name;
        $this->last_name = $user->last_name;
        $this->email = $user->email;
        $this->role = $user->role()->name;
    }

}