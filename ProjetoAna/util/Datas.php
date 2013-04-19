<?
class Datas {


	public static function StringParaData($data){
		$date = explode("/", $data);
		if ($date[0] == $data) {
			$dataTransformada = $data;
		}else {
			$dataTransformada = date("Y-m-d", mktime(0, 0, 0, $date[1], $date[0], $date[2]));	
		}
		return $dataTransformada;
	}

	public static function dataParaString($data){
		$date = explode("-", $data);
		if ($date[0] == $data) {
			$dataTransformada = $data;
		}else {
			$dataTransformada = date("d/m/Y", mktime(0, 0, 0, $date[1], $date[2], $date[0]));	
		}
		return $dataTransformada;
	}

	
}
?>
