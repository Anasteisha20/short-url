<?
namespace Api\Classes\FormatUrl;

class Validator{

    public static function getResponseCode($url) {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_setopt($ch,  CURLOPT_RETURNTRANSFER, true);
        curl_exec($ch);
        $response = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return (!empty($response) && $response != 404);


//            try {
//                // Do your stuff
//                if(mysqli_connect_errno()) {
//                    throw new Exception("Can't connect to db.");
//                }
//            } catch (Exception $e) {
//                echo json_encode(array("success" => false, "message" => $e->getMessage()));
//                return;
//            }
    }
}

?>