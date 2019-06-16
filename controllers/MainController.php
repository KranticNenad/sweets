<?php
    namespace App\Controllers;

    use App\Models\SlatkisModel;
    use App\Models\VrstaModel;
    use App\Models\BojaModel;
    use App\Models\SastojakModel;
    use App\Models\SlikaModel;

    class MainController extends \App\Core\Controller {

        public function home() {
            $slatkisModel = new SlatkisModel($this->getDatabaseConnection());
            $slatkisi = $slatkisModel->getAll();

            $this->set('slatkisi',$slatkisi);

            $vrstaModel = new VrstaModel($this->getDatabaseConnection());
            $vrste = $vrstaModel->getAll();

            $this->set('vrste', $vrste);

            $bojaModel = new BojaModel($this->getDatabaseConnection());
            $boje = $bojaModel->getAll();

            $this->set('boje', $boje);

            $sastojakModel = new SastojakModel($this->getDatabaseConnection());
            $sastojci = $sastojakModel->getAll();

            $this->set('sastojci', $sastojci);

            $slikaModel = new SlikaModel($this->getDatabaseConnection());
            $slike = $slikaModel->getAll();

            $this->set('slike', $slike);

        }

        public function getLogin() {
            
        }

        public function postLogin() {
            $username = \filter_input(INPUT_POST, 'login_username', FILTER_SANITIZE_STRING);
            $password = \filter_input(INPUT_POST, 'login_password', FILTER_SANITIZE_STRING);

            $validPassword = (new \App\Validators\StringValidator())
                ->setMinLength(8)
                ->setMaxLength(16)
                ->isValid($password);

            if (!$validPassword){
                $this->set('message', 'Došlo je do greške, lozinka nije ispravnog formata.');
                return;
            }

            $adminModel = new \App\Models\AdminModel($this->getDatabaseConnection());

            $admin = $adminModel->getByFieldName('username', $username);
            if (!$admin){
                $this->set('message', 'Došlo je do greške, ne postoji administrator sa datim korisničkim imenom.');
                return;
            }

            $passwordHash = $admin->password_hash;

            if (!password_verify($password, $passwordHash)){
                sleep(1);
                $this->set('message', 'Došlo je do greške, uneta lozinka nije ispravna.');
                return;
            }

            $this->getSession()->put('username', $username);
            $this->getSession()->save();

            $this->redirect('/admin/profile');

        }

    }