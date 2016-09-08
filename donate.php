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
                return true;
            }
            function submitForm(){
                $("#donate").submit();
            }
            function showOrg(org){
                if(org=="ind"){
                    $("#orgInput").hide();
                }else{
                    $("#orgInput").show();
                }
            }
        </script>
        <link rel="stylesheet" type="text/css" href="css/layout02.css">
    </head>
    <body>
<?php
    include 'includes/navigation.php';
?>
        <div id="main-body">
            <div id="first-content">
                <form id="donate" action="donate-submit.php" onsubmit="return validateForm()" method="POST">
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
                <h2>Please give us some additional information:</h2>
                <div class="form-layout">
                    <p><label for="type">Type of Donation:</label></p>
                </div>
                <div class="form-layout">
                    <p><input type="radio" name="type" value="once" checked="checked"> One Time<br>
                    <input type="radio" name="type" value="recurring"> Recurring</p>
                </div>
                <div class="form-layout">
                    <p><label for="program">Please allocate my donation to:</label></p>
                </div>
                <div class="form-layout">
                    <p><input type="radio" name="program" value="any" checked="checked"> Any program<br>
                    <input type="radio" name="program" value="counseling"> Counseling and Care Support (CCS) Program<br>
                    <input type="radio" name="program" value="volunteer"> Volunteer and Internship Placement (V.I.P) Program<br>
                    <input type="radio" name="program" value="cultural"> Cultural Exchange Program<br>
                    <input type="radio" name="program" value="health"> Health Care<br>
                    <input type="radio" name="program" value="agricultural"> Agricultural Project/Granary/Food Basket<br>
                    <input type="radio" name="program" value="social"> Social & Spiritual Development<br>
                    <input type="radio" name="program" value="sports"> Sports and Leisure<br>
                    <input type="radio" name="program" value="economic"> Economic and Fundraisng (EFR) Program<br>
                    <input type="radio" name="program" value="business"> Business Development</p>
                </div>
                <h2>Contact Information:</h2>
                <div class="form-layout">
                    <p><label for="organisation">This donation is from a:</label></p>
                </div>
                <div class="form-layout">
                    <p><input type="radio" name="organisation" value="organisation" onclick="showOrg('org');" checked="checked"> Organisation<br/>
                    <input type="radio" name="organisation" value="indivdual" onclick="showOrg('ind');"> Individual</p>
                </div>
                <p>
                    <span id="orgInput">
                        <label for="orgName">Organisation name:</label>
                        <input type="text" name="orgName" id="orgName"><br/>

                        <label for="orgType">Organisation type:</label>
                        <select name="orgType" id="orgType">
                            <option value="church">Church</option>
                            <option value="commEnterprise">Commercial Enterprise</option>
                            <option value="school">School</option>
                            <option value="nonProfEnterprise">Non Profit Enterprise</option>
                            <option value="community">Community or Group</option>
                            <option value="other">Other</option>
                        </select><br/>
                    </span>
                    <label for="firstName">First name:</label>
                    <input type="text" name="firstName" id="firstName"><br/>
                    
                    <label for="lastName">Last name:</label>
                    <input type="text" name="lastName" id="lastName"><br/>
                    
                    <label for="tel">Phone Number:</label>
                    <input type="text" name="tel" id="tel"><br/>
                    
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="email"><br/>
                    
                    <label for="address1">Address 1:</label>
                    <input type="text" name="address1" id="address1"><br/>
                    
                    <label for="address2">Address 2:</label>
                    <input type="text" name="address2" id="address2"><br/>
                    
                    <label for="city">City:</label>
                    <input type="text" name="city" id="city"><br/>
                    
                    <label for="country">Country:</label>
                    <input type="text" name="country" id="country"><br/>
                </p>
                <p class="button-holder"><a href="javascript:submitForm();" class="button">Submit Form</a></p>
                <p>&nbsp;</p>
                </form>
            </div>
<?php
    include 'includes/footer.php';
?>
        </div>
    </body>
</html>

<!--
-->
