<?php
require_once('./conn.php');

function query($query)
{
        global $connect;
        $data = mysqli_query($connect, $query);
        $data = mysqli_fetch_assoc($data);
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

function get_number_page($query, $perPage)
{
        global $connect;
        $result = mysqli_query($connect, $query);
        $number_of_result = mysqli_num_rows($result);

        return ceil($number_of_result / $perPage);
}
