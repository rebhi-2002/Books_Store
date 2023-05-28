<?php
session_start();
session_unset(); // session إحذف جميع القيم التي تم تخزينها في ال
session_destroy(); // server وقف قناة الإتصال بيني وبين ال
header("Location: login.php");
