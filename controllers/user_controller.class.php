<?php

/**
 * Author: Aiden Eichenour
 * date: 11/7/22
 * File: user_controller.class.php
 * Description: this is the user controller class which defines the 8 actions
 */
class UserController {

    private $login_model;

    //default constructor
    public function __construct() {
        //create an instance of the UserModel class
        $this->login_model = UserModel::getUserModel();
    }

    //index
    public function index(){
        //display
        $view = new Index();
        $view->display();
    }

    //register
    public function register(){
        //display
        $view = new Register();
        $view->display();
    }

    //login
    public function login(){

    }

    //verify
    public function verify(){

    }

    //logout
    public function logout(){

    }

    //reset
    public function reset(){

    }

    //do reset
    public function do_reset(){

    }

    //error
    public function error($message){
        //create an object of the Error class
        $error = new UserError();

        //display error message
        $error->display($message);
    }

}