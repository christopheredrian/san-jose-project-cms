<?php 
require("includes/header.html");

echo $localIP = getHostByName(getHostName());
require("includes/footer.html");

 ?>