<?php
require_once '../core/Roles.php';

class AdminController extends Controller {
    public function dashboard() {
        Roles::requireAdmin();
        $this->view('admin/dashboard');
    }
}
