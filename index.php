<!DOCTYPE html>
<!-- Copyright (c) 2012 Secure Media Keepers - All Rights Reserved. -->
<?php
require_once('local.inc.php');
require_once( IDIR."smk.php");
define( 'SMK_CURRENT_PAGE','Home');
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="js/smk_event.js" type="text/javascript"></script>
        <script src="js/smk_img_rotator.js" type="text/javascript"></script>
        <script type="text/javascript">
        var rotator1 = {
            path:   '/images/',
            id:     'libpics',
            speed:  5000,
            images: ["video_library_665x541.jpg", "itunes_movie_grid_665x541.jpg"],
            bTrans: false
        }

        function initRotator() {
            smk_img_Rotator.setup(rotator1);
        }

        smk_Event.add( window, 'load', initRotator);
        </script>
        <link href="/styles/smk_site.css" rel="stylesheet" type="text/css" />
        <title>Secure Media Keepers <?php echo SMK_CURRENT_PAGE;?></title>
    </head>
    <body lang="en-US">
              <?php require( SMK_HEADER ) ?>
        <table class="main">
	<tbody>
	  <tr>
	    <td class="content">
                <p></p>
              <img id="libpics" class="hcenter" src="/images/video_library_665x541.jpg" alt="video library">
	      <p>
		We'll digitize all your DVD, VHS and Home movies so you
		can watch them where and when you want.  All videos
		are converted to high quality original resolution MP4
		files that can be used on any digital device
		(pc, mac, iPad, iPhone ...).
	      </p><p>
		We can also digitize all those old records and
		cassette tapes you probably never listen to any more.
	      </p><p>
		Don't you just hate trying to find a movie you bought
		3 years ago. Then once you find it, you load it in the
		player and wait for the warnings and commercials you've
		seen a thousand times. Once your library is digitized,
		you just click search and start watching. All our
		digitized media has complete meta data (rating, actors
		...) and cover art.
		</p>
	      <p>Or browse your collection with iTunes ...</p>
	      <p></p>
	      <img class="hcenter" onClick="parent.location='/images/iTunesCoverflow_800.png'"
		  src="/images/iTunesCoverflow.png" width=800 />
	    </td>
            <?php require( SMK_NAVBAR ) ?>
	  </tr></tbody></table>
        <p></p>

        <?php require( SMK_FOOTER ) ?>
    </body>
</html>
