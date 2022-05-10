import RPi.GPIO as GPIO
from time import sleep

GPIO.setmode(GPIO.BOARD) 
GPIO.setup(40, GPIO.OUT)
try:
   GPIO.output(40, GPIO.HIGH)
   sleep(0.1)
   GPIO.output(40, GPIO.LOW)
except KeyboardInterrupt:
    GPIO.cleanup(40)

GPIO.cleanup(40)

