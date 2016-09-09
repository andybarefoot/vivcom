<?

$keys = array_keys($_POST);

foreach($keys as $key){
    $_POST[$key] = htmlspecialchars(trim($_POST[$key]));
}

$dataClean = true;
$errorStr= "";

print $declarationCheck1;
if ($_POST["declarationCheck1"] !== "Yes") {
    $errorStr.=" -  The first checkbox in 'Part 12 - Declaration' must be checked.<br/>";
    $dataClean = false;
}
if ($_POST["declarationCheck2"] !== "Yes") {
    $errorStr.=" -  The second checkbox in 'Part 12 - Declaration' must be checked.<br/>";
    $dataClean = false;
}
if($_POST["under16"]!=="no"){
    if ($_POST["guardianCheck1"] !== "Yes") {
        $errorStr.=" -  For under 16s a guardian must check the first checkbox in 'Part 11'.<br/>";
        $dataClean = false;
    }
    if ($_POST["guardianCheck2"] !== "Yes") {
        $errorStr.=" -  For under 16s a guardian must check the second checkbox in 'Part 11'.<br/>";
        $dataClean = false;
    }
}

$to = "syrillkizza@gmail.com";
$subject = "VIVCOM Volunteer Application Form";
$message = "Form contents:\n\n";

$message .= "Part 1 - The volunteer role you are applying for\n";
$message .= "Role Title: ".$_POST["role"]."\n";  
$message .= "Name of Project: ".$_POST["project"]."\n";  
$message .= "Location: ".$_POST["location"]."\n";  
$message .= "Package interested in: ".$_POST["packageType"]."\n\n";  

$message .= "Part 2 - Personal Information\n";  
$message .= "First name: ".$_POST["firstName"]."\n";  
$message .= "Last name: ".$_POST["lastName"]."\n";  
$message .= "Title: ".$_POST["title"]."\n";  
$message .= "Home Address: ".$_POST["address"]."\n";  
$message .= "City: ".$_POST["city"]."\n";  
$message .= "State: ".$_POST["state"]."\n";  
$message .= "Postal code: ".$_POST["postalCode"]."\n";  
$message .= "Day time phone number: ".$_POST["daytel"]."\n";  
$message .= "Evening phone number: ".$_POST["eveningtel"]."\n";  
$message .= "Mobile: ".$_POST["mobile"]."\n";  
$message .= "Email: ".$_POST["email"]."\n";  
$message .= "Date of Birth: ".$_POST["dateofbirth"]."\n";  
$message .= "National ID No: ".$_POST["natIdNo"]."\n\n";  

$message .= "Part 3 - How did you hear about our organization\n";  
$message .= "Heard from: ".$_POST["hearAbout"]."\n";  
$message .= "Other details: ".$_POST["hearAboutOther"]."\n\n";  

$message .= "Part 4 - Your interests and reasons for applying to volunteer\n";
$message .= "Hope to gain: \n'".$_POST["gain"]."'\n";  
$message .= "Hobbies or interests: \n'".$_POST["hobbies"]."'\n\n";  

$message .= "Part 5 - Your availability\n";
$message .= "Days and times: \n'".$_POST["availability"]."'\n\n";  

$message .= "Part 6 - Your skills and experience\n";
$message .= "Paid/voluntary work Experience: \n'".$_POST["experience"]."'\n";  
$message .= "Qualification or training: \n'".$_POST["qualification"]."'\n";  
$message .= "Fundraising:  ".$_POST["fundraising"]."\n";  
$message .= "Languages: ".$_POST["languages"]."\n";  
$message .= "Basic food Hygiene: ".$_POST["foodHygiene"]."\n";  
$message .= "First Aid: ".$_POST["firstAid"]."\n";  
$message .= "Sign Language: ".$_POST["signLanguage"]."\n";  
$message .= "Driving License (Car): ".$_POST["drivingLicense"]."\n";  
$message .= "Languages spoken: \n'".$_POST["otherLanguages"]."'\n";  
$message .= "Other skills \n'".$_POST["otherSkills"]."'\n\n";  

