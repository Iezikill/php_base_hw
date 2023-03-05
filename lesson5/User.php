<?php

class User
{
  private string $username;
  private string $email;
  private ?int $age;


  function __construct(string $username, string $email) //конструткор
  {
    $this->username = $username;
    $this->email = $email;
  }
}
