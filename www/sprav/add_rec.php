<?php
header('Content-Type: text/html; charset=windows-1251');
// ������� HTML-���������:
echo '<html>';
echo '<head>';
echo '<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">';
echo '<title>��� �����������</title>';
echo '</head>';
echo '<body>';
echo '<h3>���������� ����� ������:</h3>';
echo '<hr size="1">';
$port=8100;
/*
$link = mysql_connect('localhost', 'man_local', '123qwe')
    or die('�� ������� �����������: ' . mysql_error());
    
    mysql_select_db('my_db') or die('�� ������� ������� ���� ������');
    
    $query = "SELECT id FROM lang where lang='Sql'";
    $result = mysql_query($query) or die('������ �� ������: ' . mysql_error());
    $lang_id = mysql_fetch_row($result)    
#$col_value = mb_convert_encoding($col_value,"WINDOWS-1251","UTF-8");


    $query = "SELECT id FROM lang where lang='Sql'";
    $result = mysql_query($query) or die('������ �� ������: ' . mysql_error());
*/

if (isset($_GET['newrec']))
{
    $newitem=$_GET['newrec'];
    $conv_value = mb_convert_encoding($newitem,"UTF-8","WINDOWS-1251");
    if (isset($_GET['frm'])) {
    
	$link = mysqli_connect('db', 'man_local', '123qwe') or die('�� ������� �����������: ' . mysqli_error($link));
    	mysqli_select_db($link,'my_db') or die('�� ������� ������� ���� ������');
    	mysqli_set_charset($link,"utf8");

	if ($_GET['frm']=='lang') {
    
    	    $query = "insert into lang(name) values('".$conv_value."')";
	}
	elseif ($_GET['frm']=='task' and isset($_GET['lang_id'])){
	    $lang_id=$_GET['lang_id'];
    	    $query = "insert into type_task(name,lang_id) values('".$conv_value."',".$lang_id.")";
	}
	else echo '<p>�������� �������� \'frm\'</p>';
	
	if (isset($query)) {
	    $result = mysqli_query($link,$query) or die('������ �� ������: ' . mysqli_error($link));
	    $newitem = mb_convert_encoding($name_value,"WINDOWS-1251","UTF-8");
	    if ($result) echo '<p>�������: \''.$newitem.'\' �������� � ����</p>';
	    else echo '<p>������ - �������: \''.$newitem.'\' �� �������� � ����</p>';
    	} 
	// ����������� ������ �� ����������
	mysqli_free_result($result);
	// ��������� ����������
	mysqli_close($link);
	
    }
    if ($_GET['frm']=='task') {
	echo '<a href="http://localhost:'.$port.'/sprav/lang.php?radiobutton='.$lang_id.'&field_new_lang=">�����</a><br>';
	echo '<a href="http://localhost:'.$port.'/sprav/main.php">�����</a>';
    }
    else echo '<a href="http://localhost:'.$port.'/sprav/main.php">�����</a>';
}
elseif (isset($_POST['fr_text_code']) and isset($_POST['field_new_frname']) and $_POST['fr_text_code']!="" and $_POST['field_new_frname']!="") {
    $str=$_POST['fr_text_code'];
    $code_value = mb_convert_encoding($str,"UTF-8","WINDOWS-1251");
    //echo '<p>'.$str.'</p>';
    $task_id=$_POST['hidden'];
    //echo '<p>id='.$task_id.'</p>';

    $str1=$_POST['field_new_frname'];
    $name_value = mb_convert_encoding($str1,"UTF-8","CP-1251");

    $link = mysqli_connect('db', 'man_local', '123qwe') or die('�� ������� �����������: ' . mysqli_error($link));
    mysqli_select_db($link,'my_db') or die('�� ������� ������� ���� ������');
    mysqli_set_charset($link,"utf8");

    $code_value = addslashes($code_value);
    $query = "insert into fr_code(name,code,type_task_id) values('".$name_value."','".$code_value."',".$task_id.")";

    $result = mysqli_query($link,$query) or die('������ �� ������: ' . mysqli_error($link));
    $name_value = mb_convert_encoding($name_value,"WINDOWS-1251","UTF-8");
    if ($result) echo '<p>�������: \''.$name_value.'\' �������� � ����</p>';
    else echo '<p>������ - �������: \''.$name_value.'\' �� �������� � ����</p>';
    //echo $query.'<br>';
    // ����������� ������ �� ����������
    mysqli_free_result($result);
    // ��������� ����������
    mysqli_close($link);
    
    echo '<a href="http://localhost:'.$port.'/sprav/task.php?radiobutton='.$task_id.'&field_new_task=">�����</a><br>';
    echo '<a href="http://localhost:'.$port.'/sprav/main.php">�����</a>';
}
else echo '<p>��������� �� ������</p>';
#echo '<a href="javascript:history.back();">�����</a>';
#echo '<a href="http://localhost:".$port."/sprav/lang.php">�����</a>';
echo '<hr size="1">';
echo '<p>&copy;&nbsp;2015 <a href="http://vk.com/id21493443">vk.com/id21493443</a></p>';
echo '</body>';
echo '</html>';
?>