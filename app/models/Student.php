<?php
class Student extends Model {

    public function getAll() {
        $result = mysqli_query($this->db, "SELECT * FROM students");
        $students = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $students[] = $row;
        }
        return $students;
    }

    public function add($name, $email, $course) {
        $name = mysqli_real_escape_string($this->db, $name);
        $email = mysqli_real_escape_string($this->db, $email);
        $course = mysqli_real_escape_string($this->db, $course);

        $sql = "INSERT INTO students (name,email,course) VALUES ('$name','$email','$course')";
        return mysqli_query($this->db, $sql);
    }

    public function getById($id) {
        $id = (int)$id;
        $sql = "SELECT * FROM students WHERE id=$id";
        $result = mysqli_query($this->db, $sql);
        return mysqli_fetch_assoc($result);
    }

    public function update($id, $name, $email, $course) {
        $id = (int)$id;
        $name = mysqli_real_escape_string($this->db, $name);
        $email = mysqli_real_escape_string($this->db, $email);
        $course = mysqli_real_escape_string($this->db, $course);

        $sql = "UPDATE students SET name='$name', email='$email', course='$course' WHERE id=$id";
        return mysqli_query($this->db, $sql);
    }

    public function delete($id) {
        $id = (int)$id;
        $sql = "DELETE FROM students WHERE id=$id";
        return mysqli_query($this->db, $sql);
    }
}
