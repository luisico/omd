<?php
$conf['title'] = 'OMD Labs-Edition Dokuwiki ###SITE###';
$conf['license'] = 'cc-by-sa';
$conf['useheading'] = '1';
$conf['useacl'] = 1;
$conf['superuser'] = '@admin';
$conf['tpl']['arctictut']['sidebar'] = 'left';
$conf['tpl']['arctictut']['left_sidebar_content'] = 'index';
$conf['multisite']['authfile'] = '/omd/sites/###SITE###/var/check_mk/wato/auth/auth.php';
$conf['multisite']['auth_secret'] = '/omd/sites/###SITE###/etc/auth.secret';
$conf['multisite']['auth_serials'] = '/omd/sites/###SITE###/etc/auth.serials';
$conf['multisite']['htpasswd'] = '/omd/sites/###SITE###/etc/htpasswd';
$conf['tpl']['vector']['vector_navigation_location'] = 'sidebar';

?>
