#!/bin/bash
yum -y update
yum -y install httpd php php-mysql wget vim
wget https://downloads.mariadb.com/MariaDB/mariadb_repo_setup
chmod +x mariadb_repo_setup
bash mariadb_repo_setup --mariadb-server-version=10.4
yum -y install MariaDB MariaDB-server
systemctl start httpd mariadb
systemctl enable httpd mariadb
############################################
# Set MyPasss123 to something more secure! #
############################################
echo -e "\nY\nY\nMyPasss123\nMyPasss123\nY\nY\nY\nY\n " | mysql_secure_installation 2>/dev/null
