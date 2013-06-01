<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<title>BuziApp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/bootstrap.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="/css/global.css" type="text/css" media="screen">
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/global.js" language="javascript" type="text/javascript"></script>
</head>
<body>
<?php

if(ENVIRONMENT=='development')
    $this->load->view('template/debug');

?>