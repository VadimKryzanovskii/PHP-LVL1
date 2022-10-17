<?php

class Task {

   private $userName;
   private $description;
   private $dateCreated;
   private $dateUpdated;
   private $dateDone;
   private int $priority;
   private bool $isDone;

   public function getUserName()
   {
      return $this->userName;
   }

   public function setUserName($userName)
   {
      $this->userName = $userName;

      return $this;
   }

   public function getDescription()
   {
      return $this->description;
   }

   
   public function setDescription($description)
   {
      $this->description = $description;
      $this->dateUpdated = new DateTime();

      return $this;
   }
 
   public function getDateCreated()
   {
      return $this->dateCreated;
   }

   public function setDateCreated($dateCreated)
   {
      $this->dateCreated = $dateCreated;

      return $this;
   }

   public function getDateUpdated()
   {
      return $this->dateUpdated;
   }

   public function getDateDone()
   {
      return $this->dateDone;
   }
 
   public function getPriority()
   {
      return $this->priority;
   }
 
   public function setPriority($priority)
   {
      $this->priority = $priority;

      return $this;
   }

   public function getIsDone()
   {
      return $this->isDone;
   }

   public function setIsDone($isDone)
   {
      $this->isDone = $isDone;
      $this->dateDone = new DateTime();

      return $this;
   }
}

