<?php

if (isset($_POST['year']) && $_POST['year']!='' ) {
    $year = $_POST['year'];
    echo 'Вам '.( date('Y') - $year ).' років  ';
}
else {
    echo 'Помилка, введіть рік народження!';
}
?>
