<?
include '../api/classes/FormatUrl/FormatUrl.php';
include '../api/classes/FormatUrl/Validator.php';

if (isset($_POST["text"])){
    $usd = $_POST["text"];
    $result = new Api\Classes\FormatUrl\FormatUrl($usd);
    $result = $result->checkUrl();
    echo $result;
}

?>