$message .= "Part 7 - References\n\n";
$message .= "Reference1\n";
$message .= "Title: ".$_POST["ref1title"]."\n";  
$message .= "First name: ".$_POST["ref1firstName"]."\n";  
$message .= "Last name: ".$_POST["ref1lastName"]."\n";  
$message .= "Home Address: ".$_POST["ref1address"]."\n";  
$message .= "City: ".$_POST["ref1city"]."\n";  
$message .= "State: ".$_POST["ref1state"]."\n";  
$message .= "Postal code: ".$_POST["ref1postalCode"]."\n";  
$message .= "Phone number: ".$_POST["ref1tel"]."\n";  
$message .= "Email: ".$_POST["ref1email"]."\n";  
$message .= "Occupation: ".$_POST["ref1occupation"]."\n";  
$message .= "How known: \n'".$_POST["ref1knowPerson"]."'\n";  
$message .= "Last contact \n'".$_POST["ref1lastContact"]."'\n\n";  
$message .= "Reference2\n";
$message .= "Title: ".$_POST["ref2title"]."\n";  
$message .= "First name: ".$_POST["ref2firstName"]."\n";  
$message .= "Last name: ".$_POST["ref2lastName"]."\n";  
$message .= "Home Address: ".$_POST["ref2address"]."\n";  
$message .= "City: ".$_POST["ref2city"]."\n";  
$message .= "State: ".$_POST["ref2state"]."\n";  
$message .= "Postal code: ".$_POST["ref2postalCode"]."\n";  
$message .= "Phone number: ".$_POST["ref2tel"]."\n";  
$message .= "Email: ".$_POST["ref2email"]."\n";  
$message .= "Occupation: ".$_POST["ref2occupation"]."\n";  
$message .= "How known: \n'".$_POST["ref2knowPerson"]."'\n";  
$message .= "Last contact \n'".$_POST["ref2lastContact"]."'\n\n";  

$message .= "Part 8 - Support and Health needs\n";
$message .= "Any disabilities: ".$_POST["disabilities"]."\n";  
$message .= "Disability details: \n'".$_POST["disabilityDetails"]."'\n\n";  

$message .= "Part 9 - Emergency contact details\n";
$message .= "Full name: ".$_POST["contactFullName"]."\n";  
$message .= "Day time number: ".$_POST["contactdaytel"]."\n";  
$message .= "Evening number: ".$_POST["contacteveningtel"]."\n";  
$message .= "Mobile: ".$_POST["contactmobile"]."\n";  
$message .= "Related: ".$_POST["contactRelated"]."\n\n";

$message .= "Part 10 - Data Protection\n";
$message .= "Box checked: ".$_POST["Protection"]."\n\n";  

$message .= "Part 11 - For parents/ Guardians of volunteers under 16 only\n";
$message .= "Permission: ".$_POST["guardianCheck1"]."\n";  
$message .= "Understand: ".$_POST["guardianCheck2"]."\n";  
$message .= "Relationship: ".$_POST["guardianRelationship"]."\n\n";  

$message .= "Part 12- Declaration\n";
$message .= "Understand and agree: ".$_POST["declarationCheck1"]."\n";  
$message .= "Confirm: ".$_POST["declarationCheck2"]."\n";  
$message .= "Under 16? ".$_POST["under16"]."\n\n";  

$message .= "Part 13 - Confidential (equal opportunities monitoring)\n";
$message .= "Religion: ".$_POST["religion"]."\n";  
$message .= "Disability: ".$_POST["disability"]."\n";  
$message .= "Cultural/ethnic origin: ".$_POST["culture"]."\n";  
$message .= "Sexual orientation: ".$_POST["sexualOrientation"]."\n";  

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
                <h1>Volunteering: Confirmation</h1>
                <p>Thank you for submitting your application to volunteer with us.</p>
                <p>We will review your application and be in touch with you soon.</p>
<?
    }else{
            print "<h1>Volunteering: Form Errors</h1>";
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
