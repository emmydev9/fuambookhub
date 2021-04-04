<?php
require_once 'functions.php';
require_once 'header.php';
$success = $error = $course_code = $course_title = $college = $level = $uploaded_pdf = $url = "";
if(isset($_POST['submit'])) {
    if (!empty($_POST['level']) && !empty($_POST['course_code']) && !empty($_POST['course_title']) && !empty($_POST['college']) && !empty($_FILES['pdf']['name'])) {
        $course_code = strtoupper(sanitizeString($_POST['course_code']));
        $course_title = ucwords(sanitizeString($_POST['course_title']));
        $college = sanitizeString($_POST['college']);
        $level = sanitizeString($_POST['level']);
        $uploaded_pdf = $_FILES['pdf']['name'];
        $url = "uploadedpdf/$course_code.pdf";

        $sql= "SELECT * FROM bookhub WHERE course_code='$course_code' OR college='$college'";
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            $error = "Sorry, this material already existed. Thanks for your support";
        } else {
            $uploaded_pdf = $course_code;
            $query = "INSERT INTO bookhub SET course_code=?, course_title=?, college=?, levels=?, uploaded_pdf=?, urls=?";
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            $stmt = $connection->prepare($query);
            $stmt->bind_param('ssssss', $course_code, $course_title, $college, $level, $uploaded_pdf, $url);
            $result = $stmt->execute();
            

            if ($result) {
                $success = "Your pdf is recieved and under review..Thank You";
            } else {
                $error = "Error connecting to the Database";
            }
        }
    } else {
        $error = "All field are required";
    }

    if (isset($_FILES['pdf']['name'])) {
        $saveto = "uploadedpdf/$uploaded_pdf.pdf";
        
        if($_FILES['pdf']['size'] > 40000000) {
            $error = "file too large";
        }

        if ($_FILES['pdf']['type'] == "application/pdf" && !($_FILES['pdf']['size'] >= 40000000)) {
            move_uploaded_file($_FILES['pdf']['tmp_name'], $saveto);
            @unlink($_FILES['pdf']['tmp_name']);
            
        } else {
            $error = "Uploaded file is not of type pdf";
        }
    } 
    else {
        $error = "No file chosen";
    }

    
}
$connection->close();


echo <<<_MAIN
<div class="upload_file">
<p class="upload_p">Welcome to FUAMBookHub where students are allowed to post valid lecture material.<br> To make them readily available to other students, Thanks for your contribution</p>
<div><p class="error">$error</p></div>
<form method="post" action="upload.php" enctype='multipart/form-data'>
<p><label>Course Title: </label><input type="text" name="course_title" placeholder="enter course Title"></p>
<p><label>course Code: </label><input type="text" name="course_code" placeholder="enter course code"></p>
<p>
<select name="college">
<option  value="Agronomy">Agronomy</option>
<option  value="Economics & Extension">Economics & Extension</option>
<option  value="Agric & Science Education">Agric & Science Education</option>
<option  value="Animal Science">Animal Science</option>
<option  value="Engineering">Engineering</option>
<option  value="FST">FST</option>
<option  value="Forestry">Forestry</option>
<option  value="Management Sciences">Management Sciences</option>
<option  value="Veterinary Medicine">Veterinary Medicine</option>
</select></p>
<p><label>LeveL: </label>
<select name="level">
<option name="100" value="100">100L</option>
<option name="200" value="200">200L</option>
</select>
</p>
<label>Upload file: </label><input type="file" name="pdf" value="upload"/>
<button type="submit" name="submit" class="btn btn-primary btn-sm">Submit</button>
<div><p class="success">$success</p></div>
</form>
</div>
_MAIN;
require_once "footer.php";
    
?>