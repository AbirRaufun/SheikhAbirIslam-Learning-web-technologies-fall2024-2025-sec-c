<?php
require_once '../model/EmployerModel.php';

class EmployerController {
    private $model;

    public function __construct() {
        $this->model = new EmployerModel();
    }

    public function handleRequest($action, $data = null) {
        if ($action === 'register') {
            return $this->model->register($data);
        } elseif ($action === 'update') {
            return $this->model->update($data);
        } elseif ($action === 'delete') {
            return $this->model->delete($data['username']);
        } elseif ($action === 'search') {
            return $this->model->search($data['username']);
        }
    }
}
?>
