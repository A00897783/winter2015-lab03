<?php

/**
 * Creates first person's page for link "first"
 * Creates a page for 1st and 3rd person in database.
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

    /**
     * create person's page
     */
    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // get the data for first person
        $source = $this->quotes->first();
        $this->data = array_merge($this->data, $source);
        
        $this->render();
    }
    
    /**
     * create a page with data id 1  url:sleep
     */
    function zzz(){
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // get the data for first person
        $id = 1;
        $source = $this->quotes->get($id);
        $this->data = array_merge($this->data, $source);
        
        $this->render();        
    }
    
    /**
     * create a page with id 3 url:show/3
     */
    function gimme(){
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // get the data for third person
        $id = 3;
        $source = $this->quotes->get($id);
        $this->data = array_merge($this->data, $source);
        
        $this->render();        
    }

}

/* End of file First.php */
/* Location: application/controllers/First.php */