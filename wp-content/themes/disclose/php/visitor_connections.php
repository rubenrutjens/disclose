<?php 

$hostname_visitors = "localhost";
$database_visitors = "wordpress";
$username_visitors = "root";
$password_visitors = "";

$visitors = mysqli_connect($hostname_visitors, $username_visitors,$password_visitors,$database_visitors);


function getBrowserType () {
//First get the platform?
$u_agent = $_SERVER['HTTP_USER_AGENT'];
if (preg_match('/linux/i', $u_agent)) {
    $platform = 'linux';
}
elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
    $platform = 'mac';
}
elseif (preg_match('/windows|win32/i', $u_agent)) {
    $platform = 'windows';
}

// Next get the name of the useragent yes seperately and for good reason
if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent)) 
{ 
    $bname = 'Internet Explorer'; 
    $ub = "MSIE"; 
} 
elseif(preg_match('/Firefox/i',$u_agent)) 
{ 
    $bname = 'Mozilla Firefox'; 
    $ub = "Firefox"; 
} 
elseif(preg_match('/Chrome/i',$u_agent)) 
{ 
    $bname = 'Google Chrome'; 
    $ub = "Chrome"; 
} 
elseif(preg_match('/Safari/i',$u_agent)) 
{ 
    $bname = 'Apple Safari'; 
    $ub = "Safari"; 
} 
elseif(preg_match('/Opera/i',$u_agent)) 
{ 
    $bname = 'Opera'; 
    $ub = "Opera"; 
} 
elseif(preg_match('/Netscape/i',$u_agent)) 
{ 
    $bname = 'Netscape'; 
    $ub = "Netscape"; 
} 
return $ub;
}

function selfURL() { 
$s = empty($_SERVER["HTTPS"]) ? '' : ($_SERVER["HTTPS"] == "on") ? "s" : "";
$protocol = strleft(strtolower($_SERVER["SERVER_PROTOCOL"]), "/").$s; 
$port = ($_SERVER["SERVER_PORT"] == "80") ? "" : (":".$_SERVER["SERVER_PORT"]); 
return $protocol."://".$_SERVER['SERVER_NAME'].$port.$_SERVER['REQUEST_URI']; 
}

function strleft($s1, $s2) { return substr($s1, 0, strpos($s1, $s2)); }

function getRealUserIp(){
    switch(true){
      case (!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
      case (!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
      case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
      default : return $_SERVER['REMOTE_ADDR'];
    }
 }

function paginate($start,$limit,$total,$filePath,$otherParams) {
	global $lang;

	$allPages = ceil($total/$limit);

	$currentPage = floor($start/$limit) + 1;

	$pagination = "";
	if ($allPages>10) {
		$maxPages = ($allPages>9) ? 9 : $allPages;

		if ($allPages>9) {
			if ($currentPage>=1&&$currentPage<=$allPages) {
				$pagination .= ($currentPage>4) ? " ... " : " ";

				$minPages = ($currentPage>4) ? $currentPage : 5;
				$maxPages = ($currentPage<$allPages-4) ? $currentPage : $allPages - 4;

				for($i=$minPages-4; $i<$maxPages+5; $i++) {
					$pagination .= ($i == $currentPage) ? "<a href=\"#\" 
					class=\"current\">".$i."</a> " : "<a href=\"".$filePath."?
					start=".(($i-1)*$limit).$otherParams."\">".$i."</a> ";
				}
				$pagination .= ($currentPage<$allPages-4) ? " ... " : " ";
			} else {
				$pagination .= " ... ";
			}
		}
	} else {
		for($i=1; $i<$allPages+1; $i++) {
		$pagination .= ($i==$currentPage) ? "<a href=\"#\" class=\"current\">".$i."</a> "
		: "<a href=\"".$filePath."?start=".(($i-1)*$limit).$otherParams."\">".$i."</a> ";
		}
	}

	if ($currentPage>1) $pagination = "<a href=\"".$filePath."?
	start=0".$otherParams."\">FIRST</a> <a href=\"".$filePath."?
	start=".(($currentPage-2)*$limit).$otherParams."\"><</a> ".$pagination;
	if ($currentPage<$allPages) $pagination .= "<a href=\"".$filePath."?
	start=".($currentPage*$limit).$otherParams."\">></a> <a href=\"".$filePath."?
	start=".(($allPages-1)*$limit).$otherParams."\">LAST</a>";

	echo '<div class="pages">' . $pagination . '</div>';
}