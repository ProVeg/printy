from escpos import printer
import glob
import os
import time
from curses import ascii

def main():
	pr = printer.Usb(0x0416,0x5011)
	while True:
		time.sleep(5)
		dir = glob.glob("/tmp/*.printy")
		if dir:
			print(dir[0])
			file = open(dir[0], mode="r", encoding='utf-8-sig')
			line = file.read()
			pr._raw(line.encode('cp437'))
			pr.text("\n\n\n\n")
			file.close
			os.remove(dir[0])

if __name__ == '__main__':
    main()
