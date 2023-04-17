<?php

class User {

}

class Employee extends  User{

}

$user = new User();
$employee = new Employee();


var_dump($user, $employee);