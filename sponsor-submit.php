<?

$title = htmlspecialchars(trim($_POST["title"]));
$firstName = htmlspecialchars(trim($_POST["firstName"]));
$lastName = htmlspecialchars(trim($_POST["lastName"]));
$address = htmlspecialchars(trim($_POST["address"]));
$city = htmlspecialchars(trim($_POST["city"]));
$state = htmlspecialchars(trim($_POST["state"]));
$postalCode = htmlspecialchars(trim($_POST["postalCode"]));
$email = htmlspecialchars(trim($_POST["email"]));
$tel = htmlspecialchars(trim($_POST["tel"]));
$mobile = htmlspecialchars(trim($_POST["mobile"]));
$childName = htmlspecialchars(trim($_POST["childName"]));
$idNo = htmlspecialchars(trim($_POST["idNo"]));
$gender = $_POST["gender"];
$acknowledgement = $_POST["acknowledgement"];

$dataClean = true;
$errorStr= "";

if (strlen($title) == 0) {
    $errorStr.=" - The &quot;Title&quot; field can not be left blank.<br/>";
    $dataClean = false;
}
if (strlen($firstName) == 0) {
    $errorStr.=" - The &quot;First Name&quot; field can not be left blank.<br/>";
    $dataClean = false;
}
if (strlen($lastName) == 0) {
    $errorStr.=" - The &quot;Last Name&quot; field can not be left blank.<br/>";
    $dataClean = false;
}
if (strlen($address) == 0) {
    $errorStr.=" - The &quot;Address&quot; field can not be left blank.<br/>";
    $dataClean = false;
}
if (strlen($city) == 0) {
    $errorStr.=" - The &quot;City&quot; field can not be left blank.<br/>";
    $dataClean = false;
}
if (strlen($state) == 0) {
    $errorStr.=" - The &quot;State&quot; field can not be left blank.<br/>";
    $dataClean = false;
}
if (strlen($postalCode) == 0) {
    $errorStr.=" - The &quot;Postal Code&quot; field can not be left blank.<br/>";
    $dataClean = false;
}
if (strlen($tel) == 0) {
    $errorStr.=" - The &quot;Tel&quot; field can not be left blank.<br/>";
    $dataClean = false;
}
if (strlen($email) == 0) {
    $errorStr.=" - The &quot;Email&quot; field can not be left blank.<br/>";
    $dataClean = false;
}else if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    $errorStr.=" - ".$email ." is not a valid email address.<br/>";
    $dataClean = false;
}

if ($acknowledgement !== "acknowledgement") {
    $errorStr.=" -  The acknowledgement checkbox must be checked.<br/>";
    $dataClean = false;
}

$to = "andy@andybarefoot.com";
$subject = "VIVCOM Sponsor a Child Application";
$message = "Form contents:\n";
$message .= "Title: ".$title."\n";
$message .= "First Name: ".$firstName."\n";
$message .= "Last Name: ".$lastName."\n";
$message .= "Address: ".$address."\n";
$message .= "City: ".$city."\n";
$message .= "State: ".$state."\n";
$message .= "Postal Code: ".$postalCode."\n";
$message .= "Email: ".$email."\n";
$message .= "Tel: ".$tel."\n";
$message .= "Mobile: ".$mobile."\n";
$message .= "Child Name: ".$childName."\n";
$message .= "ID No: ".$idNo."\n";
$message .= "Gender: ".$gender."\n";


?>
<!DOCTYPE html>
<html>
    <head>
        <title>VVCF</title>
        <meta name="viewport" content="initial-scale=1.0, width=device-width" />        
<?php
    include 'includes/linksScripts.php';
?>
    </head>
    <body>
<?php
    include 'includes/navigation.php';
?>
        <div id="main-body">
            <div id="primary-content">
 <?
    if($dataClean){
        mail($to,$subject,$message);
?>
                <h1>Sponsor a Child: Payment</h1>
                <h2>Thank You!</h2>
                <p>Thank you for agreeing to sponsor a child. The cost for sponsoring a child is as follows:</p>
                <table>
                    <tr>
                        <td>$300 US: Primary sponsorship 1 term</td>
                    </tr>
                    <tr>
                        <td>$900 US: Primary sponsorship 1 year</td>
                    </tr>
                    <tr>
                        <td>$500 US: Secondary sponsorship 1 term</td>
                    </tr>
                    <tr>
                        <td>$1500 US: Secondary sponsorship 1 year</td>
                    </tr>
                    <tr>
                        <td>$500 US: University Education 1 semester</td>
                    </tr>
                    <tr>
                        <td>$1500 US: University Education 1 year</td>
                    </tr>
                </table>
                <p>Please choose a sposnorship and make your donation using one of the payment methods below.</p>
                <h2>Credit Card/PayPal</h2>
                <p>Make a payment via <a href="https://www.paypal.com/">PayPal</a> to our email address: vivcomfoundation@gmail.com</p>
                <h2>Mobile Money Banking</h2>
                <p>M.T.N: +256775152084</p>
                <p>AIRTEL: +256705152084</p>
                <h2>Bank Transfer:</h2>
                <table>
                    <tr>
                        <td>BANK NAME:</td>
                        <td>BANK OF AFRICA</td>
                    </tr>
                    <tr>
                        <td>ACCOUNT NAME:</td>
                        <td>Vision For Vulnerable Communities Foundation</td>
                    </tr>
                    <tr>
                        <td>BRANCH:</td>
                        <td>Ntinda Branch, Kampala (Uganda)</td>
                    </tr>
                    <tr>
                        <td>BANK CODE:</td>
                        <td>01009/13</td>
                    </tr>
                    <tr>
                        <td>ACCOUNT NUMBER:</td>
                        <td>03634330002</td>
                    </tr>
                    <tr>
                        <td>SWIFT CODE:</td>
                        <td>AFRIUGKA</td>
                    </tr>
                </table>
                <p>Once we have confirmed your payment we will send more details of the child you have sponsored.</p>
<?
    }else{
            print "<h1>Sponsor a Child: Form Errors</h1>";
            print "<p>There were some issues with your details. Please <a href='javascript:history.go(-1)'>go back</a> and correct the following issues:</p>";
            print "<p>".$errorStr."</p>";
            print "<p class=\"button-holder\"><a href=\"javascript:history.go(-1);\" class=\"button\">Back to Form</a></p>";
    }
?>
             </div>
<?php
    include 'includes/footer.php';
?>
        </div>
    </body>
</html>
