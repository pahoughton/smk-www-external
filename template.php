<!DOCTYPE html>
<!-- Copyright (c) 2012 Secure Media Keepers - All Rights Reserved. -->
<?php
require_once('local.inc.php');
require_once( IDIR."smk.php");
define( 'SMK_CURRENT_PAGE','FIXME');
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
	      <img class="hcenter" src="/images/Under-Construction_300.gif" height=300 />
                <p></p>
	    </td>
            <?php require( SMK_NAVBAR ) ?>
	  </tr></tbody></table>
        <p></p>

        <?php require( SMK_FOOTER ) ?>
    </body>
</html>
