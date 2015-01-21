<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * function shucks Create a page for 2nd person's page
 * 
 * controllers/Welcome.php
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
        $this->data['pagebody'] = 'homepage';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->all();
        $authors = array();
        foreach ($source as $record) {
            $authors[] = array('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where']);
        }
        $this->data['authors'] = $authors;

        $this->render();
    }
    
    /**
     * creates a page for 2nd person in database URL:lock/em/up
     */
    function shucks(){
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // get the data for second person
        $id = 2;
        $source = $this->quotes->get($id);
        $this->data = array_merge($this->data, $source);
        
        $this->render();        
    }

}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */