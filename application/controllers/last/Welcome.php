<?php

/**
 * Creates a page for the last person in database
 * 
 * controllers/last/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Welcome extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // get the data for last person
        $source = $this->quotes->last();
        // set data
        $this->data = array_merge($this->data, $source);
        
        $this->render();
    }

}

/* End of file Welcome.php */
/* Location: application/controllers/last/Welcome.php */