<!DOCTYPE html>
<!-- Copyright (c) 2012 Secure Media Keepers - All Rights Reserved. -->
<?php
require_once('local.inc.php');
require_once( IDIR."smk.php");
define( 'SMK_CURRENT_PAGE','Hardware');
?>
<html>
    <head>
        <?php require( SMK_META ) ?>
        <link href="/styles/smk_site.css" rel="stylesheet" type="text/css" />
        <title>Secure Media Keepers <?php echo SMK_CURRENT_PAGE;?></title>
    </head>
    <body lang="en-US">
      <?php require( SMK_HEADER ) ?>
        <table class="main">
	<tbody>
	  <tr>
	    <td class="content">
  	    <p>
	      Pratically any hardware avaiable for the past few years
	      can play play the video, audio and image files we
	      create. This information is for those customers who want
	      to connect a new computer as part of thier home theater
	      system. Each configuration includes all the neccessary
	      hardware to connect the computer to your TV and audio
	      equipment.
	    </p><p>
	      Every home theater is different and may require special
	      concideration, we will be happy to provide a customized
	      hardware recomendation based on you needs.
	    </p><p>
	      Note: We are not selling this equipment and do not
	      receive any compinsation for these recomendations. We
	      are just sharing our experience to help you get the most
	      out of you digital media.
	    </p><p>
	      <dl>
		<dt>Primary Recommendation</dt>
		<dd><p>
		    This system configuration will connect to HD TV's
		    and most audio setups. It is the easyiest
		    configuration to use and the price is quite reasonable.
		  </p>
		  <table>
		    <tr>
		      <td><a href="http://www.apple.com/macmini/">Mac
			  mini</a>
		      </td>
		      <td>$799</td>
		    </tr><tr>
		      <td><a href="http://store.apple.com/us/product/MB829LL/A?fnode=MTY1NDA1Mg">Apple Magic Mouse</a></td>
		      <td>$69</td>
		    </tr><tr>
		      <td><a href="http://store.apple.com/us/product/MC184LL/B?fnode=MTY1NDA1Mg">Apple Wireless Keyboard</a></td>
		      <td>$69</td>
		    </tr><tr>
		      <td>HDMI Cable</td>
		      <td>~$10</td>
		    </tr><tr>
		      <td><b>Total</b></td>
		      <td>$947</td>
		    </tr><tr>
		      <td>Optional Apple Remote</td>
		      <td>$19</td>
		    </tr>
		  </table>
		  <p></p>
		</dd>
		<dt>Extra Storage</dt>
		<dd><p>You might also concider getting an external
		    hard disk for your media storage. The average
		    movie takes about 1G and the average song takes
		    around 5M.
		    </p>
		</dd>
	      </dl>
	      <img class="hcenter" src="/images/Under-Construction_300.gif" height=300>
                <p></p>
	    </td>
            <?php require( SMK_NAVBAR ) ?>
	  </tr></tbody></table>
        <p></p>

        <?php require( SMK_FOOTER ) ?>
    </body>
</html>
