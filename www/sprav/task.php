<?php

global $strarr;

function getCode($id)
{
    $link = mysqli_connect('db', 'man_local', '123qwe') or die('�� ������� �����������: ' . mysqli_error($link));
    mysqli_select_db($link,'my_db') or die('�� ������� ������� ���� ������');
    mysqli_set_charset($link,"utf8");

    $query = "SELECT code FROM fr_code where id=".$id;
    $result = mysqli_query($link,$query) or die('������ �� ������: ' . mysqli_error($link));
    if ($row = mysqli_fetch_row($result)) {
	$col_value = mb_convert_encoding($row[0],"WINDOWS-1251","UTF-8");
	echo '<p>'.$col_value.'</p>';
	$text_code=$col_value;
    }
}

header('Content-Type: text/html; charset=windows-1251');
// ������� HTML-���������:
echo '<html>';
echo '<head>';
echo '<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">';
echo '<title>��� �����������</title>';
echo '</head>';
echo '<body>';
#echo '<form action="'.$_POST['radiobutton_code'].'" method="POST">';
echo '<form name="task_form" action="add_rec.php" method="POST">';

//echo '<h3>�������� ��� ������:</h3>';
    $link = mysqli_connect('db', 'man_local', '123qwe')
    or die('�� ������� �����������: ' . mysqli_error($link));
    
    mysqli_select_db($link,'my_db') or die('�� ������� ������� ���� ������');
    mysqli_set_charset($link,"utf8");
    
    $query = 'SELECT * FROM type_task';
    $result = mysqli_query($link,$query) or die('������ �� ������1: ' . mysqli_error($link));
    
