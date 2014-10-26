<?php
/**
 * Test stuff: http://display-kml.appspot.com/
 * Reference: https://developers.google.com/kml/documentation/kmlreference
 * Convert HEX to KML (RRGGBB -> AABBGGRR)
 */
error_reporting(E_ALL);
ini_set('display_errors', '1');

function getNid($id){
	$trajecten = array(
		39242 => "TrajectSensor_Route117_R",
		39230 => "TrajectSensor_Route082",
		39229 => "TrajectSensor_Route083",
		39228 => "TrajectSensor_Route084",
		39227 => "TrajectSensor_Route085",
		39226 => "TrajectSensor_Route086",
		39225 => "TrajectSensor_Route136_R",
		39224 => "TrajectSensor_Route087",
		39223 => "TrajectSensor_Route088",
		39222 => "TrajectSensor_Route138_M",
		39231 => "TrajectSensor_Route081",
		39232 => "TrajectSensor_Route136_L",
		39241 => "TrajectSensor_Route119_L",
		39240 => "TrajectSensor_Route130_R",
		39239 => "TrajectSensor_Route132_M",
		39238 => "TrajectSensor_Route27A",
		39237 => "TrajectSensor_Route27B",
		39236 => "TrajectSensor_Route134_M",
		39235 => "TrajectSensor_Route11A",
		39234 => "TrajectSensor_Route11B",
		39233 => "TrajectSensor_Route080",
		39221 => "TrajectSensor_Route089",
		39220 => "TrajectSensor_Route36B_L",
		39208 => "TrajectSensor_Route097",
		39207 => "TrajectSensor_Route098",
		39206 => "TrajectSensor_Route099",
		39205 => "TrajectSensor_Route13A",
		39204 => "TrajectSensor_Route13B",
		39203 => "TrajectSensor_Route120_M",
		39202 => "TrajectSensor_Route122_M",
		39201 => "TrajectSensor_Route124_M",
		39200 => "TrajectSensor_Route126_L",
		39209 => "TrajectSensor_Route096",
		39210 => "TrajectSensor_Route095",
		39219 => "TrajectSensor_Route127",
		39218 => "TrajectSensor_Route36B_R",
		39217 => "TrajectSensor_Route12A",
		39216 => "TrajectSensor_Route12B",
		39215 => "TrajectSensor_Route090",
		39214 => "TrajectSensor_Route091",
		39213 => "TrajectSensor_Route092",
		39212 => "TrajectSensor_Route093",
		39211 => "TrajectSensor_Route094",
		39199 => "TrajectSensor_Route14A",
		39286 => "TrajectSensor_Route37B_L",
		39274 => "TrajectSensor_Route068",
		39273 => "TrajectSensor_Route069",
		39272 => "TrajectSensor_Route100",
		39271 => "TrajectSensor_Route101",
		39270 => "TrajectSensor_Route102",
		39269 => "TrajectSensor_Route103",
		39268 => "TrajectSensor_Route104",
		39267 => "TrajectSensor_Route105",
		39266 => "TrajectSensor_Route106",
		39275 => "TrajectSensor_Route067",
		39276 => "TrajectSensor_Route066",
		39285 => "TrajectSensor_Route25A",
		39284 => "TrajectSensor_Route25B",
		39283 => "TrajectSensor_Route37B_R",
		39282 => "TrajectSensor_Route060",
		39281 => "TrajectSensor_Route061",
		39280 => "TrajectSensor_Route062",
		39279 => "TrajectSensor_Route063",
		39278 => "TrajectSensor_Route064",
		39277 => "TrajectSensor_Route065",
		39265 => "TrajectSensor_Route107",
		39264 => "TrajectSensor_Route108",
		39252 => "TrajectSensor_Route078",
		39251 => "TrajectSensor_Route079",
		39250 => "TrajectSensor_Route110",
		39249 => "TrajectSensor_Route111",
		39248 => "TrajectSensor_Route117_M",
		39247 => "TrajectSensor_Route112",
		39246 => "TrajectSensor_Route113",
		39245 => "TrajectSensor_Route114",
		39244 => "TrajectSensor_Route115",
		39253 => "TrajectSensor_Route077",
		39254 => "TrajectSensor_Route076",
		39263 => "TrajectSensor_Route109",
		39262 => "TrajectSensor_Route26A",
		39261 => "TrajectSensor_Route26B",
		39260 => "TrajectSensor_Route070",
		39259 => "TrajectSensor_Route071",
		39258 => "TrajectSensor_Route072",
		39257 => "TrajectSensor_Route073",
		39256 => "TrajectSensor_Route074",
		39255 => "TrajectSensor_Route075",
		39243 => "TrajectSensor_Route116",
		39154 => "TrajectSensor_Route021",
		39142 => "TrajectSensor_Route032",
		39141 => "TrajectSensor_Route034",
		39140 => "TrajectSensor_Route035",
		39139 => "TrajectSensor_Route036",
		39138 => "TrajectSensor_Route037",
		39137 => "TrajectSensor_Route038",
		39136 => "TrajectSensor_Route039",
		39135 => "TrajectSensor_Route040",
		39134 => "TrajectSensor_Route041",
		39143 => "TrajectSensor_Route031",
		39144 => "TrajectSensor_Route030",
		39153 => "TrajectSensor_Route36A_M",
		39152 => "TrajectSensor_Route022",
		39151 => "TrajectSensor_Route023",
		39150 => "TrajectSensor_Route024",
		39149 => "TrajectSensor_Route025",
		39148 => "TrajectSensor_Route026",
		39147 => "TrajectSensor_Route027",
		39146 => "TrajectSensor_Route028",
		39145 => "TrajectSensor_Route029",
		39133 => "TrajectSensor_Route042",
		39132 => "TrajectSensor_Route043",
		39120 => "TrajectSensor_Route051",
		39119 => "TrajectSensor_Route129_R",
		39118 => "TrajectSensor_Route052",
		39117 => "TrajectSensor_Route053",
		39116 => "TrajectSensor_Route054",
		39115 => "TrajectSensor_Route055",
		39114 => "TrajectSensor_Route056",
		39113 => "TrajectSensor_Route057",
		39112 => "TrajectSensor_Route058",
		39121 => "TrajectSensor_Route050",
		39122 => "TrajectSensor_Route129_L",
		39131 => "TrajectSensor_Route044",
		39130 => "TrajectSensor_Route045",
		39129 => "TrajectSensor_Route121_R",
		39128 => "TrajectSensor_Route046",
		39127 => "TrajectSensor_Route123_M",
		39126 => "TrajectSensor_Route047",
		39125 => "TrajectSensor_Route048",
		39124 => "TrajectSensor_Route049",
		39123 => "TrajectSensor_Route125_M",
		39111 => "TrajectSensor_Route059",
		39198 => "TrajectSensor_Route14B",
		39186 => "TrajectSensor_Route001",
		39185 => "TrajectSensor_Route002",
		39184 => "TrajectSensor_Route003",
		39183 => "TrajectSensor_Route004",
		39182 => "TrajectSensor_Route005",
		39181 => "TrajectSensor_Route006",
		39180 => "TrajectSensor_Route007",
		39179 => "TrajectSensor_Route008",
		39178 => "TrajectSensor_Route009",
		39187 => "TrajectSensor_Route55A",
		39188 => "TrajectSensor_Route35B",
		39197 => "TrajectSensor_Route126_R",
		39196 => "TrajectSensor_Route128_M",
		39195 => "TrajectSensor_Route34A",
		39194 => "TrajectSensor_Route34B",
		39193 => "TrajectSensor_Route54B",
		39192 => "TrajectSensor_Route15A",
		39191 => "TrajectSensor_Route15B",
		39190 => "TrajectSensor_Route37A_R",
		39189 => "TrajectSensor_Route35A",
		39177 => "TrajectSensor_Route16A",
		39176 => "TrajectSensor_Route16B",
		39164 => "TrajectSensor_Route131_L",
		39163 => "TrajectSensor_Route019",
		39162 => "TrajectSensor_Route131_R",
		39161 => "TrajectSensor_Route133_L",
		39160 => "TrajectSensor_Route133_R",
		39159 => "TrajectSensor_Route135_L",
		39158 => "TrajectSensor_Route135_R",
		39157 => "TrajectSensor_Route57A",
		39156 => "TrajectSensor_Route137_M",
		39165 => "TrajectSensor_Route018",
		39166 => "TrajectSensor_Route118_L",
		39175 => "TrajectSensor_Route56B",
		39174 => "TrajectSensor_Route010",
		39173 => "TrajectSensor_Route011",
		39172 => "TrajectSensor_Route012",
		39171 => "TrajectSensor_Route013",
		39170 => "TrajectSensor_Route014",
		39169 => "TrajectSensor_Route015",
		39168 => "TrajectSensor_Route016",
		39167 => "TrajectSensor_Route017",
		39155 => "TrajectSensor_Route020",
	);
	if(in_array($id,$trajecten)){
		$entityref = array_search($id,$trajecten);
		return $entityref;
	}
}

