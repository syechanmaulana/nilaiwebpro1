<?php
if (isset($_POST['save'])) {
    include_once('config.php');
    $nis = $_POST['nis'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $pob = $_POST['pob'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $photo = $_POST['photo'];
    $grade_id = $_POST['grade_id'];
    $random = rand();
    $filename = $_FILES['photo']['name'];
    $filename2 = pathinfo($_FILES['photo']['name'], PATHINFO_FILENAME);
    $size = $_FILES['photo']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $extallowed = array('jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp', 'ico', 'svg', 'tiff'); 

    if (!file_exists(($_FILES['photo']['tmp_name'])) || !is_uploaded_file($_FILES['photo']['tmp_name'])) {
        $sql = "INSERT INTO students SET nis='$nis', name='$name', gender='$gender', pob='$pob', dob='$dob', phone='$phone', email='$email', address='$address', grade_id='$grade_id'";
    }

    if (in_array($ext, $extallowed)) {
        if ($size < 10000000) {
            echo "<script>alert('ukuran file tidak boleh lebih dari 1 MB'); window.location='? m=siswa&s=add';</script>";
        } else {

            $photo = $filename2 . "_" $random . "." . $ext;
            move_uploaded_file($_FILES['photo']['tmp_name'], "img/students/" . $photo);
            $sql = "INSERT INTO students SET nis='$nis', name='$name', gender='$gender', pob='$pob', dob='$dob', phone='$phone', email='$email', address='$address', photo='$photo', grade_id='$grade_id'";
        }
    } else {
        echo  "<script>alert('Akhiran file tidak sesuai');window.location='? m=siswa&s=add';</script>";
    }
   
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: ?m=siswa&sm=view");
    } else {
        echo "<script>alert('Data gagal disimpan'); window.location='?m=siswa&s=add';</script>";
    }
} else {
    echo "Jangan langsung buka file ini. Tambah Data <a href='?m=siswa&s=add'>Klik disini</a>";
}