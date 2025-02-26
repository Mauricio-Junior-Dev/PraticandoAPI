<?php

use app\library\Authenticate;
use app\library\GoogleClient;

require '../vendor/autoload.php';


$googleClient = new GoogleClient;
$googleClient->init();
if ($googleClient->authorized()){
    $auth = new Authenticate;
    $auth->authGoogle($googleClient->getData());
}

$authUrl = $googleClient->generateAuthLink();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
    <input type="text" name="email" placeholder="Email">
    <input type="text" name="password" placeholder="Password">
    <button type="submit">Login</button>
    <a href="<?php echo $authUrl; ?>">Login Google</a>

    </form>    


</body>
</html>