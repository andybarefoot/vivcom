<!DOCTYPE html>
<html>
    <head>
        <title>VVCF</title>
        <meta name="viewport" content="initial-scale=1.0, width=device-width" />        
<?php
    include 'includes/linksScripts.php';
    include 'includes/layout1.php';
?>
        <link rel="stylesheet" type="text/css" href="css/layout01.css">
        <script>
            function submitForm(){
              $("#contact").submit();
            }
            </script>
    </head>
    <body>
<?php
    include 'includes/navigation.php';
?>
        <div id="main-body">
            <div id="primary-content">
                <form id="contact" action="contact-submit.php" method="POST">
                    <h1>Contact Us</h1>
                    <h2>Get In Touch</h2>
                    <p>We will be delighted to get in touch with you on any matters relating to our organization and our programs. Please use the email form below to contact us. Alternatively, we can be contacted by post or by phone using the addresses on this page:</p>
                    <p> 
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name"><br/>
                        
                        <label for="email">Email:</label>
                        <input type="text" name="email" id="email"><br/>

                        <label for="message">Message:</label>
                        <textarea name="message" id="message"></textarea>
                    </p>
                    <p class="button-holder"><a href="javascript:submitForm();" class="button">Submit Form</a></p>
                </form>
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
                <h2>WhatsApp:</h2>
                <p>+256705152084</p>

            </div>
<?php
    include 'includes/footer.php';
?>
        </div>
    </body>
</html>
