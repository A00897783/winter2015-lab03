<?php

/**
 * Creates page for 4th person's in database
 * 
 * controllers/Guess.php
 *
 * ------------------------------------------------------------------------
 */
class Guess extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    /**
     * creates a page for 4th person in database URL:dunno
     */
    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // get the data for fourth person
        $id = 4;
        $source = $this->quotes->get($id);
        $this->data = array_merge($this->data, $source);
        
        $this->render(); 
    }
    
}

/* End of file Guess.php */
/* Location: application/controllers/Guess.php */