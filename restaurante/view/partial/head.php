<?php use restaurante\myConfig\myConfig as config ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo (isset($title) === true) ? $title : '' ?></title>
    <link rel="stylesheet" href="<?php echo config::getUrl() ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo config::getUrl() ?>css/bootstrap-theme.min.css">
  </head>
  <body>