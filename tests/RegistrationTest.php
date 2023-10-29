<?php
use PHPUnit\Framework\TestCase;
//require './app/controllers/Registration.php';
require './app/models/Registration.php';
/**
 * Summary of RegistrationTest
 */
class RegistrationTest extends TestCase
{
    /**
     * Summary of testRegistration
     * @return void
     */
    public function testRegistration()
    {
        $registration = new Registration();
        $userData = [
            'name' => 'xyz',
            'email' => 'x@y.z',
            'password' => 'xyZ',
            'role'=> 'student'
        ];
        $result = $registration->registerUser($userData);
    }
}   
/**
 * Summary of Registration
 */
class Registration
{
    /**
     * Summary of registerUser
     * @param mixed $userData
     * @return bool
     */
    public function registerUser($userData)
    {
        if (isset($userData['email'])) {
            return true;
        } else {
            return false;
        }
    }
}
