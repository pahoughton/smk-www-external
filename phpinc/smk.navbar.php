<?php
//Copyright (c) 2012 Secure Media Keepers - All Rights Reserved.
?>
<td class="nav" width=22% valign=top>
    <ul class="nav">
        <?php
        $nav = array(
            "Home" => "/index.php",
            "About" => "/about.php",
            "Services" => "/services.php",
            "Formats" => "/formats.php",
            "Hardware" => "/hardware.php",
            "Support" => "smk_support" );

        $under_constr = array(
            "Home" => 0,
            "About" => 1,
            "Services" => 1,
            "Formats" => 1,
            "Hardware" => 1,
            "Support" => 1 );

        foreach( array_keys( $nav ) as $lnk ) {
            if( $lnk != SMK_CURRENT_PAGE ) {
                echo '<li class="nav"><a class="nav" href="'.$nav[$lnk].'">';
                if( $under_constr[$lnk] ) {
                     echo '<img src="/images/uc_32_trans.gif">';
                }
                echo $lnk."</a></li>\n";
            }
        }
        ?>
    </ul>
</td>
