"""
Script for datbase automation for data to PLE website.
Author: Kamal Tal.
"""


import os


os.chdir("./data")
files = os.listdir("./")

with open(files[0], "r") as f:
	lines = f.readlines()
	
	for line in lines:
		new_line = ""
		for alpha in line:
			if alpha != "(":
				new_line += alpha
			else:
				print(new_line)
				break
