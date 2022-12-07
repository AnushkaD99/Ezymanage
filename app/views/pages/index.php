<a href="<?php echo URLROOT; ?>/users/login"><button>Login</button></a>
<?php
$pass = password_hash('123456', PASSWORD_DEFAULT);
echo $pass;
?>