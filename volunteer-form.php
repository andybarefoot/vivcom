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
                if (!document.forms["volunteer"]["declarationCheck1"].checked) {
                    errorStr += "- You must check the first box in Part 12 to confirm your understanding.\n";
                    valid = false;
                }
                if (!document.forms["volunteer"]["declarationCheck2"].checked) {
                    errorStr += "- You must check the second box in Part 12 to confirm your application details.\n";
                    valid = false;
                }
                if (!document.forms["volunteer"]["under16no"].checked) {
                    if (!document.forms["volunteer"]["guardianCheck1"].checked) {
                        errorStr += "- As you are under 16 a guardian must check the first box in Part 11 to give their permission.\n";
                        valid = false;
                    }
                    if (!document.forms["volunteer"]["guardianCheck2"].checked) {
                        errorStr += "- As you are under 16 a guardian must check the second box in Part 11 to agree to policies and procedures.\n";
                        valid = false;
                    }
                }
                if(valid){
                    return true;
                }else{
                    alert(errorStr);
                    return false;
                }
            }
            function submitForm(){
                $("#volunteer").submit();
            }
        </script>
    </head>
    <body>
<?php
    include 'includes/navigation.php';
?>
        <div id="main-body">
            <div id="primary-content">
                <form id="volunteer" action="volunteer-submit.php" onsubmit="return validateForm()" method="POST">
                <h1>Online Application Form</h1>
                <p>Thank you for your interest in volunteering with Vision For Vulnerable Communities Foundation. The information you provide in this Application form will help us to decide how you might be useful to help us. It is really helpful if you can you can give us as much information as possible about your experiences, interests and availability to volunteer. If you have any questions about this form, please do not hesitate to contact us for more details.</p>

                <h2>Part 1 - The volunteer role you are applying for</h2>
                <p> 
                    <label for="role">Role Title:</label>
                    <input type="text" name="role" id="role"><br/>
                    
                    <label for="project">Name of Project:</label>
                    <input type="text" name="project" id="project"><br/>
                    
                    <label for="location">Location:</label>
                    <input type="text" name="location" id="location"></p>
                <p>Tick the volunteer package you are interested in:<br/>
                <input type="radio" name="packageType" value="solo" checked> Solo volunteering<br/>
                <input type="radio" name="packageType" value="group"> Group volunteering<br/>
                <input type="radio" name="packageType" value="family"> Family volunteering<br/>
                <input type="radio" name="packageType" value="tailor"> Tailor made volunteering<br/>
                <input type="radio" name="packageType" value="corporate"> Corporate volunteering</p>

                <h2>Part 2 - Personal Information</h2>
                <p>
                    <label for="firstName">First name:</label>
                    <input type="text" name="firstName" id="firstName"><br/>
                    
                    <label for="lastName">Last name:</label>
                    <input type="text" name="lastName" id="lastName"><br/>
                    
                    <label for="title">Title: Mr/Mrs/Ms/Miss</label>
                    <input type="text" name="title" id="title"><br/>
                    
                    <label for="address">Home Address:</label>
                    <input type="text" name="address" id="address"><br/>
                    
                    <label for="city">City:</label>
                    <input type="text" name="city" id="city"><br/>
                    
                    <label for="state">State:</label>
                    <input type="text" name="state" id="state"><br/>
                    
                    <label for="postalCode">Postal code:</label>
                    <input type="text" name="postalCode" id="postalCode"><br/>
                    
                    <label for="daytel"> Day time phone number:</label>
                    <input type="text" name="daytel" id="daytel"><br/>
                    
                    <label for="eveningtel"> Evening phone number:</label>
                    <input type="text" name="eveningtel" id="eveningtel"><br/>
                    
                    <label for="mobile">Mobile:</label>
                    <input type="text" name="mobile" id="mobile"><br/>
                    
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="email"><br/>
                    
                    <label for="dateofbirth">Date of Birth:</label>
                    <input type="text" name="dateofbirth" id="dateofbirth"><br/>
                    
                    <label for="natIdNo">National ID No:</label>
                    <input type="text" name="natIdNo" id="natIdNo">
                </p>
                
                <h2>Part 3 - How did you hear about our organization</h2>                
                <p><input type="radio" name="hearAbout" value="mouth" checked>Word of Mouth<br>
                <input type="radio" name="hearAbout" value="school">School, college, university<br>
                <input type="radio" name="hearAbout" value="event">Event<br>
                <input type="radio" name="hearAbout" value="internet">Internet<br>
                <input type="radio" name="hearAbout" value="media">Media (TV, Radio, Newspaper)<br>
                <input type="radio" name="hearAbout" value="leaflet">Leaflet or Poster<br>
                <input type="radio" name="hearAbout" value="volunteer">Volunteer Centre<br>
                <input type="radio" name="hearAbout" value="Other">Other, please give details <input type="text" name="hearAboutOther" id="other"></p>

                <h2>Part 4 - Your interests and reasons for applying to volunteer</h2>                
                <p>
                    What do you hope to gain from volunteering with us?<br/>
                    <textarea name="gain" id="gain"></textarea><br/>
                    Please tell us about any hobbies or interests you have that might be relevant to the role you have applied for.<br/>
                    <textarea name="hobbies" id="hobbies"></textarea>
                </p>

                <h2>Part 5 - Your availability</h2>
                <p>
                    What days and times would best suit you and how often would you be able to volunteer?<br/>
                    <textarea name="availability" id="availability"></textarea>
                </p>

                <h2>Part 6 - Your skills and experience</h2>
                <p>
                    Please tell us about any paid/voluntary work Experience you have which may be relevant to this role.<br/>
                    <textarea name="experience" id="experience"></textarea><br/>

                    Please tell us about any qualification or training you are currently studying for.<br/>
                    <textarea name="qualification" id="qualification"></textarea>
                </p>
                <p>We sometimes need volunteers with particular skills. Do you have any of the following skills? Tick any of the boxes which apply.<br/>
                    <input type="checkbox" name="fundraising" value="Yes"> Fundraising<br/>
                    <input type="checkbox" name="languages" value="Yes"> Languages (other than English)<br/>
                    <input type="checkbox" name="foodHygiene" value="Yes"> Basic food Hygiene<br/>
                    <input type="checkbox" name="firstAid" value="Yes"> First Aid<br/>
                    <input type="checkbox" name="signLanguage" value="Yes"> Sign Language<br/>
                    <input type="checkbox" name="drivingLicense" value="Yes"> Driving License (Car)<br/>
                </p>
                <p>
                    Please state which languages you speak.<br/>
                    <textarea name="otherLanguages" id="otherLanguages"></textarea><br/>

                    Do you have any other skills you would like to share with us?<br/>
                    <textarea name="otherSkills" id="otherSkills"></textarea>
                </p>

                <h2>Part 7 - References</h2>             
                <p>Please provide details of two people, who have at least known you for two years that we can ask for references regarding your work/ studies/ experience and your suitability to volunteer with us. Wherever possible, these should be current/ past employers, places you have volunteered or a teacher/ tutor/ social worker.</p>
                <h2>Reference 1:</h2>
                <p>
                    <label for="ref1title">Title: Mr/Mrs/Ms/Miss</label>
                    <input type="text" name="ref1title" id="ref1title"><br/>
                    
                    <label for="ref1firstName">First name:</label>
                    <input type="text" name="ref1firstName" id="ref1firstName"><br/>
                    
                    <label for="ref1lastName">Last name:</label>
                    <input type="text" name="ref1lastName" id="ref1lastName"><br/>
                    
                    <label for="ref1address">Home Address:</label>
                    <input type="text" name="ref1address" id="ref1address"><br/>
                    
                    <label for="ref1city">City:</label>
                    <input type="text" name="ref1city" id="ref1city"><br/>
                    
                    <label for="ref1state">State:</label>
                    <input type="text" name="ref1state" id="ref1state"><br/>
                    
                    <label for="ref1postalCode">Postal code:</label>
                    <input type="text" name="ref1postalCode" id="ref1postalCode"><br/>
                    
                    <label for="ref1tel"> Phone number:</label>
                    <input type="text" name="ref1tel" id="ref1tel"><br/>
                    
                    <label for="ref1email">Email:</label>
                    <input type="text" name="ref1email" id="ref1email"><br/>
                    
                    <label for="ref1occupation">Occupation:</label>
                    <input type="text" name="ref1occupation" id="ref1occupation">
                </p>
                <p>    
                    How do you know this person?<br/>
                    <textarea name="ref1knowPerson" id="ref1knowPerson"></textarea><br/>

                    When did you last have contact with this person?<br/>
                    <textarea name="ref1lastContact" id="ref1lastContact"></textarea>
                </p>
                
                <h2>Reference 2:</h2>
                <p>
                    <label for="ref2title">Title: Mr/Mrs/Ms/Miss</label>
                    <input type="text" name="ref2title" id="ref2title"><br/>
                    
                    <label for="ref2firstName">First name:</label>
                    <input type="text" name="ref2firstName" id="ref2firstName"><br/>
                    
                    <label for="ref2lastName">Last name:</label>
                    <input type="text" name="ref2lastName" id="ref2lastName"><br/>
                    
                    <label for="ref2address">Home Address:</label>
                    <input type="text" name="ref2address" id="ref2address"><br/>
                    
                    <label for="ref2city">City:</label>
                    <input type="text" name="ref2city" id="ref2city"><br/>
                    
                    <label for="ref2state">State:</label>
                    <input type="text" name="ref2state" id="ref2state"><br/>
                    
                    <label for="ref2postalCode">Postal code:</label>
                    <input type="text" name="ref2postalCode" id="ref2postalCode"><br/>
                    
                    <label for="ref2tel"> Phone number:</label>
                    <input type="text" name="ref2tel" id="ref2tel"><br/>
                    
                    <label for="ref2email">Email:</label>
                    <input type="text" name="ref2email" id="ref2email"><br/>
                    
                    <label for="ref2occupation">Occupation:</label>
                    <input type="text" name="ref2occupation" id="ref2occupation">
                </p>
                <p>    
                    How do you know this person?<br/>
                    <textarea name="ref2knowPerson" id="ref2knowPerson"></textarea><br/>

                    When did you last have contact with this person?<br/>
                    <textarea name="ref2lastContact" id="ref2lastContact"></textarea>
                </p>
                
                <h2>Part 8 - Support and Health needs</h2>
                <p>Do you have any disabilities, health needs or extra support needs that we should be aware of when you organizing your volunteering?<br/>
                <input type="radio" id="disabilities" name="disabilities" value="yes" /> Yes 
                <input type="radio" id="disabilities" name="disabilities" value="no" /> No</p>
                <p>If yes, please give details to help us to plan your volunteering:<br/>
                <textarea name="disabilityDetails" id="disabilityDetails"></textarea>
                </p>
                
                <h2>Part 9 - Emergency contact details</h2>
                <p>Please give details of someone we may contact in an emergency if needed.</p>
                <p>
                    <label for="contactFullName">Full name:</label>
                    <input type="text" name="contactFullName" id="contactFullName"><br/>
                    
                     <label for="contactdaytel"> Day time phone number:</label>
                    <input type="text" name="contactdaytel" id="contactdaytel"><br/>
                    
                    <label for="contacteveningtel"> Evening phone number:</label>
                    <input type="text" name="contacteveningtel" id="contacteveningtel"><br/>
                    
                    <label for="contactmobile">Mobile:</label>
                    <input type="text" name="contactmobile" id="contactmobile"><br/>

                    <label for="contactRelated">How are you related to this person?:</label>
                    <input type="text" name="contactRelated" id="contactRelated">
                </p>

                <h2>Part 10 - Data Protection</h2>
                <p>We value your support and promise to respect your privacy. The data we gather and hold is managed in accordance with the Data protection Act 1998. We will not disclose or share personal information supplied by you with any third party organization without your consent. We would like to keep you informed about the vital work we do and of volunteering opportunities that may be of interest to you, however if you do not wish to receive this information, please let us know by ticking this box: <input type="checkbox" name="Protection" value="Yes"></p>

                <h2>Part 11 - For parents/ Guardians of volunteers under 16 only</h2>
                <p><input type="checkbox" name="guardianCheck1" value="Yes"> I give permissions for the above person to volunteer with your organization and to hold their details on file.</p>
                <p><input type="checkbox" name="guardianCheck2" value="Yes"> I understand that this organization will ask the above person to agree to adhere to all relevant policies and procedures and sign forms during training appropriate to their role.</p>
                <p>
                    <label for="guardianRelationship">Relationship to prospective volunteer:</label>
                    <input type="text" name="guardianRelationship" id="guardianRelationship"><br/>
                </p>

                <h2>Part 12- Declaration</h2>
                <p><input type="checkbox" name="declarationCheck1" value="Yes"> I understand and agree that data contained in this application in this application form will be used for volunteer recruitment purposes and will be held on a computer database. I also agree Vision For Vulnerable Communities Foundation holding this form in paper format in a secure area.</p>
                <p><input type="checkbox" name="declarationCheck2" value="Yes"> I confirm that the information I have given is correct and complete and that any false statements or omissions my results in my services to be terminated.</p>
                <p>Are you aged under 16?</br>
                <input type="radio" id="under16yes" name="under16" value="yes" /> Yes 
                <input type="radio" id="under16no" name="under16" value="no" /> No </p>
                <p>If you answered Yes, please ensure that part 11 is completed.</p>

                <h2>Part 13 - Confidential (equal opportunities monitoring)</h2>
                <p>How would you describe your religion or belief?<br/>
                    <input type="radio" name="religion" value="bornAgain"> Born again Christian<br/>
                    <input type="radio" name="religion" value="muslim"> Muslim<br/>
                    <input type="radio" name="religion" value="catholic"> Catholic<br/>
                    <input type="radio" name="religion" value="protestant"> Protestant<br/>
                    <input type="radio" name="religion" value="buddhist"> Buddhist<br/>
                    <input type="radio" name="religion" value="hindu"> Hindu<br/>
                    <input type="radio" name="religion" value="sikh"> Sikh<br/>
                    <input type="radio" name="religion" value="jewish"> Jewish<br/>
                    <input type="radio" name="religion" value="other"> Any other religion<br/>
                    <input type="radio" name="religion" value="none"> None<br/>
                    <input type="radio" name="religion" value="preferNotToSay"> Prefer not to say<br/>
                </p>
                <p>Do you have any disability?<br/>
                <input type="radio" id="disability" name="disability" value="yes" /> Yes 
                <input type="radio" id="disability" name="disability" value="no" /> No </p>
                <p>How would you describe your cultural or ethnic origin?<br/>
                <textarea name="culture" id="culture"></textarea></p>


                <p>How would you describe your sexual orientation?<br/>
                    <input type="radio" name="sexualOrientation" value="bisexual"> Bisexual<br/>
                    <input type="radio" name="sexualOrientation" value="heterosexual"> Heterosexual / Straight<br/>
                    <input type="radio" name="sexualOrientation" value="gay"> Gay Man<br/>
                    <input type="radio" name="sexualOrientation" value="lesbian"> Gay woman/ Lesbian<br/>
                    <input type="radio" name="sexualOrientation" value="prefernottosay"> Prefer not to say<br/>
                    <input type="radio" name="sexualOrientation" value="other"> Other<br/>
                </p>
                <p>Many thanks for taking the time to complete this form. </p>
                <p>For any queries regarding your application to become a volunteer, please send us an email.</p>
                <p class="button-holder"><a href="javascript:submitForm();" class="button">Submit Form</a></p>
                </form>
            </div>
<?php
    include 'includes/footer.php';
?>
        </div>
    </body>
</html>
