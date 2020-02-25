# webserver-for-raspberry-pi
serveur web pour raspberry pi pour créer des variable pour le programme python:(exmple messgemail.py)                               
La declaration de variable dans le fichier messagemail.py:                                                    
row[3]   correspond au "Compte Gmail" dans la formulaire mail@gmail.com                                 
row[5]   correspond au "Mail Expiditeur" dans la formulaire mail@hotmail.fr                                       
row[4]   correspond au "Mot de passe Gmail" dans la formulaire  hhgfjhgfjh                          

1-installation  PHP et appache2:                                                            
sudo apt update                                                                       
sudo apt upgrade                                                                       
sudo apt install apache2                                                                

sudo apt install php php-mbstring                                                        

sudo visudo                                                                            
et ajouter a la fin                                                                    
www-data ALL=NOPASSWD: ALL                                                            
2-installation de l'application                                                                

mkdir /var/www/html/message                                                          
git clone https://github.com/jabrane7/webserver-for-raspberry-pi /var/www/html/message  

sudo chown -R pi:www-data /var/www/html/message                                              
sudo chmod -R 770 /var/www/html/message                                                       

ouvrir le navigateur web  http://adressipraspberrypi/message/smart.php                
authentification avce  user:admin et mot de pass: admin et connecter au formulaire de données                                                  
si on modifie les variable du formulaire on modifie alors la fichier nomf.csv alos on modifie les variable du programme messagemail.py   

for question : jabran.benmahmoud@gmail.com                                                              
