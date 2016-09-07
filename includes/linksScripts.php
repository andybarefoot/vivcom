        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <script>
            function positionMenus(){
                if($( window ).width()>=900){
                    var aboutOffset = {
                        left: $(".about-link").offset().left -67,
                        top: 70
                    }
                    $("#aboutMenu").offset(aboutOffset);                        

                    var progOffset = {
                        left: $(".program-link").offset().left -157,
                        top: 70
                    }
                    $("#programMenu").offset(progOffset);                        
                    var helpOffset = {
                        left: $(".help-link").offset().left -17,
                        top: 70
                    }
                    $("#helpMenu").offset(helpOffset);                        
                }
            }

            function addTriggers(){
                if($( window ).width()<900){
                    $(".about-link").unbind('mouseover');
                    $(".program-link").unbind('mouseover');
                    $(".help-link").unbind('mouseover');
                    $(".about-link").unbind('mouseout');
                    $(".program-link").unbind('mouseout');
                    $(".help-link").unbind('mouseout');
                    $(".about-link").click(function(){
                        $("#programMenu").hide();
                        $("#helpMenu").hide();
                        $("#aboutMenu").toggle();
                        positionMenus();
                    });
                    $(".program-link").click(function(){
                        $("#aboutMenu").hide();
                        $("#helpMenu").hide();
                        $("#programMenu").toggle();
                        positionMenus();
                    });
                    $(".help-link").click(function(){
                        $("#programMenu").hide();
                        $("#aboutMenu").hide();
                        $("#helpMenu").toggle();
                        positionMenus();
                    });
                }else{
                    $(".about-link").unbind('click');
                    $(".program-link").unbind('click');
                    $(".help-link").unbind('click');
                    $(".about-link").mouseover(function(){
                        $("#aboutMenu").show();
                        positionMenus();
                    });
                    $(".about-link").mouseout(function(){
                        $("#aboutMenu").hide();
                        positionMenus();
                    });
                    $(".program-link").mouseover(function(){
                        $("#programMenu").show();
                        positionMenus();
                    });
                    $(".program-link").mouseout(function(){
                        $("#programMenu").hide();
                        positionMenus();
                    });
                    $(".help-link").mouseover(function(){
                        $("#helpMenu").show();
                        positionMenus();
                    });
                    $(".help-link").mouseout(function(){
                        $("#helpMenu").hide();
                        positionMenus();
                    });
                }
            }

            jQuery(document).ready(function( $ ) {
                addTriggers();
                $("#menu-icon").click(function(){
                    $("#menu").slideToggle();
                });
                $(window).resize(function() {
                    addTriggers();
                    positionMenus();
                    if($( window ).width()>=900){
                        $("#menu").show();
                    }
                });
            });
        </script>
