        <!-- photoswipe -->
        <link rel="stylesheet" href="pswipe/photoswipe.css"> 
        <link rel="stylesheet" href="pswipe/default-skin/default-skin.css"> 
        <script src="pswipe/photoswipe.min.js"></script> 
        <script src="pswipe/photoswipe-ui-default.min.js"></script> 
        <!-- photoswipe ends -->
        <script>
            jQuery(document).ready(function( $ ) {
                $("#gallery1").attr("src",photoArray[0].src);
                $("#gallery2").attr("src",photoArray[1].src);
                $("#gallery3").attr("src",photoArray[2].src);
            });

            var openPhotoSwipe = function(id) {
                var pswpElement = document.querySelectorAll('.pswp')[0];
                // build items array
                var items = photoArray;
                // define options (if needed)
                var options = {
                    index: id
                };
                var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
                gallery.init();
            };
        </script>
