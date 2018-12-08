<?php
echo 'AHihi do ngoc <br>';
echo $val.' <br>';
foreach ($arr as $item){
    echo $item.' <br>';
}
foreach ($models as $item){
    echo $item->testId .'  '.$item->Name .'  '.$item->Datetime .'  '.$item->Status .' <br>';
}

?>
