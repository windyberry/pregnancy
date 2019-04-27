<?
//session_start();

class Log {

    private $sessionkey = "babycalculation";
    private $file_format = "Ymd";
    private $log_path = '/baby/log/';

    function randomString($length) {
        $key = "";
        $keys = range(0,9);
        for($i=0; $i < $length; $i++) {
            $key .= $keys[array_rand($keys)];
        }
        return $key;
    }

    function write_file($target, $output) {
        $file=fopen($target, "a");
            fputs($file, $output."\r\n");
        fclose($file);
    }

    function d($string = "")
    {
        $objDateTime = new DateTime('NOW');
        $scriptFile = basename($_SERVER['SCRIPT_NAME'],".php");
        $ip = $_SERVER['REMOTE_ADDR'];
        $filename = $this->log_path.$objDateTime->format($this->file_format).".txt";
        $target = $_SERVER['DOCUMENT_ROOT'].$filename;

        $now = $objDateTime->format('Ymd H:i:s');
        $nowstr = $objDateTime->format('YmdHis');
        $agent = $_SERVER['HTTP_USER_AGENT'];
        if (!isset($_SESSION[$this->sessionkey])) {
            $_SESSION[$this->sessionkey] = $nowstr."_".$this->randomString(5);
            $output = $now."\t".$_SESSION[$this->sessionkey]."\t".$ip."\t".$agent;
            if (strlen($string) > 0) {
                $output = $output."\t".$string;
            }
            $this->write_file($target, $output);
        }
    }

    function e($string = '')
    {
        if (strlen($string)>0) {
            $this->d("ERROR".$string);
        }
    }

    function finish()
    {
        unset($_SESSION[$this->sessionkey]);
    }
}
?>
