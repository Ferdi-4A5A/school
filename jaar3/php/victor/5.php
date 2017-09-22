<form action="" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['submit'])) {
    $test = move_uploaded_file($_FILES['fileToUpload']['tmp_name'], '/media/sf_www/school/jaar3/php/victor/'.$_FILES['fileToUpload']['name']);
    echo '<img src="'.$_FILES['fileToUpload']['name'].'" alt="Mountain View" style="width:304px;height:228px;">';

}
