<?php

require_once "User.php";

class UserProvider
{
    private static array $accounts = [
        'geekbrains' => 'password123',
        'viktorriya' => '123',
        'root' => '321',
    ];

    public static function getByUsernameAndPassword(string $username, string $password): ?User
    {
        $expectedPassword = self::$accounts[$username] ?? null;
        if ($expectedPassword === $password) {
            return new User($username);
        }
        return null;
    }
}
