#!/bin/bash

NC='\033[0m'       # Окончание цвета

Black='\033[0;30m'        # Black
Red='\033[0;31m'          # Red
Green='\033[0;32m'        # Green
Yellow='\033[0;33m'       # Yellow
Blue='\033[0;34m'         # Blue
Purple='\033[0;35m'       # Purple
Cyan='\033[0;36m'         # Cyan
White='\033[0;37m'        # White


echo -e "${Green}Установкарации${NC}"



echo -e "${Cyan}Установка окружения для рабочего PC${NC}"
echo -e "${Green}Установка PHP-8.1, его компонентов и настройка конфигурации${NC}"
sudo apt update
sudo apt install -y curl
sudo apt install php8.1 php8.1-fpm php8.1-mysql php8.1-curl php8.1-mbstring php8.1-xml php8.1-bcmath php8.1-intl php8.1-gd ffmpeg php8.1-imagick php8.1-zip -y
sudo sed -i 's/www-data/'${USER}'/g' $ /etc/php/8.1/fpm/pool.d/www.conf
sudo sed -i 's/upload_max_filesize = 2M/upload_max_filesize = 25M/g' /etc/php/8.1/fpm/php.ini
sudo sed -i 's/post_max_size = 2M/post_max_size = 25M' /etc/php/8.1/fpm/php.ini
sudo systemctl restart php8.1-fpm && sudo systemctl enable php8.1-fpm

echo -e "${Green}Установка composer для работы с Laravel${NC}"
cd ~
curl -sS https://getcomposer.org/installer -o composer-setup.php
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=compose

echo -e "${Green}Установка MariaDB${NC}"
sudo apt install mariadb-server -y
sudo systemctl start mysql && sudo systemctl enable mysql
sudo systemctl restart mysql

echo -e "${Green}Установка nginx, npm and yarn${NC}"
sudo apt install nginx -y
sudo systemctl stop apache2 && sudo systemctl disable apache2
sudo systemctl start nginx && sudo systemctl enable nginx
sudo sed -i 's/user www-data/user '${USER}'/g' /etc/nginx/nginx.conf
sudo apt install git -y
curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.38.0/install.sh | bash
sudo apt update
sudo apt upgrade -y
curl -fsSL https://deb.nodesource.com/setup_16.x | sudo -E bash -
sudo apt install -y nodejs
sudo npm install --global yarn


sudo rm -rf /etc/nginx/sites-enabled/
sudo ln -s /etc/nginx/sites-available/ /etc/nginx/sites-enabled/

echo -e "${White}DONE${NC}"
echo -e "${Blue}DONE${NC}"
echo -e "${Red}DONE${NC}"