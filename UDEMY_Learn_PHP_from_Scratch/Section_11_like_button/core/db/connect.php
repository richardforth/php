<?php
    // This is a very old course, so to get this one working you will need to downgrade to php 5.4
    // -- assuming youre using remi repos, this can be done as follows -- //
    // yum-config-manager --disable remi-php74
    // yum-config-manager --enable remi-php54
    // yum remove php*
    // yum -y install php php-common php-mysqli php-xml php-iconv php-curl php-openssl php-tokenizer php-xmlrpc php-soap php-ctype php-zip php-gd php-simplexml php-spl php-pcre php-dom php-intl php-json php-mbstring php-opcache php-mysql
    // systemctl restart httpd
    // *******************************************************************
    // mysql_connect(): Headers and client library minor version mismatch
    // *******************************************************************
    // this means the client library doesnt support your version of mysql
    // (as i said this is a very old course and I've had to skip a few modules for this reason)
    //mysql_connect('localhost','lb_user', 'lb_password_goes_here');
    //mysql_select_db('likebutton');
    // as a result I switched back to php 7.4 with  mysqli, rest of code might need some re-engineering to work as intended
    $db = new mysqli('localhost','lb_user', 'lb_password_goes_here', 'likebutton') or die($db->error);

?>