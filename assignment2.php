<?php
require 'data.inc.php';

/* Onur Korkmaz 101303363 T177 Computer Programming And Analysis */

/// Function 1
function get ($key,$default=null )
{
    if ($key && isset($_GET[$key])) {
        return $_GET[$key];
    } else {

        return $default;
    }
}
function get_request_data(){
    echo "<pre>";
    print_r($_SERVER);
    echo "<pre>";

}



echo get("id");
echo "<pre>";

echo get("isbn","1234");

/// Function 2
//echo get_request_data();
$ip=$_SERVER['REMOTE_ADDR'];
$request=$_SERVER['REQUEST_METHOD'];
$request_time=$_SERVER['REQUEST_TIME'];
$user_agent=$_SERVER['HTTP_USER_AGENT'];
$url=$_SERVER['REQUEST_URI'];
echo "<pre>";
echo $ip;
echo "<pre>";
echo $request;
echo "<pre>";
echo $request_time;
echo "<pre>";
echo $user_agent;
echo "<pre>";
echo $url;

global $inventory;

print_r($inventory);

global $name,$array,$value;
echo _menu($name,$array,$value);



$name ='category';
$array =  ["cat1", "cat2"];
$value = "cat2";
function _menu($name, $array , $value){
    ?>
    <select name= <?php echo $name?>>
        <? foreach($array as $e) {  ?>
            <option selected = <?php echo $value?>> <?php echo $e?>
            </option>
            <?php
        }
        ?>
    </select>
    <?php
}

?>
<?php
global $inventory;
function get_category($name, $inventory , $value2){
    ?>
    <select name= <?php echo $name?>>
        <? foreach($inventory as $e) {  ?>
            <option selected = <?php echo $value2?>> <?php echo $e?>
            </option>
            <?php
        }
        ?>
    </select>
    <?php
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Template</title>
    <meta name="description" content="Template">
    <meta name="author" content="your name">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<?php

if(!isset($_POST['submit'])){



}


?>

<form method="post">

<select name="category[]">


    <option value="Finction" name="category[]">Finction</option>
    <option value="Biographies" name="category[]">Biographies</option>



</select>
    <input type="submit" name="submit" value="submit"


</form>








</body>
</html>

<script src=https://my.gblearn.com/js/loadscript.js></script>


<hr><code><span style="color: #000000">
&lt;!DOCTYPE&nbsp;html&gt;<br />&lt;html&nbsp;lang="en"&gt;<br />&lt;head&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;charset="UTF-8"&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;title&gt;Template&lt;/title&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;name="description"&nbsp;content="Template"&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;name="author"&nbsp;content="your&nbsp;name"&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;name="viewport"&nbsp;content="width=device-width,&nbsp;initial-scale=1.0"&gt;<br /><br />&lt;/head&gt;<br />&lt;body&gt;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;script&nbsp;src=https://my.gblearn.com/js/loadscript.js&gt;&lt;/script&gt;<br /><br />&lt;/body&gt;<br />&lt;/html&gt;<br /><br /><span style="color: #0000BB">&lt;?php&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">"&lt;hr&gt;"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">show_source</span><span style="color: #007700">(</span><span style="color: #0000BB">__FILE__</span><span style="color: #007700">);&nbsp;<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code>