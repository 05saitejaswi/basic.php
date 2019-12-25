<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
//session_unset();
unset($_SESSION['favcolor']);
print_r($_SESSION);
// destroy the session
session_destroy();
?>

</body>
</html>
