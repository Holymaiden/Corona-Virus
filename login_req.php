<?php
require_once('./database.php');
if (isset($_POST['username']) && isset($_POST['password'])) {
        $name = $_POST['username'];
        $pass = $_POST['password'];
        $sql = get_rows("SELECT * FROM users WHERE username='" . $name . "' AND pass='" . $pass . "'");
        if ($sql > 0) {
                $_SESSION['username'] = $username;
                echo json_encode(array('success' => 1));
        } else {
                echo json_encode(array('success' => 2));
        }
} else {
        echo json_encode(array('success' => 0));
}
