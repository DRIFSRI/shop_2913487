<div class="test2" cellpading="3">
    <table>
        <tr>
            <th><div border="1px solid black">1</div></th>
            <th>1</th>
            <th>1</th>
            <th>1</th>
        </tr>
        <tr>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
        </tr>
        <tr>
            <td>1</td>
            <td>1</td>
            <td></td>
            <td>1</td>
        </tr>
        <tr>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
        </tr>
    </table>
</div>

<?
foreach(Yii::$app as $key=>$ap)
{
    if($key!="controller"&&$key!="requestedAction"&&$key!="extensions"&&$key!="state"&&$key!="loadedModules"&&$key!="params")
    {
        echo '<pre>';echo $key ;echo '=>' ;var_dump($ap); echo "</pre>\n<br>";
    }
    else{
        echo '<pre>';echo $key ;echo '=>' ;echo LLLLLLLLLLLLL   ; echo "</pre>\n<br>";
    }

}
?>