<?php

namespace SplitOut\Model;

class Event {

   protected $sessions = array();

   public function addSession(Session $session) {
      $this->sessions[] = $session;
   }
   
}

