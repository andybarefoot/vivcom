<!DOCTYPE html>
<html>
    <head>
        <title>VVCF</title>
        <meta name="viewport" content="initial-scale=1.0, width=device-width" />        
<?php
    include 'includes/linksScripts.php';
?>
       <script>
            function validateForm() {
                var valid = true;
                var errorStr = "";
                var title = document.forms["sponsor"]["title"].value;
                if (title == null || title == "") {
                    errorStr += "Please provide your Title\n";
                    valid = false;
                }
                var firstName = document.forms["sponsor"]["firstName"].value;
                if (firstName == null || firstName == "") {
                    errorStr += "Please provide your First Name\n";
                    valid = false;
                }
                var lastName = document.forms["sponsor"]["lastName"].value;
                if (lastName == null || lastName == "") {
                    errorStr += "Please provide your Last Name\n";
                    valid = false;
                }
                var address = document.forms["sponsor"]["address"].value;
                if (address == null || address == "") {
                    errorStr += "Please provide your Address\n";
                    valid = false;
                }
                var city = document.forms["sponsor"]["city"].value;
                if (city == null || city == "") {
                    errorStr += "Please provide your City\n";
                    valid = false;
                }
                var state = document.forms["sponsor"]["state"].value;
                if (state == null || state == "") {
                    errorStr += "Please provide your State\n";
                    valid = false;
                }
                var postalCode = document.forms["sponsor"]["postalCode"].value;
                if (postalCode == null || postalCode == "") {
                    errorStr += "Please provide your Postal Code\n";
                    valid = false;
                }
                var email = document.forms["sponsor"]["email"].value;
                if (email == null || email == "") {
                    errorStr += "Please provide your Email\n";
                    valid = false;
                }
                var tel = document.forms["sponsor"]["tel"].value;
                if (tel == null || tel == "") {
                    errorStr += "Please provide your Tel\n";
                    valid = false;
                }
                if (!document.forms["sponsor"]["acknowledgement"].checked) {
                    errorStr += "You must check the acknowledgement box\n";
                    valid = false;
                }
                if(valid){
                    return true;
                }else{
                    alert(errorStr);
                    return false;
                }
            }
            function submitForm(){
                $("#sponsor").submit();
            }
        </script>
    </head>
    <body>
<?php
    include 'includes/navigation.php';
?>
        <div id="main-body">
            <div id="primary-content">
                <form id="sponsor" action="sponsor-submit.php" onsubmit="return validateForm()" method="POST">
                <h1>Sponsor a Child: Application Form</h1>
                <p>Please complete and submit the form:</p>
                <p>Yes, I want to become a Child sponsor with VIVCOM Foundation.</p>
                <p>I would like to participate in the "Sponsor a Child" program of VIVCOM Foundation for children, which provides food, helps with the education and medical care of orphans and vulnerable children in Nabweru, Uganda.</p>
                <h2>Your details:</h2>
                <p> 
                    <label for="title">Title:&#42;</label>
                    <input type="text" name="title" id="title"><br/>
                    
                    <label for="firstName">First name:&#42;</label>
                    <input type="text" name="firstName" id="firstName"><br/>
                    
                    <label for="lastName">Last name:&#42;</label>
                    <input type="text" name="lastName" id="lastName"><br/>
                    
                    <label for="address">Address:&#42;</label>
                    <input type="text" name="address" id="address"><br/>
                    
                    <label for="city">City:&#42;</label>
                    <input type="text" name="city" id="city"><br/>
                    
                    <label for="state">State:&#42;</label>
                    <input type="text" name="state" id="state"><br/>
                    
                    <label for="postalCode">Postal code:&#42;</label>
                    <input type="text" name="postalCode" id="postalCode"><br/>
                    
                    <label for="email">Email:&#42;</label>
                    <input type="text" name="email" id="email"><br/>
                    
                    <label for="tel">Tel:&#42;</label>
                    <input type="text" name="tel" id="tel"><br/>
                    
                    <label for="mobile">Mobile:</label>
                    <input type="text" name="mobile" id="mobile"><br/>
                    
                    <label for="childName">Sponsored child name:</label>
                    <input type="text" name="childName" id="childName"><br/>
                    
                    <label for="idNo">ID No:</label>
                    <input type="text" name="idNo" id="idNo">
                </p>
                
                <p>Please let us know your preference by ticking one of the boxes below:</p>
                <p><input type="radio" name="gender" value="Girl">Girl<br>
                <input type="radio" name="gender" value="Boy">Boy<br>
                <input checked="checked" type="radio" name="gender" value="noPref">No preference</p>
                <p><input type="checkbox" id="acknowledgement" name="acknowledgement" value="acknowledgement">I acknowledge that the sponsorship amount required for each child is $300 per term.&#42;<br/>All children are strictly allocated by VIVCOM Foundation.</p>
                <p>&#42; These fields must be completed.</p>
                <p class="button-holder"><a href="javascript:submitForm();" class="button">Submit Form</a></p>
                </form>
            </div>
<?php
    include 'includes/footer.php';
?>
        </div>
    </body>
</html>
