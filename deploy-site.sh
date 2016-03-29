#!/bin/bash

#################
# bash script to synchronise and deploy git repository to server

# Author: Qumarth Jash (github: Q-Mart)
################

echo "Pulling repository"
git pull
echo "Pulling complete"

echo "Removing old site"
cd /var/www/qumarth.me/html/
find . -type 'd' | grep -v "ignore" | xargs rmdir

echo "Deploying update"
cd
cd Personal-Website/
cp -r html/ /var/www/qumarth.me/
