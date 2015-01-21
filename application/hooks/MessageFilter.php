<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MessageFilter {
  private $CI;

  public function __construct() {
    $this->CI = &get_instance();
  }
 
  /**
   * add <Strong></Strong> tags to all the messages
   */
  function addStrong() {
    
    $wholePage = $this->CI->output->get_output();
    // find messages
    if(preg_match('#<p class="lead">(.*?)</p>#', $wholePage, $messages)>0){
        foreach($messages as $message){
            // add strong tag around capital letters
            $result = preg_replace ('#[A-Z]#', '<strong>$0</strong>', $message);
            // insert the massge with strong tag
            $wholePage = str_replace($message, $result, $wholePage); 
        }
    }
    echo $wholePage;
  }
}