<?

$type = htmlspecialchars(trim($_POST["type"]));
$program = htmlspecialchars(trim($_POST["program"]));

$organisation = htmlspecialchars(trim($_POST["organisation"]));
$orgName = htmlspecialchars(trim($_POST["orgName"]));
$orgType = htmlspecialchars(trim($_POST["orgType"]));

$firstName = htmlspecialchars(trim($_POST["firstName"]));
$lastName = htmlspecialchars(trim($_POST["lastName"]));
$tel = htmlspecialchars(trim($_POST["tel"]));
$email = htmlspecialchars(trim($_POST["email"]));
$address1 = htmlspecialchars(trim($_POST["address1"]));
$address2 = htmlspecialchars(trim($_POST["address2"]));
$city = htmlspecialchars(trim($_POST["city"]));
$country = htmlspecialchars(trim($_POST["country"]));

$to = "andy@andybarefoot.com";
$subject = "VIVCOM Donation";
$message = "Form contents:\n";

$message .= "Type of Donation: ".$type."\n";
$message .= "For Program: ".$program."\n";
$message .= "Organisation?: ".$organisation."\n";
$message .= "Organisation name: ".$orgName."\n";
$message .= "Organisation type: ".$orgType."\n";

$message .= "First Name: ".$firstName."\n";
$message .= "Last Name: ".$lastName."\n";
$message .= "Tel: ".$tel."\n";
$message .= "Email: ".$email."\n";
$message .= "Address 1: ".$address1."\n";
$message .= "Address 2: ".$address2."\n";
$message .= "City: ".$city."\n";
$message .= "Country: ".$country."\n";

mail($to,$subject,$message);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>VVCF</title>
        <meta name="viewport" content="initial-scale=1.0, width=device-width" />        
<?php
    include 'includes/linksScripts.php';
?>
        <link rel="stylesheet" type="text/css" href="css/layout02.css">
    </head>
    <body>
<?php
    include 'includes/navigation.php';
?>
        <div id="main-body">
            <div id="first-content">
                <h1>Donate</h1>
                <p>You can donate to us with any of the following methods:</p>
                <h2>Credit Card/PayPal</h2>
                <p><a href="#" class="button">Donate Now</a></p>
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
             </div>
            <div id="second-content">
                <h2>Thank You!</h2>
                <p>Thank you for your donation.</p>
                <p>&nbsp;</p>
             </div>
<?php
    include 'includes/footer.php';
?>
        </div>
    </body>
</html>
