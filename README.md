# dandelion

Resources:
https://ph0en1x.net/106-rpi-gpio-installation-working-with-inputs-outputs-interrupts.html

Code:
git clone https://github.com/amashkin/dandelion.git

DEV host
git add .
git commit -m "comment"
git push

TEST host
git pull

User: pi
Pwd: 123
192.168.88.20 (thrugh DHCP yet)

Raspberry Pi own project

1. Install latest OS
  ...
2. Install GPIO tool
  https://www.youtube.com/watch?v=G7vOe3zC9bw
  My own PI instance
  http://192.168.88.20:8000/app/gpio-header

3. Install python, gpio and simple commands
  Source: 
    https://ph0en1x.net/106-rpi-gpio-installation-working-with-inputs-outputs-interrupts.html

  sudo apt-get install python3

  GPIO for python:
    sudo apt-get install python3-rpi.gpio
    sudo apt-get install python-rpi.gpio

    version of the Python: dpkg --status python3-rpi.gpio | grep Version

    Run commands:
      python3
      import RPi.GPIO
      print(RPi.GPIO.VERSION)
      RPi.GPIO.RPI_INFO
      
      Next example

      import RPi.GPIO as GPIO
      //set model of pins
        //GPIO.setmode(GPIO.BCM) // implementations
      GPIO.setmode(GPIO.BOARD) // number of PINs
      //GPIO21 or PIN40
      GPIO.setup(40, GPIO.OUT)
      Start:
        GPIO.output(7, GPIO.HIGH)
      Stop:
        GPIO.output(7, GPIO.LOW)

  ...
4. Install Apache
  Apache web server: Build a local HTML server with a Raspberry Pi
  https://magpi.raspberrypi.com/articles/apache-web-server
5. Instal latest PHP
  sudo apt-get install php
  https://magpi.raspberrypi.com/articles/apache-web-server
6. Install MariaDB
  sudo apt install mariadb-server php-mysql -y
  sudo service apache2 restart
  //not perforemed: pi@raspberrypi:/var/www/html $ sudo mysql_secure_installation
  https://randomnerdtutorials.com/raspberry-pi-apache-mysql-php-lamp-server/
  
  sudo apt-get update
  sudo apt-get upgrade -y
  sudo apt-get install apache2 -y
  sudo apt-get install php
  sudo apt install mariadb-server php-mysql -y
  sudo chown -R pi /var/www/html
  sudo service apache2 restart

  9/05/2022
  Plan
  - start web server on Pi
  - run PHP file
  - run PHP file with command that starts pump 

7. New conseption - moving to JS

  npm install rpi-gpio

  gpio.js
  https://www.w3schools.com/nodejs/nodejs_raspberrypi.asp
  sudo raspi-config
  sudo apt-get update
  
  sudo apt-get install -y nodejs
  npm install socket.io --save
  npm install onoff

  Example that works
  https://maker.pro/raspberry-pi/tutorial/how-to-control-a-raspberry-pi-gpio-pin-with-a-nodejs-web-server


