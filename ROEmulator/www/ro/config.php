<?PHP
//-- --------------���ݿ��ַ-------------------------------------------------------- --//
$config_dbHost=			"127.0.0.1";
//-- -------------------------------------------------------------------------------- --//
//-- --------------RO���ݿ�---------------------------------------------------------- --//
$config_dbName=			"ragnarok";
//-- -------------------------------------------------------------------------------- --//
//-- --------------���ݿ��ʺ�-------------------------------------------------------- --//
$config_dbUser=			"root";
//-- -------------------------------------------------------------------------------- --//
//-- --------------���ݿ�����-------------------------------------------------------- --//
$config_dbPasswd=		"root";
//-- -------------------------------------------------------------------------------- --//
//-- --------------�ڷ���ͼ---------------------------------------------------------- --//
$config_not_use=		"job_wiz.gat";
//-- -------------------------------------------------------------------------------- --//
//-- --------------LOGIN��IP--------------------------------------------------------- --//
$config_loginip=		"127.0.0.1";
//-- -------------------------------------------------------------------------------- --//
//-- --------------CHAR��IP---------------------------------------------------------- --//
$config_charip=			"127.0.0.1";
//-- -------------------------------------------------------------------------------- --//
//-- --------------MAP��IP----------------------------------------------------------- --//
$config_mapip=			"127.0.0.1";
//-- -------------------------------------------------------------------------------- --//
//-- --------------LOGIN�Ķ˿�------------------------------------------------------- --//
$config_loginport=		"6900";
//-- -------------------------------------------------------------------------------- --//
//-- --------------CHAR�Ķ˿�-------------------------------------------------------- --//
$config_charport=		"6121";
//-- -------------------------------------------------------------------------------- --//
//-- --------------MAP�Ķ˿�--------------------------------------------------------- --//
$config_mapport=		"5121";
//-- -------------------------------------------------------------------------------- --//
//-- --------------��վ����---------------------------------------------------------- --//
$config_title=			"����99Max�ɾ���˵�";
$config_title2=			"99Max�ɾ���˵";
$config_game_Vname=		"<a href='index.php'>[ ������ҳ ]</a>";
//-- -------------------------------------------------------------------------------- --//
//-- --------------��վURL----------------------------------------------------------- --//
$config_index_url=		"http://127.0.0.1:8096/ro/";
//-- -------------------------------------------------------------------------------- --//
//-- --------------��̳URL----------------------------------------------------------- --//
$config_bbs_url=		"http://127.0.0.1:8096/";
//-- -------------------------------------------------------------------------------- --//
//-- --------------��̳����---------------------------------------------------------- --//
$config_bbs_msgscript=		"QQȺ:129072156��99MaxEa RO �����飩";
//-- -------------------------------------------------------------------------------- --//
//-- --------------��������---------------------------------------------------------- --//
//
$config_patch_Vname=		"����99Max�ɾ���˵� - ��¼���� ���أ����Ҽ�ʹ��Ѹ�����أ�";
$config_cilent_Vname=		"���º���KRO��ʽ�ͻ���110323���أ����Ҽ�ʹ��Ѹ�����أ�";
//
$config_cilent_url1=		"ftp://ragadmin:icsragadmin!@222.122.19.217/Ragnarok110323.zip";
$config_cilent_url2=		"ftp://ragadmin:icsragadmin!@222.122.19.217/Ragnarok110323.zip";
$config_cilent_url3=		"ftp://ragadmin:icsragadmin!@222.122.19.217/Ragnarok110323.zip";
$config_cilent_url4=		"ftp://ragadmin:icsragadmin!@222.122.19.217/Ragnarok110323.zip";
//
$config_patch_url1=		"http://127.0.0.1/ro/down/ro.rar";
$config_patch_url2=		"http://127.0.0.1/ro/down/ro.rar";
$config_patch_url3=		"http://127.0.0.1/ro/down/ro.rar";
$config_patch_url4=		"http://127.0.0.1/ro/down/ro.rar";
/***********************************************************************************************\
*************************************************************************************************
*************************************************************************************************
****************************************����ΪĬ�ϲ���*******************************************
*************************************************************************************************
*************************************************************************************************
\***********************************************************************************************/
//-- ----�������ݿ�---- --//
$connect=mysql_pconnect($config_dbHost,$config_dbUser,$config_dbPasswd) or die("�޷��������ݿ⣡");
mysql_select_db($config_dbName) or die("���ݿ�����������");
//-- ----ƥ���ַ�------ --//
function isAlNum($str) {
if(eregi("[^0-9a-zA-Z]",$str)) return 0;
return 1;
}
//-- ----ƥ��E-MAIL---- --//
function ismail( $str ) {
if( eregi("([a-z0-9\_\-\.]+)@([a-z0-9\_\-\.]+)", $str) ) return true;
else return false; 
}
?>