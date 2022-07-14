<?php
$kon = mysqli_connect('localhost','root','');
$link = mysqli_select_db($kon,"dandi_uas") or die(mysqli_error());