<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 2016/9/18
 * Time: 14:51
 */
$db_host='localhost';
$db_user='root';
$db_password='199516';
$db_name='data';
$link = mysqli_connect($db_host,$db_user,$db_password) or die(mysqli_error());
mysqli_select_db($link,$db_name) or die(mysqli_error());
mysqli_query($link,"set names utf8");