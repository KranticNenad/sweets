<?php
    namespace App\Core\Role;

use App\Core\Controller;

class UserRoleController extends Controller{
    public function __pre(){
        $username = $this->getSession()->get('username');

        if ($username === NULL){
            $this->redirect('admin/login');
        }
    }
}