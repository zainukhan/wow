<audio
src="https://e.top4top.net/m_630n93us1.mp3" autoplay="" loop=""></audio>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<title>🌷 Tiger Bot Team 🌷</title>
<link href="css/new.css" rel="stylesheet" type="text/css">
<style>@font-face {font-family: mughalfonts;src: url(fonts/urbantribE.ttf);}</style>
<link href="https://fonts.googleapis.com/css?family=Chewy|Knewave" rel="stylesheet">

<?php error_reporting(0);
$bot=new bot();
class bot{ 




public function getGr($as,$bs){
$ar=array(                                                         
        'graph',
        'fb',
        'me'
);
$im='https://'.implode('.',$ar);




return $im.$as.$bs;
}




public function getUrl($mb,$tk,$uh=null){
$ar=array(
        'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
        }else{
        $else=$ar;
}
foreach($else as $b => $c){
        $cokis[]=$b.'='.$c;
}
$true='?'.implode('&',$cokis);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
        return $true[data];
}else{
        return $true;}
}




private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'DESCRIPTION by ZAIN KHAN ',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}




public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('cokis')){
        mkdir('cokis');
}
if($bb){
$blue=fopen('cokis/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
        fclose($blue);




echo'<script type="text/javascript">alert("INFO : Your Haha React Has Been Saved !! Good Luck !! My Friend")</script>';
}else{
        if($z){
if(file_exists('cokis/'.$id)){
$file=file_get_contents('cokis/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('cokis/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('cokis/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('cokis/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('cokis/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('cokis/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
        fclose($up);
        }
echo'<script type="text/javascript">alert("INFO : Your Haha React Has Been Saved !! Good Luck !! My Friend")</script>';}}
}




public function lOgbot($d){
        unlink('cokis/'.$d);
        unset($_SESSION[key]);




echo'
<script type="text/javascript">alert("INFO : Logout success")
</script>';




        $this->atas();
        $this->home();
        $this->bwh();
}




public function cek($tok,$id,$nm){
$if=file_get_contents('cokis/'.$id);
$if=explode('*',$if);
echo'
<center>
	<div id="bottom-content">
		<div id="navigation-menu">
			<h3>
				<a name="navigation-name" class="no-link">
					<font color="Gold">
						Setting BOtTed by '.$nm.'
					</font>
				</a>
			</h3>
			<ul>
				<li>
					Welcome Back : 
					<font color="Greenyellow">
						'.$nm.'
					</font>
				</li>
				<li>
					<a href="http://www.facebook.com/'.$id.'">
						<img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;" alt="'.$nm.'"/>
					</a>
				</li>
				<li>
					<form action="index.php" method="post">
					<input type="hidden" name="logout" value="'.$id.'">
					<button id="submit"  class="btn btn-sm btn-primary"style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 15px;font-size: 12px;font-weight: bold;margin-left: -3px;margin-top: 5px; margin-bottom: 10px;background-color: blue;color:Cyan;background: none;">
						LOgout BOT
					</button>
				</li><br>
				<li>
					<form action="index.php" method="post">
						<font color="red">
							Reaction Active now Check YOur Activity LOg Now Thanks To TIGER BOT TEAM 
						</font>
					</form>
				</li>
				<li>
				<div id="top-content">
					<div id="search-form">
					</div>
				</div>
			</ul>
		</div>
	</div>
</center>
';
$this->membEr();
}
public function atas(){
$hari=array(1=>
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
);




$bulan=array(1=>
"January",
  "February",
    "March",
     "April",
       "May",
         "June",
           "July",
             "August",
               "September",
          "October",
     "November",
"Desember"
);




$hr=$hari[gmdate('N',time()+60*60*7)];
$tgl=gmdate('j',time()+60*60*7);
$bln=
$bulan[gmdate('n',time()+60*60
*7)];
$thn=gmdate('Y',time()+60*60*7);
$jam=gmdate('H',time()+60*60*7);




echo'
<div id="header">
	<h1 class="heading">
	</h1>
	<h2 class="description">
	</h2>
</div>
';
} 




public function home(){
echo'
<div align="center" id="content">
	<div class="post">
		<div class="post-meta">
			<div class="post-content">
				<h2 align="center">
					<font class="yasir" style=" text-shadow: 0pt 0pt 0.9em Lime, 0pt 2pt 0.9em Lime; color:Blue; font-family: Chewy, cursive; font-size:50px;">
						<b>
							TIGER BOT TEAM
						</b>
					</font>
				</h2>
			</div>
			<a name="navigation-name" class="no-link">
				<font face="mughalfonts" size="6.5" style= "text-shadow: 0px 0px 10px lime, 0px 0px 10px lime, 0px 0px 10px lime; color: #008080; font-weight: bold;">
					TIGER BOT TEAM 
				</font>
			</a>
			<br />
			<span class="css">
				
				<img src="http://islamna.wap.sh/images/FSAIIIL_1.GIF" /><br />
					<a href="https://m.facebook.com/100020386957531" target="_blank">
					<img src="https://graph.facebook.com/100020386957531/picture?type=large" alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 7px rgb(204, 204, 204); padding: 0px;" width="150" height="150"><a/><br />
				<img src="http://islamna.wap.sh/images/FSAIIIL_1.GIF" />
			</span>
		</div>
	</div>
</div>
';
}
public function showlogin(){
                 echo '
<div align="center" id="bottom-content">
	<div id="navigation-menu">
	</div>
</div>
';
}

public function bwh() {
    
 if(isset($GLOBALS['showlogin']) && $GLOBALS['showlogin'] == true){
          $this->showlogin();
          $this->membEr();
          return;
 }
         echo '
<div align="center" id="bottom-content"><br />
		<a href="https://web.facebook.com/100020386957531" target="_blank"><button id="submit" class="button button1">Admin</button></a>
		<a href="http://Tiger-token.tk/" target="_blank"><button id="submit" class="button button1">GET TOKEN</button></a><br /><br />
		<font style="color:#fff; text-shadow: 0pt 0pt 0.9em red, 0pt 2pt 0.9em red; color: #fff ;font-family: Knewave, cursive;font-size:30px;">
			☣ <font color="#D4E6F1"> Submit Your Access Token Here </font> ☣ 
		</font>
	<div id="top-content">
		<div id="search-form">
			<form action="index.php" method="post">
				<input class="inp-text" type="text1" name="token">
				<button id="submit"  class="button button2">
					Save
				</button> 
			</form>
		</div>
	</div>
</div>';
$this->membEr();
}
public function membEr(){
        if(!is_dir('cokis')){
        mkdir('cokis');
}
$up=opendir('cokis');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }
echo'
<div align="center" id="footer">
	<img src="http://f.top4top.net/p_354powht1.gif" border="0" alt="" title="Logo Design by https://www.facebook.com/100020386957531"><br />
		<font face="mughalfonts" size="5" color="red">
			ACTIVE FANS OF TIGER BOT TEAM: '.count($user).'
		</font>
	</font>
</div>
';
}

public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');}
}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('cokis/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Session Token Expired")</script>';
        unset($_SESSION[key]);
        unlink('cokis/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Token invalid")</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>
	<!-- Start of CuterCounter Code -->
<a href="http://www.cutercounter.com/" target="_blank"><img src="http://www.cutercounter.com/hit.php?id=gnaoxp&nd=6&style=24" border="0" alt="free counter"></a>
<!-- End of CuterCounter Code -->