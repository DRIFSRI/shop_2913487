<input type="button" name="test" id="test" value="RUN" /><br/>

<?php

function testfun()
{
    echo "Your test function on button click is working";
}
if(array_key_exists('test',$_POST)){
    testfun();
}
?>