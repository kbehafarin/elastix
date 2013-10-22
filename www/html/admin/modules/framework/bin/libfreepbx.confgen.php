<?php

function generate_configurations_sip($ast_version) {

	global $amp_conf;
	global $db;

	$additional = "";

	$sip_conf = $amp_conf['ASTETCDIR']."/sip_additional.conf";
	$sip_reg  = $amp_conf['ASTETCDIR']."/sip_registrations.conf";

	$table_name = "sip";

	$warning_banner = _("; do not edit this file, this is an auto-generated file by freepbx\n; all modifications must be done from the web gui\n\n");

	// Asterisk 1.4 requires call-limit be set for hints to work properly
	//
	if (version_compare($ast_version, "1.4", "ge")) { 
		$call_limit = "call-limit=1\n";
	} else {
		$call_limit = "";
	}

	$sip_conf_fh = fopen($sip_conf,"w");
	if ($sip_conf_fh === false) {
		fatal(_("Cannot write SIP configurations"),sprintf(_("Failed creating/overwriting SIP extensions file: %s"),$sip_conf));
	}
	$sip_reg_fh = fopen($sip_reg,"w");
	if ($sip_reg_fh === false) {
		fatal(_("Cannot write SIP registrations"),sprintf(_("Failed creating/overwriting SIP registrations file: %s"),$sip_reg));
	}

	fwrite($sip_conf_fh, $warning_banner);
	fwrite($sip_reg_fh, $warning_banner);

	$sql = "SELECT keyword,data from $table_name where id=-1 and keyword <> 'account' and flags <> 1";
	$results = $db->getAll($sql, DB_FETCHMODE_ASSOC);
	if(DB::IsError($results)) {
   	die($results->getMessage());
	}
	foreach ($results as $result) {
		$additional .= $result['keyword']."=".$result['data']."\n";
	}

	// items with id like 9999999% get put in registrations file
	//
	$sql = "SELECT keyword,data from $table_name where id LIKE '9999999%' and keyword <> 'account' and flags <> 1";
	$results = $db->getAll($sql, DB_FETCHMODE_ASSOC);
	if(DB::IsError($results)) {
   	die($results->getMessage());
	}

	$top = "";
	foreach ($results as $result) {
		$top .= $result['keyword']."=".$result['data']."\n";
	}

	fwrite($sip_reg_fh, $top."\n");

	$sql = "SELECT data,id from $table_name where keyword='account' and flags <> 1 group by data";
	$results = $db->getAll($sql, DB_FETCHMODE_ASSOC);
	if(DB::IsError($results)) {
   	die($results->getMessage());
	}

	foreach ($results as $result) {
		$account = $result['data'];
		$id = $result['id'];
		fwrite($sip_conf_fh,"[$account]\n");

		$sql = "SELECT keyword,data from $table_name where id='$id' and keyword <> 'account' and flags <> 1 order by keyword DESC";
		$results2 = $db->getAll($sql, DB_FETCHMODE_ASSOC);
		if(DB::IsError($results2)) {
   		die($results2->getMessage());
		}
		foreach ($results2 as $result2) {
			$options = explode("&", $result2['data']);
			foreach ($options as $option) {
				fwrite($sip_conf_fh,$result2['keyword']."=$option\n");
			}
		}
		if ($call_limit && ($id < 999900)) {
			fwrite($sip_conf_fh, $call_limit);
		}
		fwrite($sip_conf_fh, $additional."\n");
	}
	fclose($sip_conf_fh);
	fclose($sip_reg_fh);
}


function generate_configurations_iax($ast_version) {

	global $amp_conf;
	global $db;

	$additional = "";

	$iax_conf = $amp_conf['ASTETCDIR']."/iax_additional.conf";
	$iax_reg  = $amp_conf['ASTETCDIR']."/iax_registrations.conf";

	$table_name = "iax";

	$warning_banner = _("; do not edit this file, this is an auto-generated file by freepbx\n; all modifications must be done from the web gui\n\n");

	$iax_conf_fh = fopen($iax_conf,"w");
	if ($iax_conf_fh === false) {
		fatal(_("Cannot write IAX configurations"),sprintf(_("Failed creating/overwriting IAX extensions file: %s"),$iax_conf));
	}
	$iax_reg_fh = fopen($iax_reg,"w");
	if ($iax_reg_fh === false) {
		fatal(_("Cannot write IAX registrations"),sprintf(_("Failed creating/overwriting IAX registrations file: %s"),$iax_reg));
	}

	fwrite($iax_conf_fh, $warning_banner);
	fwrite($iax_reg_fh, $warning_banner);

	$sql = "SELECT keyword,data from $table_name where id=-1 and keyword <> 'account' and flags <> 1";
	$results = $db->getAll($sql, DB_FETCHMODE_ASSOC);
	if(DB::IsError($results)) {
   	die($results->getMessage());
	}
	foreach ($results as $result) {
		$additional .= $result['keyword']."=".$result['data']."\n";
	}

	// items with id like 9999999% get put in the registration file
	//
	$sql = "SELECT keyword,data from $table_name where id LIKE '9999999%' and keyword <> 'account' and flags <> 1";
	$results = $db->getAll($sql, DB_FETCHMODE_ASSOC);
	if(DB::IsError($results)) {
   	die($results->getMessage());
	}

	$top = "";
	foreach ($results as $result) {
		$top .= $result['keyword']."=".$result['data']."\n";
	}

	fwrite($iax_reg_fh, $top."\n");

	$sql = "SELECT data,id from $table_name where keyword='account' and flags <> 1 group by data";
	$results = $db->getAll($sql, DB_FETCHMODE_ASSOC);
	if(DB::IsError($results)) {
   	die($results->getMessage());
	}

	foreach ($results as $result) {
		$account = $result['data'];
		$id = $result['id'];
		fwrite($iax_conf_fh,"[$account]\n");

		$sql = "SELECT keyword,data from $table_name where id='$id' and keyword <> 'account' and flags <> 1 order by keyword DESC";
		$results2 = $db->getAll($sql, DB_FETCHMODE_ASSOC);
		if(DB::IsError($results2)) {
   		die($results2->getMessage());
		}
		foreach ($results2 as $result2) {
			$options = explode("&", $result2['data']);
			foreach ($options as $option) {
				fwrite($iax_conf_fh,$result2['keyword']."=$option\n");
			}
		}
		fwrite($iax_conf_fh, $additional."\n");
	}
	fclose($iax_conf_fh);
	fclose($iax_reg_fh);
}

