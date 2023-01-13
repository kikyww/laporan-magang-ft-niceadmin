<?php
$konek = mysqli_connect("localhost", "root", "", "db_magang");
if ($konek) {
    echo mysqli_error($konek);
}

?>