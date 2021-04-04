<?php
require_once "stream.php";
require_once "functions.php";
require_once "header.php";
$query = "SELECT * FROM bookhub";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$result = mysqli_query($connection, $query);

echo "<div class='downloads_main'>";
echo <<<_DOWNLOADS
<main>
        <section class="main-section">
            <div class="container-fluid transparent">
                <div class="row ">
                    <div class="collections col-lg-8 col-sm-12 d-flex flex-column justify-content-center mb-2">
                    <div class="new-file">
                        <ul>
_DOWNLOADS;

if (mysqli_num_rows($result) < 0) {
    echo "<p>No data available</p>";
} else {
    
    while($rows = $result->fetch_assoc()) {
        $location = $rows['uploaded_pdf'];
        $title = $rows['course_title'];
        $code = $rows['course_code'];
     echo "<li>";
           echo "<div class='file'>";
          echo "<a href='uploadedpdf/$location.pdf' name='file' download>";
           echo "<h1 class='h3' style='color: #000'>$code</h1>";
               echo  "<h2>$title</h2>";
        echo "</a>";
             echo "</div>";
            
         echo "</li>";

    }
    $result->free();
}


echo <<<_END
</ul>
                    </div>
                </div>
                    <div class="col-lg-4 mt-4">
                        <p>You can add materials to this site this might help others students get access to quality and valid materials</p>
                        <p>don't forget to share with others..</p>
                        <p>click on downloads or search for appropriate material</p>

                    </div>
                </div>
            </div>

        </section>
    </main> 
    </div>
_END;
require_once "footer.php";
?>