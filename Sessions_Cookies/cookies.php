<?php 
//how to set cookies
setcookie("key","velue",time()+60);//name-value-current time + 60 second should expired
//how to update cookie
setcookie("key","value [update]",time()+3600);
//how to delete cookie
setcookie("key","",time()-1);

?>