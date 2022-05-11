<?
namespace Api\Classes\FormatUrl;
use PDO;
use Api\Classes\FormatUrl\Validator;

class FormatUrl
{
    public  $link, $short_url;
    public static $pdo;

    function __construct($param = null)
    {
        $this->link = $param;
    }

    private static function includeDB()
    {

        try {
            $user = 'root';
            $password = 'root';
            $db = 'url';
            $host = 'localhost';
            $charset = 'utf8';
            $pdo = new PDO("mysql:host=$host;port=3307;dbname=$db;cahrset=$charset", $user, $password, array(
                PDO::ATTR_PERSISTENT => true
            ));
            return  $pdo;
        } catch (PDOException $e) {
            return  json_encode(["error" => [
                                    ["code" => $e->getCode()],
                                    ["message" => "Нет связи с базой данных"]
                                 ]
                    ]);
//            print "Error!: " . $e->getMessage() . "<br/>";
//            die();
//            if($e->getCode() == 1049) {
//                echo json_encode(["error" =>'Database does not exist!']);
//            }
        }

    }
    public static function RedirectLink($val){
        self::$pdo = self::includeDB();
        $link = self::selectDB('url', 'short', $val);
        if (!$link) {
            return  json_encode(["error" => [
                ["status" => 404],
                ["message" => "Такой ссылки нет : "]
            ]]);
        } else {
            return $link;
        }
    }
    public static function selectDB($result_column, $select_column, $val )
    {
        $sql = 'SELECT '.$result_column.' FROM short_url WHERE '.$select_column.' = :code';
        $query = self::$pdo -> prepare($sql);
        $query -> execute(['code' => $val] );

        if($row = $query->fetch(PDO::FETCH_ASSOC)) {
            return $row[$result_column];
        }
    }

    public function checkUrl()
    {
            if (!Validator::getResponseCode($this->link)) {
                return json_encode(["error" => [
                    ["status" => 400],
                    ["message" => "Проверьте правильность введенной ссылки "]
                ]]);
            }



        self::$pdo = self::includeDB();
        $short_table = self::selectDB('short', 'url', $this->link);

        if ($short_table) {
            return json_encode([ 'short' => $short_table ]);
        } else {
            $this->generationCode();
            return json_encode(['short' => $this->short_url]);
        }

    }

    public function generationCode()
    {
        $code = substr(bin2hex(openssl_random_pseudo_bytes(3)), 0, 5);

        $short_table = self::selectDB('short', 'short', $code);

        if ($short_table) {
            $this->generationCode();
        } else {
            $this->insertShort($code);
        }

    }

    public function insertShort($gen_code)
    {
        $sql = 'INSERT INTO short_url (url, short) VALUES (:url, :short)';

        $query = self::$pdo -> prepare($sql);
        $query -> execute(['url' => $this->link, 'short' => $gen_code]);
        $this->short_url = $gen_code;
        return $gen_code;

    }
}