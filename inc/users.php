<?php

class Users
{
    private $server;
    private $db_login;
    private $db_password;
    private $db;
    private $connect;
    private $query;
    public $isConnected;

    public $user;
    public $username;
    public $password;
    public $firstname;
    public $lastname;
    public $phone;
    public $email;
    public $address1;
    public $address2;
    public $city;
    public $postcode;
    public $states;
    public $state;

    public function __construct()
    {
        $this->server = 'localhost';
        $this->db_login = 'accestx4_login';
        $this->db_password = 'login241275';
        $this->db = 'accestx4_loginapp';

        $this->connect = mysqli_connect($this->server, $this->db_login, $this->db_password, $this->db);
        if ($this->connect) {
            $this->isConnected = true;
        }
    }

    public function getStates()
    {
        $this->states = array();
        $this->query = "SELECT * FROM state";
        $results = mysqli_query($this->connect, $this->query);

        while ($rows = mysqli_fetch_assoc($results)) {
            $this->states[] = $rows['prefix'];
        }
        return $this->states;
    }

    public function registerUser($firstname, $lastname, $email, $phone, $address1, $address2, $city, $postcode, $state, $username, $password)
    {
        $this->username = $username;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->phone = $phone;
        $this->address1 = $address1;
        $this->address2 = $address2;
        $this->city = $city;
        $this->state = $state;
        $this->postcode = $postcode;
        $this->password = $password;
        // check if the username already exists
        $results = mysqli_query($this->connect, "SELECT * FROM users WHERE username = '{$this->username}'");
        $rows = $results->num_rows;

        // if username not take, proceed with registering user
        if (!$rows) {
            $this->query = "INSERT INTO users (username,password,firstname,lastname,phone,email,address1,address2,city,postcode,state)";
            $this->query .= "VALUES ('{$this->username}', '{$this->password}', '{$this->firstname}', '{$this->lastname}', '{$this->phone}', '{$this->email}', '{$this->address1}', '{$this->address2}', '{$this->city}', '{$this->postcode}', '{$this->state}')";

            $results = mysqli_query($this->connect, $this->query);
        } else {
            $results = 'This username is already taken';
        }
        return $results;
    }

    public function getUser($username, $password)
    {
        $this->username = $username;
        $this->password = $password;

        $this->query = sprintf("SELECT * FROM users WHERE (username = '%s') AND (password = '%s')", $this->username, $this->password);
        if ($results = mysqli_query($this->connect, $this->query)) {

            $row_count = $results->num_rows;
            if ($row_count == 1) {
                while ($rows = mysqli_fetch_assoc($results)) {
                    return $rows;
                }
            }
        } else {
            return false;
        }
    }

    public function updateDetails($user_array)
    {
        $this->user = $user_array;

        $this->query = sprintf(
            "UPDATE users SET firstname = '%s', lastname = '%s', email = '%s', phone = '%s', address1='%s', address2='%s', city='%s', postcode='%s', state='%s', username = '%s' WHERE id = '%s'",
            $this->user['firstname'], $this->user['lastname'], $this->user['email'], $this->user['phone'], $this->user['address1'], $this->user['address2'], $this->user['city'], $this->user['postcode'], $this->user['state'], $this->user['usernamel'], $this->user['id']
        );

        $results = mysqli_query($this->connect, $this->query);

        return $results;
    }

    public function deleteUser($id, $username)
    {
        $this->id = $id;
        $this->username = $username;
        $this->query = sprintf("DELETE FROM users WHERE id = '%s' AND username = '%s'", $this->id, $this->username);
        $results = mysqli_query($this->connect, $this->query);
        return $results;
    }
}