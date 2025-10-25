<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use GroceryCrud\Core\GroceryCrud;

class Users extends BaseController
{
    public function index()
    {
        // This is a placeholder for the Grocery CRUD implementation.
        // Once you are able to install Grocery CRUD, you can uncomment
        // the following code to see it in action.

        /*
        $crud = new GroceryCrud();

        $crud->setTable('users');
        $crud->setSubject('User', 'Users');
        $crud->columns(['username', 'email', 'active']);

        $crud->callbackBeforeInsert(function ($stateParameters) {
            // Your custom logic here. For example, logging the action.
            log_message('info', 'A new user is being added: ' . $stateParameters->data['username']);

            return $stateParameters;
        });

        $output = $crud->render();

        return $this->_exampleOutput($output);
        */

        return view('welcome_message');
    }

    private function _exampleOutput($output = null)
    {
        // This is a helper method to display the Grocery CRUD output.
        // You can customize this to match your application's layout.
        return view('example', (array)$output);
    }
}
