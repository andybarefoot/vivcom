        <script>
            jQuery(document).ready(function( $ ) {
                $(window).resize(function() {
                    equalColumns();
                });
                equalColumns();
            });

            function equalColumns(){
                if($( window ).width()>=900){
                    pH = $("#primary-content").height();
                    sH = $("#secondary-content").height();
                    if(pH>sH)$("#secondary-content").height(pH);
                    if(sH>pH)$("#primary-content").height(sH);
                } else {
                    $("#primary-content").css('height','auto');
                    $("#secondary-content").css('height','auto');
                }
            }
        </script>
