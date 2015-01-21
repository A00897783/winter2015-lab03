<?php

/**
 * First person's page
 * Shows first data in database
 * 
 * controllers/First.php
 *
 * ------------------------------------------------------------------------
 */
class First extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // get the data for first person
        $source = $this->quotes->first();
        $this->data = array_merge($this->data, $source);
        
        $this->render();
    }
    
    function zzz(){
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // get the data for first person
        $id = 1;
        $source = $this->quotes->get($id);
        $this->data = array_merge($this->data, $source);
        
        $this->render();        
    }
    
    function gimme(){
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // get the data for first person
        $id = 3;
        $source = $this->quotes->get($id);
        $this->data = array_merge($this->data, $source);
        
        $this->render();        
    }

}

/* End of file First.php */
/* Location: application/controllers/First.php */