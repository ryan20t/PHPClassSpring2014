<?php include 'dependency.php'; ?>
<?php


$sitenameRequest = new SignupModel();
$sitenameRequest->setSitename(filter_input(INPUT_POST, 'website'));


$checkSitename = array( "taken" => 'Available', "username" => $sitenameRequest->getSitename() );

$login = new Login();

if ( $login->sitenameTaken($sitenameRequest))
{
    $checkSitename['taken'] = 'Unavailable';
}

echo json_encode($checkSitename);