<?php
     $image_data = file_get_contents($_REQUEST['url']);
    file_put_contents(($_REQUEST['postData']),$image_data);
 ?>