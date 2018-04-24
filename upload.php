<?php
$fileCount = count($_FILES['file']['name']);

   $file = $_FILES['file'];

  $arr=array();
  

for($i=0;$i<$fileCount;$i++)
{
    

   if($i<$fileCount){  //確定user有"上傳"檔案 (資安檢查) 
    $file_tmp = $file['tmp_name'][$i];
       $file_name = $file['name'][$i];
       $file_ext = strrchr($file_name,'.');  //上傳檔案的副檔名
       $file_name_new = $file_name.$file_ext;
       
       $array[$i]=$file_name;

       $host = '140.123.175.91';
       $port = '21';
       $user = '666';
       $pass = '';
       $link = ftp_connect($host,$port);
       ftp_login($link,$user,$pass);
       ftp_chdir($link,'.');  //切換到要放檔案的資料夾
       //ftp_mkdir($link,"cccd");
       //ftp_chdir($link,"./cccd");
       if(ftp_put($link,$file_name_new,$file_tmp,FTP_BINARY)){
           $msg = '上傳成功';
       }else{
           $msg = '上傳失敗a';
       }
   }else{
       $msg = '上傳失敗';
      
   }
    echo  $file_name;
    ftp_close($link);
   echo $msg;
   foreach($arr as $value){
       print"value:$value";
   }
}
//echo "<script>alert('提醒：將在確認之後跳頁'); location.href = 'http://scphoto.hopto.org/';</script>";

?>