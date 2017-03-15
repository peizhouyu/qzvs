<?php
error_reporting(0);
$action = $_GET['action'];
$actions = array('tk', 'up', 'fd');
//判断是否正确的请求
if(! in_array($action, $actions)){
	//错误
	exit;
}
$upload = new upload();
$upload->$action();

/**
 * 上传类
 * @author ZhouHr   <2014.04.30>
 */
class upload
{
	private $_tokenPath = 'D:/xampp/htdocs/qzvs/qzvs_video/tokens/';            //令牌保存目录
	private $_filePath = 'D:/xampp/htdocs/qzvs/qzvs_video/files/';              //上传文件保存目录


    public function test_m($name = null,$cryptname = null){
        // var_dump(hello)
        //$url = 'http://localhost/qzvs/admin.php/Home/Video/filewrite/name/'.$name.'/cryptname/'.$cryptname;
        $url = 'http://localhost/qzvs/admin.php/Home/VideoFile/filewrite?name='.$name.'&cryptname='.$cryptname;


        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_exec($ch);
        curl_close($ch);
    }

	/**
	 * 获取令牌
	 */
	public function tk(){
        $getname = $_GET['name'];

        $file['name'] =date('Ymdhis').crypt($_GET['name'],vs).'.'.substr(strrchr($_GET['name'], '.'), 1);//上传文件名称
        $file_name =$file['name'];
        self::test_m($getname,$file_name);

        $file['size'] = $_GET['size'];                  //上传文件总大小
        $file['token'] = md5(json_encode($file['name'] . $file['size']));
        //判断是否存在该令牌信息
        if(! file_exists($this->_tokenPath . $file['token'] . '.token')){

            $file['up_size'] = 0;                       //已上传文件大小
            $pathInfo = pathinfo($file['name']);
            $path = $this->_filePath;
            //生成文件保存子目录
            if(! is_dir($path)){
                mkdir($path, 0700);
            }
            //上传文件保存目录
            $file['filePath'] = $path . $file['name'];
            //$hellourl = $file['filePath'];
            $file['modified'] = $_GET['modified'];      //上传文件的修改日期
            //保存令牌信息
            $this->setTokenInfo($file['token'], $file);
        }
        $result['token'] = $file['token'];
        $result['success'] = true;
        //$result['server'] = '';
        //$_SESSION['info'] = $hellourl;

        echo json_encode($result);
        //echo '<script>alert('."$hellourl".')</script>';


          /*
                    //$file['name'] = md5(json_encode($_GET['name'])).random_int(0,10000).'.'.substr(strrchr($_GET['name'], '.'), 1);                  //上传文件名称
                    $file['name'] =date('his',time()).crypt($_GET['name'], 'vs') .'.'.substr(strrchr($_GET['name'], '.'), 1);
                    //$wmw->test_m($getname,$file['name']);//调用控制器中的方法把修改前后的文件名称加入数据库
                    $file['size'] = $_GET['size'];                  //上传文件总大小
                    $file['token'] = md5(json_encode($file['name'] . $file['size']));
                    //判断是否存在该令牌信息
                    if(! file_exists($this->_tokenPath . $file['token'] . '.token')){
                    }*/
        exit;
	}


	/**
	 * 上传接口
	 */
	public function up(){
		if('html5' == $_GET['client']){
			$this->html5Upload();
		}
		elseif('form' == $_GET['client']){
			$this->flashUpload();
		}
		else {
			//错误
			exit;
		}

	}

	/**
	 * HTML5上传
	 */
	protected function html5Upload(){
		$token = $_GET['token'];
		$fileInfo = $this->getTokenInfo($token);

		if($fileInfo['size'] > $fileInfo['up_size']){
			//取得上传内容
			$data = file_get_contents('php://input', 'r');
			if(! empty($data)){
				//上传内容写入目标文件
				$fp = fopen($fileInfo['filePath'], 'a');
				flock($fp, LOCK_EX);
				fwrite($fp, $data);
				flock($fp, LOCK_UN);
				fclose($fp);
				//累积增加已上传文件大小
				$fileInfo['up_size'] =$fileInfo['up_size']+ strlen($data);
				if($fileInfo['size']> $fileInfo['up_size']){
					$this->setTokenInfo($token, $fileInfo);
				}
				else {
					//上传完成后删除令牌信息
					@unlink($this->_tokenPath . $token . '.token');
				}
			}
		}
		$result['start'] = $fileInfo['up_size'];
		$result['success'] = true;

		echo json_encode($result);
		exit;
	}

	/**
	 * FLASH上传
	 */
	public function flashUpload(){

		//$result['start'] = $fileInfo['up_size'];
		$result['success'] = false;

		echo json_encode($result);
		exit;
	}

	/**
	 * 生成文件内容
	 */
	protected function setTokenInfo($token, $data){

		file_put_contents($this->_tokenPath . $token . '.token', json_encode($data));
	}

	/**
	 * 获取文件内容
	 */
	protected function getTokenInfo($token){
		$file = $this->_tokenPath . $token . '.token';
		if(file_exists($file)){
			return json_decode(file_get_contents($file), true);
		}
		return false;
	}

}//endclass


