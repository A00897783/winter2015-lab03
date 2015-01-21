<?php

/**
 * Creates 6th person's page and 5th person's page.
 * 
 * controllers/Bingo.php
 *
 * ------------------------------------------------------------------------
 */
class Bingo extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    /**
     * show 5th person's data to wise/bingo
     */
    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // get the data for fifth person
        $id = 5;
        $source = $this->quotes->get($id);
        $this->data = array_merge($this->data, $source);
        
        $this->render(); 
    }
    
    /**
     * show 6th person's data to comp4711/wisdom
     */
    function wisdom() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // get the data for sixth person
        $id = 6;
        $source = $this->quotes->get($id);
        $this->data = array_merge($this->data, $source);
        
        $this->render(); 
    }
    
}

/* End of file Bingo.php */
/* Location: application/controllers/Bingo.php */