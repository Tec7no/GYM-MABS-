<?php
session_start();
// التحقق من وجود المصفوفة في الجلسة
if (!isset($_SESSION['order'])) {
    $_SESSION['order'] = array();
}

// التحقق من وجود ID في الطلب
if (isset($_POST['id'])) {
    $product_id = $_POST['id'];
    
    // إضافة ID إلى المصفوفة في الجلسة
    $_SESSION['order'][] = $product_id;
       
} else {
    $p = 0 ;
}

?>
