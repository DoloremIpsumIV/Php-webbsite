<?php
class Users
{
    private $users = ["Tom" => "Password231", "Berry" => "Berry", "Garry" => "jkX24I!"];

    public function find(string $username, string $password)
    {
        if (array_key_exists($username, $this->users)) {
            if ($this->users[$username] == $password) {
                echo $this->users[$username];
                return $this->users[$username];
            }
        }
        return null;
    }
}
?>