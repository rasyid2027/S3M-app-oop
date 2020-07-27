<?php

$del = new Crud();
$stmt = $del->deleteDataById($_GET['id']);
if ($stmt > 0) {
    echo "
        <script>
            alert('successfully deleted data')
            document.location.href = 'santri-data.php';
        </script>
        ";
} else {
    echo "
        <script>
            alert('failed to delete data')
            document.location.href = 'santri-data.php';
        </script>
        ";
}
