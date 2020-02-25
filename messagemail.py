# Python code to illustrate Sending mail with attachments 
# from your Gmail account  
  
# libraries to be imported 
import os
import smtplib 
from email.mime.multipart import MIMEMultipart 
from email.mime.text import MIMEText 
from email.mime.base import MIMEBase 
from email import encoders 
import csv

with open('/var/www/html/message/nomf.csv', 'rb') as csvfile:

     spamreader = csv.reader(csvfile, delimiter=',', quotechar='|')
     for row in spamreader:
   
       fromaddr =row[3]
       toaddr =row[5]
      
        
   
# instance of MIMEMultipart 
msg = MIMEMultipart() 
  
# storing the senders email address   
msg['From'] = fromaddr 
  
# storing the receivers email address  
msg['To'] = toaddr 
  
# storing the subject  
msg['Subject'] = "Subject of the Mail"
  
# string to store the body of the mail 
body = "BONJOUR MOUVEMENT EST CAPTURE"
  
# attach the body with the msg instance 
msg.attach(MIMEText(body, 'plain')) 
  
# open the file to be sent  
#for i in range(8):

#s='05'
#f=s+'.avi'
filename = "capture.avi"
#attachment = open("/tmp/motion/"+f, "rb") 

attachment = open("/var/www/html/message/ic_house2.png", "rb")  

# instance of MIMEBase and named as p 
p = MIMEBase('application', 'octet-stream') 
  
# To change the payload into encoded form 
p.set_payload((attachment).read()) 
  
# encode into base64 
encoders.encode_base64(p) 
   
p.add_header('Content-Disposition', "attachment; filename= %s" % filename) 
  
# attach the instance 'p' to instance 'msg' 
msg.attach(p) 
  
# creates SMTP session 
s = smtplib.SMTP('smtp.gmail.com', 587) 
  
# start TLS for security 
s.starttls() 
  

  
# Converts the Multipart msg into a string 
text = msg.as_string()
 # Authentication 
s.login(fromaddr,row[4])
  
# sending the mail 
s.sendmail(fromaddr, toaddr, text)
    
# terminating the session 
s.quit() 


