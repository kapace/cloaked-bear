<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of add_Contact
 *
 * @author Tyler Nickel
 */
class Add_product extends Application {
    public function index(){
            //initalized the form from add_form on the page and gives it default values
            $this->data['pagebody'] = "ic/add_form_products";
            $record = array('productID'=>'', 'product'=>'');
            $this->data = array_merge($this->data,$record);
            $this->render();
    }
    public function post(){
        //posts the newly created contact to the main page
        $new_id = $_POST['productID'];
        if ($this->products->get($new_id) != null){
            $this->data['errors'][] = 'Contact ID already used.';
        }
        $new_product = $_POST['product'];
        if ($this->products->get($new_product) == null){
            $this->data['errors'][] = 'product cannot be empty';
        }
        
        else {
            $this->products->add($_POST);
            redirect("/");
        }
    }
}

?>
