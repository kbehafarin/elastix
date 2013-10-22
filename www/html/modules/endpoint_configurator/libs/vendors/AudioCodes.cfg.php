<?php

function PrincipalFileAudioCodes($id_device, $secret, $arrParameters, $ipAdressServer, $model, $mac)
{
    $content = "provisioning/configuration/url=tftp://$ipAdressServer/$model"."_$mac.cfg
voip/line/0/id=$id_device
voip/line/0/auth_name=$id_device
voip/line/0/auth_password=$secret
voip/signalling/sip/proxy_address=$ipAdressServer
voip/signalling/sip/sip_registrar/enabled=1
voip/signalling/sip/sip_registrar/addr=$ipAdressServer
voip/signalling/sip/use_proxy=1";
    return $content;
}

function templatesFileAudioCodes($ipAdressServer)
{
    $password = "$1\$FZ6rOGS1$54ZXSmjh7nod.kXFRyLx70";
    $content = <<<TEMP
system/type=310HD
system/user_name=admin
system/password=$password
system/watchdog/enabled=1
system/syslog/log_watchdog_events=0
system/syslog/sip_log_filter=0
system/syslog/server_address=0.0.0.0
system/syslog/server_port=514
system/syslog/mode=NONE
system/ntp/enabled=0
system/ntp/primary_server_address=ntp.ucsd.edu
system/ntp/secondary_server_address=ntp.cis.strath.ac.uk
system/ntp/gmt_offset=00:00
system/ntp/sync_time/days=0
system/ntp/sync_time/hours=12
system/ntp/daylight_saving/activate=DISABLE
system/ntp/daylight_saving/start_date/month=1
system/ntp/daylight_saving/start_date/day=1
system/ntp/daylight_saving/start_date/hour=0
system/ntp/daylight_saving/start_date/minute=0
system/ntp/daylight_saving/end_date/month=1
system/ntp/daylight_saving/end_date/day=1
system/ntp/daylight_saving/end_date/hour=0
system/ntp/daylight_saving/end_date/minute=0
system/ntp/daylight_saving/offset=60
provisioning/method=DYNAMIC
provisioning/firmware/url=
provisioning/configuration/url=
provisioning/period/type=DAILY
provisioning/period/hourly/hours_interval=24
provisioning/period/daily/time=00:00
provisioning/period/weekly/day=SUNDAY
provisioning/period/weekly/time=00:00
provisioning/url_option_value=160
provisioning/random_provisioning_time=120
provisioning/ring_tone_uri=
provisioning/corporate_directory_uri=
provisioning/speed_dial_uri=
management/tr069/enabled=0
management/tr069/feature_key=
management/tr069/acs_url=
management/tr069/user_name=
management/tr069/password=
management/tr069/inform/enabled=1
management/tr069/inform/interval=3600
management/tr069/connection_request/user_name=
management/tr069/connection_request/password=
network/lan_type=DHCP
network/lan/fixed_ip/ip_address=0.0.0.0
network/lan/fixed_ip/netmask=0.0.0.0
network/lan/fixed_ip/gateway=0.0.0.0
network/lan/fixed_ip/primary_dns=0.0.0.0
network/lan/fixed_ip/secondary_dns=0.0.0.0
network/lan/vlan/mode=AUTOMATIC
network/lan/vlan/id=0
network/lan/vlan/priority=0
voip/line/0/enabled=1
voip/line/0/id=168
voip/line/0/description=310HD
voip/line/0/auth_name=168
voip/line/0/auth_password=2833
voip/line/0/do_not_disturb/activated=0
voip/audio/gain/additional_speaker_gain=3
voip/audio/gain/tone_signal_level=10
voip/audio/gain/ringer_signal_level=0
voip/audio/gain/handsfree_digital_output_gain=7
voip/audio/gain/handsfree_digital_input_gain=0
voip/audio/gain/handsfree_analog_output_gain=0DB
voip/audio/gain/handsfree_analog_input_gain=PLUS33DB
voip/audio/gain/handset_digital_output_gain=0
voip/audio/gain/handset_digital_input_gain=0
voip/audio/gain/handset_analog_output_gain=MINUS9DB
voip/audio/gain/handset_analog_input_gain=PLUS19_5DB
voip/audio/gain/handset_analog_sidetone_gain=MINUS12DB
voip/audio/gain/headset_digital_output_gain=0
voip/audio/gain/headset_digital_input_gain=0
voip/audio/gain/headset_analog_output_gain=MINUS12DB
voip/audio/gain/headset_analog_input_gain=PLUS33DB
voip/audio/gain/headset_analog_sidetone_gain=MINUS12DB
voip/codec/codec_info/0/enabled=1
voip/codec/codec_info/0/name=G722
voip/codec/codec_info/0/ptime=20
voip/codec/codec_info/1/enabled=1
voip/codec/codec_info/1/name=PCMU
voip/codec/codec_info/1/ptime=20
voip/codec/codec_info/2/enabled=1
voip/codec/codec_info/2/name=PCMA
voip/codec/codec_info/2/ptime=20
voip/codec/codec_info/3/enabled=1
voip/codec/codec_info/3/name=G729
voip/codec/codec_info/3/ptime=20
voip/codec/codec_info/4/enabled=1
voip/codec/codec_info/4/name=G723
voip/codec/codec_info/4/ptime=20
voip/codec/g722_bitrate=G722_64K
voip/codec/g723_bitrate=HIGH
voip/dialing/timeout=5
voip/dialing/auto_dialing/enabled=0
voip/dialing/auto_dialing/timeout=15
voip/dialing/auto_dialing/destination=0
voip/dialing/phone_number_max_size=19
voip/dialing/dialtone_timeout=30
voip/dialing/warning_tone_timeout=40
voip/dialing/offhook_tone_timeout=120
voip/dialing/unanswered_call_timeout=60
voip/signalling/sip/sdp_include_ptime=0
voip/signalling/sip/transport_protocol=UDP
voip/signalling/sip/port=5060
voip/signalling/sip/proxy_address=$ipAdressServer
voip/signalling/sip/proxy_port=5060
voip/signalling/sip/auth_retries=4
voip/signalling/sip/proxy_timeout=3600
voip/signalling/sip/sip_registrar/enabled=1
voip/signalling/sip/sip_registrar/port=5060
voip/signalling/sip/sip_registrar/addr=$ipAdressServer
voip/signalling/sip/sip_outbound_proxy/enabled=0
voip/signalling/sip/sip_outbound_proxy/port=5060
voip/signalling/sip/sip_outbound_proxy/addr=0.0.0.0
voip/signalling/sip/sip_t1=500
voip/signalling/sip/sip_t2=4000
voip/signalling/sip/sip_t4=5000
voip/signalling/sip/sip_invite_timer=32000
voip/signalling/sip/session_timer=1800
voip/signalling/sip/min_session_interval=90
voip/signalling/sip/block_callerid_on_outgoing_calls=0
voip/signalling/sip/anonymous_calls_blocking=0
voip/signalling/sip/proxy_gateway=
voip/signalling/sip/digit_map=
voip/signalling/sip/number_rules=
voip/signalling/sip/use_proxy_ip_port_for_registrar=0
voip/signalling/sip/prack/enabled=1
voip/signalling/sip/rport/enabled=1
voip/signalling/sip/connect_media_on_180=0
voip/signalling/sip/keepalive_options/enabled=0
voip/signalling/sip/keepalive_options/timeout=300
voip/signalling/sip/use_proxy=1
voip/signalling/sip/tos=96
voip/signalling/sip/redundant_proxy/enabled=0
voip/signalling/sip/redundant_proxy/port=5060
voip/signalling/sip/redundant_proxy/address=0.0.0.0
voip/signalling/sip/redundant_proxy/keepalive_period=60
voip/signalling/sip/redundant_proxy/symmetric_mode=0
voip/signalling/sip/display_name_in_registration_msg/enabled=0
voip/dialing/dial_complete_key/enabled=1
voip/dialing/dial_complete_key/key=#
voip/media/out_of_band_dtmf=RFC2833
voip/dialing/automatic_disconnect=1
voip/media/dtmf_payload=101
voip/media/rtp_mute_on_hold=1
voip/services/application_server_type=GENERIC
voip/services/call_waiting/enabled=1
voip/services/call_waiting/sip_reply=QUEUED
voip/services/call_forward/line/0/enabled=1
voip/services/call_forward/line/0/timeout=6
voip/services/call_forward/line/0/type=NO_REPLY
voip/services/call_forward/line/0/destination=
voip/services/call_forward/line/0/active=0
voip/services/msg_waiting_ind/enabled=1
voip/services/msg_waiting_ind/subscribe=0
voip/services/msg_waiting_ind/subscribe_port=5060
voip/services/msg_waiting_ind/subscribe_address=0.0.0.0
voip/services/msg_waiting_ind/expiraition_timeout=3600
voip/services/msg_waiting_ind/voice_mail_number=
voip/services/busy_lamp_field/enabled=0
voip/services/busy_lamp_field/subscription_period=3600
voip/services/busy_lamp_field/application_server/use_registrar=0
voip/services/busy_lamp_field/application_server/addr=0.0.0.0
voip/services/busy_lamp_field/uri=
voip/services/msg_waiting/stutter_tone_duration=2500
voip/services/out_of_service_bahavior=REORDER_TONE
voip/dialing/secondary_dial_tone/enabled=1
voip/dialing/secondary_dial_tone/key_sequence=9
voip/services/do_not_disturb/enabled=1
voip/media/media_port=4000
voip/media/media_tos=184
voip/audio/jitter_buffer/min_delay=35
voip/audio/jitter_buffer/optimization_factor=7
voip/audio/echo_cancellation/enabled=1
voip/audio/gain/automatic_gain_control/enabled=0
voip/audio/gain/automatic_gain_control/direction=CTL_REMOTE
voip/audio/gain/automatic_gain_control/target_energy=-19
voip/audio/silence_compression/enabled=0
voip/regional_settings/selected_country=USA
voip/regional_settings/use_config_file_values=0
voip/regional_settings/call_progress_tones/0/enabled=1
voip/regional_settings/call_progress_tones/0/name=call_progress_howler_tone_call_waiting_tone_2
voip/regional_settings/call_progress_tones/0/cadence=0
voip/regional_settings/call_progress_tones/0/frequency_a=350
voip/regional_settings/call_progress_tones/0/frequency_b=440
voip/regional_settings/call_progress_tones/0/frequency_a_level=19
voip/regional_settings/call_progress_tones/0/frequency_b_level=19
voip/regional_settings/call_progress_tones/0/tone_on_0=500
voip/regional_settings/call_progress_tones/0/tone_off_0=0
voip/regional_settings/call_progress_tones/0/tone_on_1=0
voip/regional_settings/call_progress_tones/0/tone_off_1=0
voip/regional_settings/call_progress_tones/0/tone_on_2=0
voip/regional_settings/call_progress_tones/0/tone_off_2=0
voip/regional_settings/call_progress_tones/0/tone_on_3=0
voip/regional_settings/call_progress_tones/0/tone_off_3=0
voip/regional_settings/call_progress_tones/1/enabled=1
voip/regional_settings/call_progress_tones/1/name=ringback_tone
voip/regional_settings/call_progress_tones/1/cadence=1
voip/regional_settings/call_progress_tones/1/frequency_a=440
voip/regional_settings/call_progress_tones/1/frequency_b=480
voip/regional_settings/call_progress_tones/1/frequency_a_level=19
voip/regional_settings/call_progress_tones/1/frequency_b_level=19
voip/regional_settings/call_progress_tones/1/tone_on_0=200
voip/regional_settings/call_progress_tones/1/tone_off_0=400
voip/regional_settings/call_progress_tones/1/tone_on_1=0
voip/regional_settings/call_progress_tones/1/tone_off_1=0
voip/regional_settings/call_progress_tones/1/tone_on_2=0
voip/regional_settings/call_progress_tones/1/tone_off_2=0
voip/regional_settings/call_progress_tones/1/tone_on_3=0
voip/regional_settings/call_progress_tones/1/tone_off_3=0
voip/regional_settings/call_progress_tones/2/enabled=1
voip/regional_settings/call_progress_tones/2/name=busy_tone
voip/regional_settings/call_progress_tones/2/cadence=1
voip/regional_settings/call_progress_tones/2/frequency_a=480
voip/regional_settings/call_progress_tones/2/frequency_b=620
voip/regional_settings/call_progress_tones/2/frequency_a_level=24
voip/regional_settings/call_progress_tones/2/frequency_b_level=24
voip/regional_settings/call_progress_tones/2/tone_on_0=50
voip/regional_settings/call_progress_tones/2/tone_off_0=50
voip/regional_settings/call_progress_tones/2/tone_on_1=0
voip/regional_settings/call_progress_tones/2/tone_off_1=0
voip/regional_settings/call_progress_tones/2/tone_on_2=0
voip/regional_settings/call_progress_tones/2/tone_off_2=0
voip/regional_settings/call_progress_tones/2/tone_on_3=0
voip/regional_settings/call_progress_tones/2/tone_off_3=0
voip/regional_settings/call_progress_tones/3/enabled=1
voip/regional_settings/call_progress_tones/3/name=reorder_tone
voip/regional_settings/call_progress_tones/3/cadence=1
voip/regional_settings/call_progress_tones/3/frequency_a=480
voip/regional_settings/call_progress_tones/3/frequency_b=620
voip/regional_settings/call_progress_tones/3/frequency_a_level=24
voip/regional_settings/call_progress_tones/3/frequency_b_level=24
voip/regional_settings/call_progress_tones/3/tone_on_0=25
voip/regional_settings/call_progress_tones/3/tone_off_0=25
voip/regional_settings/call_progress_tones/3/tone_on_1=0
voip/regional_settings/call_progress_tones/3/tone_off_1=0
voip/regional_settings/call_progress_tones/3/tone_on_2=0
voip/regional_settings/call_progress_tones/3/tone_off_2=0
voip/regional_settings/call_progress_tones/3/tone_on_3=0
voip/regional_settings/call_progress_tones/3/tone_off_3=0
voip/regional_settings/call_progress_tones/4/enabled=1
voip/regional_settings/call_progress_tones/4/name=off_hook_warning_tone
voip/regional_settings/call_progress_tones/4/cadence=1
voip/regional_settings/call_progress_tones/4/frequency_a=480
voip/regional_settings/call_progress_tones/4/frequency_b=620
voip/regional_settings/call_progress_tones/4/frequency_a_level=24
voip/regional_settings/call_progress_tones/4/frequency_b_level=24
voip/regional_settings/call_progress_tones/4/tone_on_0=25
voip/regional_settings/call_progress_tones/4/tone_off_0=25
voip/regional_settings/call_progress_tones/4/tone_on_1=0
voip/regional_settings/call_progress_tones/4/tone_off_1=0
voip/regional_settings/call_progress_tones/4/tone_on_2=0
voip/regional_settings/call_progress_tones/4/tone_off_2=0
voip/regional_settings/call_progress_tones/4/tone_on_3=0
voip/regional_settings/call_progress_tones/4/tone_off_3=0
voip/regional_settings/call_progress_tones/5/enabled=1
voip/regional_settings/call_progress_tones/5/name=call_waiting_tone
voip/regional_settings/call_progress_tones/5/cadence=1
voip/regional_settings/call_progress_tones/5/frequency_a=350
voip/regional_settings/call_progress_tones/5/frequency_b=440
voip/regional_settings/call_progress_tones/5/frequency_a_level=13
voip/regional_settings/call_progress_tones/5/frequency_b_level=13
voip/regional_settings/call_progress_tones/5/tone_on_0=30
voip/regional_settings/call_progress_tones/5/tone_off_0=1000
voip/regional_settings/call_progress_tones/5/tone_on_1=30
voip/regional_settings/call_progress_tones/5/tone_off_1=1000
voip/regional_settings/call_progress_tones/5/tone_on_2=0
voip/regional_settings/call_progress_tones/5/tone_off_2=0
voip/regional_settings/call_progress_tones/5/tone_on_3=0
voip/regional_settings/call_progress_tones/5/tone_off_3=0
voip/regional_settings/call_progress_tones/6/enabled=1
voip/regional_settings/call_progress_tones/6/name=call_waiting_ringback_tone
voip/regional_settings/call_progress_tones/6/cadence=1
voip/regional_settings/call_progress_tones/6/frequency_a=440
voip/regional_settings/call_progress_tones/6/frequency_b=480
voip/regional_settings/call_progress_tones/6/frequency_a_level=19
voip/regional_settings/call_progress_tones/6/frequency_b_level=19
voip/regional_settings/call_progress_tones/6/tone_on_0=200
voip/regional_settings/call_progress_tones/6/tone_off_0=400
voip/regional_settings/call_progress_tones/6/tone_on_1=0
voip/regional_settings/call_progress_tones/6/tone_off_1=0
voip/regional_settings/call_progress_tones/6/tone_on_2=0
voip/regional_settings/call_progress_tones/6/tone_off_2=0
voip/regional_settings/call_progress_tones/6/tone_on_3=0
voip/regional_settings/call_progress_tones/6/tone_off_3=0
voip/regional_settings/call_progress_tones/7/enabled=1
voip/regional_settings/call_progress_tones/7/name=call_progress_stutter_tone
voip/regional_settings/call_progress_tones/7/cadence=1
voip/regional_settings/call_progress_tones/7/frequency_a=350
voip/regional_settings/call_progress_tones/7/frequency_b=440
voip/regional_settings/call_progress_tones/7/frequency_a_level=19
voip/regional_settings/call_progress_tones/7/frequency_b_level=19
voip/regional_settings/call_progress_tones/7/tone_on_0=25
voip/regional_settings/call_progress_tones/7/tone_off_0=15
voip/regional_settings/call_progress_tones/7/tone_on_1=0
voip/regional_settings/call_progress_tones/7/tone_off_1=0
voip/regional_settings/call_progress_tones/7/tone_on_2=0
voip/regional_settings/call_progress_tones/7/tone_off_2=0
voip/regional_settings/call_progress_tones/7/tone_on_3=0
voip/regional_settings/call_progress_tones/7/tone_off_3=0
voip/regional_settings/call_progress_tones/8/enabled=1
voip/regional_settings/call_progress_tones/8/name=call_progress_howler_tone
voip/regional_settings/call_progress_tones/8/cadence=1
voip/regional_settings/call_progress_tones/8/frequency_a=1400
voip/regional_settings/call_progress_tones/8/frequency_b=2600
voip/regional_settings/call_progress_tones/8/frequency_a_level=0
voip/regional_settings/call_progress_tones/8/frequency_b_level=0
voip/regional_settings/call_progress_tones/8/tone_on_0=10
voip/regional_settings/call_progress_tones/8/tone_off_0=10
voip/regional_settings/call_progress_tones/8/tone_on_1=0
voip/regional_settings/call_progress_tones/8/tone_off_1=0
voip/regional_settings/call_progress_tones/8/tone_on_2=0
voip/regional_settings/call_progress_tones/8/tone_off_2=0
voip/regional_settings/call_progress_tones/8/tone_on_3=0
voip/regional_settings/call_progress_tones/8/tone_off_3=0
voip/regional_settings/call_progress_tones/9/enabled=1
voip/regional_settings/call_progress_tones/9/name=NULL
voip/regional_settings/call_progress_tones/9/cadence=1
voip/regional_settings/call_progress_tones/9/frequency_a=350
voip/regional_settings/call_progress_tones/9/frequency_b=440
voip/regional_settings/call_progress_tones/9/frequency_a_level=13
voip/regional_settings/call_progress_tones/9/frequency_b_level=13
voip/regional_settings/call_progress_tones/9/tone_on_0=30
voip/regional_settings/call_progress_tones/9/tone_off_0=1000
voip/regional_settings/call_progress_tones/9/tone_on_1=30
voip/regional_settings/call_progress_tones/9/tone_off_1=1000
voip/regional_settings/call_progress_tones/9/tone_on_2=0
voip/regional_settings/call_progress_tones/9/tone_off_2=0
voip/regional_settings/call_progress_tones/9/tone_on_3=0
voip/regional_settings/call_progress_tones/9/tone_off_3=0
voip/packet_recording/enabled=0
voip/packet_recording/remote_ip=0.0.0.0
voip/packet_recording/remote_port=50000
voip/packet_recording/rtp_recording/enabled=0
voip/packet_recording/ec_debug_recording/enabled=0
voip/packet_recording/network_recording/enabled=0
voip/packet_recording/tdm_recording/enabled=0
personal_settings/language=ENGLISH
TEMP;
    return $content;
}

?>