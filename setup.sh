#!/bin/bash

sudo systemctl start httpd
sudo systemctl start mariadb

sudo cp /vagrant/{index.html,save-data.php,dbconfig.php} /var/www/html

sudo systemctl restart httpd
sudo systemctl restart mariadb
