<!DOCTYPE html>
<!-- Copyright (c) 2012 Secure Media Keepers - All Rights Reserved. -->
<?php
require_once('local.inc.php');
require_once( IDIR."smk.php");
define( 'SMK_CURRENT_PAGE','Support');
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
  <!-- Content Goes Here -->
	    <p>
	    Welcome to our support section. We will be expanding it
	    soon to provide helpful information related to creating
	    and using digitized media. Please summit any questions or
	    issues you have that aren't answered here to our
	    <a href="<?php echo SMK_HELPDEST_URL?>">Helpdesk</a>
	    </p>

	    <dl class="support">
	      <dt><a href="<?php echo SMK_HELPDEST_URL?>">Helpdesk</a></dt>
	    </dl>
	      <img class="hcenter" src="/images/Under-Construction_300.gif" align=center height=300>
                <p></p>
	    </td>
            <?php require( SMK_NAVBAR ) ?>
	  </tr></tbody></table>
        <p></p>

        <?php require( SMK_FOOTER ) ?>
    </body>
</html>
