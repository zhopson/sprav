<?php
header('Content-Type: text/html; charset=windows-1251');
echo '<script type="text/javascript">';
echo 'var sxx="";';
echo 'var lang_id=0;';
echo 'function GetText() {';
echo '    window.sxx=document.getElementById("field_new_task_id").value;';
echo '}';
echo 'function add_task() {';
echo '    if (window.sxx!="") url="add_rec.php?frm=task&newrec=" + window.sxx;';
echo '    if (lang_id!=0) url = url + "&lang_id=" + window.lang_id;';
echo '    self.location.href = url;';
echo '}';
echo '</script>';
// ������� HTML-���������:
echo '<html>';
echo '<head>';
echo '<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">';
echo '<title>��� �����������</title>';
echo '</head>';
echo '<body>';
echo '<form name="lang_form" method="get" action="task.php">';
//echo '<hr size="1">';

    $link = mysqli_connect('db', 'man_local', '123qwe')
    or die('�� ������� �����������: ' . mysqli_error($link));
    
    mysqli_select_db($link,'my_db') or die('�� ������� ������� ���� ������');
    mysqli_set_charset($link,"utf8");
    
    $query = 'SELECT * FROM lang';
    $result = mysqli_query($link,$query) or die('������ �� ������: ' . mysqli_error($link));
    
#$conv_value = mb_convert_encoding($col_value,"WINDOWS-1251","UTF-8");
if (isset($_GET['radiobutton']))
{
    
    while ($row = mysqli_fetch_row($result)) {
	if ($_GET['radiobutton']==$row[0]) {
	    $lang = $row[1];
	    $lang_id = $row[0];
	    break;
	}//echo "<b>".$row[1]."</b>";
    }
////////////////////////////////////////////////////////////////////////////
    echo "<h3>����: ".$lang."</h3>";
    echo '<p>�������� ��� ������:</p>';
    echo '<hr size="1">';
###############################################################################################
    echo '<table width="100%" cellspacing=3 border=0><tr><td valign="top" align="left">';

    $link = mysqli_connect('db', 'man_local', '123qwe')
    or die('�� ������� �����������: ' . mysqli_error($link));
    
    mysqli_select_db($link,'my_db') or die('�� ������� ������� ���� ������');
    mysqli_set_charset($link,"utf8");
    
    $query = 'SELECT * FROM type_task WHERE lang_id='.$lang_id;
    $result = mysqli_query($link,$query) or die('������ �� ������: ' . mysqli_error($link));
    
    while ($row = mysqli_fetch_row($result)) {
	$col_value = mb_convert_encoding($row[1],"WINDOWS-1251","UTF-8");
        echo '<input name="radiobutton" type="radio" value="'.$row[0].'">';
        echo $col_value.'<br>';
    }
    
    echo '</td><td valign="top" align="right">';
    
    echo '<p><span>����� ������:</span>&nbsp';
    echo '<input type="text" id="field_new_task_id" name="field_new_task"><br>';
    echo '<input type="button" name="button_add_new_task" value="��������" onclick="add_task()"></p>';

    echo '</td></tr></table>';
###################################################################################################
    echo '<script type="text/javascript">';
    echo 'document.getElementById("field_new_task_id").onchange = GetText;';
    echo 'lang_id='.$lang_id;
    echo '</script>';    
    
}
else echo '<p>�� ���� �� ����������� �������������� �� ��� ������</p>';

include 'footer.php';
/*
echo '<hr size="1">';
echo '<p>';
echo '<input type="submit" value="�����">';
echo '</p>';
echo '<hr size="1">';
echo '<p>&copy;&nbsp;2015 <a href="http://vk.com/id21493443">vk.com/id21493443</a></p>';
*/
#echo '<p>��������� �� <a href="http://localhost:'.$port.'/sprav/main.php">�������� ��������</a></p>';
echo '</form>';
echo '</body>';
echo '</html>';
?>