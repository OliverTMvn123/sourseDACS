<?php
$html=$_COOKIE['html'];
print_r($html);
if(!empty($html))
{
    header('Content-Type:application/xls');
    header('Content-Disposition:attachment;filename=report.xls');
    echo('<script> location="thungrac.php"</script>');

}

?>