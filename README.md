# webserver-for-raspberry-pi
webserver for raspberry pi to make a variable for python program :(exmple messgemail.py)                               
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

sudo chown -R pi:www-data /var/www/html/messsage                                              
sudo chmod -R 770 /var/www/html/message                                                       

ouvrir le navigateur web  http://adressipraspberrypi/message/smart.php                
authentification avce  user:admin et mot de pass: admin et connecter au formulaire de données                                                  

en laissant la formulaire ouvert , on supprime la fichier nomf.csv                                                    
          rm /var/www/html/message/nomf.csv                                
pour donner à votre systeme l'accès totale à la nouvelle fichier (cette opeation se fait une seule fois)                                  

puis on modifie la formulaire et envoyer ,alors là , le systéme va creer une autre fichier nomf.csv


for question : jabran.benmahmoud@gmail.com                                                              