function RD2WGS84($x, $y){
    /* Conversie van Rijksdriehoeksmeting naar latitude en longitude (WGS84)
    Voorbeeld: Station Utrecht
    x = 136013;
    y = 455723;
    */
    $dX = ($x - 155000) * pow(10,-5);
    $dY = ($y - 463000) * pow(10,-5);

    $SomN = (3235.65389 * $dY) + (-32.58297 * pow($dX,2)) + (-0.2475 * pow($dY,2)) + (-0.84978 * pow($dX,2) * $dY) + (-0.0655 * pow($dY,3)) + (-0.01709 * pow($dX,2) * pow($dY,2)) + (-0.00738 * $dX) + (0.0053 * pow($dX,4)) + (-0.00039 * pow($dX,2) * pow($dY,3)) + (0.00033 * pow($dX,4) * $dY) + (-0.00012 * $dX * $dY);
    $SomE = (5260.52916 * $dX) + (105.94684 * $dX * $dY) + (2.45656 * $dX * pow($dY,2)) + (-0.81885 * pow($dX,3)) + (0.05594 * $dX * pow($dY,3)) + (-0.05607 * pow($dX,3) * $dY) + (0.01199 * $dY) + (-0.00256 * pow($dX,3) * pow($dY,2)) + (0.00128 * $dX * pow($dY,4)) + (0.00022 * pow($dY,2)) + (-0.00022 * pow($dX,2)) + (0.00026 * pow($dX,5));

    $lat = 52.15517 + ($SomN / 3600);
    $lon = 5.387206 + ($SomE / 3600);

    return(Array("lat" => $lat, "lon" => $lon));
}