//$col_value = mb_convert_encoding($col_value,"WINDOWS-1251","UTF-8");
if (isset($_GET['radiobutton']))
{
    while ($row = mysqli_fetch_row($result)) {
	if ($_GET['radiobutton']==$row[0]) {//echo "<b>".$row[1]."</b>";
	    $ttask = $row[1];
	    $ttask_id = $row[0];
	    $lang_id = $row[2];
	    break;
	}
    }
    echo '<input name="hidden" type="hidden" id="hidden" value="'.$ttask_id.'">';

    //$text_code = "��� ����";
///////////////////////////////////////////////////////////////////////////////////////////
    $link = mysqli_connect('db', 'man_local', '123qwe')
    or die('�� ������� �����������: ' . mysqli_error($link));
    
    mysqli_select_db($link,'my_db') or die('�� ������� ������� ���� ������');
    mysqli_set_charset($link,"utf8");
    
    $query = "SELECT * FROM lang where id =".$lang_id;
    $result = mysqli_query($link,$query) or die('������ �� ������2: ' . mysqli_error($link));
    if ($row = mysqli_fetch_row($result)) {
	$col_value = mb_convert_encoding($row[1],"WINDOWS-1251","UTF-8");
	$lang_name = $col_value;
	//echo '<p>����:'.$ttask_id.'</p>';
    }
###################################################################################

 echo '<h3>����: '.$lang_name.'</h3>';
    
 echo '<p>��� ������ ������ �����:</p>';

 $col_value = mb_convert_encoding($ttask,"WINDOWS-1251","UTF-8");
 echo '<p>'.$col_value.'</p>';

#####################################################################################
 echo '<hr size="1">';

/*    
    $lang_name = strtolower($lang_name);
    $lang_name = str_replace(" ", "_", $lang_name);
    echo '<form name="task_form" method="post" action="'.$lang_name.'_task.php">';
*/    

 echo '<table width="100%" cellspacing=3 border=0><tr><td valign="top" align="left">';
 
 echo '<h4>�������� �������� ����:</h4>';

 echo '</td><td valign="top" align="right">';

# echo '<input type="submit" name="button_add_new_code" value="�������� ��������">';
 echo '<p><span>��� ���������:</span>&nbsp';
 echo '<input type="text" id="field_new_frname_id" name="field_new_frname"><br>';
 echo '<input type="submit" value="�������� ��������">';

 echo '</td></tr></table>';

#############################################################################################
 echo '<table width="100%" cellspacing=0 border=0><tr><td valign="top" align="left">';
 
    $link = mysqli_connect('db', 'man_local', '123qwe')
    or die('�� ������� �����������: ' . mysqli_error($link));
    
    mysqli_select_db($link,'my_db') or die('�� ������� ������� ���� ������');
    mysqli_set_charset($link,"utf8");
    
    $query = "SELECT * FROM fr_code where type_task_id=".$ttask_id;
    $result = mysqli_query($link,$query) or die('������ �� ������3: ' . mysqli_error($link));
    $i=0;
    $strarr="arr = [";
    $order   = array("\r\n", "\n", "\r");
    $replace = '\n';
    while ($row = mysqli_fetch_row($result)) {
	$i++;    
	$col_value = mb_convert_encoding($row[1],"WINDOWS-1251","UTF-8");
	$col_value1 = mb_convert_encoding($row[2],"WINDOWS-1251","UTF-8");
	$col_value1 = addslashes($col_value1);
#	echo '<input name="radiobutton_code" type="radio" value="'.$row[0].'" onchange="javascript:document.getElementByName("fr_text_code").style.display = "1111";">';
#	echo '<input name="radiobutton_code" type="radio" value="'.$row[0].'" onclick="radioCh();">';
	echo '<input name="radiobutton_code" type="radio" value="'.$row[0].'" onclick="handleClick(this);">';
#	echo '<input name="radiobutton_code" type="radio" value="'.$row[0].'" onchange="toggleSet(this);">';
#	echo '<input name="radiobutton_code" type="radio" checked value="'.$row[0].'" onchange="this.form.submit()">';
#	echo '<input name="radiobutton_code" type="radio" value="'.$row[0].'" onchange="getCode($row[0]);">';
#	echo '<input name="radiobutton_code" type="radio" value=".$row[0].">';
	echo $i.'. '.$col_value.'<br>';
	$col_value1 = str_replace($order, $replace, $col_value1);
	$strarr=$strarr.'{id: "'.$row[0].'", code_txt: "'.$col_value1.'"},';
	//$gid=$row[0];
    }
    if ($i==0) { echo '<p>��� ������</p><br>'; $strarr="";}
    else {$strarr = rtrim($strarr, ","); $strarr=$strarr."];";}
 
 echo '</td>&nbsp<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td align="right">';
// echo '</td><td>';

 echo '<p>��� ���������� ���������:<br>';
// echo '<p align="right">��� ���������� ���������:';
// echo '<p>';
# echo '<textarea style="float:right" name="fr_text_code" cols="100" rows="30">'.currentValue.'</textarea> ';
 echo '<textarea style="float:right" id="fr_text_code_id" name="fr_text_code" cols="100" rows="30">'.$text_code.'</textarea>';
 echo '</p>';

 echo '</td></tr></table>';
 
 echo '<script type="text/javascript">'.$strarr.'</script>'; 
 
}
else echo '<p>�� ���� �� ����������� �������������� �� ��� ������</p>';
//$ttask_id

// ����������� ������ �� ����������
mysqli_free_result($result);
// ��������� ����������
mysqli_close($link);

include 'footer.php';
echo '</form>';
echo '</body>';
echo '</html>';

?>
<script type="text/javascript">
var arr;
//var x="1";
radioCh=function() {
    var radioButtons = document.getElementsByName("radiobutton_code");
    for(var b in radioButtons){
        radioButtons.item(b).onclick = function(){
    	    x = this.value;
    	    alert (x);
	}
    }
//    document.getElementById("fr_text_code").display.text = x;
//    alert (x);
};

var currentValue = 0;
function handleClick(myRadio) {
//    alert('Old value: ' + currentValue);
    if (currentValue!=myRadio.value) {
	//alert('New value: ' + myRadio.value);
	currentValue = myRadio.value;
//	document.getElementById("fr_text_code_id").value = myRadio.value ;
	for (var i = 0; i < arr.length; i++) {
	    if (window.arr[i].id==currentValue) document.getElementById("fr_text_code_id").value = window.arr[i].code_txt; //alert( window.arr[i].code_txt );
	}	
//	alert(window.arr[0].code_txt);
    }

};
</script>