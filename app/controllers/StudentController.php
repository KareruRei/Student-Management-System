<?php
class StudentController extends Controller {

    public function index() {
        $this->view("home");
    }

    public function list() {
        $model = new Student();
        $students = $model->getAll();
        $this->view("list", compact("students"));
    }

    public function add() {
        if ($_POST) {
            $model = new Student();
            $model->add($_POST['name'], $_POST['email'], $_POST['course']);
            header("Location: index.php?action=list");
        }
        $this->view("add");
    }

    public function edit() {
        $model = new Student();
        if ($_POST) {
            $model->update(
                $_POST['id'],
                $_POST['name'],
                $_POST['email'],
                $_POST['course']
            );
            header("Location: index.php?action=list");
        }
        $student = $model->getById($_GET['id']);
        $this->view("edit", compact("student"));
    }

    public function delete() {
        $model = new Student();
        $model->delete($_GET['id']);
        header("Location: index.php?action=list");
    }
}
