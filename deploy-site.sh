#!/bin/bash

#################
# bash script to synchronise and deploy git repository to server

# Author: Qumarth Jash (github: Q-Mart)
################

echo "Pulling repository"
git pull
echo "Pulling complete"

echo "Removing old site"
rm -rf /var/www/qumarth.me/*

echo "Deploying update"
cp -r public_html /var/www/qumarth.me/
