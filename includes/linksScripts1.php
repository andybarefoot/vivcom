        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/reset.css">
        <link rel="stylesheet" type="text/css" href="../css/main.css">
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
                        $("#helpMenu").hide();
                        $("#aboutMenu").slideToggle();
                    });
                });
                $(function(){
                    $(".program-link").click(function(){
                        $("#aboutMenu").hide();
                        $("#helpMenu").hide();
                        $("#programMenu").slideToggle();
                    });
                });
                $(function(){
                    $(".help-link").click(function(){
                        $("#programMenu").hide();
                        $("#aboutMenu").hide();
                        $("#helpMenu").slideToggle();
                    });
                });
            });
        </script>
