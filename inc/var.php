<?php
$GLOBALS["version"]="1.5";

/* $tables = array('usrs','names','user','users','admin','admins','adminlogin','adminstrators','account','access','login','member','members','user_login','phpbb_users','usr','usr2','accounts','usern','user_admn','user_adm','customers','customer','config','conf','cfg','hash','auth','authenticate','authentication','logout','loginout','log','clients','sessions','uyeler','usuario','cms_users','current_currency','login_table','authuser','supernews_login','dbminibill.tblorders','dbminibill','tblorders','tblUsers','tblAdmin','teachers','students','radclassifieds_signups','rafia_admin_sess','mem_user','m_manager','pages','demo_users','demo_user','demo_admin','demo_admins','ecs_admin_user','sennik','security_users','security_user','security_admins','security_admin','iware_users','iware_user','iware_admmin','iware_admins','usuarios','phpss_account','md_users','md_user','md_admin','md_admins','infos','inselphoto_users','inselphoto_user','inselphoto_admin','inselphoto_admins','glpi_rules_actions','glpi_rules_criterias','tblConfig','wp_users','wp_user','wp_admins','wp_admin','mos_users','wsnguest_members','wsnguest_member','wsnguest_user','wsnguest_users','wsnguest_admins','wsnguest_admin','fusion_users','fusion_user','fusion_admin','fusion_admins','website_users','website_user','website_admin','website_admins','maj_users','maj_user','maj_admins','maj_admin','adminusers','adminuser','tbl_admin','BDT_USER','BDT_USERS','BDT_ADMINS','BDT_ADMIN','Directory','TBLsites','tbldoctor','bcoos_user','bcoos_users','bcoos_admins','bcoos_admin','mx_user','mx_users','mx_admin','mx_admins');

$columns = array('login','username','password','name','admin','user','pass','user_name','user_username','passwd','uname','uid','userid','upass','upasswd','usrname','user_uname','usern','pass_hash','passw','pword','pwrd','pwd','user_password','admin_pass','admin_passwd','admin_password','userpass','user_pass','user_pword','user_passw','user_pwrd','user_pwd','user_passwd','admin_pwd','logout','loginout','log','member','memberid','user_usernun','user_un','usrnm','user_usrnm','usr','usernm','user_usernm','user_nm','admin_name','admin_uname','admin_user','admin_username','Aupass','usuarios','wsnguest_username','e_mail','sessionid');

$phpath= array('cp.php','login.php','admin.php','account.php','administrator.php','webadmin.php','user.php','adminpanel.php','admin/','admin/index.php','admin/login.php','admin/admin.php','admin/account.php','admin/cp.php','admin/admin-login.php','admin/index.html','admin/account.html','admin/login.html','admin/admin.html','admin/home.php','admin/controlpanel.php','administrator/','administrator/index.php','administrator/login.php','administrator/account.php','administrator/index.html','administrator/login.html','user.html','administrator/account.html','moderator/','webadmin/','webadmin/admin.php','webadmin/index.php','adminarea/','wp-login.php','adminLogin.php','admin/adminLogin.php','adminarea/index.php','adminarea/admin.php','adminarea/login.php','bb-admin/','adminLogin/','admin_area/','panel-administracion/','panel-administracion/login.php','panel-administracion/index.php','panel-administracion/admin.php','instadmin/','controlpanel.php','admin/admin_home.php','admincontrol.php','memberadmin/','administratorlogin/','adm/','admin_area/admin.php','admin_area/login.php','siteadmin/login.php','siteadmin/index.php','siteadmin/login.html',
'admin_area/index.php','bb-admin/index.php','bb-admin/login.php','bb-admin/admin.php','admin_area/login.html','admin_area/index.html','admincp/index.html','adminpanel.html','webadmin.html','webadmin/index.html','webadmin/admin.html','webadmin/login.html','admin/admin_login.html','admin_login.html','panel-administracion/login.html','nsw/admin/login.php','webadmin/login.php','admin/admin_login.php','admin_login.php','admin_area/admin.html','pages/admin/admin-login.php','admin-login.php','bb-admin/index.html','bb-admin/login.html','bb-admin/admin.html','admin/home.html','modelsearch/login.php','moderator.php','moderator/login.php','administrator.html','moderator/admin.php','pages/admin/admin-login.html','admin/admin-login.html','admin-login.html','admin/adminLogin.html','adminLogin.html','admin/adminLogin.html','home.html','adminarea/index.html','adminarea/admin.html','admin/controlpanel.html','admin.html','admin/cp.html','cp.html','moderator.html','login.html','modelsearch/login.html','moderator/login.html','adminarea/login.html','panel-administracion/index.html','panel-administracion/admin.html','modelsearch/index.html','modelsearch/admin.html',
'admincontrol/login.html','adm/index.html','adm.html','moderator/admin.html','account.html','controlpanel.html','admincontrol.html','modelsearch/index.php','modelsearch/admin.php','admincontrol/login.php','adm/admloginuser.php','admloginuser.php','admin2.php','admin2/login.php','admin2/index.php',
'adm/index.php','adm.php','adm_auth.php','memberadmin.php','administratorlogin.php','rcjakar/admin/login.php');

$aspath= array('admin/','administrator/','moderator/','webadmin/','adminarea/','bb-admin/','adminLogin/','admin_area/','panel-administracion/','instadmin/',
'memberadmin/','administratorlogin/','adm/','account.asp','admin/account.asp','admin/index.asp','admin/login.asp','admin/admin.asp',
'admin_area/admin.asp','admin_area/login.asp','admin/account.html','admin/index.html','admin/login.html','admin/admin.html',
'admin_area/admin.html','admin_area/login.html','admin_area/index.html','admin_area/index.asp','bb-admin/index.asp','bb-admin/login.asp','bb-admin/admin.asp',
'bb-admin/index.html','bb-admin/login.html','bb-admin/admin.html','admin/home.html','admin/controlpanel.html','admin.html','admin/cp.html','cp.html',
'administrator/index.html','administrator/login.html','administrator/account.html','administrator.html','login.html','modelsearch/login.html','moderator.html',
'moderator/login.html','moderator/admin.html','account.html','controlpanel.html','admincontrol.html','admin_login.html','panel-administracion/login.html',
'admin/home.asp','admin/controlpanel.asp','admin.asp','pages/admin/admin-login.asp','admin/admin-login.asp','admin-login.asp','admin/cp.asp','cp.asp',
'administrator/account.asp','administrator.asp','login.asp','modelsearch/login.asp','moderator.asp','moderator/login.asp','administrator/login.asp',
'moderator/admin.asp','controlpanel.asp','admin/account.html','adminpanel.html','webadmin.html','pages/admin/admin-login.html','admin/admin-login.html',
'webadmin/index.html','webadmin/admin.html','webadmin/login.html','user.asp','user.html','admincp/index.asp','admincp/login.asp','admincp/index.html',
'admin/adminLogin.html','adminLogin.html','admin/adminLogin.html','home.html','adminarea/index.html','adminarea/admin.html','adminarea/login.html',
'panel-administracion/index.html','panel-administracion/admin.html','modelsearch/index.html','modelsearch/admin.html','admin/admin_login.html',
'admincontrol/login.html','adm/index.html','adm.html','admincontrol.asp','admin/account.asp','adminpanel.asp','webadmin.asp','webadmin/index.asp',
'webadmin/admin.asp','webadmin/login.asp','admin/admin_login.asp','admin_login.asp','panel-administracion/login.asp','adminLogin.asp',
'admin/adminLogin.asp','home.asp','admin.asp','adminarea/index.asp','adminarea/admin.asp','adminarea/login.asp','admin-login.html',
'panel-administracion/index.asp','panel-administracion/admin.asp','modelsearch/index.asp','modelsearch/admin.asp','administrator/index.asp',
'admincontrol/login.asp','adm/admloginuser.asp','admloginuser.asp','admin2.asp','admin2/login.asp','admin2/index.asp','adm/index.asp',
'adm.asp','affiliate.asp','adm_auth.asp','memberadmin.asp','administratorlogin.asp','siteadmin/login.asp','siteadmin/index.asp','siteadmin/login.html');

$content=array('username','password','user name','user_name','user','name','senha','personal','Usuario','Clave','usager','Sing','passe','P\/W','Admin Password');
 */?>
