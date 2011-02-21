<?php

namespace SplitOut\Model;

class SessionTest extends \PHPUnit_Framework_TestCase {

   public function testAddingPresentersToASessionWorks() {
      $session = new Session();
      $user = new User();
      
      $session->addPresenter($user);
      
      $this->assertContains($user, $session->getPresenters());
   }

}
