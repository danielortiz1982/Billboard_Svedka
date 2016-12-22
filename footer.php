    <!--start of footer-->
    <footer class="footer">
        <!--start of contentBox-->
        <div class="contentBox">
            <!--start of footerLeft-->
            <div class="footerLeft">
                <div class="displayTable">
                    <div class="displayTableCell">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/sampleImg014.png" /> <span style="margin-left: 1.5em;"><img src="<?php echo get_template_directory_uri(); ?>/images/sampleImg015.png" /></span>
                    </div>
                </div>
            </div>
            <!--end of footerLeft-->
            <!--start of footerMiddle-->
            <div class="footerMiddle">
                <div class="displayTable">
                    <div class="displayTableCell">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=http://www.billboard.com/summer-party-central/" onclick="window.open(this.href,'_blank', 'width=700, height=300'); return false;">
<img src="<?php echo get_template_directory_uri(); ?>/images/fb.png" /></a> <a href="https://twitter.com/intent/tweet?text=Add%20flavor%20to%20summer%20with%20%40billboard%20and%20%40SVEDKA%20http%3A%2F%2Fwww.billboard.com%2Fsummer-party-central%2F
" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/tw.png" /></a>
                    </div>
                </div>
            </div>
            <!--end of footerMiddle-->
            <!--start of footerBottom-->
            <div class="footerBottom">
                <div class="displayTable">
                    <div class="displayTableCell">
                        <nav>
                            <?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu' ) ); ?>
                        </nav>
                        <p>© <?php echo date("Y"); ?> Adapt Studios. All Rights Reserved.</p>
                        <p><strong>PLAY RESPONSIBLY</strong>. 35% ALC./VOL. (70 PROOF)</p>
                        <p>© 2016 SPIRITS MARQUE ONE, SAN FRANCISCO, CA.</p>
                    </div>
                </div>
            </div>
            <!--end of footerBottom-->
        </div>
        <!--end of contentBox-->
    </footer>
    <!--end of footer-->
</div>
<!--end of wrapper--> 
        <script type='text/javascript'>
            var _sf_async_config={};
            /** CONFIGURATION START **/
            _sf_async_config.uid = 3388;
            _sf_async_config.domain = 'billboard.com';
            _sf_async_config.useCanonical = true;
            /** CONFIGURATION END **/
            (function(){
              function loadChartbeat() {
                window._sf_endpt=(new Date()).getTime();
                var e = document.createElement('script');
                e.setAttribute('language', 'javascript');
                e.setAttribute('type', 'text/javascript');
                e.setAttribute('src', '//static.chartbeat.com/js/chartbeat.js');
                document.body.appendChild(e);
              }
              var oldonload = window.onload;
              window.onload = (typeof window.onload != 'function') ?
                 loadChartbeat : function() { oldonload(); loadChartbeat(); };
            })();
        </script><!-- Chartbeat Body Tag -->

        <!-- Begin comScore Tag -->
        <script>
          var _comscore = _comscore || [];
          _comscore.push({ 
             c1: "2"
            ,c2: "7395269"
            ,c3: ""
              });
          (function() {
            var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;
            s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
            el.parentNode.insertBefore(s, el);
          })();
        </script>
        <noscript>
          <img src="http://b.scorecardresearch.com/p?c1=2&c2=7395269&cv=2.0&cj=1" />
        </noscript>
        <!-- End comScore Tag --><!-- Comscore Body Tag -->

        <script>
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-1266747-9']);
        _gaq.push(['_setDomainName', '.billboard.com']);
        _gaq.push(['_trackPageview']);
         
        (function() {
          var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
          ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
        </script>
        <script>window.twttr = (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0],
            t = window.twttr || {};
          if (d.getElementById(id)) return t;
          js = d.createElement(s);
          js.id = id;
          js.src = "https://platform.twitter.com/widgets.js";
          fjs.parentNode.insertBefore(js, fjs);
         
          t._e = [];
          t.ready = function(f) {
            t._e.push(f);
          };
 
  return t;
}(document, "script", "twitter-wjs"));</script> 
<?php wp_footer(); ?>
</body>
</html>