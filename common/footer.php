</div>

<footer>
    <p>Proudly powered by <a href="http://omeka.org">Omeka</a>.</p>
    
    <p>&copy; <?php echo settings('copyright'); ?>
    
    <?php echo plugin_footer(); ?>
</footer>

</div> <!--! end of #container -->


<!-- Javascript at the bottom for fast page loading -->

<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
<script>!window.jQuery && document.write(unescape('%3Cscript src="js/libs/jquery-1.4.2.js"%3E%3C/script%3E'))</script>


<!-- scripts concatenated and minified via ant build script-->
<?php 
    echo js('plugins');
    echo js('script');
?>
<!-- end concatenated and minified scripts-->


<!--[if lt IE 7 ]>
<?php echo js('libs/dd_belatedpng.js'); ?>
<script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
<![endif]-->

<!-- yui profiler and profileviewer - remove for production -->
<?php 
    echo js('profiling/yahoo-profiling.min.js');
    echo js('profiling/config.js'); 
?>
<!-- end profiling code -->


<!-- asynchronous google analytics: mathiasbynens.be/notes/async-analytics-snippet 
   change the UA-XXXXX-X to be your site's ID -->
<script>
var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
(function(d, t) {
var g = d.createElement(t),
    s = d.getElementsByTagName(t)[0];
g.async = true;
g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
s.parentNode.insertBefore(g, s);
})(document, 'script');
</script>

</body>
</html>