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
                <form id="volunteer" action="volunteer-submit.php" method="POST">
                <h1>Online Application Form</h1>
                <p>Thank you for your interest in volunteering with Vision For Vulnerable Communities Foundation. The information you provide in this Application form will help us to decide how you might be useful to help us. It is really helpful if you can you can give us as much information as possible about your experiences, interests and availability to volunteer. If you have any questions about this form, please do not hesitate to contact us for more details.</p>
                <h2>Part 1 - The volunteer role you are applying for</h2>
                <p> 
                    <label for="role">Role Title:</label>
                    <input type="text" name="role" id="role"><br/>
                    
                    <label for="project">Name of Project:</label>
                    <input type="text" name="project" id="project"><br/>
                    
                    <label for="location">Location:</label>
                    <input type="text" name="location" id="location"><br/>
                </p>
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
                
                <p><input type="radio" name="hearAbout" value="mouth">Word of Mouth<br>
                <input type="radio" name="hearAbout" value="school">School, college, university<br>
                <input type="radio" name="hearAbout" value="event">Event<br>
                <input type="radio" name="hearAbout" value="internet">Internet<br>
                <input type="radio" name="hearAbout" value="media">Media (TV, Radio, Newspaper)<br>
                <input type="radio" name="hearAbout" value="leaflet">Leaflet or Poster<br>
                <input type="radio" name="hearAbout" value="volunteer">Volunteer Centre<br>
                <input type="radio" name="hearAbout" value="Other">Other, please give details <input type="text" name="other" id="other"></p>

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
                    <input type="checkbox" name="fundraising" value="fundraising"> Fundraising<br/>
                    <input type="checkbox" name="languages" value="languages"> Languages (other than English)<br/>
                    <input type="checkbox" name="foodHygiene" value="foodHygiene"> Basic food Hygiene<br/>
                    <input type="checkbox" name="fundraising" value="fundraising"> Fundraising<br/>
                    <input type="checkbox" name="firstAid" value="firstAid"> First Aid<br/>
                    <input type="checkbox" name="signLanguage" value="signLanguage"> Sign Language<br/>
                    <input type="checkbox" name="drivingLicense" value="drivingLicense"> Driving License (Car)<br/>
                </p>
                <p>
                    Please state which languages you speak.<br/>
                    <textarea name="otherLanguages" id="otherLanguages"></textarea><br/>

                    Do you have any other skills you would like to share with us?<br/>
                    <textarea name="otherSkills" id="otherSkills"></textarea>
                </p>

                <h2>Part 7 - References</h2>
                
                <p>Please provide details of two people, who have at least known you for two years that we can ask for references regarding your work/ studies/ experience and your suitability to volunteer with us. Wherever possible, these should be current/ past employers, places you have volunteered or a teacher/ tutor/ social worker.</p>

                <p><strong>Reference 1:</strong></p>
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
                    <input type="text" name="ref1occupation" id="ref1occupation"><br/>
                    
                    How do you this person?<br/>
                    <textarea name="ref1knowPerson" id="ref1knowPerson"></textarea><br/>

                    When did you last have contact with this person?<br/>
                    <textarea name="ref1lastContact" id="ref1lastContact"></textarea>
                </p>
                
                <p><strong>Reference 2:</strong></p>
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
                    <input type="text" name="ref2occupation" id="ref2occupation"><br/>
                    
                    How do you this person?<br/>
                    <textarea name="ref2knowPerson" id="ref2knowPerson"></textarea><br/>

                    When did you last have contact with this person?<br/>
                    <textarea name="ref2lastContact" id="ref2lastContact"></textarea>
                </p>
                
                <h2>Part 8 - Support and Health needs</h2>
                <p>Do you have any disabilities, health needs or extra support needs that we should be aware of when you organizing your volunteering?<br/>
                <input type="radio" id="disabilities" title="disabilities" value="yes" /> Yes 
                <input type="radio" id="disabilities" title="disabilities" value="no" /> No <br/>
                If yes, please give details to help us to plan your volunteering:<br/>
                <textarea name="disabilityDetails" id="disabilityDetails"></textarea>
                </p>
                
                <h2>Part 9 - Emergency contact details</h2>
                <p>Please give details of someone we may contact in an emergency if needed.</p>
                <p>
                    <label for="contactName">Full name:</label>
                    <input type="text" name="contactfirstName" id="contactfirstName"><br/>
                    
                     <label for="contactdaytel"> Day time phone number:</label>
                    <input type="text" name="contactdaytel" id="contactdaytel"><br/>
                    
                    <label for="contacteveningtel"> Evening phone number:</label>
                    <input type="text" name="contacteveningtel" id="contacteveningtel"><br/>
                    
                    <label for="contactmobile">Mobile:</label>
                    <input type="text" name="contactmobile" id="contactmobile"><br/>

                    <label for="contactRelated">How are you related to this person?:</label>
                    <input type="text" name="contactRelated" id="contactRelated">
                </p>

                <h2>Part 10 - Declaration of Criminal Records and Disqualifications</h2>
                <p>As a community charity, we have a duty to protect the children, young people and families whom we work with. The volunteer roe you have applied for will impact on what information you are required to disclose under the rehabilitation of offenders act 1974 and / or the child care act 2006. For the volunteer role you have applied for, please declare any criminal convictions as follows:</p>
                <p>Volunteer roles that do not involve working with children or vulnerable-please complete p</p>
                <h2>Part 10 A - Volunteer roles that do not involve contact with children or vulnerable/ protected adults</h2>
                <p>Have you ever been convicted of a criminal offence? (You do not need to disclose convictions deemed as ‘spent’ under rehabilitation of offender’s legislation)<br/>
                <input type="radio" id="convictedA" title="convictedA" value="yes" /> Yes 
                <input type="radio" id="convictedA" title="convictedA" value="no" /> No </p>
                <p>If Yes, please give details of all offences, sentences, and dates on separate sheet of paper, in a sealed envelope, marked confidential, for the attention of the volunteer co-coordinator</p>
                <h2>Part 10 B- Volunteer roles working with children or vulnerable protected adults</h2>
                <p>Have you ever been convicted been convicted of a criminal offence or cautioned, reprimanded or given a final warning by police (‘spent’ or ‘unspent’)? (Please read the criminal information guidance on which information to disclose before answering this question.<br/>
                <input type="radio" id="convictedB" title="convictedB" value="yes" /> Yes 
                <input type="radio" id="convictedB" title="convictedB" value="no" /> No </p>
                <p>Are you disqualified from working with vulnerable children / protected adults?</br>
                <input type="radio" id="disqualifiedB" title="disqualifiedB" value="yes" /> Yes 
                <input type="radio" id="disqualifiedB" title="disqualifiedB" value="no" /> No </p>
                <p>Are you aware of any police enquiries following allegations made against you, which may have a bearing on your suitability for the role?</br>
                <input type="radio" id="enquiriesB" title="enquiriesB" value="yes" /> Yes 
                <input type="radio" id="enquiriesB" title="enquiriesB" value="no" /> No </p>
                <p>If Yes, please give details of all offences, penalties, and or police enquiries and dates on a separate sheet of paper, in a sealed envelope, marked confidential, for the volunteer coordinator.</p>
                <p><input type="checkbox" name="acknowledgementChecks" value="acknowledgementChecks"> I understand that the relevant checks for the role I am applying for will be sought.</p>
                <h2>Part 11 - Data Protection</h2>
                <p>We value your support and promise to respect your privacy. The data we gather and hold is managed in accordance with the Data protection Act 1998. We will not disclose or share personal information supplied by you with any third party organization without your consent. We would like to keep you informed about the vital work we do and of volunteering opportunities that may be of interest to you, however if you do not wish to receive this information, please let us know by ticking this box: <input type="checkbox" name="Protection" value="Protection"></p>
                <h2>Part 12 - For parents/ Guardians of volunteers under 16 only</h2>
                <p>I give permissions for the above person to volunteer with your organization and to hold their details on file.</p>
                <p>I understand that this organization will ask the above person to agree to adhere to all relevant policies and procedures and sign forms during training appropriate to their role.</p>
                <p class="button-holder"><a href="javascript:submitForm();" class="button">Submit Form</a></p>
                </form>
            </div>
<?php
    include 'includes/footer.php';
?>
        </div>
    </body>
</html>
