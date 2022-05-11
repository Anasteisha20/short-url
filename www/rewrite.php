<?
include '../www/api/classes/FormatUrl/FormatUrl.php';
include '../www/api/classes/FormatUrl/Validator.php';

$link = Api\Classes\FormatUrl\FormatUrl::RedirectLink($_GET['route_short']);

if (json_decode($link)->error) {
    header('Location: http://short-url/');
} else {
    if (strpos($link, 'https://') === false && strpos($link, 'http://') === false) {
        $link = 'https://'.$link;
    }

    header('Location: '.$link);
}

?>