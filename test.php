<?
            $ch = curl_init(str_replace(" ","%20",'https://upload.wikimedia.org/wikipedia/commons/7/7f/Norrishuckabee.JPG'));
            curl_setopt($ch, CURLOPT_FILE, $fp);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
            $data = curl_exec($ch);
            curl_close($ch);
            fclose($fp);
            echo $data;

?>
