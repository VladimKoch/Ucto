<?php
interface IAuth
{
    public function check_user(string $Email, string $Password) : bool;
    public function logout() : void;
}