<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<title>BuziApp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/normalize.css" type="text/css" rel="stylesheet" media="screen" />
    <link href="/css/bootstrap.css" type="text/css" rel="stylesheet" media="screen" />
    <link href="/css/global.css" type="text/css" rel="stylesheet"  media="screen" />
    
    <script src="//code.jquery.com/jquery.js" language="javascript" type="text/javascript"></script>
    <script src="/js/jquery.dataTables.min.js" language="javascript" type="text/javascript"></script>
    <script src="/js/bootstrap.min.js" language="javascript" type="text/javascript"></script>
    <script src="/js/global.js" language="javascript" type="text/javascript"></script>
</head>
<body>
<?php

if(ENVIRONMENT=='development')
    $this->load->view('template/debug');

?>