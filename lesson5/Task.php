Я скидываю недоделанное дз, совсем не успеваю, но надеюсь, что успею его
доделать до проверки =)
если я все таки не успела, поставьте, пожалуйста, неуд, чтоб мне продлили
срок сдачи дз
спасибо =)

<?php
// Задание 1. 
// Разработайте класс Task, выполняющий ответственность обычной задачи 
// Todo-списка. Класс должен содержать приватные свойства description, 
// dateCreated, dateUpdated, dateDone, priority (int), isDone (bool) и 
// обязательное user (User). В качества класса пользователя воспользуйтесь 
// разработанным на уроке. Класс Task должен содержать все необходимые для 
// взаимодействия со свойствами методы (getters, setters). При вызове метода 
// setDescription обновляйте значение свойства dateUpdated. Разработайте 
// метод markAsDone, помечающий задачу выполненной, а также обновляющий 
// свойства dateUpdated и dateDone.
require 'User.php';

class Task
{
  private string $description;
  private string $dateCreated;
  private string $dateUpdated;
  private string $dateDone;
  private int $priority;
  private bool $isDone;
  private User $user;

  function __construct(User $user, string $description, int $priority)
  {
    $this->user = $user;
    $this->description = $description;
    $this->priority = $priority;
  }



  /**
   * Get the value of description
   */
  public function getDescription(): string
  {
    return $this->description;
  }

  /**
   * Set the value of description
   */
  public function setDescription(string $description): self
  {
    $this->description = $description;

    return $this;
  }

  /**
   * Get the value of dateCreated
   */
  public function getDateCreated(): string
  {
    return $this->dateCreated;
  }

  /**
   * Set the value of dateCreated
   */
  public function setDateCreated(string $dateCreated): self
  {
    $this->dateCreated = $dateCreated;

    return $this;
  }

  /**
   * Get the value of dateUpdated
   */
  public function getDateUpdated(): string
  {
    return $this->dateUpdated;
  }

  /**
   * Set the value of dateUpdated
   */
  public function setDateUpdated(string $dateUpdated): self
  {
    $this->dateUpdated = $dateUpdated;

    return $this;
  }

  /**
   * Get the value of dateDone
   */
  public function getDateDone(): string
  {
    return $this->dateDone;
  }

  /**
   * Set the value of dateDone
   */
  public function setDateDone(string $dateDone): self
  {
    $this->dateDone = $dateDone;

    return $this;
  }

  /**
   * Get the value of priority
   */
  public function getPriority(): int
  {
    return $this->priority;
  }

  /**
   * Set the value of priority
   */
  public function setPriority(int $priority): self
  {
    $this->priority = $priority;

    return $this;
  }

  /**
   * Get the value of isDone
   */
  public function isIsDone(): bool
  {
    return $this->isDone;
  }

  /**
   * Set the value of isDone
   */
  public function setIsDone(bool $isDone): self
  {
    $this->isDone = $isDone;

    return $this;
  }

  /**
   * Get the value of user
   */
  public function getUser(): User
  {
    return $this->user;
  }

  /**
   * Set the value of user
   */
  public function setUser(User $user): self
  {
    $this->user = $user;

    return $this;
  }
}
