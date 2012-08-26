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
//д���ļ�
function write_file($dirname,$filename,$result){
	create_dir($dirname);
	cache_page("$dirname/$filename",$result);
}
//����Ŀ¼
function create_dir($dirname){
     $dirarr = explode("/",$dirname);
     for ($i=0;$i<count($dirarr);$i++){
          $dir .= $dirarr[$i]."/";
          if (!is_dir($dir)){ //���Ŀ¼�Ƿ����
               if (mkdir($dir)){ //����Ŀ¼
                    echo("<br>�ɹ������ļ���".$dir."<br>");
               }else{
                    echo("<br>�����ļ���ʧ��".$dir."<br>");
               }
          }
     }
}
//�����ļ���д��
function cache_page($pageurl,$pagedata){
    if(!$fso=fopen($pageurl,'w')){
        $this->warns('�޷��򿪻����ļ�.');//trigger_error
        return false;
    }
    if(!flock($fso,LOCK_EX)){//LOCK_NB,����������
        $this->warns('�޷����������ļ�.');//trigger_error
        return false;
    }
    if(!fwrite($fso,$pagedata)){//д���ֽ���,serializeд��������ʽ
        $this->warns('�޷�д�뻺���ļ�.');//trigger_error
        return false;
    }
    flock($fso,LOCK_UN);//�ͷ�����
    fclose($fso);
    return true;
}
?>