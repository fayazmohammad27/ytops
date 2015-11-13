<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'DBConnection.php';

class Users extends DBConnection {

    public $user_id;
    public $user_role_id;
    public $user_name;
    public $user_emp_id;
    public $user_email_id;
    public $user_passwrd;
    public $user_phone_no;
    public $user_pic;
    public $user_designation;
    public $user_division;
    public $user_channels;
    public $user_dept;
    public $user_settings;
    public $user_createdDate;
    public $user_last_updated_date;

    public function __construct() {
        $this->dbh = new DBConnection();
        $this->dbh = new PDO("mysql:host=$this->dbhost;dbname=$this->dbname", $this->dbuser, $this->dbpass);
        $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        
    }

    public function insert() {
        $q = $this->dbh->prepare("DESCRIBE master_users");
        $q->execute();
        $table_fields = $q->fetchAll(PDO::FETCH_COLUMN);
        echo "<pre>";
        print_r($table_fields);
    }

}
