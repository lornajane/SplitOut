<?php

namespace SplitOut\Model;

class Session {

   protected $presenters = array();
   
   public function addPresenter(User $presenter) {
      $this->presenters[] = $presenter;
   }
   
   public function getPresenters() {
      return $this->presenters;
   }

   public function removePresenter(User $presenter) {
      foreach(array_keys($this->presenters) as $key) {
         if ($this->presenters[$key] === $presenter) {
            unset($this->presenters[$key]);
            break;
         }
      }
   }
}

