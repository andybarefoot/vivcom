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

if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
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
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <script>
            jQuery(document).ready(function( $ ) {
                $(window).resize(function() {
                    if($( window ).width()>=900){
                        $("#menu").show();
                    }
                });
                $(function(){
                    $("#menu-icon").click(function(){
                        $("#menu").slideToggle();
                    });
                });
                $(function(){
                    $(".about-link").click(function(){
                        $("#programMenu").hide();
                        $("#aboutMenu").slideToggle();
                    });
                });
                $(function(){
                    $(".program-link").click(function(){
                        $("#aboutMenu").hide();
                        $("#programMenu").slideToggle();
                    });
                });
            });
        </script>
    </head>
    <body>
        <div id="navigation">
            <nav>
                <a href="index.html">
                    <img id="logo" src="images/vvcf-logo.png" alt="Vision for Vulnerable Communities Foundation">
                </a>
                <img id="menu-icon" src="images/menu.png">
                <ul id="menu">
                    <li><a href="#" class="about-link">About Us</a></li>
                    <li class="sub-menu"><ul id="aboutMenu">
                        <li><a href="team/syrill-kizza.html">Syrill Kizza</a></li>
                        <li><a href="team/brenda-econia.html">Brenda Econia</a></li>
                        <li><a href="team/abraham-olupot.html">Abraham Olupot</a></li>
                        <li><a href="team/kisinde-arthur.html">Kisinde Rogers Arthur</a></li>
                        <li><a href="team/lukanga-godfrey.html">Lukanga Musoke Godfrey</a></li>
                    </ul></li>
                    <li><a href="#" class="program-link">Programs</a></li>
                    <li class="sub-menu"><ul id="programMenu">
                        <li><a href="programs/ets.html">Education and Training Support (ETS) Program</a></li>
                        <li><a href="programs/ccs.html">Counseling and Care Support (CCS) Program</a></li>
                        <li><a href="programs/vip.html">Volunteer and Internship Placement (V.I.P) Program</a></li>
                        <li><a href="programs/cep.html">Cultural Exchange Program</a></li>
                        <li><a href="programs/health-care.html">Health Care</a></li>
                        <li><a href="programs/agricultural.html">Agricultural Project/Granary/Food Basket</a></li>
                        <li><a href="programs/social.html">Social & Spiritual Development</a></li>
                        <li><a href="programs/sports.html">Sports and Leisure</a></li>
                        <li><a href="programs/efr.html">Economic and Fundraisng (EFR) Program</a></li>
                        <li><a href="programs/business.html">Business Development</a></li>
                    </ul></li>
                    <li><a href="sponsor-a-child.html">Sponsor a Child</a></li>
                    <li><a href="donate.html" class="button">Donate</a></li>
                    <li><a href="contact-us.html">Contact Us</a></li>
                </ul>
            </nav>
        </div>
        <div id="main-body">
        <h1>Sponsor a Child: Application Form</h1>
 <?
    if($dataClean){
        mail($to,$subject,$message);
?>
            <p>Thank you for agreeing to sponsor a child.</p>
            <p>Once we have confirmed a payment of $300 we will send more details of the child you have sponsored.</p>
            <h2>Bank Details:</h2>
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
            <table>
 <?
    }else{
            print "<p>There were some issues with your details. Please <a href='javascript:goBack();'>go back</a> and correct the following issues:</p>";
            print "<p>".$errorStr."</p>";
    }
?>
         </div>
    </body>
</html>