<?php

class Mod_authentication extends \RESTAPI\Model {
    public function login($username) {
        return $this->query("SELECT `id`, `username`, `password` 
            FROM users_api 
            WHERE `username`
            LIKE '$username'");
    }
    
    public function basic_authentication($username, $password) {
        return $this->query("SELECT 
                `id`
            FROM users_api 
            WHERE `username` LIKE '$username'
            AND `password` LIKE '$password'");
    }
    
    public function store_token($username, $token) {
        $this->query("UPDATE `users_api` SET `token` = '$token', `last_access` = now() WHERE `username` LIKE '$username'");
    }
    public function authorize($user_id, $token) {
        return $this->query("select `last_access` from `users_api` WHERE `id` = '$user_id' AND `token` like '$token'");
    }
    public function update_access($user_id, $token) {
        $this->query("UPDATE `users_api` SET `last_access` = now() WHERE `username` LIKE '$user_id' AND `token` LIKE '$token'");
    }
    
    
}
