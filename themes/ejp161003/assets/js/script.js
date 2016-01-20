jQuery(document).ready(function ($) {

    $(".gototop").click(function (event) {
        event.preventDefault();
        $('html,body').animate({scrollTop: $(this.hash).offset().top}, 600, 'swing');
        $(".scroll li").removeClass('active');
        $(this).parents('li').toggleClass('active');
    });
});


var wow = new WOW(
    {
        boxClass: 'wowload',      // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset: 0,          // distance to the element when triggering the animation (default is 0)
        mobile: true,       // trigger animations on mobile devices (default is true)
        live: true        // act on asynchronously loaded content (default is true)
    }
);
wow.init();

if ($('#disqus_thread').length) {

        /**
         * RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
         * LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
         */
            /*
             var disqus_config = function () {
             this.page.url = PAGE_URL; // Replace PAGE_URL with your page's canonical URL variable
             this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
             };
             */
        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');

            s.src = '//elieetjosiephotographie.disqus.com/embed.js';

            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();


}


/*
 $('.carousel').swipe( {
 swipeLeft: function() {
 $(this).carousel('next');
 },
 swipeRight: function() {
 $(this).carousel('prev');
 },
 allowPageScroll: 'vertical'
 });
 */



