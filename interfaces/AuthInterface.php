<?php
interface AuthInterface extends IBar, MethodArrayAccess {
    const _MSG_TEMPLATE = [
        "required" => "field {name} is required"
    ];

    public function login();

    public function register();

    public function forgotPassword();

    public function resetPassword();

    public function activeAccount();
    
}