<?php

require_once 'User.php';
require_once 'Comment.php';

class Task
{
  private User $user;
  private int $priority;
  private string $description;

  private string $dateCreated;

  private string $dateUpdated;

  private bool $isDone = false; //по умолчанию задача не выполнена
  private string $dateDone;

  private array $comments; //здесь хранится массив комментариев

  public function __construct(User $user, int $priority, string $description)
  {
    $this->user = $user;
    $this->priority = $priority;
    $this->description = $description;
    $this->dateCreated = $this->dateUpdated = date('Y-m-d H:i:s');
  }

  public function setDescription(string $description): void
  {
    $this->description = $description;
    $this->dateUpdated = date('Y-m-d H:i:s');
  }

  public function getDescription(): string
  {
    return $this->description;
  }

  public function markAsDone(): void
  {
    $this->dateDone = $this->dateUpdated = date('Y-m-d H:i:s');
    $this->isDone = true;
  }

  public function addComment(Comment $comment): void
  {
    $this->comments[] = $comment;
  }

  // public function getDateCreated(): DateTime
  // {
  //   return $this->dateCreated;
  // }
  // public function setDateCreated(DateTime $dateCreated): void
  // {
  //   $this->dateCreated = $dateCreated;
  // }
  // public function getDateUpdated(): DateTime
  // {
  //   return $this->dateUpdated;
  // }
  // public function setDateUpdated(DateTime $dateUpdated): void
  // {
  //   $this->dateUpdated = $dateUpdated;
  // }

  // public function getPriority(): int
  // {
  //   return $this->priority;
  // }
  // public function setPriority(int $priority): void
  // {
  //   $this->priority = $priority;
  // }

  // public function getUser(): User
  // {
  //   return $this->user;
  // }
  // public function setUser(User $user): void
  // {
  //   $this->user = $user;
  // }

}
