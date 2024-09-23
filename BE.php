<?php
// تعيين نوع المحتوى كـ JSON
header('Content-Type: application/json');

// البيانات التي تريد إرسالها إلى JavaScript
$data = [
    'message' => 'مرحبا من PHP!'
];

// تحويل البيانات إلى JSON وإرجاعها
echo json_encode($data);
?>