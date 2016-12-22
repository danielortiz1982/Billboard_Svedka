<?php
/**
 * Template Name: Home
 **/
?>
<?php get_header(); ?>
<div class="headerMobileSpacer"></div>
    <!--start of homeFeaturedContent-->
    <div class="homeFeaturedContent">
        <div class="contentBox">
            <!--start of featuredTitle-->
            <div class="featuredTitle">
                <p id="top">SUMMER</p>
                <p id="middle">PARTY</p>
                <p id="bottom">CENTRAL</p>
            </div>
            <!--end of featuredTitle-->
            <!--start of sponsorBox-->
            <div class="sponsorBox">
                <!--start of sponsor-->
                <div class="sponsor"><?php dynamic_sidebar( 'home-sponsor' ); ?></div>
                <img src="https://voken.eyereturn.com/pix?1325570" style="display:none" width="0" height="0" border="0"/>
                <img src="https://tps30.doubleverify.com/visit.jpg?ctx=3550442&cmp=DV010676&sid=52392&plc=1325570&num=&adid=&advid=2136665&adsrv=121&region=30&btreg=&btadsrv=&crt=&crtname=&chnl=&unit=&pid=&uid=&tagtype=&app=&sup=&DVP_EXID=&DVP_CDID=&DVP_DMGRV=&DVP_LAT=&DVP_LONG=&dvtagver=6.1.img&" style="display:none" alt="" width="0" height="0" />
                <!--end of sponsor-->
            </div>
            <!--end of sponsorBox-->
            <!--start of homeTagBox-->
            <div class="homeTagBox">
                <div class="homeTagBoxTxt"><?php while ( have_posts() ) : the_post(); the_post_thumbnail(); the_content(); endwhile; ?></div>
            </div>

            <!--end of homeTagBox-->
        </div>
        <!--end of contentBox-->
    </div>
    <!--end of homeFeaturedContent-->

    <?php include( 'section_watch.php' ); ?>

    <?php include( 'section_listen.php'); ?>

    <div class="section">
      <div class="homeAd"><?php dynamic_sidebar( 'home-ad-top' ); ?></div>
    </div>
    <img src="https://voken.eyereturn.com/pix?1325568" style="display:none" width="0" height="0" border="0"/>
    <img src="https://tps30.doubleverify.com/visit.jpg?ctx=3550442&cmp=DV010676&sid=52392&plc=1325568&num=&adid=&advid=2136665&adsrv=121&region=30&btreg=&btadsrv=&crt=&crtname=&chnl=&unit=&pid=&uid=&tagtype=&app=&sup=&DVP_EXID=&DVP_CDID=&DVP_DMGRV=&DVP_LAT=&DVP_LONG=&dvtagver=6.1.img&" style="display:none" alt="" width="0" height="0" />

    <?php include( 'section_lurk.php'); ?>

    <div class="section">
        <div class="homeAd">
          <?php dynamic_sidebar( 'home-ad-middle' ); ?>
        </div>
    </div>
    <img src="https://voken.eyereturn.com/pix?1325568" style="display:none" width="0" height="0" border="0"/>
    <img src="https://tps30.doubleverify.com/visit.jpg?ctx=3550442&cmp=DV010676&sid=52392&plc=1325568&num=&adid=&advid=2136665&adsrv=121&region=30&btreg=&btadsrv=&crt=&crtname=&chnl=&unit=&pid=&uid=&tagtype=&app=&sup=&DVP_EXID=&DVP_CDID=&DVP_DMGRV=&DVP_LAT=&DVP_LONG=&dvtagver=6.1.img&" style="display:none" alt="" width="0" height="0" />

    <?php include( 'section_read.php'); ?>

    
    <div class="bottomLogoBox">
        <img class="bottomLogoSplash" src="<?php echo get_template_directory_uri() ;?>/images/splashFooter.jpg" />
        <a class="bottomLogo" href="https://clicks.eyereturn.com/redir.aspx?tokenID=1330372&cn=0" target="_blank">
            <img class="bottomLogoImage" src="<?php echo get_template_directory_uri() ;?>/images/bottomLogo.png" />
        </a>
      <img src="https://voken.eyereturn.com/pix?1325570" style="display:none" width="0" height="0" border="0"/>
      <img src="https://tps30.doubleverify.com/visit.jpg?ctx=3550442&cmp=DV010676&sid=52392&plc=1325570&num=&adid=&advid=2136665&adsrv=121&region=30&btreg=&btadsrv=&crt=&crtname=&chnl=&unit=&pid=&uid=&tagtype=&app=&sup=&DVP_EXID=&DVP_CDID=&DVP_DMGRV=&DVP_LAT=&DVP_LONG=&dvtagver=6.1.img&" style="display:none" alt="" width="0" height="0" />
    </div>
<?php get_footer(); ?>