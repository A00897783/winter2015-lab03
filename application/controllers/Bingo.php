<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
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

    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // get the data for fifth person
        $id = 5;
        $source = $this->quotes->get($id);
        $this->data = array_merge($this->data, $source);
        
        $this->render(); 
    }
    
    function wisdom() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // get the data for fifth person
        $id = 6;
        $source = $this->quotes->get($id);
        $this->data = array_merge($this->data, $source);
        
        $this->render(); 
    }
    
}

/* End of file Bingo.php */
/* Location: application/controllers/Bingo.php */