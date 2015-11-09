<?php

include '../lib/restaurante/config.class.php';
include '../config/myConfig.class.php';
include '../config/config.php';
include '../lib/restaurante/dispatcher.class.php';

use restaurante\myConfig\myConfig as config;
use restaurante\dispatcher\dispatcher;

session_name(config::getCookieNameSession());
session_start();

dispatcher::main();