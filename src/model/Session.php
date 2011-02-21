<?php

namespace SplitOut\Model;

class Session {

   protected $presenters = array();
   
   public function addPresenter(User $presenter) {
      $this->presenters[] = $presenter;
   }

}

