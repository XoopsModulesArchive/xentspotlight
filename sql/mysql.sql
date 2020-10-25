# phpMyAdmin SQL Dump
# version 2.5.5-pl1
# http://www.phpmyadmin.net
#
# Host: localhost
# Generation Time: Mar 23, 2004 at 05:18 PM
# Server version: 3.23.56
# PHP Version: 4.3.4
# 
# Database : `xoops2`
# 

# --------------------------------------------------------

#
# Table structure for table `xentspotlight`
#

CREATE TABLE xentspotlight (
    sid        INT(5) UNSIGNED NOT NULL DEFAULT '0',
    item       INT(5) UNSIGNED NOT NULL DEFAULT '1',
    auto       INT(5) UNSIGNED NOT NULL DEFAULT '0',
    module     VARCHAR(25)     NOT NULL DEFAULT 'news',
    image      VARCHAR(50)     NOT NULL DEFAULT 'spotlight.png',
    auto_image INT(5) UNSIGNED NOT NULL DEFAULT '0',
    imagealign VARCHAR(6)      NOT NULL DEFAULT 'left'
)
    ENGINE = ISAM;

#
# Dumping data for table `spotlight`
#

INSERT INTO xentspotlight
VALUES (1, 1, 0, 'news', 'spotlight.png', 0, 'left');

