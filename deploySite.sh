#!/bin/bash

#################
# bash script to deploy git repository to server

# Author: Qumarth Jash (github: Q-Mart)
################

sudo rm -r /var/www/qumarth.me/*
sudo cp -r public_html /var/www/qumarth.me/
