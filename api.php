<?php
require_once("./conn.php");
$url_api = 'https://apicovid19indonesia-v2.vercel.app/api';
function get_api_indo()
{
        global $url_api;
        $api = $url_api . '/indonesia';
        $json = @file_get_contents($api);
        $json = json_decode($json, true);
        return ($json);
}

function get_api_indo_harian()
{
        global $url_api;
        $api = $url_api . '/indonesia/harian';
        $json = @file_get_contents($api);
        $json = json_decode($json, true);
        return ($json);
}

function get_api_indo_provinsi()
{
        global $url_api;
        $api = $url_api . '/indonesia/provinsi';
        $json = @file_get_contents($api);
        $json = json_decode($json, true);
        return ($json);
}
