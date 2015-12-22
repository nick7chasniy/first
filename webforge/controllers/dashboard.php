<?php
class Dashboard extends Controller {
    public function __construct () {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
        if($logged == false) {
            Session::destroy();
            header('Location: login');
            exit();
        }
    }
    public function index() {
        $this->view->render('dashboard/index');
    }

	public function user ($login) {
		$this->view->userList = $this->model->userList($login);
		$this->view->render('dashboard/user');
	}
    public function logout() {
        Session::destroy();
        header('Location: ' . URL . 'index');
        exit();
    }
}