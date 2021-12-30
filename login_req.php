<?php
require_once('./database.php');
if (isset($_POST['username']) && isset($_POST['password'])) {
        $name = $_POST['username'];
        $pass = $_POST['password'];
        $sql = get_rows("SELECT * FROM users WHERE username='" . $name . "' AND pass='" . $pass . "'");
        if ($sql > 0) {
                session_start();
                $data = query("SELECT * FROM users WHERE username='" . $name . "' AND pass='" . $pass . "'");
                $_SESSION['username'] = $data['username'];
                $_SESSION['l'] = $data['role'];
                echo json_encode(array('success' => 1));
        } else {
                echo json_encode(array('success' => 2));
        }
} else {
        echo json_encode(array('success' => 0));
}
