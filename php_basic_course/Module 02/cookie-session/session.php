<?php
session_save_path('./logs');

session_name('Unicode');

if (empty(session_id())){
    session_start();
}

//$_SESSION['username'] = 'Hoàng An';
//$_SESSION['fullname'] = 'Unicode';

//Update session
$_SESSION['username'] = 'Học PHP';

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

