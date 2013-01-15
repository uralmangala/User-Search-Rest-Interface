<html>
<head>
<title>Rest</title>
</head>
<body>
<ul>
<li><a href="<?php echo site_url("api/example/users/");?>">Users</a></li>
<li><a href="<?php echo site_url('api/example/users/format/json');?>">Users</a> - in JSON</li>
<li><a href="<?php echo site_url('api/example/users/search/user_name');?>">Users</a> -  username</li>
<li><a href="<?php echo site_url('api/example/users/search/user_name:user_id:printed_pages:datetimes');?>">Users</a> - specfic fields </li>
<li><a href="<?php echo site_url('api/example/users/search/user_name:user_id:printed_pages:datetimes?&user_name=user_7823');?>">Users</a> - specfic fields </li>
<li><a href="<?php echo site_url('api/example/users/search/user_name:user_id:printed_pages:datetimes?&start_date=2012-10-02&end_date=2012-12-12');?>">
Users</a> - specfic date fields </li>
</ul>

</body>
</html>