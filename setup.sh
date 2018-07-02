#!/bin/bash

sudo systemctl start httpd
sudo systemctl start mariadb

sudo systemctl restart httpd
sudo systemctl restart mariadb

sudo cp /vagrant/{index.html, save-data.php} /var/www/html
