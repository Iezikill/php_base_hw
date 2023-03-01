<?php

require_once 'model/taskProvider.php';

class Task
{
    private string $description;
    private DateTime $dateCreated;
    private DateTime $dateUpdated;
    private DateTime $dateDone;
    private int $priority;
    private bool $isDone = false;
    private User $user;
    private string $comment;

    public function __construct(User $user)
    {
        $this->user = $user;
        $this->dateCreated = new DateTime();
    }

    public function getDateCreated(): DateTime
    {
        return $this->dateCreated;
    }
    public function setDateCreated(DateTime $dateCreated): void
    {
        $this->dateCreated = $dateCreated;
    }
    public function getDateUpdated(): DateTime
    {
        return $this->dateUpdated;
    }
    public function setDateUpdated(DateTime $dateUpdated): void
    {
        $this->dateUpdated = $dateUpdated;
    }
    public function getDescription(): string
    {
        return $this->description;
    }
    public function setDescription(string $description): void
    {
        $this->description = $description;
        $this->setDateUpdated(new DateTime());
    }
    public function getPriority(): int
    {
        return $this->priority;
    }
    public function setPriority(int $priority): void
    {
        $this->priority = $priority;
    }
    public function markAsDone(): void
    {
        $this->dateDone = new DateTime();
        $this->isDone = true;
    }
    public function getUser(): User
    {
        return $this->user;
    }
    public function setUser(User $user): void
    {
        $this->user = $user;
    }
    public function setComment($comment): void
    {
        $this->comment = $comment;
    }
    public function getComment($comment): ?string
    {
        return $this->comment;
    }
}
