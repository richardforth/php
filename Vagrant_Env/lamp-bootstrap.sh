#!/bin/bash
yum -y update
yum -y install httpd php php-mysql wget vim
wget https://downloads.mariadb.com/MariaDB/mariadb_repo_setup
chmod +x mariadb_repo_setup
bash mariadb_repo_setup --mariadb-server-version=10.4
yum -y install MariaDB MariaDB-server
systemctl start httpd mariadb
systemctl enable httpd mariadb
echo -e "\n\nMyPasss123\nMyPasss123\n\n\nn\n\n " | mysql_secure_installation 2>/dev/null
