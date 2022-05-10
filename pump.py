import RPi.GPIO as GPIO
from time import sleep

GPIO.setmode(GPIO.BOARD) 
GPIO.setup(40, GPIO.OUT)

GPIO.cleanup(40)
try:
   GPIO.output(7, GPIO.HIGH)
   sleep(0.1)
   GPIO.output(7, GPIO.LOW)
except KeyboardInterrupt:
    GPIO.cleanup(40)

GPIO.cleanup(40)

