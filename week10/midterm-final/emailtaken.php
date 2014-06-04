<?php include 'dependency.php'; ?>
<?php


$emailRequest = new SignupModel();
$emailRequest->setEmail(filter_input(INPUT_POST, 'email'));


$checkEmail = array( "taken" => 'Invalid Email Address', "email" => $emailRequest->getEmail() );

$login = new Login();

if ( $login->emailTaken($emailRequest))
{
    $checkEmail['taken'] = 'Email Address Found';
}

echo json_encode($checkEmail);