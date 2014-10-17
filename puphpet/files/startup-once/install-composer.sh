#!/bin/bash


# Install Composer
# ----------------
cd ~
mkdir composer-setup
cd composer-setup
# Get and run Composer installer
curl -s https://getcomposer.org/installer | php
# Make Composer available globally
mv composer.phar /usr/local/bin/composer
