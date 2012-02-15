<?php
/*********************************************************************
    ost-config.php

    Static osTicket configuration file. Mainly useful for mysql login info.
    Created during installation process and shouldn't change even on upgrades.
   
    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2010 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
    $Id$
**********************************************************************/

#Disable direct access.
if(!strcasecmp(basename($_SERVER['SCRIPT_NAME']),basename(__FILE__)) || !defined('ROOT_PATH')) die('kwaheri rafiki!');

#Install flag
define('OSTINSTALLED',TRUE);
if(OSTINSTALLED!=TRUE){
    if(!file_exists(ROOT_PATH.'setup/install.php')) die('Error: Contact system admin.'); //Something is really wrong!
    //Invoke the installer.
    header('Location: '.ROOT_PATH.'setup/install.php');
    exit;
}

# Encrypt/Decrypt secret key - randomly generated during installation.
define('SECRET_SALT','9CEDBECBA3ADC80');

#Default admin email. Used only on db connection issues and related alerts.
define('ADMIN_EMAIL','Paul.Houghton@SecureMediaKeepers.com');

#Mysql Login info
define('DBTYPE','mysql');
define('DBHOST','smkhelpdesk.db.6275435.hostedresource.com'); 
define('DBNAME','smkhelpdesk');
define('DBUSER','smkhelpdesk');
define('DBPASS','Eqrj9M2C2Oie');

#Table prefix
define('TABLE_PREFIX','ost_');

?>
