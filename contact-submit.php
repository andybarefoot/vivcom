<?

$name = htmlspecialchars(trim($_POST["name"]));
$email = htmlspecialchars(trim($_POST["email"]));
$message = htmlspecialchars(trim($_POST["message"]));

$dataClean = true;
$errorStr= "";

if (strlen($name) == 0) {
    $errorStr.="The &quot;Name&quot; field can not be left blank.<br/>";
    $dataClean = false;
}
if (strlen($email) == 0) {
    $errorStr.="The &quot;Email&quot; field can not be left blank.<br/>";
    $dataClean = false;
}else if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    $errorStr.=" - &quot;".$email ."&quot; is not a valid email address.<br/>";
    $dataClean = false;
}
if (strlen($message) == 0) {
    $errorStr.="The &quot;Message&quot; field can not be left blank.<br/>";
    $dataClean = false;
}

$to = "andy@andybarefoot.com";
$subject = "VIVCOM Contact Us Form";
$message = "Contact Us message:\n";
$message .= "Name: ".$name."\n";
$message .= "Email: ".$email."\n";
$message .= "Message: ".$message."\n";

?>
<!DOCTYPE html>
<html>
    <head>
        <title>VVCF</title>
        <meta name="viewport" content="initial-scale=1.0, width=device-width" />        
<?php
    include 'includes/linksScripts.php';
    include 'includes/layout1.php';
?>
        <link rel="stylesheet" type="text/css" href="../css/layout01.css">
    </head>
    <body>
<?php
    include 'includes/navigation.php';
?>
        <div id="main-body">
            <div id="primary-content">
               <h1>Contact Us:</h1>
 <?
    if($dataClean){
        mail($to,$subject,$message);
?>
                <p>Thank you for your message.</p>
 <?
    }else{
            print "<p>There were some issues with your details. Please <a href='javascript:history.go(-1)'>go back</a> and correct the following issues:</p>";
            print "<p>".$errorStr."</p>";
    }
?>
             </div>
            <div id="secondary-content">
                <h2>Address:</h2>
                <p><strong>Vision For Vulnerable Communities Foundation</strong><br/>
                    P.O BOX 72449<br/> Nabweru<br/> Wakiso<br/> (Uganda)</p>
                <h2>Telephone:</h2>
                <p>Tel: +256705152084<br/>Mob: +256775152084 / +256771874642</p>
                <h2>Email:</h2>
                <p>
                    <ul>
                        <li><a href="mailto:Info@visionforvulnerablecommunities.org">Info@visionforvulnerablecommunities.org</a></li>
                        <li><a href="mailto:syrillkizza@gmail.com">syrillkizza@gmail.com</a></li>
                        <li><a href="mailto:vivcomfoundation@gmail.com">vivcomfoundation@gmail.com</a></li>
                    </ul>
                </p>
            </div>
<?php
    include 'includes/footer.php';
?>
        </div>
    </body>
</html>
