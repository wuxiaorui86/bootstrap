<?php
	$dirname = "skin";
	$dataJSON = $_REQUEST['data'];
	$data = json_decode($dataJSON, true);
	foreach($data as $d) {
		
		$result = "";
		foreach($d['skinLevel'] as $item) { 
			foreach($item as $k=>$v){
				$result.='@'.$k.':'.urldecode($v).';';
			}
		}
		
		foreach(explode(',',$d['marketIds']) as $id) {
			echo $result;
			write_file($dirname,"skin_".$id.".less",$result);
		}
	}
	
	write_file($dirname,"data.json",$dataJSON);
?>



<?php
//写入文件
function write_file($dirname,$filename,$result){
	create_dir($dirname);
	cache_page("$dirname/$filename",$result);
}
//创建目录
function create_dir($dirname){
     $dirarr = explode("/",$dirname);
     for ($i=0;$i<count($dirarr);$i++){
          $dir .= $dirarr[$i]."/";
          if (!is_dir($dir)){ //检查目录是否存在
               if (mkdir($dir)){ //创建目录
                    echo("<br>成功创建文件夹".$dir."<br>");
               }else{
                    echo("<br>创建文件夹失败".$dir."<br>");
               }
          }
     }
}
//创建文件并写入
function cache_page($pageurl,$pagedata){
    if(!$fso=fopen($pageurl,'w')){
        $this->warns('无法打开缓存文件.');//trigger_error
        return false;
    }
    if(!flock($fso,LOCK_EX)){//LOCK_NB,排它型锁定
        $this->warns('无法锁定缓存文件.');//trigger_error
        return false;
    }
    if(!fwrite($fso,$pagedata)){//写入字节流,serialize写入其他格式
        $this->warns('无法写入缓存文件.');//trigger_error
        return false;
    }
    flock($fso,LOCK_UN);//释放锁定
    fclose($fso);
    return true;
}
?>