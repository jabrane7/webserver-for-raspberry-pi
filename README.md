# webserver-for-raspberry-pi
webserver for raspberry pi to make a variable for python program :(exmple messgemail.py

sudo apt update
sudo apt upgrade
sudo apt install apache2
sudo chown -R pi:www-data /var/www/html/
sudo chmod -R 770 /var/www/html/

sudo apt install php php-mbstring

sudo visudo 
et ajouter a la fin 
www-data ALL=NOPASSWD: ALL

mkdir /var/www/html/message
git clone https://github.com/jabrane7/webserver-for-raspberry-pi /var/www/html/message
ouvrir le navigateur web  http://adressipraspberrypi/message/smart.php
authentification avce  admin admin
puis on supprime la fichier nomf.csv
          rm /var/www/html/message/nomf.csv

puis on modifie la formulaire et envoyer alors la le systéme va creer une autre fichier nomf.csv
