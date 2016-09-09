<?

//print_r(array_keys($_POST));
$keys = array_keys($_POST);

$dataClean = true;
$errorStr= "";

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
    foreach($keys as $key){
        $_POST[$key] = htmlspecialchars(trim($_POST[$key]));
        print $key.": ".$_POST[$key]."<br/>";
    }
    if($dataClean){
        mail($to,$subject,$message);
?>
                <h1>Sponsor a Child: Payment</h1>
                <h2>Thank You!</h2>
                <p>Thank you for agreeing to sponsor a child.</p>
                <p>Please choose one of the payment methods below.</p>
                <h2>Credit Card/PayPal</h2>
                <table>
                    <tr>
                        <td>$300 US: Primary sponsorship 1 term</td>
                        <td><a href="#" class="button">Pay Now</a></td>
                    </tr>
                    <tr>
                        <td>$900 US: Primary sponsorship 1 year</td>
                        <td><a href="#" class="button">Pay Now</a></td>
                    </tr>
                    <tr>
                        <td>$500 US: Secondary sponsorship 1 term</td>
                        <td><a href="#" class="button">Pay Now</a></td>
                    </tr>
                    <tr>
                        <td>$1500 US: Secondary sponsorship 1 year</td>
                        <td><a href="#" class="button">Pay Now</a></td>
                    </tr>
                    <tr>
                        <td>$500 US: University Education 1 semester</td>
                        <td><a href="#" class="button">Pay Now</a></td>
                    </tr>
                    <tr>
                        <td>$1500 US: University Education 1 year</td>
                        <td><a href="#" class="button">Pay Now</a></td>
                    </tr>
                </table>
                <h2>Mobile Money Banking</h2>
                <p>Please choose a sponsorship amount from the table above, our mobile banking numbers are:</p>
                <p>M.T.N: +256775152084</p>
                <p>AIRTEL: +256705152084</p>
                <h2>Bank Transfer:</h2>
                <p>Please choose a sponsorship amount from the table above, our bank details are:</p>
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