function generate_configurations_zap($ast_version) {
	global $chan_dahdi;
	global $amp_conf;
	global $db;

	$additional = "";

	$zap_conf = $amp_conf['ASTETCDIR']."/zapata_additional.conf";
	$channel_name = 'ZAP';
	if ($chan_dahdi) {
		$zap_conf = $amp_conf['ASTETCDIR']."/chan_dahdi_additional.conf";
		$channel_name = 'DAHDI';
	}

	$table_name = "zap";

	$warning_banner = _("; do not edit this file, this is an auto-generated file by freepbx\n; all modifications must be done from the web gui\n\n");

	$zap_conf_fh = fopen($zap_conf,"w");
	if ($zap_conf_fh === false) {
		fatal(_("Cannot write $channel_name configurations"),sprintf(_("Failed creating/overwriting $channel_name extensions file: %s"),$zap_conf));
	}

	fwrite($zap_conf_fh, $warning_banner);

	$sql = "SELECT keyword,data from $table_name where id=-1 and keyword <> 'account' and flags <> 1";
	$results = $db->getAll($sql, DB_FETCHMODE_ASSOC);
	if(DB::IsError($results)) {
   	die($results->getMessage());
	}
	foreach ($results as $result) {
		$additional .= $result['keyword']."=".$result['data']."\n";
	}

	$sql = "SELECT data,id from $table_name where keyword='account' and flags <> 1 group by data";
	$results = $db->getAll($sql, DB_FETCHMODE_ASSOC);
	if(DB::IsError($results)) {
   	die($results->getMessage());
	}

	foreach ($results as $result) {
		$account = $result['data'];
		$id = $result['id'];
		fwrite($zap_conf_fh,";;;;;;[$account]\n");

		$sql = "SELECT keyword,data from $table_name where id=$id and keyword <> 'account' and flags <> 1 order by keyword DESC";
		$results2 = $db->getAll($sql, DB_FETCHMODE_ASSOC);
		if(DB::IsError($results2)) {
   		die($results2->getMessage());
		}
		$zapchannel="";
		foreach ($results2 as $result2) {
			if ($result2['keyword'] == 'channel') {
				$zapchannel = $result2['data'];
			} else {
				fwrite($zap_conf_fh,$result2['keyword']."=".$result2['data']."\n");
			}
		}
		fwrite($zap_conf_fh, "channel=>$zapchannel\n");
		fwrite($zap_conf_fh, $additional."\n");
	}
	fclose($zap_conf_fh);
}


function generate_configurations_queues($ast_version) {

	global $amp_conf;
	global $db;

	$additional = "";

	$queues_conf = $amp_conf['ASTETCDIR']."/queues_additional.conf";

	$table_name = "queues";

	// Asterisk 1.4 does not like blank assignments so just don't put them there
	//
	$no_blanks = version_compare($ast_version, "1.4", "ge");

	$warning_banner = _("; do not edit this file, this is an auto-generated file by freepbx\n; all modifications must be done from the web gui\n\n");

	$queues_conf_fh = fopen($queues_conf,"w");
	if ($queues_conf_fh === false) {
		fatal(_("Cannot write Queues configurations"),sprintf(_("Failed creating/overwriting Queues extensions file: %s"),$queues_conf));
	}

	fwrite($queues_conf_fh, $warning_banner);

	$sql = "SELECT keyword,data from $table_name where id='-1' and keyword <> 'account'";
	$results = $db->getAll($sql, DB_FETCHMODE_ASSOC);
	if(DB::IsError($results)) {
   	error("queues access failed, Queues module may not be installed: ".$results->getMessage());
		return true;
	}
	foreach ($results as $result) {
		if ($no_blanks && trim($result['data']) == '') {
			continue;
		}
		$additional .= $result['keyword']."=".$result['data']."\n";
	}

	$sql = "SELECT data,id from $table_name where keyword='account' group by data";
	$results = $db->getAll($sql, DB_FETCHMODE_ASSOC);
	if(DB::IsError($results)) {
   	error("queues access failed, Queues module may not be installed: ".$results->getMessage());
		return true;
	}

	foreach ($results as $result) {
		$account = $result['data'];
		$id = $result['id'];
		fwrite($queues_conf_fh,"[$account]\n");

		$sql = "SELECT keyword,data from $table_name where id='$id' and keyword <> 'account' and keyword <> 'rtone' order by flags";
		$results2 = $db->getAll($sql, DB_FETCHMODE_ASSOC);
		if(DB::IsError($results2)) {
   		error("queues access failed, Queues module may not be installed: ".$results2->getMessage());
			return true;
		}
		$queueschannel="";
		foreach ($results2 as $result2) {
			if ($no_blanks && trim($result2['data']) == '') {
				continue;
			}
			fwrite($queues_conf_fh,$result2['keyword']."=".$result2['data']."\n");
		}
		fwrite($queues_conf_fh, $additional."\n");
	}
	fclose($queues_conf_fh);
}

?>
