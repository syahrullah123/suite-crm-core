<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/

/*********************************************************************************

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
	'LBL_FW'					=> 'RV:',
	'LBL_RE'					=> 'RE:',

	'LBL_BUTTON_CREATE'					=> 'Crear',
	'LBL_BUTTON_EDIT'					=> 'Editar',
	'LBL_QS_DISABLED'                   => 'No disponible',
	'LBL_SIGNATURE_PREPEND'				=> 'Firmar damunt en contestar?',
    'LBL_EMAIL_DEFAULT_DESCRIPTION' 	=> 'Aquest es el pressupost que va sol·licitar (Pot canviar el text)',
    'LBL_EMAIL_QUOTE_FOR' => 'Pressupost per a: ',
    'LBL_QUOTE_LAYOUT_DOES_NOT_EXIST_ERROR' => 'l’arxiu de diseny del pressupost no està: $layout',
    'LBL_QUOTE_LAYOUT_REGISTERED_ERROR' => 'el diseny del pressupost no està registrat a modules/Quotes/Layouts.php',


	'LBL_CONFIRM_DELETE'		=> 'Està segur de que vol eliminar aquesta carpeta?',
	'LBL_ENTER_FOLDER_NAME'		=> 'Si us plau, entri un nom de carpeta',

	'LBL_ERROR_SELECT_MODULE'   => 'Si us plau, seleccioni un mòdul per al camp Relacionar amb',

	'ERR_ARCHIVE_EMAIL'			=> 'Error: Seleccioni els correus electrònics a arxivar.',
	'ERR_DATE_START'			=> 'Data d’inici',
	'ERR_DELETE_RECORD'			=> 'Error: Ha d’especificar un número de registre a eliminar.',
	'ERR_NOT_ADDRESSED'			=> 'Error: El correu electrònic ha de tenir una direcció Per a, CC o CCO',
	'ERR_TIME_START'			=> 'Hora d’inici',
	'ERR_TIME_SENT'				=> 'Hora Tramesa',
	'LBL_ACCOUNTS_SUBPANEL_TITLE'=> 'Comptes',
	'LBL_ADD_ANOTHER_FILE'		=> 'Afegir un altre arxiu',
    'LBL_ADD_DASHLETS'          => 'Afegir Dashlets',
	'LBL_ADD_DOCUMENT'			=> 'Afegir Documents',
	'LBL_ADD_ENTRIES'           => 'Afegir Entrades',
	'LBL_ADD_FILE'				=> 'Afegir un Arxiu',
	'LBL_ARCHIVED_EMAIL'		=> 'Correu electrònic arxivat',
	'LBL_ARCHIVED_MODULE_NAME'	=> 'Crear correus electrònics arxivats',
    'LBL_ARCHIVED_EMAILS_CREATE'  => 'Crear',
	'LBL_ATTACHMENTS'			=> 'Adjunts:',
	'LBL_HAS_ATTACHMENT'		=> 'Té adjunt?',
	'LBL_BCC'					=> 'CCO:',
	'LBL_BODY'					=> 'Cos:',
	'LBL_BUGS_SUBPANEL_TITLE'	=> 'Incidències',
	'LBL_CC'					=> 'CC:',
	'LBL_COLON'					=> ':',
	'LBL_COMPOSE_MODULE_NAME'	=> 'Redactar correu electrònic',
	'LBL_CONTACT_FIRST_NAME'	=> 'Nom del Contacte',
	'LBL_CONTACT_LAST_NAME'		=> 'Cognom del Contacte',
	'LBL_CONTACT_NAME'			=> 'Contacte:',
	'LBL_CONTACTS_SUBPANEL_TITLE'=> 'Contactes',
	'LBL_CREATED_BY'			=> 'Creat per',
	'LBL_DATE_AND_TIME'			=> 'Data i hora tramesa:',
	'LBL_DATE_SENT'				=> 'Data Tramesa:',
	'LBL_DATE'					=> 'Data tramesa:',
    'LBL_DELETE_FROM_SERVER'    => 'Esborrar missatge del servidor',
	'LBL_DESCRIPTION'			=> 'Descripció',
	'LBL_EDIT_ALT_TEXT'			=> 'Editar Text Plà',
	'LBL_SEND_IN_PLAIN_TEXT'	=> 'Enviar en text pla',
	'LBL_EDIT_MY_SETTINGS'		=> 'Editar La Meva Configuració',
	'LBL_EMAIL_ATTACHMENT'		=> 'Arxiu Adjunt',
	'LBL_EMAIL_EDITOR_OPTION'	=> 'Enviar correu electrònic HTML',
	'LBL_EMAIL_SELECTOR_SELECT' => 'Seleccionar',
	'LBL_EMAIL_SELECTOR_CLEAR'  => 'Netejar',
	'LBL_EMAIL'					=> 'Direccions de correu electrònic:',
	'LBL_EMAILS_ACCOUNTS_REL'	=> 'Correus electrònics:Comptes',
	'LBL_EMAILS_BUGS_REL'		=> 'Correus electrònics:Incidències',
	'LBL_EMAILS_CASES_REL'		=> 'Correus electrònics:Casos',
	'LBL_EMAILS_CONTACTS_REL'	=> 'Correus electrònics:Contactes',
	'LBL_EMAILS_LEADS_REL'		=> 'Correus electrònics:Clients Potencials',
	'LBL_EMAILS_OPPORTUNITIES_REL'=> 'Correus electrònics:Oportunitats',
    'LBL_EMAILS_NOTES_REL'      => 'Correus electrònics:Notes',
	'LBL_EMAILS_PROJECT_REL'	=> 'Correus electrònics:Projecte',
	'LBL_EMAILS_PROJECT_TASK_REL'=> 'Correus electrònics:Tasques de projecte',
	'LBL_EMAILS_PROSPECT_REL'	=> 'Correus electrònics:Públic objetiu',
	'LBL_EMAILS_TASKS_REL'		=> 'Correus electrònics:Tasques',
	'LBL_EMAILS_USERS_REL'		=> 'Correus electrònics:Usuaris',
    'LBL_EMPTY_FOLDER'          => 'No hi ha correus electrònics a mostrar',
	'LBL_ERROR_SENDING_EMAIL'	=> 'Error Enviant',
	'LBL_ERROR_SAVING_DRAFT'	=> 'Error al desar l’esborrany',
	'LBL_FORWARD_HEADER'		=> 'Inici de missatge reenviat:',
	'LBL_FROM_NAME'				=> 'Nom Remitent',
	'LBL_FROM'					=> 'De:',
	'LBL_REPLY_TO'				=> 'Respondre A:',
	'LBL_HTML_BODY'				=> 'Cos de HTML',
	'LBL_INVITEE'				=> 'Destinataris',
	'LBL_LEADS_SUBPANEL_TITLE'	=> 'Clients Potencials',
	'LBL_MESSAGE_SENT'			=> 'Missatge Enviat',
	'LBL_MODIFIED_BY'			=> 'Modificat Per',
	'LBL_MODULE_NAME_NEW'		=> 'Arxivar correu electrònic',
	'LBL_MODULE_NAME'			=> 'Tots els correus electrònics',
	'LBL_MODULE_TITLE'			=> 'Correus electrònics:',
    'LBL_MY_EMAILS'            => 'Els meus correus electrònics',
	'LBL_NEW_FORM_TITLE'		=> 'Arxivar correu electrònic',
	'LBL_NONE'                  => 'Cap',
	'LBL_NOT_SENT'				=> 'Error Enviant',
	'LBL_NOTE_SEMICOLON'		=> 'Nota: Utilitzi una coma o un punt i coma com a separadors de múltiples direccions de correu electrònic.',
	'LBL_NOTES_SUBPANEL_TITLE'	=> 'Dades Adjuntes',
	'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Oportunitats',
	'LBL_PROJECT_SUBPANEL_TITLE'=> 'Projectes',
	'LBL_PROJECT_TASK_SUBPANEL_TITLE'=> 'Tasques de Projecte',
    'LBL_RAW'                  => 'Codi font del correu electrònic',
	'LBL_SAVE_AS_DRAFT_BUTTON_KEY'=> 'R',
	'LBL_SAVE_AS_DRAFT_BUTTON_LABEL'=> 'Desar Borrador',
	'LBL_SAVE_AS_DRAFT_BUTTON_TITLE'=> 'Desar borrador',
	'LBL_SEARCH_FORM_DRAFTS_TITLE'=> 'Cercar borradors',
	'LBL_SEARCH_FORM_SENT_TITLE'=> 'Cercar correus electrònics enviats',
	'LBL_SEARCH_FORM_TITLE'		=> 'Cerca correus electrònics',
	'LBL_SEND_ANYWAYS'			=> 'Aquest correu electrònic no té assumpte. Enviar/desar de tota manera?',
	'LBL_SEND_BUTTON_KEY'		=> 'S',
	'LBL_SEND_BUTTON_LABEL'		=> 'Enviar',
	'LBL_SEND_BUTTON_TITLE'		=> 'Enviar',
	'LBL_SEND'					=> 'ENVIAR',
	'LBL_SENT_MODULE_NAME'		=> 'Correus electrònics enviats',
	'LBL_SHOW_ALT_TEXT'			=> 'Mostrar Text Plà',
	'LBL_SIGNATURE'				=> 'Firma',
	'LBL_SUBJECT'				=> 'Assumpte:',
	'LBL_TEXT_BODY'				=> 'Cos de Text',
	'LBL_TIME'					=> 'Hora tramesa:',
	'LBL_TO_ADDRS'				=> 'Per a',
	'LBL_USE_TEMPLATE'			=> 'Usar Plantilla:',
	'LBL_USERS_SUBPANEL_TITLE'	=> 'Usuaris',
	'LBL_USERS'					=> 'Usuaris',

	'LNK_ALL_EMAIL_LIST'		=> 'Tots els correus electrònics',
	'LNK_ARCHIVED_EMAIL_LIST'	=> 'Correus electrònics arxivats',
	'LNK_CALL_LIST'				=> 'Trucades',
	'LNK_DRAFTS_EMAIL_LIST'		=> 'Borradors',
	'LNK_EMAIL_LIST'			=> 'Correus electrònics',
	'LBL_EMAIL_RELATE'          => 'Relacionat amb',
	'LNK_EMAIL_TEMPLATE_LIST'	=> 'Plantilles de correu electrònic',
	'LNK_MEETING_LIST'			=> 'Reunions',
	'LNK_NEW_ARCHIVE_EMAIL'		=> 'Crear correu electrònic arxivat',
	'LNK_NEW_CALL'				=> 'Programar Trucada',
	'LNK_NEW_EMAIL_TEMPLATE'	=> 'Crear plantilla de correu electrònic',
	'LNK_NEW_EMAIL'				=> 'Enviar correu electrònic',
	'LNK_NEW_MEETING'			=> 'Programar Reunió',
	'LNK_NEW_NOTE'				=> 'Nova Nota o Arxiu Adjunt',
	'LNK_NEW_SEND_EMAIL'		=> 'Redactar',
	'LNK_NEW_TASK'				=> 'Nova Tasca',
	'LNK_NOTE_LIST'				=> 'Notes',
	'LNK_SENT_EMAIL_LIST'		=> 'Correus electrònics enviats',
	'LNK_TASK_LIST'				=> 'Tasques',
	'LNK_VIEW_CALENDAR'			=> 'Avui',

	'LBL_LIST_ASSIGNED'			=> 'Assignat',
	'LBL_LIST_CONTACT_NAME'		=> 'Nom Contacte',
	'LBL_LIST_CREATED'			=> 'Creat',
	'LBL_LIST_DATE_SENT'		=> 'Data Tramesa',
	'LBL_LIST_DATE'				=> 'Data Tramesa',
	'LBL_LIST_FORM_DRAFTS_TITLE'=> 'Borrador',
	'LBL_LIST_FORM_SENT_TITLE'	=> 'Correus electrònics enviats',
	'LBL_LIST_FORM_TITLE'		=> 'Llista de correus electrònics',
	'LBL_LIST_FROM_ADDR'		=> 'De',
	'LBL_LIST_RELATED_TO'		=> 'Tipus de destinatari',
	'LBL_LIST_SUBJECT'			=> 'Assumpte',
	'LBL_LIST_TIME'				=> 'Hora Tramesa',
	'LBL_LIST_TO_ADDR'			=> 'Per a',
	'LBL_LIST_TYPE'				=> 'Tipus',

	'NTC_REMOVE_INVITEE'		=> 'Està segur que desitja eliminar aquest destinatari de correu electrònic?',
	'WARNING_SETTINGS_NOT_CONF'	=> 'Advertència: La seva configuració de correu electrònic no està preparada per a l’enviament de correu electrònic.',
	'WARNING_NO_UPLOAD_DIR'		=> 'Els adjunts podrien no funcionar: No s’ha donat un valor a la variable de configuració "upload_tmp_dir". Si us plau, corregeixi això al seu arxiu php.ini.',
	'WARNING_UPLOAD_DIR_NOT_WRITABLE'	=> 'Els adjunts podrien no funcionar: S’ha donat un valor incorrecte o no utilitzable a la variable de configuració "upload_tmp_dir". Si us plau, corregeixi això al seu arxiu php.ini.',

    // for All emails
    'LBL_BUTTON_RAW_TITLE'   => 'Mostrar Codi Font del Missatge',
    'LBL_BUTTON_RAW_KEY'     => 'e',
    'LBL_BUTTON_RAW_LABEL'   => 'Mostrar codi font',
    'LBL_BUTTON_RAW_LABEL_HIDE' => 'Amagar codi font',

	// for InboundEmail
	'LBL_BUTTON_CHECK'			=> 'Comprovar correu',
	'LBL_BUTTON_CHECK_TITLE'	=> 'Comprovar nous correus',
	'LBL_BUTTON_CHECK_KEY'		=> 'c',
	'LBL_BUTTON_FORWARD'		=> 'Reenviar',
	'LBL_BUTTON_FORWARD_TITLE'	=> 'Reenviar aquest correu electrònic',
	'LBL_BUTTON_FORWARD_KEY'	=> 'f',
	'LBL_BUTTON_REPLY_KEY'		=> 'r',
	'LBL_BUTTON_REPLY_TITLE'	=> 'Respondre',
	'LBL_BUTTON_REPLY'			=> 'Contestar',
        'LBL_BUTTON_REPLY_ALL'		=> 'Contestar a Tots',
	'LBL_CASES_SUBPANEL_TITLE'	=> 'Casos',
	'LBL_INBOUND_TITLE'			=> 'Correu electrònic entrant',
	'LBL_INTENT'				=> 'Intent',
	'LBL_MESSAGE_ID'			=> 'ID Missatge',
	'LBL_REPLY_HEADER_1'		=> 'El ',
	'LBL_REPLY_HEADER_2'		=> 'va escriure:',
	'LBL_REPLY_TO_ADDRESS'		=> 'Direcció de Respondre A',
	'LBL_REPLY_TO_NAME'			=> 'Nom de Respondre A',

	'LBL_LIST_BUG'				=> 'Incidències',
	'LBL_LIST_CASE'				=> 'Casos',
	'LBL_LIST_CONTACT'			=> 'Contactes',
	'LBL_LIST_LEAD'				=> 'Clients Potencials',
	'LBL_LIST_TASK'				=> 'Tasques',
	'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuari Assignat',

	// for Inbox
	'LBL_ALL'					=> 'Tot',
	'LBL_ASSIGN_WARN'			=> 'Asseguri’s que les dues opcions estan seleccionades.',
	'LBL_BACK_TO_GROUP'			=> 'Tornar a Safata d’Entrada de Grup',
	'LBL_BUTTON_DISTRIBUTE_KEY'	=> 'a',
	'LBL_BUTTON_DISTRIBUTE_TITLE'=> 'Assignar',
	'LBL_BUTTON_DISTRIBUTE'		=> 'Assignar',
	'LBL_BUTTON_GRAB_KEY'		=> 't',
	'LBL_BUTTON_GRAB_TITLE'		=> 'Agafar del grup',
	'LBL_BUTTON_GRAB'			=> 'Tomar del Grup',
	'LBL_CREATE_BUG'			=> 'Nova Incidència',
	'LBL_CREATE_CASE'			=> 'Nou Cas',
	'LBL_CREATE_CONTACT'		=> 'Nou Contacte',
	'LBL_CREATE_LEAD'			=> 'Nou Client Potencial',
	'LBL_CREATE_TASK'			=> 'Nova Tasca',
	'LBL_DIST_TITLE'			=> 'Assignació',
	'LBL_LOCK_FAIL_DESC'		=> 'L’element elegit no està disponible actualment.',
	'LBL_LOCK_FAIL_USER'		=> ' ha pres possesió.',
	'LBL_MASS_DELETE_ERROR'		=> 'No s’ha seleccionat cap element per esborrar.',
	'LBL_NEW'					=> 'Nou',
	'LBL_NEXT_EMAIL'			=> 'Següent Element Lliure',
	'LBL_NO_GRAB_DESC'			=> 'No hi ha elements disponibles. Intenti-ho més tard.',
	'LBL_QUICK_REPLY'			=> 'Contestar',
	'LBL_REPLIED'				=> 'Va Contestar',
	'LBL_SELECT_TEAM'			=> 'Seleccionar Equips',
	'LBL_TAKE_ONE_TITLE'		=> 'Posi un Títol',
	'LBL_TITLE_SEARCH_RESULTS'	=> 'Resultats de la Cerca',
	'LBL_TO'					=> 'Per a:',
	'LBL_TOGGLE_ALL'			=> 'Activar tots',
	'LBL_UNKNOWN'				=> 'Desconegut',
	'LBL_UNREAD_HOME'			=> 'Correus electrònics no llegits',
	'LBL_UNREAD'				=> 'No Llegit',
	'LBL_USE_ALL'				=> 'Tots els Resultats de la Cerca',
	'LBL_USE_CHECKED'			=> 'Només Marcats',
	'LBL_USE_MAILBOX_INFO'		=> 'Usar direcció De: de la bústia',
	'LBL_USE'					=> 'Assignar:',
	'LBL_ASSIGN_SELECTED_RESULTS_TO' => 'Assignar Resultats Seleccionats a:',
	'LBL_USER_SELECT'			=> 'Seleccionar Usuaris',
	'LBL_USING_RULES'			=> 'Usant Regles:',
	'LBL_WARN_NO_DIST'			=> 'No s’han seleccionat el mètode de distribució',
	'LBL_WARN_NO_USERS'			=> 'No s’han seleccionat usuaris',
    'LBL_WARN_NO_USERS_OR_TEAM' => 'Si us plau, seleccioni un usuari o equip per l’assignació.',
    'LBL_IMPORT_STATUS_TITLE'	=> 'Estat',
	'LBL_LIST_STATUS'			=> 'Estat',
	'LBL_LIST_TITLE_GROUP_INBOX'=> 'Safata d’Entrada de Grup',
	'LBL_LIST_TITLE_MY_DRAFTS'	=> 'Borradors',
	'LBL_LIST_TITLE_MY_INBOX'	=> 'Safata d’Entrada',
	'LBL_LIST_TITLE_MY_SENT'	=> 'Elements Enviats',
	'LBL_LIST_TITLE_MY_ARCHIVES'=> 'Els meus correus electrònics arxivats',
    'LBL_ACTIVITIES_REPORTS' 	=> 'Informe d’activitats',

	'LNK_CHECK_MY_INBOX'		=> 'Comprovar el meu correu',
	'LNK_DATE_SENT'				=> 'Data de Tramesa',
	'LNK_GROUP_INBOX'			=> 'Safata d’Entrada de Grup',
	'LNK_MY_DRAFTS'				=> 'Borradors',
	'LNK_MY_INBOX'				=> 'El meu correu electrònic',
	'LNK_VIEW_MY_INBOX'			=> 'Veure el meu correu eletrònic',
	'LNK_QUICK_REPLY'			=> 'Contestar',
	'LNK_MY_ARCHIVED_LIST'		=> 'Els Meus Arxius',
    'LBL_EMAILS_NO_PRIMARY_TEAM_SPECIFIED' =>'No s’ha especificat un equip principal',

	// advanced search
	'LBL_ASSIGNED_TO'			=> 'Assignat A:',
	'LBL_MEMBER_OF'				=> 'Parent',
	'LBL_QUICK_CREATE'			=> 'Creació Ràpida',
	'LBL_STATUS'				=> 'Estat del correu electrònic:',
	'LBL_EMAIL_FLAGGED'			=> 'Etiquetat:',
	'LBL_EMAIL_REPLY_TO_STATUS'	=> 'Estat de Respondre A:',
	'LBL_TYPE'					=> 'Tipus:',
	//#20680 EmialTemplate Ext.Message.show;
	'LBL_EMAILTEMPLATE_MESSAGE_SHOW_TITLE' => 'Si us plau, comprovi el següent!',
	'LBL_EMAILTEMPLATE_MESSAGE_SHOW_MSG' => 'Està segur que desitja reemplaçar la plantilla? Això el farà perdre la informació que ha introduït!',
    'LBL_EMAILTEMPLATE_MESSAGE_CLEAR_MSG' => 'Al seleccionar "--Cap--" s’eliminarà qualsevol informació ja introduïda al cos del correu electrònic. Desitja continuar?',
	'LBL_EMAILTEMPLATE_MESSAGE_WARNING_TITLE' => 'Avís',
	'LBL_EMAILTEMPLATE_MESSAGE_MULTIPLE_RECIPIENTS' => 'L’ús d’una plantilla de correu electrònic que conté variables de contacte, com el nom del contacte, per enviar missatges de correu electrònic a diversos destinataris pot tenir resultats inesperats. Es recomana l’ús d’una plantilla de correu electrònic per a enviaments massius.',
	'LBL_CHECK_ATTACHMENTS'=>'Si us plau, comprovi els arxius adjunts.',
	'LBL_HAS_ATTACHMENTS' => 'Aquest correu electrònic ja te arxius adjunts. Desitja conservar-los?',
	'ERR_MISSING_REQUIRED_FIELDS' => 'Falta un camp requerit',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Camp requerit no vàlid',
	'LBL_FILTER_BY_RELATED_BEAN' => 'Només mostrar destinataris relacionats',
    'LBL_RECIPIENTS_HAVE_BEEN_ADDED' => 'S’han afegit els destinataris.',
    'LBL_ADD_INBOUND_ACCOUNT' => 'Afegir',
    'LBL_ADD_OUTBOUND_ACCOUNT' => 'Afegir',
    'LBL_EMAIL_ACCOUNTS_INBOUND' => 'Propietats de la compta de correu',
    'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNT' => 'Servidor de correu sortint d’SMTP',
    'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNTS' => 'Servidors de correu sortint SMTP',
    'LBL_EMAIL_SETTINGS_INBOUND_ACCOUNTS' => 'Comptes de correu',
    'LBL_EMAIL_SETTINGS_INBOUND' => 'Correu electrònic entrant',
    'LBL_EMAIL_SETTINGS_OUTBOUND' => 'Correu electrònic sortint',
    'LBL_ADD_CC' => 'Afegir Cc',
    'LBL_ADD_BCC' => 'Afecir Cco',
    'LBL_MOVE_TO_BCC' => 'Moure a Cco',
    'LBL_ADD_TO_ADDR' => 'Afegir a',
    'LBL_SELECTED_ADDR' => 'Seleccionat',
    'LBL_ADD_CC_BCC_SEP' => '|',
    'LBL_SEND_EMAIL_FAIL_TITLE' => 'Error enviant el correu electrònic',
    'LBL_EMAIL_DETAIL_VIEW_SHOW' => 'mostrar',
    'LBL_EMAIL_DETAIL_VIEW_MORE' => 'més',
    'LBL_MORE_OPTIONS' => 'més',
    'LBL_LESS_OPTIONS' => 'Menys',
    'LBL_MAILBOX_TYPE_PERSONAL' => 'Personal',
    'LBL_MAILBOX_TYPE_GROUP' => 'Grup',
    'LBL_MAILBOX_TYPE_GROUP_FOLDER' => 'Grup - Auto-Importar',
    'LBL_SEARCH_FOR' => 'Cercar per',
    'LBL_EMAIL_INBOUND_TYPE_HELP' => '<b>Personal</b>: Email account accessible by you. Only you can manage and import emails from this account.<br><b>Group</b>: Email account accessible by members of specified teams. Team members can manage and import emails from this account.<br><b>Group - auto-import</b>: Email account accessible by members of specified teams. Emails are automatically imported as records.',
    'LBL_ADDRESS_BOOK_SEARCH_HELP' => 'Introdueixi una direcció de correu electrònic, nom, cognom o nom del compte per a trobar destinataris.',
    'LBL_TEST_SETTINGS'     => 'Comprovar Configuració',
    'LBL_EMPTY_EMAIL_BODY'  => '<p><span style="color: #888888;"><em>Aquest missatge no té contingut</em></span></p>',
    'LBL_TEST_EMAIL_SUBJECT' => 'Correu electrònic de prova de SuiteCRM',
    'LBL_NO_SUBJECT' =>'(sense assumpte)',
    'LBL_CHECKING_ACCOUNT'	=> 'Comprovant la compta',
    'LBL_OF'	=> 'de',
    'LBL_TEST_EMAIL_BODY' => 'Aquest correu electrònic va ser enviat per tal de comprovar la informació del servidor de correu sortint presentades amb la sol·licitud SuiteCRM. A la recepció reeixida d’aquest missatge indica que la informació del servidor de correu sortint sempre és vàlid.',

    // for outbound email dialog
	'LBL_SMTP_SERVER_HELP' => 'Aquest servidor de correu SMTP pot utilitzar-se per a correu sortint. Proporcioni el nom d’usuari i la contrasenya de la seva compta de correu electrònic per a utilitzar el servidor de correu.',
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'L’administrador encara no ha configurat la compta sortint per defecte. No és possible enviar un correu electrònic de prova.',
    'LBL_MAIL_SMTPAUTH_REQ'				=> 'Fer servir Autentificació SMTP?',
	'LBL_MAIL_SMTPPASS'					=> 'Clau de pas SMTP:',
	'LBL_MAIL_SMTPPORT'					=> 'Port SMTP:',
	'LBL_MAIL_SMTPSERVER'				=> 'Servidor SMTP:',
	'LBL_MAIL_SMTPUSER'					=> 'Usuari SMTP:',
	'LBL_MAIL_SMTPTYPE'                => 'Tipus de servidor SMTP:',
	'LBL_MAIL_SMTP_SETTINGS'           => 'Especificació del servidor SMTP',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'Triï el seu proveïdor de correu electrònic:',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Contrasenya de Yahoo! Mail:',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'Id de Yahoo! Mail:',
	'LBL_GMAIL_SMTPPASS'					=> 'Contrasenya de Gmail:',
	'LBL_GMAIL_SMTPUSER'					=> 'Direcció de correu electrònic de Gmail:',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Contrasenya de Exchange:',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Nom d’usuari d’Exchange:',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Port del servidor d’Exchange:',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Servidor d’Exchange:',

	'LBL_EDIT_LAYOUT' => 'Editar Diseny' /*for 508 compliance fix*/,
	'LBL_ATTACHMENT' => 'Adjunt' /*for 508 compliance fix*/,
	'LBL_DELETE_INLINE' => 'Eliminar' /*for 508 compliance fix*/,
	'LBL_CREATE_CASES' => 'Crear casos' /*for 508 compliance fix*/,
	'LBL_CREATE_LEADS' => 'Crear clients potencials' /*for 508 compliance fix*/,
	'LBL_CREATE_CONTACTS' => 'Crear contactes' /*for 508 compliance fix*/,
	'LBL_CREATE_BUGS' => 'Crear incidència' /*for 508 compliance fix*/,
	'LBL_CREATE_TASKS' => 'Crear tasca' /*for 508 compliance fix*/,
	'LBL_CHECK_INLINE' => 'Correcte' /*for 508 compliance fix*/,
	'LBL_CLOSE' => 'Tancar' /*for 508 compliance fix*/,
	'LBL_HELP' => 'Ajuda' /*for 508 compliance fix*/,
	'LBL_GMAIL_LOGO' => 'Gmail' /*for 508 compliance fix*/,
	'LBL_YAHOO_MAIL' => 'Yahoo' /*for 508 compliance fix*/,
	'LBL_EXCHANGE_LOGO' => 'Exchange' /*for 508 compliance fix*/,
	'LBL_WAIT' => 'Esperi' /*for 508 compliance fix*/,
	'LBL_CHECKEMAIL' => 'Revisar el correu electrònic' /*for 508 compliance fix*/,
	'LBL_COMPOSEEMAIL' => 'Redactar correu electrònic' /*for 508 compliance fix*/,
	'LBL_EMAILSETTINGS' => 'Configuració de correu electrònic' /*for 508 compliance fix*/,

	// SNIP
	'LBL_CONTACTS_SUBPANEL_TITLE_SNIP' => 'Contactes',
	'LBL_EMAILS_MEETINGS_REL' => 'Correus electrònics:Reunions',
	'LBL_DATE_CREATED' => 'Data de Creació',
	'LBL_DATE_MODIFIED' => 'Última Modificació',
);

