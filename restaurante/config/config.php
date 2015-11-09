<?php

use restaurante\myConfig\myConfig as config;

config::setPath('.....');
config::setUrl('.....');

config::setDriver('pgsql');
config::setHost('.....');
config::setPort('.....');
config::setDbUser('.....');
config::setDbPassword('.....');
config::setDbName('.....');
config::setPersistentConnection(true);

config::setDSN(config::getDriver() . ':host=' . config::getHost() . ';port=' . config::getPort() . ';dbname=' . config::getDbName());

config::setCookieNameSession('.....');

config::setDefaultModule('default');
config::setDefaultAction('index');