function speedToColor($speed){
    $speedColors = Array(
        40 => "ff2db200",
        30 => "ff00ffaa",
        20 => "ff00ffff",
        15 => "ff009eff",
        10 => "ff0000ff",
        0 => "ff0000be"
    );
    foreach($speedColors as $minspeed => $color){
        if($speed >= $minspeed) return $color;
    }
    return "ffd0d0d0";
}

$count = 0;
$jsontxt = file_get_contents("http://www.trafficlink-online.nl/trafficlinkdata/wegdata/TrajectSensorsNH.GeoJSON");
$json = json_decode($jsontxt);

// Creates the Document.
$dom = new DOMDocument('1.0', 'UTF-8');
$dom->formatOutput = true;
$dom->preserveWhiteSpace = false;

// Creates the root KML element and appends it to the root document.
$node = $dom->createElementNS('http://www.opengis.net/kml/2.2', 'kml');
$parNode = $dom->appendChild($node);

// Creates a KML Document element and append it to the KML element.
$dnode = $dom->createElement('Document');
$docNode = $parNode->appendChild($dnode);

$i=0;
foreach($json->features as $feature){

  $node = $dom->createElement('Placemark');
  $placeNode = $docNode->appendChild($node);
  $placeNode->setAttribute('id', $i);
 
/**/

  if($feature->properties->Velocity >= 0){
      $color = speedToColor($feature->properties->Velocity);
      $points = $feature->geometry->coordinates;
	  
	  //create url f.i.: /content/trajectsensorroute029
	  $nid = getNid($feature->Id);
      $info = "<a href='/per-dag/".$nid."'>". str_replace("_"," ",$feature->properties->Name) . "</a> <br />"; 
      $info .= "Lengte: ". $feature->properties->Length ." meter<br />";
      $info .= "Snelheid: ". $feature->properties->Velocity ." km/u <br />";
      $info .= "Huidige reistijd: ". floor($feature->properties->Traveltime / 60) .":". str_pad($feature->properties->Traveltime % 60,2,"0");

      // $points = $feature->geometry->coordinates;
	  
	  //Add name
      $nameNode = $dom->createElement('name',str_replace("_"," ",$feature->Id) );
      $placeNode->appendChild($nameNode);

	  //Add description (displayed in popup)
	  $descNode = $dom->createElement('description');
	  $cdata = $dom->createCDATASection($info);
      $descNode->appendChild($cdata);
	  $placeNode->appendChild($descNode);
	  
	  //Create style & LineString Node
      $styleNode = $dom->createElement('Style');
      $placeNode->appendChild($styleNode);

      $styleNodeType = $dom->createElement('LineStyle');
      $styleNode->appendChild($styleNodeType);

	  //Add color
      $styleNodeP = $dom->createElement('color',$color);
      $styleNodeType->appendChild($styleNodeP);

      $split = "";
      $coorStr = "";

	  //Create coordinates
      foreach ($points as $point) {
        $latlon = RD2WGS84($point[0], $point[1]);
        $lat = $latlon["lat"];
        $lon = $latlon["lon"];
        $coorStr .= $split . $lon . ','  . $lat . ',13 ';
      }

	  //Add linestring node
      $linestringNode = $dom->createElement('LineString');
      $placeNode->appendChild($linestringNode);
	  
	  $linestringNodeWidth = $dom->createElement('width',3);
	  $styleNodeType->appendChild($linestringNodeWidth); 

	  //create coordinate node & add to LinString node
      $coorNode = $dom->createElement('coordinates', $coorStr);
      $linestringNode->appendChild($coorNode);
      $i++;
    }
}

//output XML
//$dom->save("tmp/foo7.kml"); //save to file
echo $dom->saveXML();
?>
