# PowerOfDeathWithPHPRegistration
 Based on my previous project https://github.com/MarlerZ1/PowerOfDeath.git

When changing the name of the root folder, you need to navigate to the file dbconnect.php and change the site address in the address_site field to the new name of the root folder.
To launch the site, you need to install Open Server and move the site to the "domains" folder. The OpenServer icon will appear in the tray. It is necessary to press the topmost button (start).
In order for the database to work, you need to go to phpmyadmin: tray -> Open Server -> Advanced -> phpmyadmin. Login is "root", there is no default password. It is necessary to change the password for the "root" user to the same one that is in dbconnect.php (8888). Create a new database in phpmyadmin "sozdatisite_id6-article", import the database from the site folder into it.  The database encoding is as follows: utf8mb4_unicode_ci.
The registration implementation is taken from the website:
https://130km.ru/social-network/poklazha-auth-php-register-ruchnaya-autentifikaciya-polzovatelei/ )
