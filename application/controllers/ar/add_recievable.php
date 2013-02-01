<?php

/**
 * 
 */
class Add_Recievable extends Application {
    /**
     * 
     */
    function index() {
        $this->data['pagetitle'] = 'COMP4711 - Accounts Receivable';
        $this->data['pagebody'] = 'accounts_recievable';
        
        $record = array('OrderId'=>'', 'CustomerId'=>'', 'CustomerName'=>'', 'AmountOwed'=>'', 'DueDate'=>'');
        
        $this->data = array_merge($this->data,$record);
        
        $this->render();
    }
    
    function post()
    {
        $new_id = $_POST['OrderId'];

        if (count($this->data['errors'] <= 0))
        {
            $this->customers->add($_POST);
            redirect('/');
        }
        //if there are errors, redisplay the page with the errors showing
        else
        {
            $this->index();
        }
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */