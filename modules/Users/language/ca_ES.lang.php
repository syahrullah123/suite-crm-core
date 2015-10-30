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

 * Description:	Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
    'LBL_DELETE_USER_CONFIRM'           => 'Quan s\'elimina el registre de l\'usuari, també s\'eliminarà el registre de l\'empleat corresponent. Després s\'elimina l\'usuari, pot ser que necessiti qualsevol definició i informes relacionats amb l\'usuari de flux de treball que s\'actualitzarà. <br/><br/>Esborrar un registre d\'usuari no es pot desfer.',
	'LBL_DELETE_GROUP_CONFIRM'          => 'Segur que vols eliminar aquest grup d\'usuaris? Feu clic a D\'acord per eliminar el registre de l\'usuari. <br/> Després de fer clic a D\'acord, se li donarà la possibilitat de reassignar els registres assignats al grup d\'usuaris a un altre usuari.',
	'LBL_DELETE_PORTAL_CONFIRM'         => 'Està segur que vol eliminar aquest usuari del API del portal? Faci clic a Acceptar per a eliminar el registre d\'usuari.',


	'LNK_IMPORT_USERS'                 => 'Importar usuaris',
	'ERR_DELETE_RECORD'					=> 'Ha d\'especificar un número de registre a esborrar.',
	'ERR_EMAIL_INCORRECT'				=> 'Proporcioni una direcció de correu electrònic vàlida per a crear i enviar la contrasenya.',
	'ERR_EMAIL_NO_OPTS'					=> 'No s\'ha trobat una configuració òptima per el Correu Entrant.',
	'ERR_ENTER_CONFIRMATION_PASSWORD'	=> 'Si us plau, escriu un altre cop per confirmar, la nova clau de pas.',
	'ERR_ENTER_NEW_PASSWORD'			=> 'Si us plau, escriu la nova clau de pas.',
	'ERR_ENTER_OLD_PASSWORD'			=> 'Si us plau, escriu la seva clau de pas antiga.',
	'ERR_IE_FAILURE1'					=> '[Clic aquí per tornar]',
	'ERR_IE_FAILURE2'					=> 'Hi va haver un problema connectant la Compte de Correu.  Si us plau, comprovi la seva configuració i intenti-ho de nou.',
	'ERR_IE_MISSING_REQUIRED'			=> 'La configuració del Correu Entrant no conté tota la informació requerida.\n  Si us plau, comprovi la seva configuració i intentin-ho de nou.\n\nSi no ha configurat el Correu Entrant, si us plau, esborri els valors de tots els camps d\'aquesta secció.',
	'ERR_INVALID_PASSWORD'				=> 'Ha d\'indicar un usuari i clau de pas vàlids.',
	'ERR_NO_LOGIN_MOBILE'				=> 'El seu primer inici de sessió en aquesta aplicació ha de ser completat amb un navegador que no sigui mòbil, o en manera normal. Si us plau, torni a intentar-ho amb un navegador complet o faci clic en l\'enllaç per a la manera normal més a baix. Preguem disculpi les molèsties.',
	'ERR_LAST_ADMIN_1'					=> 'el nom d\'usuari "',
	'ERR_LAST_ADMIN_2'					=> '" és l\'últim usuari Administrador.  Almenys un usuari ha de ser Administrador. Revisi la configuració de l\'usuari Administrador.',
	'ERR_PASSWORD_CHANGE_FAILED_1'		=> 'Canvi de clau de pas fallit per ',
	'ERR_PASSWORD_CHANGE_FAILED_2'		=> ' fallit.  La nova clau de pas ha de ser establerta.',
	'ERR_PASSWORD_CHANGE_FAILED_3'		=> '.	La nova contrasenya no és vàlida.',
	'ERR_PASSWORD_INCORRECT_OLD_1'		=> '﻿La clau de pas antiga és incorrecta per a l\'usuari ',
	'ERR_PASSWORD_INCORRECT_OLD_2'		=> '. Introdueixi-la de nou.',
	'ERR_PASSWORD_MISMATCH'				=> 'Les claus de pas no coincideixen.',
	'ERR_PASSWORD_USERNAME_MISSMATCH'   => 'Ha d\'especificar un nom d\'usuari i correu electrònic vàlids.',
	'ERR_PASSWORD_LINK_EXPIRED'         => 'El seu enllaç ha caducat, si us plau, generi\'n un altre',
	'ERR_REENTER_PASSWORDS'				=> 'Si us plau introdueixi de nou la clau de pas.  Els valors de \\"Nova clau de pas\\" i \\"Confirmar clau de pas\\" no coincideixen.',
	'ERR_REPORT_LOOP'					=> 'El sistema ha detectat dependències cícliques en la jerarquia d\'informadors. Un usuari no pot informar-se a si mateix, ni pot cap dels seus responsables informar-li a ell.',
	'ERR_RULES_NOT_MET'                 => 'La contrasenya que ha introduït no compleix amb els requisits de contrasenyes. Si us plau, intenti-ho de nou.',
	'ERR_USER_INFO_NOT_FOUND'			=> 'Informació d\'usuari no trobada.',
	'ERR_USER_NAME_EXISTS_1'			=> 'El nom d\'usuario ',
	'ERR_USER_NAME_EXISTS_2'			=> ' ja existeix.  ﻿No es permeten noms d\'usuari duplicats. Canviï el nom d\'usuari.',
	'ERR_USER_IS_LOCKED_OUT'			=> 'Aquest usuari ha estat bloquejat a l\'aplicació de SuiteCRM i no pot iniciar sessió utilitzar la seva contrasenya actual.',

	'LBL_PASSWORD_SENT'                => 'Contrasenya actualitzada',
	'LBL_CANNOT_SEND_PASSWORD'         => 'No es pot enviar la contrasenya',
	'ERR_EMAIL_NOT_SENT_ADMIN'			=> 'El sistema no pot processar la seva petició. Si us plau, comprovi:',
	'ERR_SMTP_URL_SMTP_PORT'			=> 'URL del servidor SMPT i port',
	'ERR_SMTP_USERNAME_SMTP_PASSWORD'	=> 'Nom d\'usuari i contrasenya SMTP',
	'ERR_RECIPIENT_EMAIL'				=> 'Correu electrònic del destinatari',
	'ERR_SERVER_STATUS'					=> 'Estat del seu servidor',
	'ERR_SERVER_SMTP_EMPTY'				=> 'El sistema no pot enviar un correu electrònic a l\'usuari. Si us plau, comprovi la configuració del seu correu de sortida a la <a href="index.php?module=EmailMan&action=config">Configuració de correu</a>.',

	'LBL_ADDRESS_CITY'					=> 'Ciutat',
	'LBL_ADDRESS_COUNTRY'				=> 'País',
	'LBL_ADDRESS_INFORMATION'			=> 'Direccions',
	'LBL_ADDRESS_POSTALCODE'			=> 'Codi postal',
	'LBL_ADDRESS_STATE'					=> 'Estat/Província',
	'LBL_ADDRESS_STREET'				=> 'Carrer',
	'LBL_ADDRESS'						=> 'Direcció',
	'LBL_ADMIN_USER'					=> 'Usuari administrador del sistema',


	'LBL_ADMIN_DESC'					=> 'L\'usuari pot accedir a la pàgina d\'administració i a tots els registres, independentment de la seguretat d\'equips.',
	'LBL_REGULAR_DESC'					=> 'L\'usuari pot accedir a mòduls i registres en base a la seguretat d\'equips i rols.',

    'LBL_PHOTO' => 'Foto',

	'LBL_ADMIN'							=> 'Administrador',
	'LBL_ADVANCED'                     => 'Avançat',
    'LBL_ANY_ADDRESS'                  => 'Direcció Alternativa:',
	'LBL_ANY_EMAIL'						=> 'Qualsevol Correu',
	'LBL_ANY_PHONE'						=> 'Un altre telèfon',
	'LBL_BUTTON_CREATE'					=> 'Crear',
	'LBL_BUTTON_EDIT'					=> 'Editar',
	'LBL_CALENDAR_OPTIONS'				=> 'Opcions del Calendari',
	'LBL_CHANGE_PASSWORD'               => 'Cambiar Clau de pas',
	'LBL_CHANGE_SYSTEM_PASSWORD'		=> 'Si us plau, proporcioni una nova contrasenya.',
	'LBL_CHANGE_PASSWORD_TITLE'         => 'Clau de pas',
    'LBL_CHOOSE_A_KEY'					=> 'Establir una clau per evitar la publicació no autoritzada en el seu calendari',
    'LBL_NO_KEY'                        => 'La clau no està configurada. Si us plau, introdueixi la clau per habilitar la publicació.',
	'LBL_CHOOSE_WHICH'					=> 'Seleccionar les pestanyes a mostrar',
	'LBL_CITY'							=> 'Ciutat',

	'LBL_CLEAR_BUTTON_TITLE'			=> 'Netejar',


	'LBL_CONFIRM_PASSWORD'				=> 'Confirmar clau de pas',
	'LBL_CONFIRM_REGULAR_USER'			=> 'Ha canviat el tipus d\'usuari de l\'administrador del sistema usuari a usuari regular. Després de guardar aquest canvi, l\'usuari ja no tindrà privilegis d\'administrador del sistema.\n\nFeu clic a D\'acord per continuar.\nFeu clic a Cancel·la per tornar al registre.',
	'LBL_COUNTRY'						=> 'País',
	'LBL_CURRENCY_TEXT'					=> 'Estableix la moneda per defecte',
	'LBL_CURRENCY'						=> 'Moneda',
	'LBL_CURRENCY_EXAMPLE'				=> 'Exemple de Visualització de Moneda',
	'LBL_CURRENCY_SIG_DIGITS'			=> 'Dígits Significatius en Moneda',
	'LBL_CURRENCY_SIG_DIGITS_DESC'		=> 'Número de decimals a visualitzar per la moneda',
	'LBL_NUMBER_GROUPING_SEP'			=> 'Separador de milers',
	'LBL_NUMBER_GROUPING_SEP_TEXT'		=> 'Caràcter emprat per separar les unitats de millar',
	'LBL_DECIMAL_SEP'					=> 'Símbol decimal',
	'LBL_DECIMAL_SEP_TEXT'				=> 'Caràcter emprat com separador de decimals',
	'LBL_FDOW'					=> 'Primer dia de la setmana',
	'LBL_FDOW_TEXT'				=> 'Primer dia a mostrar en les vistes de setmana, mes i any.',
	'LBL_DATE_FORMAT_TEXT'				=> 'Estableix el format de text per a la data',
	'LBL_DATE_FORMAT'					=> 'Format de data',
	'LBL_DEFAULT_SUBPANEL_TITLE'		=> 'Usuaris',
	'LBL_DEPARTMENT'					=> 'Departament',
	'LBL_DESCRIPTION'					=> 'Descripció:',
	'LBL_DISPLAY_TABS'					=> 'Mostrar Pestanyes',
	'LBL_DOWNLOADS'                    => 'Baixades',
	'LBL_DST_INSTRUCTIONS'				=> '(+DST) ﻿indica que s\'està aplicant l\'Horari d\'Estiu',
	'LBL_EDIT_TABS'						=> 'Editar Pestanyes',
	'LBL_EDIT'							=> 'Editar',
	'LBL_USER_HASH'						=> 'Clau de pas',
	'LBL_AUTHENTICATE_ID'				=> 'Id d\'autenticació',
	'LBL_ACCOUNT_NAME'					=> 'Nom del Compte',
	'LBL_USER_PREFERENCES'				=> 'Preferències de l\'usuari',
	'LBL_EXT_AUTHENTICATE'				=> 'Autenticació externa',
	'LBL_EMAIL_OTHER'					=> 'Correu 2',
	'LBL_EMAIL'							=> 'Correu',
	'LBL_EMAIL_CHARSET'					=> 'Joc de Caràcters per el Correu Sortint',
	'LBL_EMAIL_EDITOR_OPTION'			=> 'Format de correu',
	'LBL_EMAIL_GMAIL_DEFAULTS'			=> 'Omplir prèviament valors per defecte per a Gmail',
	'LBL_EMAIL_LINK_TYPE'				=> 'Client de correu',

    'LBL_EMAIL_LINK_TYPE_HELP'			=> '<b>Client de correu electrònic de SuiteCRM:</b> Enviar correus utilitzant el client de correu de l\'aplicació de SuiteCRM.<br><b>Client de correu extern:</b> Enviar correu electrònic utilitzant un client de correu extern a l\'aplicació SuiteCRM, com Microsoft Outlook.',

    'LBL_EMAIL_NOT_SENT'                => 'El sistema és incapaç de processar la seva petició. Si us plau, contacti l\'administrador del sistema.',
    'LBL_EMAIL_PROVIDER'               => 'Proveïdor de correu electrònic',
	'LBL_EMAIL_SHOW_COUNTS'				=> 'Mostrar comptador de correus?',
	'LBL_EMAIL_SIGNATURE_ERROR1'		=> 'Aquesta firma requereix un nom.',
    'LBL_EMAIL_SMTP_SSL'				=> 'Habilitar SMTP sobre SSL',
    'LBL_EMAIL_TEMPLATE_MISSING'            => 'No s\'ha seleccionat cap plantilla de correu electrònic per al correu que conté la contrasenya que serà enviada a l\'usuari. Si us plau, seleccioni una plantilla de correu a la pàgina d\'administració de contrasenyes.',
    'LBL_EMPLOYEE_STATUS'				=> 'Estat de l\'empleat',
    'LBL_EMPLOYEE_INFORMATION'         => 'Informació de l\'empleat',
	'LBL_ERROR'							=> 'Error',
	'LBL_EXPORT_CHARSET'				=> 'Joc de Caràcters d\'Importació/Exportació',
	'LBL_EXPORT_CHARSET_DESC'			=> 'Elegeixi el joc de caràcters utilitzat en la seva configuració regional.  Aquesta propietat s\'utilitzarà per la importació de dades, correus de sortida, exportació .csv, generació de PDF, i generació de vCard.',
	'LBL_EXPORT_DELIMITER'				=> 'Delimitador per Exportació',
	'LBL_EXPORT_DELIMITER_DESC'			=> 'Especifiqui el/els caràcter(es) per delimitar les dades exportades.',
	'LBL_FAX_PHONE'						=> 'Fax',
	'LBL_FAX'							=> 'Fax',
	'LBL_FIRST_NAME'					=> 'Nom',
    'LBL_GENERATE_PASSWORD_BUTTON_KEY'  => 'G',
    'LBL_SYSTEM_GENERATED_PASSWORD'     =>'Contrasenya generada pel sistema',
    'LBL_GENERATE_PASSWORD_BUTTON_LABEL'   => 'Restablir contrasenya',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE'   => 'Restablir contrasenya',
    'LBL_GENERATE_PASSWORD'             => 'Restablir contrasenya',
	'LBL_GROUP_DESC'					=> 'Utilitzat per a assignar elements a un grup (exemple: per a correu entrant). Aquest tipus d\'usuari no pot iniciar la sessió a través de la interfície web de SuiteCRM.',
	'LBL_GROUP_USER_STATUS'				=> 'Usuari de Grup',
	'LBL_GROUP_USER'					=> 'Usuari de Grup',
	'LBL_HIDE_TABS'						=> 'Amagar Pestanyes',
	'LBL_HOME_PHONE'					=> 'Telèfon de casa',
	'LBL_INBOUND_TITLE'					=> 'Informació de Compte',
	'LBL_IS_ADMIN'						=> 'Es Administrador',
	'LBL_LANGUAGE'						=> 'Llenguatge',
	'LBL_LAST_NAME'						=> 'Cognoms',
    'LBL_LAST_NAME_SLASH_NAME'			=> 'Cognom/Nom',
    'LBL_LAYOUT_OPTIONS'                => 'Opcions de Diseny',
	'LBL_LDAP'							=> 'LDAP',
	'LBL_LDAP_AUTHENTICATION'			=> 'Autenticació LDAP',
	'LBL_LIST_ACCEPT_STATUS'			=> 'Estat d\'acceptació',
	'LBL_LIST_ADMIN'					=> 'Administrador',
	'LBL_LIST_DEPARTMENT'				=> 'Departament',
	'LBL_LIST_EMAIL'					=> 'Correu',
	'LBL_LIST_FORM_TITLE'				=> 'Llista d\'Usuaris',
	'LBL_LIST_GROUP'					=> 'Grup',
	'LBL_LIST_LAST_NAME'				=> 'Cognoms',
	'LBL_LIST_MEMBERSHIP'				=> 'Membres',
	'LBL_LIST_NAME'						=> 'Nom',
	'LBL_LIST_PRIMARY_PHONE'			=> 'Telèfon',
	'LBL_LIST_PASSWORD'					=> 'Clau de pas',
	'LBL_LIST_STATUS'					=> 'Estat',
	'LBL_LIST_TITLE'					=> 'Títol',
	'LBL_LIST_USER_NAME'				=> 'Identificador',
	'LBL_LOCALE_DEFAULT_NAME_FORMAT'	=> 'Format de Visualització de Nom',
	'LBL_LOCALE_DESC_FIRST'				=> '[Nom]',
	'LBL_LOCALE_DESC_LAST'				=> '[Cognom]',
	'LBL_LOCALE_DESC_SALUTATION'		=> '[Títol]',
	'LBL_LOCALE_DESC_TITLE'				=> '[Carrèc]',
	'LBL_LOCALE_EXAMPLE_NAME_FORMAT'	=> 'Exemple',
	'LBL_LOCALE_NAME_FORMAT_DESC'		=> 'Estableixi com desitja que es mostrin els noms.',
	'LBL_LOCALE_NAME_FORMAT_DESC_2'	=> '<i>"s" Títol<br>"f" Nom<br>"l" Cognom</i>',
    'LBL_SAVED_SEARCH'                  => 'Recerques i Disenys Guardats',

	// LOGIN PAGE STRINGS
	'LBL_LOGIN_BUTTON_KEY'				=> 'L',
	'LBL_LOGIN_BUTTON_LABEL'			=> 'Login',
	'LBL_LOGIN_BUTTON_TITLE'			=> 'Iniciar sessió',
	'LBL_LOGIN_WELCOME_TO'				=> 'Benvingut a',
	'LBL_LOGIN_OPTIONS'					=> 'Opcions',
    'LBL_LOGIN_FORGOT_PASSWORD'         => 'Ha olblidat la seva clau de pas?',
    'LBL_LOGIN_SUBMIT'      		    => 'Enviar',
    'LBL_LOGIN_ATTEMPTS_OVERRUN'        => 'Massa intents fallits d\'inici de sessió.',
    'LBL_LOGIN_LOGIN_TIME_ALLOWED'      => 'Pot intentar iniciar la sessió de nou a',
    'LBL_LOGIN_LOGIN_TIME_DAYS'     	=> 'dies.',
    'LBL_LOGIN_LOGIN_TIME_HOURS'    	=> 'h.',
    'LBL_LOGIN_LOGIN_TIME_MINUTES'      => 'min.',
   	'LBL_LOGIN_LOGIN_TIME_SECONDS'      => 'seg.',
    'LBL_LOGIN_ADMIN_CALL'              => 'Si us plau, posis en contacte amb l\'administrador del sistema.',
	// END LOGIN PAGE STRINGS
    'LBL_LOGGED_OUT_1' => 'La seva sessió s\'ha tancat. Per autenticar-se de nou si us plau faci clic',
    'LBL_LOGGED_OUT_2' => 'aquí',
    'LBL_LOGGED_OUT_3' => '.',
	'LBL_MAIL_FROMADDRESS'				=> 'Direcció remitent',
	'LBL_MAIL_FROMNAME'					=> 'Nom remitent',
	'LBL_MAIL_OPTIONS_TITLE'			=> 'Opcions de Correu',
	'LBL_MAIL_SENDTYPE'					=> 'Agent de Transferència de Correu (MTA)',
	'LBL_MAIL_SMTPAUTH_REQ'				=> 'Usar autentificació SMTP?',
	'LBL_MAIL_SMTPPORT'					=> 'Port SMTP',
	'LBL_MAILMERGE_TEXT'				=> 'Habilitar la Combinación de Correspondència (ha d\'estar habilitada també per l\'administrador del sistema en la Configuració)',
	'LBL_MAILMERGE'						=> 'Combinar Correspondència',
	'LBL_MAX_TAB'						=> 'Número de pestanyes',
    'LBL_MAX_TAB_DESCRIPTION'           => 'Número de pestanyes mostrades en la part superior de la pàgina abans de apareixer el menú flotant',
    'LBL_MAX_SUBTAB'                    => 'Número de subpestanyes',
    'LBL_MAX_SUBTAB_DESCRIPTION'        => 'Número de subpestanyes mostrades per cada pestanya abans de apareixer el menú flotant',
	'LBL_MESSENGER_ID'					=> 'Compte de Missatgeria Instantània',
	'LBL_MESSENGER_TYPE'				=> 'Tipus de Missatgeria Instantània',
	'LBL_MOBILE_PHONE'					=> 'Mòbil',
	'LBL_MODIFIED_BY'                  =>'Modificat Per',
	'LBL_CREATED_BY_NAME' => 'Creat Per', //bug 48978
    'LBL_MODIFIED_BY_ID'               =>'Modificat Per ID',
    'LBL_MODULE_NAME'					=> 'Usuaris',
	'LBL_MODULE_TITLE'					=> 'Usuaris: Inici',
    'LBL_NAME'							=> 'Nom y Cognoms',
    'LBL_SIGNATURE_NAME'                                        =>  'Nom',
    'LBL_NAVIGATION_PARADIGM'           => 'Navegació',
    'LBL_NAVIGATION_PARADIGM_DESCRIPTION'   => 'Veure mòduls en pestanyes agrupades per categories, o veure mòduls en diferentes pestanyes per cada mòdul',
    'LBL_USE_GROUP_TABS'                => 'Módul de menús filtrats',
	'LBL_NEW_FORM_TITLE'				=> 'Nou Usuari',
	'LBL_NEW_PASSWORD'					=> 'Nova clau de pas',
	'LBL_NEW_PASSWORD1'					=> 'Clau de pas',
	'LBL_NEW_PASSWORD2'					=> 'Confirmar clau de pas',
	'LBL_NEW_USER_PASSWORD_1'			=> 'La contrasenya ha estat modificada amb èxit.',
	'LBL_NEW_USER_PASSWORD_2'			=> 'S\'ha enviat un correu electrònic a l\'usuari amb una contrasenya generada pel sistema.',
	'LBL_NEW_USER_PASSWORD_3'			=> 'La contrasenya ha estat creada amb èxit.',
	'LBL_NEW_USER_BUTTON_KEY'			=> 'N',
	'LBL_NEW_USER_BUTTON_LABEL'			=> 'Nou Usuari',
	'LBL_NEW_USER_BUTTON_TITLE'			=> 'Nou usuari',
	'LBL_NORMAL_LOGIN'					=> 'Canviar a Vista Normal',
	'LBL_NOTES'							=> 'Notes',
	'LBL_OFFICE_PHONE'					=> 'Telèfon de la oficina',
	'LBL_OLD_PASSWORD'					=> 'Clau de pas antiga',
	'LBL_OTHER_EMAIL'					=> 'Correu alternatiu',
	'LBL_OTHER_PHONE'					=> 'Un altre telèfon',
	'LBL_OTHER'							=> 'Un altre',
	'LBL_PASSWORD'						=> 'Clau de pas',
    'LBL_PASSWORD_GENERATED'            => 'Nova contrasenya generada',
    'LBL_PASSWORD_EXPIRATION_LOGIN'     => 'La seva contrasenya ha caducat. Si us plau, proporcioni una nova contrasenya.',
    'LBL_PASSWORD_EXPIRATION_GENERATED' => 'La seva contrasenya és generada pel sistema',
    'LBL_PASSWORD_EXPIRATION_TIME'      => 'La seva contrasenya ha caducat. Si us plau, proporcioni una nova contrasenya.',

	'LBL_PSW_MODIFIED'                  => 'Contrasenya canviada per última vegada',
    'LBL_PHONE'							=> 'Qualsevol telèfon',
	'LBL_PICK_TZ_WELCOME'				=> 'Benvingut a Sugar.',
	'LBL_PICK_TZ_DESCRIPTION'           => 'Abans de continuar, si us plau, confirmi la seva zona horària. Seleccioni la zona horària apropiada de la següent llista, i faci clic a Desar per continuar. La zona horària pot ser canviada en qualsevol moment en "El meu Compte".',
	'LBL_PORTAL_ONLY_DESC'				=> 'Utilitzar per el API del Portal. Aquest tipus no pot iniciar sessió a través de la interfície web de SuiteCRM.',
	'LBL_PORTAL_ONLY_USER'					=> 'Usuari del API del portal',
	'LBL_POSTAL_CODE'					=> 'Còdig postal',
	'LBL_PRIMARY_ADDRESS'				=> 'Direcció principal',
	'LBL_PROMPT_TIMEZONE_TEXT'			=> 'Marcar per sol·licitar l\'usuari que confirmi la Zona Horària en l\'inici de sessió.',
	'LBL_PROMPT_TIMEZONE'				=> 'Confirmació de Zona Horària',
	'LBL_PROVIDE_USERNAME_AND_EMAIL' 	=> 'Proporcioni tant un nom d\'usuari com un correu electrònic.',
	'LBL_PUBLISH_KEY'					=> 'Clau de Publicació',

	'LBL_RECAPTCHA_NEW_CAPTCHA'         => 'Obté un altre CAPTCHA',
	'LBL_RECAPTCHA_SOUND'				=> 'Cambiar a só',
	'LBL_RECAPTCHA_IMAGE'				=> 'Canviar a imàtge',
	'LBL_RECAPTCHA_INSTRUCTION'         => 'Introdueixi les dues paraules següents',
	'LBL_RECAPTCHA_INSTRUCTION_OPPOSITE'=> 'Introdueixi dues paraules a la dreta',
	'LBL_RECAPTCHA_FILL_FIELD'			=> 'Introdueixi el text que apareix a la imatge.',
	'LBL_RECAPTCHA_INVALID_PRIVATE_KEY'	=> 'Clau privada de Recaptcha no vàlida',
	'LBL_RECAPTCHA_INVALID_REQUEST_COOKIE'=> 'El paràmetre del desafiament de l\'script de Recaptcha no és correcte.',
	'LBL_RECAPTCHA_UNKNOWN'				=> 'Error desconegut de Recaptcha',

	'LBL_RECEIVE_NOTIFICATIONS_TEXT'	=> 'Rebre un correu de notificació quan se li ha assignat un registre.',
	'LBL_RECEIVE_NOTIFICATIONS'			=> 'Notificació d\'assignació',
	'LBL_REGISTER'                      => 'Es un usuari nou? Si us plau, registri\'s',
	'LBL_REGULAR_USER'                  => 'Usuari regular',
	'LBL_REMINDER_TEXT'					=> 'Establir un valor predeterminat per als recordatoris de les trucades i reunions. Notificacions emergents apareixen per tots els convidats utilitzant SuiteCRM. Recordatoris de correu electrònic s\'envien a tots els convidats.',
	'LBL_REMINDER'						=> 'Recordatoris',
	'LBL_REMINDER_POPUP' => 'Finestra emergent',
	'LBL_REMINDER_EMAIL' => 'Correu',
    'LBL_REMINDER_EMAIL_ALL_INVITEES'   => 'Enviar correu electrònic a tots els assistents',
	'LBL_REMOVED_TABS'					=> 'Administrar Pestanyes Eliminades',
	'LBL_REPORTS_TO_NAME'				=> 'Informa a',
	'LBL_REPORTS_TO'					=> 'Informa a',
    'LBL_REPORTS_TO_ID'                => 'Informa a ID:',
	'LBL_REQUEST_SUBMIT'				=> 'La seva petició ha estat enviada.',
	'LBL_RESET_TO_DEFAULT'				=> 'Reiniciar a preferencies per defecte',
	'LBL_RESET_PREFERENCES'				=> 'Preferències d\'Usuari',
    'LBL_RESET_PREFERENCES_WARNING'     => 'Està segur de que vol reiniciar totes les seves preferencies? Advertència: La seva sessío actual serà tancada.',
    'LBL_RESET_PREFERENCES_WARNING_USER' => 'Està segur que vol restablir totes les preferències d\'aquest usuari?',
    'LBL_RESET_HOMEPAGE'                => 'Pàgina d\'Inici',
    'LBL_RESET_DASHBOARD'               => 'Gràfic',
    'LBL_RESET_HOMEPAGE_WARNING'        => 'Està segur de que vol reiniciar la seva Pàgina d\'Inici?',
    'LBL_RESET_HOMEPAGE_WARNING_USER'   => 'Està segur que vol restablir la pàgina d\'inici d\'aquest usuari?',
	'LBL_SALUTATION'                    => 'Salutació',
    'LBL_ROLES_SUBPANEL_TITLE'			=> 'Rols',
	'LBL_SEARCH_FORM_TITLE'				=> 'Cerca d\'usuaris',
	'LBL_SEARCH_URL'					=> 'Direcció de cerca',
	'LBL_SELECT_CHECKED_BUTTON_LABEL'	=> 'Seleccionar Usuaris Marcats',
	'LBL_SELECT_CHECKED_BUTTON_TITLE'	=> 'Seleccionar Usuaris Marcats',
	'LBL_SETTINGS_URL_DESC'				=> 'Use this URL when establishing login settings for the SuiteCRM Plug-in for Microsoft&reg; Outlook&reg; and the SuiteCRM Plug-in for Microsoft&reg; Word&reg;.',
	'LBL_SETTINGS_URL'					=> 'URL',
	'LBL_SIGNATURE'						=> 'Firma',
	'LBL_SIGNATURE_HTML'				=> 'Firma HTML',
	'LBL_SIGNATURE_DEFAULT'				=> 'Usar firma?',
	'LBL_SIGNATURE_PREPEND'				=> 'Firmar sobre la resposta?',
	'LBL_SIGNATURES'					=> 'Firmes',
	'LBL_STATE'							=> 'Estat/Província',
	'LBL_STATUS'						=> 'Estat',
    'LBL_SUBPANEL_LINKS'                => 'Enllaços de Subpanell',
    'LBL_SUBPANEL_LINKS_DESCRIPTION'    => 'En les Vistes de Detall, mostra una fila amb enllaços a dreceres del Subpanell.',
    'LBL_SUBPANEL_TABS'                 => 'Pestanyes del Subpanell',
    'LBL_SUBPANEL_TABS_DESCRIPTION'     => 'En les Vistes de Detall, agrupa els Subpanells en pestanyes i mostra només una pestanya a la vegada.',
    'LBL_SUGAR_LOGIN'					=> 'És usuari de SuiteCRM',
    'LBL_SUPPORTED_THEME_ONLY'          => 'Només afecta a temes que suporten aquesta opció.',
    'LBL_SWAP_LAST_VIEWED_DESCRIPTION'  => 'Mostra la barra de Recents en el lateral, si està marcat.  Per defecte la barra es mostrada en la part superior.',
    'LBL_SWAP_SHORTCUT_DESCRIPTION'     => 'Mostra la barra de Dreceres en la part superior, si està marcat.  Per defecte la barra es mostrada en el lateral.',
    'LBL_SWAP_LAST_VIEWED_POSITION'     => 'Barra de Recents en un lateral',
    'LBL_SWAP_SHORTCUT_POSITION'        => 'Dreceres en la part superior',
	'LBL_TAB_TITLE_EMAIL'				=> 'Opcions de correu',
	'LBL_TAB_TITLE_USER'				=> 'Opcions d\'usuari',
	'LBL_THEME'							=> 'Tema',
	'LBL_THEME_COLOR'					=> 'Color',
	'LBL_THEME_FONT'					=> 'Font',
	'LBL_TIME_FORMAT_TEXT'				=> 'Estableix el format de text per a l\'hora',
	'LBL_TIME_FORMAT'					=> 'Format d\'hora',
	'LBL_TIMEZONE_DST_TEXT'				=> 'Aplicar Horari d\'Estiu',
	'LBL_TIMEZONE_DST'					=> 'Horari d\'Estiu',
	'LBL_TIMEZONE_TEXT'					=> 'Estableix la zona horària',
	'LBL_TIMEZONE'						=> 'Zona horària',
	'LBL_TITLE'							=> 'Títol',
	'LBL_USE_REAL_NAMES'				=> 'Mostrar Nom Complert',
	'LBL_USE_REAL_NAMES_DESC'			=> 'Mostra el nom complert d\'un usuario enlloc del seu identificador',
	'LBL_USER_INFORMATION'				=> 'Informació de l\'usuari',
	'LBL_USER_LOCALE'					=> 'Configuració Regional',
	'LBL_USER_NAME'						=> 'Identificador',
	'LBL_USER_SETTINGS'					=> 'Configuració del usuari',
	'LBL_USER_TYPE'		   			    => 'Tipus d\'usuari',
	'LBL_USER_ACCESS'                  => 'Accés',
	'LBL_USER'							=> 'Usuari',
	'LBL_WORK_PHONE'					=> 'Telèfon de la feina',
	'LBL_YOUR_PUBLISH_URL'				=> 'Direcció de publicació',
    'LBL_ICAL_PUB_URL'                  => 'enllaç d\'integració iCal',
    'LBL_ICAL_PUB_URL_HELP'             => 'Si us plau, utilitzi aquest enllaç per a subscriure\'s al calendari SuiteCRM a iCal.',
	'LBL_YOUR_QUERY_URL'				=> 'Direcció de consulta',
	'LNK_NEW_USER'						=> 'Crear Nou Usuari',
	'LNK_NEW_PORTAL_USER'				=> 'Crear usuari de l\'API del portal',
	'LNK_NEW_GROUP_USER'				=> 'Crear grup d\'usuaris',
	'LNK_USER_LIST'						=> 'Usuaris',
	'LNK_REASSIGN_RECORDS'				=> 'Reasignar Registres',
    'LBL_PROSPECT_LIST'                 => 'Públic Objectiu',
    'LBL_EMAILS'                        => 'Correu',
    'LBL_PROCESSING'                    => 'En procés',
    'LBL_UPDATE_FINISH'                 => 'Actualització completa',
    'LBL_AFFECTED'                      => 'afectats',

    'LBL_USER_NAME_FOR_ROLE'            =>'Usuaris/Equips/Rols',
    'LBL_SESSION_EXPIRED'               => 'Ha estat desconectat perque la seva sessió ha expirat.',

// INBOUND EMAIL STRINGS
	'LBL_APPLY_OPTIMUMS'				=> 'Aplicar Valors Òptims',
	'LBL_ASSIGN_TO_USER'				=> 'Assignar a Usuari',
	'LBL_BASIC'							=> 'Configuració entrant',
	'LBL_CERT_DESC'						=> 'Forçar validació del Certificat de Seguretat del servidor de correu - no usar si és de firma pròpia.',
	'LBL_CERT'							=> 'Validar Certificat',
	'LBL_FIND_OPTIMUM_KEY'				=> 'f',
	'LBL_FIND_OPTIMUM_MSG'				=> '<br>Buscant variables òptimes de connexió.',
	'LBL_FIND_OPTIMUM_TITLE'			=> 'Cercar Configuració Òptima',
	'LBL_FORCE'							=> 'Forçar Negatiu',
	'LBL_FORCE_DESC'					=> 'Alguns servidors IMAP/POP3 requereixen opcions especials. Marqui per forçar una opció negativa en connectar (ej., /notls)',
	'LBL_FOUND_OPTIMUM_MSG'				=> '<br>Opcions òptimes trobades.	Pressioni el següent botó per aplicar-les a la seva safata de correu.',
	'LBL_EMAIL_INBOUND_TITLE'			=> 'Opcions del Correu Entrant',
	'LBL_EMAIL_OUTBOUND_TITLE'			=> 'Opcions del Correu Sortint',
	'LBL_LOGIN'							=> 'Nom d\'Usuari',
	'LBL_MAILBOX_DEFAULT'				=> 'INBOX',
	'LBL_MAILBOX_SSL_DESC'				=> 'Usar SSL en la connexió. Si no funciona, comprovi que la seva instal·lació de PHP inclou "--with-imap-ssl" en la configuració.',
	'LBL_MAILBOX'						=> 'Carpeta Monitoritzada',
	'LBL_MAILBOX_TYPE'					=> 'Accions Possibles',
	'LBL_MARK_READ_NO'					=> 'Correu marcat com a borrador després d\'importació',
	'LBL_MARK_READ_YES'					=> 'Correu deixat al servidor després d\'importació',
	'LBL_MARK_READ_DESC'				=> 'Importar i marcar missatges com llegits al servidor de correu; no esborrar.',
	'LBL_MARK_READ'						=> 'Deixar missatges en el servidor',
	'LBL_ONLY_SINCE_NO'					=> 'No. Comprovar contra tots els correus al servidor de correu.',
	'LBL_ONLY_SINCE_YES'				=> 'Si.',
	'LBL_ONLY_SINCE_DESC'				=> 'PHP no pot distingir entre missatges Nous i No Llegits quan s\'usa POP3.	﻿Marqui aquesta opció per a cercar missatges des de l\'última vegada que la safata va ser comprovada.	Això millorarà significativament el rendiment si el seu servidor de correu no suporta IMAP.',
	'LBL_ONLY_SINCE'					=> 'Importar només des de l\'última comprovació',
	'LBL_PORT'							=> 'Port del servidor de correu',
	'LBL_SERVER_OPTIONS'				=> 'Configuració Avançada',
	'LBL_SERVER_TYPE'					=> 'Protocol del servidor de correu',
	'LBL_SERVER_URL'					=> 'Direcció del servidor de correu electrònic',
	'LBL_SSL'							=> 'Usar SSL',
	'LBL_SSL_DESC'						=> 'Usar Secure Socket Layer per connectar-se al seu servidor de correu.',
	'LBL_TEST_BUTTON_KEY'				=> 't',
	'LBL_TEST_BUTTON_TITLE'				=> 'Provar',
	'LBL_TEST_SETTINGS'					=> 'Comprovar Configuració',
	'LBL_TEST_SUCCESSFUL'				=> 'Connexió completada amb èxit.',
	'LBL_TLS_DESC'						=> 'Usar Transport Layer Security per connectar-se al servidor de correu - sol usi això si el seu servidor de correu suporta aquest protocol.',
	'LBL_TLS'							=> 'Usar TLS',
	'LBL_TOGGLE_ADV'					=> 'Mostrar Avançat',
    'LBL_OWN_OPPS'                      => 'No hi han oportunitats',
	'LBL_EXTERNAL_AUTH_ONLY'			=> 'Autenticar aquest usuari només mitjançant',
	'LBL_ONLY'							=> 'Només',
    'LBL_OWN_OPPS_DESC'                 => 'Marqui aquesta opció si a aquest usuari no se li assignaran oportunitats. Pot ignorar aquest indicador per a usuaris que no són gerents i no estan involucrats en activitats de vendes. Usat pel mòdul d\'Objectius.',
// END INBOUND EMAIL STRINGS
	'LBL_LDAP_ERROR' => 'Error de LDAP: Si us plau, contacti amb un administrador',
	'LBL_LDAP_EXTENSION_ERROR' => 'Error de LDAP: Les extensions no s\'han carregat',

// PROJECT RESOURCES STRINGS
	'LBL_USER_HOLIDAY_SUBPANEL_TITLE' => 'Festius del Usuari',
	'LBL_RESOURCE_NAME' => 'Nom',
	'LBL_RESOURCE_TYPE' => 'Tipus',

	'LBL_PDF_SETTINGS'  =>  'Configuració PDF',
	'LBL_PDF_PAGE_FORMAT'  =>  'Format de la pàgina',
	'LBL_PDF_PAGE_FORMAT_TEXT'  =>  'El format utilitzat per les pàgines',
	'LBL_PDF_PAGE_ORIENTATION'  =>  'Orientació de la pàgina',
	'LBL_PDF_PAGE_ORIENTATION_TEXT'  =>  '',
	'LBL_PDF_PAGE_ORIENTATION_P'  =>  'Retrat',
	'LBL_PDF_PAGE_ORIENTATION_L'  =>  'Paisatge',
	'LBL_PDF_MARGIN_HEADER'  =>  'Marge de la capçalera',
	'LBL_PDF_MARGIN_HEADER_TEXT'  =>  '',
	'LBL_PDF_MARGIN_FOOTER'  =>  'Marge del peu',
	'LBL_PDF_MARGIN_FOOTER_TEXT'  =>  '',
	'LBL_PDF_MARGIN_TOP'  =>  'Marge superior',
	'LBL_PDF_MARGIN_TOP_TEXT'  =>  '',
	'LBL_PDF_MARGIN_BOTTOM'  =>  'Marge inferior',
	'LBL_PDF_MARGIN_BOTTOM_TEXT'  =>  '',
	'LBL_PDF_MARGIN_LEFT'  =>  'Marge esquerra',
	'LBL_PDF_MARGIN_LEFT_TEXT'  =>  '',
	'LBL_PDF_MARGIN_RIGHT'  =>  'Marge dret',
	'LBL_PDF_MARGIN_RIGHT_TEXT'  =>  '',
	'LBL_PDF_FONT_NAME_MAIN'  =>  'Font per a la capçalera i el cos',
	'LBL_PDF_FONT_NAME_MAIN_TEXT'  =>  'La font seleccionada serà aplicada al text de la capçalera i el cos del document PDF',
	'LBL_PDF_FONT_SIZE_MAIN'  =>  'Mida de la font principal',
	'LBL_PDF_FONT_SIZE_MAIN_TEXT'  =>  '',
	'LBL_PDF_FONT_NAME_DATA'  =>  'Font pel peu',
	'LBL_PDF_FONT_NAME_DATA_TEXT'  =>  'La font seleccionada serà aplicada al text del peu del document PDF',
	'LBL_PDF_FONT_SIZE_DATA'  =>  'Mida de la font de dades',
	'LBL_PDF_FONT_SIZE_DATA_TEXT'  =>  '',
	'LBL_LAST_ADMIN_NOTICE' => 'S\'ha seleccionat a vostè mateix. No pot canviar el seu propi tipus d\'usuari o estat.',
	'LBL_MAIL_SMTPUSER'	=> 'Usuari SMTP',
	'LBL_MAIL_SMTPPASS'	=> 'Clau de pas SMTP',
	'LBL_MAIL_SMTPSERVER' => 'Servidor SMTP',
	'LBL_SMTP_SERVER_HELP' => 'Aquest servidor de correu SMTP pot utilitzar-se per a correu sortint. Proporcioni el nom d\'usuari i la contrasenya de la seva compta de correu per a utilitzar el servidor de correu.',
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'L\'administrador encara no ha configurat la compta sortint per defecte. No és possible enviar un correu de prova.',
    'LBL_MAIL_SMTPAUTH_REQ'				=> 'Usar autentificació SMTP?',
	'LBL_MAIL_SMTPPASS'					=> 'Clau de pas SMTP',
	'LBL_MAIL_SMTPPORT'					=> 'Port SMTP',
	'LBL_MAIL_SMTPSERVER'				=> 'Servidor SMTP',
	'LBL_MAIL_SMTPUSER'					=> 'Usuari SMTP',
	'LBL_MAIL_SMTPTYPE'                => 'Tipus de servidor SMTP:',
	'LBL_MAIL_SMTP_SETTINGS'           => 'Especificació del servidor SMTP',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'Triï el seu proveïdor de correu electrònic:',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Contrasenya de Yahoo! Mail:',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'Id de Yahoo! Mail:',
	'LBL_GMAIL_SMTPPASS'					=> 'Contrasenya de Gmail:',
	'LBL_GMAIL_SMTPUSER'					=> 'Direcció de correu electrònic de Gmail:',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Contrasenya de Exchange:',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Nom d\'usuari d\'Exchange:',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Port del servidor d\'Exchange:',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Servidor d\'Exchange:',
        'LBL_OK'   =>'Acceptar',
        'LBL_CANCEL'    => 'Cancel·lar',
        'LBL_DELETE_USER' => 'Eliminar usuari',
	// Wizard
	'LBL_WIZARD_TITLE' => 'Assistent d\'usuari',
    'LBL_WIZARD_WELCOME_TAB' => 'Benvingut',
    'LBL_WIZARD_WELCOME_TITLE' => 'Benvingut a SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Faci clic a <b>Següent</b> per a configurar algunes opcions bàsiques de SuiteCRM.',
    'LBL_WIZARD_WELCOME_NOSMTP' => 'Faci clic a <b>Següent</b> per a configurar algunes opcions bàsiques de SuiteCRM.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Següent',
    'LBL_WIZARD_BACK_BUTTON' => 'Enrera',
    'LBL_WIZARD_SKIP_BUTTON' => 'Saltar',
    'LBL_WIZARD_FINISH_BUTTON' => 'Fi',
    'LBL_WIZARD_FINISH_TAB' => 'Fi',
    'LBL_WIZARD_FINISH_TITLE' => 'Ja està llest per a utilitzar SuiteCRM!',

    'LBL_WIZARD_FINISH' => 'Click <b>Finish</b> below to save your settings and to begin using SuiteCRM. For more information on using SuiteCRM:<br /><br />
<table cellpadding=0 cellspacing=0>
<tr><td><!--not_in_theme!-->Visit www.suitecrm.com <img src=include/images/suitecrm_login.png style="margin-right: 5px;"></td><td><a href="http://www.suitecrm.com/" target="_blank"><b>SuiteCRM</b></a></td></tr>
</table>',

    'LBL_WIZARD_FINISH1' => 'Que li agradaria fer a continuació?',
    'LBL_WIZARD_FINISH2' => 'Començar a utilitzar SuiteCRM',
    'LBL_WIZARD_FINISH3' => 'Importar dades',
    'LBL_WIZARD_FINISH4' => 'Importar dades des de fonts externes a l\'aplicació.',
    'LBL_WIZARD_FINISH5' => 'Crear usuaris',
    'LBL_WIZARD_FINISH6' => 'Crear noves comptes d\'usuari per que la gent pugui accedir  a l\'aplicació.',
    'LBL_WIZARD_FINISH7' => 'Veure i administrar la configuració de l\'aplicació',
    'LBL_WIZARD_FINISH8' => 'Administrar la configuració avançada, inclosa la configuració de l\'aplicació per defecte.',
    'LBL_WIZARD_FINISH9' => 'Configurar l\'aplicació',
    'LBL_WIZARD_FINISH10' => 'Utilitzar l\'estudi per a crear i administrar els camps i les vistes de l\'aplicació.',
    'LBL_WIZARD_FINISH11' => 'Visitar SuiteCRM',
    'LBL_WIZARD_FINISH12' => 'Trobar materials de formació i classes que l\'ajudaran a començar com a administrador del sistema o usuari final de l\'aplicació.',
    'LBL_WIZARD_FINISH14' => 'Documentació',
    'LBL_WIZARD_FINISH15' => 'Guies de producte i notes de la versió',
    'LBL_WIZARD_FINISH16' => 'Base de coneixements',
    'LBL_WIZARD_FINISH17' => 'Consells per a SuiteCRM',
    'LBL_WIZARD_FINISH18' => 'Fòrums',
    'LBL_WIZARD_FINISH19' => 'Fòrums dedicats a la comunitat de SuiteCRM per a debatre temes d\'interès entre sí i amb els desenvolupadors de SuiteCRM',
    'LBL_WIZARD_FINISH2DESC' => 'Vagi directament a la pàgina principal de l\'aplicació.',
    'LBL_WIZARD_PERSONALINFO' => 'La seva informació',
    'LBL_WIZARD_LOCALE' => 'La seva configuració regional',
    'LBL_WIZARD_SMTP' => 'La seva compta de correu electrònic',
    'LBL_WIZARD_PERSONALINFO_DESC' => 'Proporcioni informació sobre si mateix. La informació que proporciona sobre si mateix serà visible per altres usuaris de SuiteCRM. <br /> Els camps marcats amb <span class = "required">*</ span> són requerits.',
    'LBL_WIZARD_LOCALE_DESC' => 'Especifiqui la seva zona horària i com desitja que apareixi\'n a SuiteCRM les dates, monedes i noms.',
    'LBL_WIZARD_SMTP_DESC' => 'Proporcioni el nom d\'usuari i la contrasenya de la seva compta de correu per al servidr de correu sortint per defecte.',
	'LBL_EAPM_SUBPANEL_TITLE' => 'Comptes externes',

	'LBL_EDITLAYOUT' => 'Editar Diseny' /*for 508 compliance fix*/,
	'LBL_HELP' => 'Ajuda' /*for 508 compliance fix*/,
	'LBL_CHECKMARK' => 'Marca de verificació' /*for 508 compliance fix*/,
	'LBL_THEMEPREVIEW' => 'Vista Preliminar' /*for 508 compliance fix*/,

    'LBL_OAUTH_TOKENS' => 'Tokens d\'OAuth',
    'LBL_OAUTH_TOKENS_SUBPANEL_TITLE' => 'Token d\'accés OAuth',

    //For export labels
    'LBL_MODIFIED_USER_ID' => 'Modificat per ID',
    'LBL_PHONE_HOME' => 'Telèfon de casa',
    'LBL_PHONE_MOBILE' => 'Mòbil',
    'LBL_PHONE_WORK' => 'Telèfon de la feina',
    'LBL_PHONE_OTHER' => 'Un altre telèfon',
    'LBL_PHONE_FAX' => 'Fax',
    'LBL_PORTAL_ONLY' => 'Usuari Només de Portal',
    'LBL_SHOW_ON_EMPLOYEES' => 'Mostra el registre d\'empleats',
    'LBL_IS_GROUP' => 'Es Grup',
    'LBL_EXPORT_CREATED_BY' => 'Creat per Id',

    'LBL_DATE_MODIFIED' => 'Última Modificació',
    'LBL_DATE_ENTERED' => 'Data Creació',
    'LBL_DELETED' => 'Esborrat',
    'LBL_HIDEOPTIONS' => 'Oculta les opcions',
    'LBL_SHOWOPTIONS' => 'Mostra les opcions',

    'LBL_SUITE_SUPERCHARGED' => 'Supercharged by SuiteCRM',
    'LBL_SUITE_POWERED_BY' => 'Desenvolupat per SugarCRM',
    'LBL_SUITE_TOP' => 'Tornar a l\'inici',
    'LBL_SUITE_PRINT' => 'Imprimir aquesta pàgina',
    'LBL_SUITE_DESC1' => 'SuiteCRM has been written and assembled by SalesAgility, one of the worlds most knowledgeable SugarCRM consultancies.',
    'LBL_SUITE_DESC2' => 'SuiteCRM is intended to deliver on the promise of SugarCRM - a freely available open source CRM project that combines great functionality, with community and commitment.',
    'LBL_SUITE_DESC3' => 'There will be no licenced software as part of the project managed by SalesAgility. All the code is free. All the code is available for free download. There is no hidden agenda to charge for access to the code. It is and always will be free and open source. There will be no paid-for versions.',
    'LBL_QUICK_ACCOUNT' => 'Nou Compte',
    'LBL_QUICK_CONTACT' => 'Nou Contacte',
    'LBL_QUICK_OPPORTUNITY' => 'Nova Oportunitat',
    'LBL_QUICK_LEAD' => 'Nou Client Potencial',
    'LBL_QUICK_DOCUMENT' => 'Crear Document',
    'LBL_QUICK_CALL' => 'Programar Trucada',
    'LBL_QUICK_TASK' => 'Nova Tasca',

    'LBL_ENABLE_NOTIFICATIONS' => 'Habilitar les notificacions d\'escriptori',

); // END STRINGS DEFS

?>