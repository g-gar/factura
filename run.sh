#!/bin/bash
g++ -Wall -std=c++11 -Iinclude/ -Llib/  main.cpp -o main
if [ -f main ] 
	then 
		./main
		rm main
fi