<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo "Create Project Form";

?>
<form action="<?php echo $baseUrl.'project'; ?>" method="post">
    <input type="text" name="projec_name"/>
    <input type="submit" value="Create"/>
</form>