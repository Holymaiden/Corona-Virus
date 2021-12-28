<?php
require_once('./conn.php');

function query($query)
{
        global $connect;
        $data = mysqli_query($connect, $query);
        return $data;
}

function get_data($query)
{
        global $connect;
        $hasil = mysqli_query($connect, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($hasil)) {
                $rows[] = $row;
        }
        return $rows;
}
