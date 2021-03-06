<?php
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Public License Version 1.1.2
 * ("License"); You may not use this file except in compliance with the
 * License. You may obtain a copy of the License at http://www.sugarcrm.com/SPL
 * Software distributed under the License is distributed on an  "AS IS"  basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License for
 * the specific language governing rights and limitations under the License.
 * The Original Code is:  SugarCRM Open Source
 * The Initial Developer of the Original Code is SugarCRM, Inc.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.;
 * All Rights Reserved.
 * Contributor(s): ______________________________________.
 *********************************************************************************
/*********************************************************************************
 * $Header:  E:\D_root\Dokumentumok\vtiger520\hungarian52\trunk\modules\Webmails\language\hu_hu.lang.php - 23:02 2010.05.21. $
 * Description:  Defines the Hungarian language pack for the Webmails module vtiger 5.2.0
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): Istvan Holbok,  e-mail: holbok@gmail.com , mobil: +3670-3420900 , Skype: holboki
 ********************************************************************************/

$mod_strings = Array(
'LBL_MODULE_NAME'=>'Email',
'LBL_MODULE_TITLE'=>'Email: Kezdőlap',
'LBL_SEARCH_FORM_TITLE'=>'Email Keresés',
'LBL_LIST_FORM_TITLE'=>'Email Lista',
'LBL_NEW_FORM_TITLE'=>'Email nyomkövetése',

'LBL_LIST_SUBJECT'=>'Tárgy',
'LBL_LIST_CONTACT'=>'Kapcsolat',
'LBL_LIST_RELATED_TO'=>'Kapcsolódik',
'LBL_LIST_DATE'=>'Küldés Dátuma',
'LBL_LIST_TIME'=>'Küldés Ideje',
'LBL_MOVE_TO'=>'Mozgat',
'LBL_DELETE'=>'Töröl',

'ERR_DELETE_RECORD'=>"Adj meg egy rekord azonosítót a VTiger-fiók törléséhez",
'LBL_DATE_SENT'=>'Küldés Dátuma:',
'LBL_SUBJECT'=>'Tárgy :',
'LBL_DATE_AND_TIME'=>'Küldés Dátuma és Ideje:',
'LBL_DATE'=>'Dátum :',
'LBL_TIME'=>'Küldés Ideje:',
'LBL_BODY'=>'Törzs:',
'LBL_CONTACT_NAME'=>' Kapcsolat neve: ',
'LBL_EMAIL'=>'Email:',  
'LBL_COLON'=>':',
'LBL_TO'=>'Címzett :',
'LBL_CHK_MAIL'=>'Emailek Letöltése',
'LBL_COMPOSE'=>'Email összeállítás',
'LBL_SETTINGS'=>'Bejövő MailSzerver Beállítások',
'LBL_EMAIL_FOLDERS'=>'Email Mappák',
'LBL_INBOX'=>'Bejövő',
'LBL_SENT_MAILS'=>'Elküldöttek',
'LBL_TRASH'=>'Töröltek',
'LBL_JUNK_MAILS'=>'Szemét Levelek',
'LBL_TO_LEADS'=>'Jelölteknek',
'LBL_TO_CONTACTS'=>'Kapcsolatoknak',
'LBL_TO_ACCOUNTS'=>'Cégeknek',
'LBL_MY_MAILS'=>'Leveleim',
'LBL_QUAL_CONTACT'=>'Iktatott levelek (Kapcsolatként)',
'LBL_MAILS'=>'Emailek',
'LBL_QUALIFY_BUTTON'=>'Iktat',
'LBL_REPLY_BUTTON'=>'Válasz',
'LBL_FORWARD_BUTTON'=>'Továbbítás',
'LBL_DOWNLOAD_ATTCH_BUTTON'=>'Mellékletek letöltése',
'LBL_FROM'=>'Feladó :',
'LBL_CC'=>'Másolat :',
'LBL_REPLY_TO_SENDER'=>'Válasz a Feladónak',
'LBL_REPLY_ALL'=>'Válasz Mindenkinek',
'LBL_SHOW_HIDDEN'=>'A rejtett levelek mutatása',
'LBL_EXPUNGE_MAILBOX'=>'A Levelesláda tömörítése',

'NTC_REMOVE_INVITEE'=>'Biztos vagy abban, hogy törölni akarod ezt a Címzettet az emailből?',
'LBL_INVITEE'=>'Címzettek',

// Added Fields
// Contacts-SubPanelViewContactsAndUsers.php
'LBL_BULK_MAILS'=>'Tömeges email',
'LBL_ATTACHMENT'=>'Melléklet',
'LBL_UPLOAD'=>'Feltöltés',
'LBL_FILE_NAME'=>'Fájl neve',
'LBL_SEND'=>'Küldés',

'LBL_EMAIL_TEMPLATES'=>'Email Sablon',
'LBL_TEMPLATE_NAME'=>'Sablon neve',
'LBL_DESCRIPTION'=>'Megjegyzés',
'LBL_EMAIL_TEMPLATES_LIST'=>'Email Sablon Lista',
'LBL_EMAIL_INFORMATION'=>'Email Információ',




//for v4 release added
'LBL_NEW_LEAD'=>'Új Jelölt',
'LBL_LEAD_TITLE'=>'Jelöltek',

'LBL_NEW_PRODUCT'=>'Új Termék',
'LBL_PRODUCT_TITLE'=>'Termékek',
'LBL_NEW_CONTACT'=>'Új Kapcsolat',
'LBL_CONTACT_TITLE'=>'Kapcsolatok',
'LBL_NEW_ACCOUNT'=>'Új Cég',
'LBL_ACCOUNT_TITLE'=>'Cégek',

// Added vtiger_fields after vtiger4 - Beta
'LBL_USER_TITLE'=>'Felhasználók',
'LBL_NEW_USER'=>'Új Felhasználó',

// Added for 4 GA
'LBL_TOOL_FORM_TITLE'=>'Email Eszközök',
//Added for 4GA
'Date & Time Sent'=>'Küldés Dátuma és Ideje',
'Sales Enity Module'=>'Értékesítési Entitás Modul', //Itt lehet hiba
'Activtiy Type'=>'Aktivitás Típus',
'Related To'=>'Kapcsolódik',
'Assigned To'=>'Felelős',
'Subject'=>'Tárgy',
'Attachment'=>'Melléklet',
'Description'=>'Megjegyzés',
'Time Start'=>'Kezdés Ideje',
'Created Time'=>'Létrehozva',
'Modified Time'=>'Módosítva',

'MESSAGE_CHECK_MAIL_SERVER_NAME'=>'Kérjük, hogy ellenőrizd a Mail Szerver nevét...',
'MESSAGE_CHECK_MAIL_ID'=>'Kérjük, hogy ellenőrizd a "Felelős" Felhasználó Email ID-jét...',
'MESSAGE_MAIL_HAS_SENT_TO_USERS'=>'Az Emailt elküldtük a következő Felhasználó(k)nak :',
'MESSAGE_MAIL_HAS_SENT_TO_CONTACTS'=>'Az Emailt elküldtük a következő Kapcsolat(ok)nak :',
'MESSAGE_MAIL_ID_IS_INCORRECT'=>'A Mail ID hibás. Kérjük, hogy ellenőrizd ezt a Mail ID-t...',
'MESSAGE_ADD_USER_OR_CONTACT'=>'Adj meg bármilyen Felhasználó(ka)t vagy Kapcsolato(ka)t ...',
'MESSAGE_MAIL_SENT_SUCCESSFULLY'=>' Az Email(eke)t sikeresen elküldtük!',

// Added for web mail post 4.0.1 release
'LBL_FETCH_WEBMAIL'=>'Fetch Web Mail',
//Added for 4.2 Release -- CustomView
'LBL_ALL'=>'Minden',
'MESSAGE_CONTACT_NOT_WANT_MAIL'=>'Ez a Kapcsolat nem óhajt emailt kapni.',
'LBL_WEBMAILS_TITLE'=>'WebMails',
'LBL_EMAILS_TITLE'=>'Email',
'LBL_MAIL_CONNECT_ERROR_INFO'=>'Hiba a mail szerverhez kapcsolódás során!<br> Ellenőrizd: Beállításaim -> Mail Szerverek Listája -> Email fiókok Listája',
// Added for 5.0.3 release
'LBL_MAIL_CONNECT_ERROR'=>'Nem tudtunk kapcsolódni a mail szerverhez. Kérjük, hogy ellenőrizd a mail szerver adatait',
'IN_REPLY_TO_THE_MESSAGE' => 'Válasz üzenet küldve általa ',
'LBL_CLICK_HERE' => 'Kattints ide ',
'LBL_GOTO_EMAILS_MODULE' => ' menj az Email modulhoz',
'LBL_NO_EMAILS'=>'Nincs Email ebben a mappában',
'LBL_MOVE_TO'=>'Mozgat...',
'LBL_DEL'=>'Töröl ',
'LABEL_FROM'=>'Küldő',
'LBL_INFO'=>'Info',
'LABEL_DATE'=>'Dátum',
'LBL_NO_IFRAMES_SUPPORTED'=>'Az Iframe nincs támogatva',
'LBL_EMAIL_ATTACHMENTS'=>'Email Mellékletek:',
'LBL_ALLMAILS'=>'Email',
'LBL_TO_USERS'=>'Felhasználóknak',
'LBL_TO_GROUPS'=>'Csoportoknak',
'SUBJECT' => 'Tárgy',
'BODY' => 'Levéltörzs',
'TO' => 'Címzett:',
'CC' => 'Másolat:',
'BCC' => 'Rejtett másolat:',
'FROM' => 'Küldő:',
'IN'=>'in',
'ADD_FOLDER' => 'Mappát Hozzáad[X]',
//Added for 5.0.3
'LBL_LOADING_IMAGE' => 'Kép betöltése',
'LBL_ENABLE_IMAP_SUPPORT' => 'Kérjük, hogy engedélyezd az IMAP támogatást a php-ben, hogy használni tudd ezt a modult',

// Added/Updated for vtiger CRM 5.0.4
'LBL_CONFIGURE_MAIL_SETTINGS'=>'Kérjük, hogy add meg az email beállításaidat',
'LBL_PLEASE'=>'Kérjük',
'LBL_HERE'=>'Itt',

// Added after 5.0.4 GA
'LBL_FULL_EMAIL_VIEW'=>'Teljes Email Nézet', 
'LBL_MESSAGE'=>'Üzenet', 
'LBL_MESSAGES'=>'Üzenetek',

'LBL_NO_ATTACHMENTS'=>'Nincs letölthető fájl', 
'LBL_THERE_ARE'=>'Itt van(nak) választható ', 
'LBL_ATTACHMENTS_TO_CHOOSE'=>' melléklet(ek)',
'LBL_ATTACHMENTS'=>'Mellékletek', 

'LBL_LIST_COUNT'=>'Mutatjuk',
);
?>