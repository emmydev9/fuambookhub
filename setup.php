<?php
require_once "functions.php";

createTable('bookhub', 'id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, course_code VARCHAR(16),  course_title VARCHAR(600), college VARCHAR(500), levels VARCHAR(16), uploaded_pdf VARCHAR(600), urls VARCHAR(4000)');
?>