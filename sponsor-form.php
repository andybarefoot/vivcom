<!DOCTYPE html>
<html>
    <head>
        <title>VVCF</title>
        <meta name="viewport" content="initial-scale=1.0, width=device-width" />        
<?php
    include 'includes/linksScripts.php';
?>
       <script>
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
                <form id="sponsor" action="sponsor-submit.php" method="POST">
                <h1>Sponsor a Child: Application Form</h1>
                <p>Please complete and submit the form:</p>
                <p>Yes, I want to become a Child sponsor with VIVCOM Foundation.</p>
                <p>I would like to participate in the "Sponsor a Child" program of VIVCOM Foundation for children, which provides food, helps with the education and medical care of orphans and vulnerable children in Nabweru, Uganda.</p>
                <h2>Your details:</h2>
                <p> 
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title"><br/>
                    
                    <label for="firstName">First name:</label>
                    <input type="text" name="firstName" id="firstName"><br/>
                    
                    <label for="lastName">Last name:</label>
                    <input type="text" name="lastName" id="lastName"><br/>
                    
                    <label for="address">Address:</label>
                    <input type="text" name="address" id="address"><br/>
                    
                    <label for="city">City:</label>
                    <input type="text" name="city" id="city"><br/>
                    
                    <label for="state">State:</label>
                    <input type="text" name="state" id="state"><br/>
                    
                    <label for="postalCode">Postal code:</label>
                    <input type="text" name="postalCode" id="postalCode"><br/>
                    
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="email"><br/>
                    
                    <label for="tel">Tel:</label>
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
                <p><input type="checkbox" name="acknowledgement" value="acknowledgement">I acknowledge that the sponsorship amount required for each child is $300 per term.<br/>All children are strictly allocated by VIVCOM Foundation.</p>
                <p>Your payments can be made by direct wire transfer to our account as detailed below.</p>
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
                </table>
                <p class="button-holder"><a href="javascript:submitForm();" class="button">Submit Form</a></p>
                </form>
            </div>
<?php
    include 'includes/footer.php';
?>
        </div>
    </body>
</html>
