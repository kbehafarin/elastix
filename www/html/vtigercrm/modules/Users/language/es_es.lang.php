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

 ********************************************************************************
*  Module       : Users
*  Language     : Español
*  Version      : 504
*  Created Date : 2007-03-30
*  Author       : Rafael Soler
*  Last change  : 2008-09-20
*  Author       : Joe Bordes  JPL TSolucio, S.L.
 ********************************************************************************/

$mod_strings = Array(
'LBL_MODULE_NAME'=>'Usuarios',
'LBL_MODULE_TITLE'=>'Usuarios: Inicio',
'LBL_SEARCH_FORM_TITLE'=>'Buscar Usuarios',
'LBL_LIST_FORM_TITLE'=>'Lista de Usuarios',
'LBL_NEW_FORM_TITLE'=>'Nuevo Usuario',
'LBL_CREATE_NEW_USER'=>'Crear usuario',
'LBL_LOGIN'=>'Conexión',
'LBL_USER_ROLE'=>'Rol',
'LBL_LIST_NAME'=>'Nombre',
'LBL_LIST_LAST_NAME'=>'Apellidos',
'LBL_LIST_USER_NAME'=>'Usuario',
'LBL_LIST_DEPARTMENT'=>'Departamento',
'LBL_LIST_EMAIL'=>'Email',
'LBL_LIST_PRIMARY_PHONE'=>'Teléfono',
'LBL_LIST_ADMIN'=>'Admin',
'LBL_LIST_CONFIRM_PASSWORD'=>'Confirmar Contraseña',
'LBL_LIST_USER_NAME_ROLE'=>'Usuario ID , Nombre & Rol',
'LBL_LIST_SELECT'=>'Seleccionar',
'LBL_LIST_PHONE'=>'Teléfono',
'LBL_LIST_NO'=>'#',

'LBL_ADMINS'=>'Administradores',
'LBL_STD_USERS'=>'Usuario Estandar',

'UserName'=>'Usuario',
'Name'=>'Nombre',
'Tools'=>'Herramientas',


//added for patch2
'LBL_GROUP'=>'Grupo',
'LBL_CURRENCY_NAME'=>'Moneda',

'LBL_NEW_USER_BUTTON_TITLE'=>'Nuevo Usuario [Alt+N]',
'LBL_NEW_USER_BUTTON_LABEL'=>'Nuevo Usuario',
'LBL_NEW_USER_BUTTON_KEY'=>'N',
'LBL_DATE_FORMAT'=>'Formato de Fecha',

'LBL_ERROR'=>'Error:',
'LBL_PASSWORD'=>'Contraseña:',
'LBL_USER_NAME'=>'Usuario:',
'LBL_CRM_ID'=>'CRM ID',
'LBL_FIRST_NAME'=>'Nombre:',
'LBL_LAST_NAME'=>'Apellidos:',
'LBL_YAHOO_ID'=>'Mensajería Instantánea:',
'LBL_THEME'=>'Apariencia:',
'LBL_LANGUAGE'=>'Idioma:',
'LBL_ADMIN'=>'Admin:',
'LBL_OFFICE_PHONE'=>'Tel. Oficina:',
'LBL_REPORTS_TO'=>'Informa a:',
'LBL_OTHER_PHONE'=>'Tel. Directo:',
'LBL_OTHER_EMAIL'=>'Email (Otro):',
'LBL_DEPARTMENT'=>'Departamento:',
'LBL_STATUS'=>'Estado:',
'LBL_TITLE'=>'Cargo:',
'LBL_ANY_PHONE'=>'Tel. Adicional:',
'LBL_ANY_EMAIL'=>'Email Adicional:',
'LBL_ADDRESS'=>'Dirección:',
'LBL_CITY'=>'Población:',
'LBL_STATE'=>'Provincia:',
'LBL_POSTAL_CODE'=>'Código Postal:',
'LBL_COUNTRY'=>'País:',
'LBL_USER_SETTINGS'=>'Configuración de usuario',
'LBL_USER_INFORMATION'=>'Información de Usuario',
'LBL_MOBILE_PHONE'=>'Tel. Móvil:',
'LBL_OTHER'=>'Tel. Directo:',
'LBL_FAX'=>'Fax:',
'LBL_EMAIL'=>'Email:',
'LBL_HOME_PHONE'=>'Tel. Particular:',
'LBL_ADDRESS_INFORMATION'=>'Información de la Dirección',
'LBL_CAL_HRFORMAT'=>'Formato del Tiempo de Calendario',
'LBL_CAL_DURATION'=>'El Día comienza a las',
'LBL_PRIMARY_ADDRESS'=>'Dirección:',

'LBL_CHANGE_PASSWORD_BUTTON_TITLE'=>'Cambiar Contraseña[Alt+P]',
'LBL_CHANGE_PASSWORD_BUTTON_KEY'=>'P',
'LBL_CHANGE_PASSWORD_BUTTON_LABEL'=>'Cambiar Contraseña',
'LBL_LOGIN_BUTTON_TITLE'=>'Conexión [Alt+L]',
'LBL_LOGIN_BUTTON_KEY'=>'L',
'LBL_LOGIN_BUTTON_LABEL'=>'Conexión',
'LBL_LOGIN_HISTORY_BUTTON_TITLE'=>'Histórico de Conexiones [Alt+H]',
'LBL_LOGIN_HISTORY_BUTTON_KEY'=>'H',
'LBL_LOGIN_HISTORY_BUTTON_LABEL'=>'Histórico de Conexiones',
'LBL_LOGIN_HISTORY_TITLE'=>'Usuarios: Histórico de Conexiones',
'LBL_RESET_PREFERENCES'=>'Restablecer predeterminadas',

'LBL_CHANGE_PASSWORD'=>'Cambiar contraseña',
'LBL_OLD_PASSWORD'=>'Contraseña Actual:',
'LBL_NEW_PASSWORD'=>'Nueva Contraseña:',
'LBL_CONFIRM_PASSWORD'=>'Confirmar Contraseña:',
'ERR_ENTER_OLD_PASSWORD'=>'Por favor, introduzca su contraseña actual.',
'ERR_ENTER_NEW_PASSWORD'=>'Por favor, introduzca su nueva contraseña.',
'ERR_ENTER_CONFIRMATION_PASSWORD'=>'Por favor, confirme su nueva contraseña.',
'ERR_REENTER_PASSWORDS'=>'Por favor, vuelva a introducir sus contraseñas. Los valores de \\\\\"Nueva Contraseña\\\\\" y \\\\\"Confirmar Contraseña\\\\\" no coinciden.',
'ERR_INVALID_PASSWORD'=>'Debe especificar un nombre de usuario y contraseña válidos.',
'ERR_PASSWORD_CHANGE_FAILED_1'=>'El Cambio de contraseña ha fallado para ',
'ERR_PASSWORD_CHANGE_FAILED_2'=>' Error. La nueva contraseña debe ser fijada.',
'ERR_PASSWORD_INCORRECT_OLD'=>'Contraseña actual incorrecta para el usuario $this->user_name. Vuelva a introducir la información de las contraseñas.',
'ERR_USER_NAME_EXISTS_1'=>'El nombre de usuario ',
'ERR_USER_NAME_EXISTS_2'=>' ya existe. Los nombres de usuario duplicados no estan permitidos.<br>Cambie el nombre de usuario para que sea único.',
'ERR_LAST_ADMIN_1'=>'El nombre de usuario ',
'ERR_LAST_ADMIN_2'=>' es el último usuario administrador.Al menos un usuario debe permanecer como administrador.<br>Verifique la configuracón del usuario Admin.',

'ERR_DELETE_RECORD'=>'Debe especificar un registro para eliminar la Cuenta.',

// Additional Fields for i18n --- Release vtigerCRM 3.2 Patch 2
// Users--listroles.php , createrole.php , ListPermissions.php , editpermissions.php

'LBL_ROLES'=>'Roles',
'LBL_ROLES_SUBORDINATES'=>'Roles y Subordinados',

'LBL_CREATE_NEW_ROLE'=>'Crear Nuevo Rol',
'LBL_INDICATES_REQUIRED_FIELD'=>'Indica campo obligatorio',
'LBL_NEW_ROLE'=>'Nuevo Rol',
'LBL_PARENT_ROLE'=>'Rol Superior',

'LBL_LIST_ROLES'=>'Listado de Roles',
'LBL_ENTITY_LEVEL_PERMISSIONS'=>'Nivel de se permisos por entidad',
'LBL_ENTITY'=>'Entidad',
'LBL_CREATE_EDIT'=>'Crear/Editar',
'LBL_DELETE'=>'Eliminar',
'LBL_LEADS'=>'Pre-Contactos',
'LBL_ACCOUNTS'=>'Cuentas',
'LBL_CONTACTS'=>'Contactos',
'LBL_OPPURTUNITIES'=>'Oportunidades',
'LBL_TASKS'=>'Tareas',
'LBL_CASES'=>'Tickets',
'LBL_EMAILS'=>'Emails',
'LBL_NOTES'=>'Documentos',
'LBL_MEETINGS'=>'Reuniones',
'LBL_CALLS'=>'Llamadas',
'LBL_IMPORT_PERMISSIONS'=>'Permisos importación',
'LBL_IMPORT_LEADS'=>'Importar Pre-Contactos',
'LBL_IMPORT_ACCOUNTS'=>'Importar Cuentas',
'LBL_IMPORT_CONTACTS'=>'Importar Contactos',
'LBL_IMPORT_OPPURTUNITIES'=>'Importar Oportunidades',

'LBL_ROLE_DETAILS'=>'Detalles de Rol',
//added for vtigercrm4 rc
'LBL_FILE'=>'Nombre del Archivo',
'LBL_FILE_TYPE'=>'Tipo de Archivo',
'LBL_UPLOAD'=>'Subir archivo',
'LBL_ATTACH_FILE'=>'Adjuntar plantilla de mailing',
'LBL_EMAIL_TEMPLATES'=>'Plantillas de Email',
'LBL_TEMPLATE_HEADER'=>'Plantilla',
'LBL_TEMPLATE_DETAILS'=>'Detalles de Plantilla',
'LBL_EDIT_TEMPLATE'=>'Editar Plantilla',
'LBL_TEMPLATE_FILE'=>'Archivo Pantilla',
'LBL_EMAIL_TEMPLATES_LIST'=>'Listado de plantillas de Email',
'LBL_MAILMERGE_TEMPLATES_LIST'=>'> Plantillas de Comunicación > Plantillas de Mailing',
'LBL_MAILMERGE_TEMPLATES_ATTACHMENT'=>'> Plantillas de Comunicación > Adjuntar Plantilla de Email',
'LBL_DOWNLOAD_NOW'=>'Descargar ahora',
'LBL_DOWNLOAD'=>'Descargar',
'LBL_SELECT_MODULE'=>'Seleccione Módulo',
'LBL_MERGE_FILE'=>'Archivo: ',
'LBL_MERGE_MSG'=>'Elija un Módulo para asignar esta plantilla',
'LBL_MERGE_FIELDS'=>'Combinar Campos',
'LBL_COPY_PASTE'=>'Copiar & Pegar',
'LNK_GO_TO_TOP'=>'ir al principio de la página',
'LBL_COLON'=>':',
'LBL_EMAIL_TEMPLATE'=>'Plantillas de Email',
'LBL_NEW_TEMPLATE'=>'Nueva Plantilla',
'LBL_ADD_TEMPLATE'=>'Agregar Plantilla',
'LBL_USE_MERGE_FIELDS_TO_EMAIL_CONTENT'=>'Utilizar campos de combinación para personalizar el contenido del Email. Puede agregar cualquier texto para sustituir cualquier campo.',
'LBL_AVAILABLE_MERGE_FIELDS'=>'Campos disponibles',
'LBL_SELECT_FIELD_TYPE'=>'Seleccionar tipo de campo',
'LBL_SELECT_FIELD'=>'Seleccionar campo',
'LBL_MERGE_FIELD_VALUE'=>'Copiar valor del campo',
'LBL_ACCOUNT_FIELDS'=>'Campos de Cuenta',
'LBL_CONTACT_FIELDS'=>'Campos de Contacto',
'LBL_LEAD_FIELDS'=>'Campos de Pre-Contactos',
'LBL_COPY_AND_PASTE_MERGE_FIELD'=>'Copiar y pegar el valor del campo en su plantilla.',
'LBL_EMAIL_TEMPLATE_INFORMATION'=>'Información de plantilla de Email:',
'LBL_FOLDER'=>'Carpetas:',
'LBL_PERSONAL'=>'Personal',
'LBL_PUBLIC'=>'Público',
'LBL_TEMPLATE_NAME'=>'Plantilla:',
'LBL_SUBJECT'=>'Asunto',
'LBL_BODY'=>'Cuerpo del Email',
'LBL_TEMPLATE_TOOLS'=>'Herramientas',
'LBL_TEMPLATE_PUBLIC'=>'Acceso Público',
'LBL_TEMPLATE_PRIVATE'=>'Acceso Privado',
'LBL_TEMPLATE_SUBJECT'=>'Asunto de Email',
'LBL_TEMPLATE_MESSAGE'=>'Mensaje de Email',
'LBL_VIEWING'=>'Mostrando',
'LBL_PROPERTIES'=>'Propiedades de',

//added to fix the issue #6630
'LBL_ASTERISKEXTENSIONS_EXIST' => 'Extensión Asterisk ya Existe!',

// Added fields in createnewgroup.php
'LBL_CREATE_NEW_GROUP'=>'Crear nuevo grupo',
'LBL_NEW_GROUP'=>'Nuevo Grupo',
'LBL_EDIT_GROUP'=>'Editar Grupo',
'LBL_GROUP_NAME'=>'Grupo',
'LBL_GROUP_DETAILS'=>'Detalles de Grupo',
'LBL_MEMBER'=>'Miembros',
'LBL_MEMBER_AVLBL'=>'Miembros disponibles',
'LBL_MEMBER_SELECTED'=>'Miembros seleccionados',
'LBL_GROUP_MESG1'=>'Los grupos son una forma flexible de asignar privilegios de acceso, cuando hay que definir priviliegios de acceso complicados. Puedes combinar múltimples entidades como Roles, Usuarios, perfiles, etc en un único grupo.',
'LBL_GROUP_MESG2'=>'Para añadir, seleccione los miembros de la entidad de la izquierda y pulse el botón ">>" ',
'LBL_GROUP_MESG3'=>'Para eliminar, seleccione los miembros del grupo de la derecha y pulse el botón "<<"',


// Added fields in detailViewmailtemplate.html,listgroupmembers.php,listgroups.php
'LBL_DETAIL_VIEW_OF_EMAIL_TEMPLATE'=>'Vista detallada de la plantilla de Email',
'LBL_DETAIL_VIEW'=>'Vista detallada de',
'LBL_EDIT_VIEW'=>'Editando detalles del usuario',
'LBL_EDITING'=>'Editando usuario',
'LBL_GROUP_MEMBERS_LIST'=>'Lista de miembros de grupo',
'LBL_GROUPS'=>'Grupos',
'LBL_MY_GROUPS'=>'Mis Grupos',
'LBL_ADD_GROUP_BUTTON'=>'Agregar Grupo',
'LBL_WORD_TEMPLATES'=>'Plantillas Mailing',
'LBL_NEW_WORD_TEMPLATE'=>'Nueva Plantilla',
'LBL_EMAIL_TEMPLATE_DESC'=>'Gestionar plantilla de Email usadas para campañas y mailings',
'LBL_NAME'=>'Nombre',

// Added fields in TabCustomise.php,html and UpdateTab.php,html
'LBL_CUSTOMISE_TABS'=>'Personalizar Pestañas',
'LBL_CHOOSE_TABS'=>'Elegir Pestañas',
'LBL_AVAILABLE_TABS'=>'Pestañas Disponibles',
'LBL_SELECTED_TABS'=>'Pestañas Seleccionados',
'LBL_USER'=>'Usuario',
'LBL_TAB_MENU_UPDATED'=>'¡Menu de Pestañas Actualizado! vaya a ',
'LBL_TO_VIEW_CHANGES'=>' para visualizar los cambios',

// Added to change homepage order
'LBL_CHANGE_HOMEPAGE_LABEL'=>'Organización de la Página de Inicio',
'LBL_CHANGE_HOMEPAGE_TITLE'=>'Página de Inicio',

// Added fields in binaryfilelist.php
'LBL_OERATION'=>'Operación',

// Added fields in CreateProfile.php
'LBL_PROFILE_NAME'=>'Crear Nuevo Perfil:',
'LBL_NEW_PROFILE'=>'Nuevo Perfil',
'LBL_NEW_PROFILE_NAME'=>'Nombre del Perfil',
'LBL_PARENT_PROFILE'=>'Perfil Emparentado',
'LBL_BASIC_PROFILE_DETAILS'=>'Elementos básicos del Perfil',
'LBL_STEP_1_2'=>'Paso 1 de 2',
'LBL_STEP_2_2'=>'Paso 2 de 2',
'LBL_STEP'=>'Paso',
'LBL_SELECT_BASE_PROFILE'=>'Elija Perfil de Base',
'LBL_PROFILE_PRIVILEGES'=>'Privilegios del Perfil',
'LBL_GLOBAL_PRIVILEGES'=>'Privilegios Globales',
'LBL_TAB_PRIVILEGES'=>'Pestaña de Privilegios',
'LBL_FIELD_PRIVILEGES'=>'Privilegios en Campos',
'LBL_STANDARD_PRIVILEGES'=>'Privilegios Estándar',
'LBL_UTILITY_PRIVILEGES'=>'Utilidades de Privilegios',
'LBL_UTILITIES'=>'Utilidades',
'LBL_BASE_PROFILE_MESG'=>'Quiero definir un perfil básico y editar sus privilegios <b>(Recomendado)</b>',
'LBL_BASE_PROFILE'=>'Perfil Base:',
'LBL_OR'=>'O',
'LBL_BASE_PROFILE_MESG_ADV'=>'Elegiré los Privilegios desde cero <b>(Usuarios Advanzados)</b>',
'LBL_FOR'=>'para',
'LBL_GLOBAL_MESG_OPTION'=>'Seleccione las opciones inferiores para cambiar los Privilegios Globales',
'LBL_VIEW_ALL'=>'Ver todo',
'LBL_EDIT_ALL'=>'Editar todo',
'LBL_ALLOW'=>'Permitidos',
'LBL_MESG_VIEW'=>'para ver toda la información / módulos de vtiger CRM',
'LBL_MESG_EDIT'=>'para editar toda la información / módulos de vtiger CRM',
'LBL_STD_MESG_OPTION'=>'Seleccionar las acciones estándar como permitidas',
'LBL_TAB_MESG_OPTION'=>'Seleccionar las pestañas/módulos permitidos',
'LBL_UTILITY_MESG_OPTION'=>'Seleccionar las acciones permitidas',
'LBL_FIELD_MESG_OPTION'=>'Seleccionar los campos permitidos',
'LBL_FINISH_BUTTON'=>'Terminar',
'LBL_PROFILE_DETAIL_VIEW'=>'Vista de detalle del Perfil',
'LBL_PROFILE_MESG'=>'Viendo los privilegios de acceso para',
'LBL_PROFILE_M'=>'Prerfil',
'LBL_DEFINE_PRIV_FOR'=>' Defina Privilegios para ',
'LBL_USE_OPTION_TO_SET_PRIV'=>'Use las siguientes opciones para establecer los privilegios',
'LBL_SUPER_USER_PRIV'=>'Privilegios de Super Usuario',
'LBL_SET_PRIV_FOR_EACH_MODULE'=>'Setear Privilegios para cada Módulo ',
'LBL_FIELDS_AND_TOOLS_SETTINGS'=>'Configuraciones de los Campos y Herramientas',
'LBL_SHOW_FIELDS'=>'Mostrar los Campos',
'LBL_TOOLS_TO_BE_SHOWN'=>'Herramientas para mostrar',
'LBL_WELCOME_PROFILE_CREATE'=>'Bienvenido al Creador de Perfiles de Privilegios',
'LBL_SELECT_CHOICE_NEW_PROFILE'=>'Seleccione la Opción crear nuevo Perfile',
'LBL_ADD_CUSTOM_RULE'=>'Añadir Regla de Privilegios Personalizada',
'LBL_EDIT_CUSTOM_RULE'=>'Editar Regla de Privilegios Personalizada',
'LBL_CLOSE'=>'Cerrar',
'LBL_SELECT_ENTITY'=>'Selecciona una entidad de abajo',
'LBL_CAN_BE_ACCESSED_BY'=>'Pueden acceder...',
'LBL_PERMISSIONS'=>'Permisos',
'LBL_ACCESS_RIGHTS_FOR_MODULES'=>'Privilegios de Aceso para módulos relacionados',
'LBL_RULE_CONSTRUCTION'=>'Vista de Construcción de Reglas',
'LBL_ADD_RULE'=>'Añadir Regla',
'LBL_RELATED_MODULE_RIGHTS'=>'Privilegios del Módulo Relacionado',
'LBL_IN_PERMISSION'=>'con permiso',

//Added fields in createrole.php
'LBL_HDR_ROLE_NAME'=>'Crear nuevo Rol:',
'LBL_TITLE_ROLE_NAME'=>'Nuevo Rol',
'LBL_ROLE_NAME'=>'Nombre de Rol',
'LBL_ROLE_PROFILE_NAME'=>'Asociar con perfil',
'LBL_SPECIFY_ROLE_NAME'=>'Especificar un nombre para el nuevo Rol :',
'LBL_ASSIGN_PROFILE'=>'Asignar Perfil',
'LBL_PROFILE_SELECT_TEXT'=>'Seleccione los Perfiles abajo y pulse en el botón de Asignar',
'LBL_PROFILES_AVLBL'=>'Perfiles Disponibles',
'LBL_ASSIGN_PROFILES'=>'Perfiles Asignados',
'LBL_REPORTS_TO_ROLE'=>'Informa al Rol',
'LBL_ASSOCIATED_PROFILES'=>'Perfiles Asociados:',
'LBL_ASSOCIATED_USERS'=>'Usuarios Asociados:',


//Added fields in OrgSharingDetailsView.php
'LBL_ORG_SHARING_PRIVILEGES'=>'Privilegios compartidos con la Organización',
'LBL_EDIT_PERMISSIONS'=>'Editar Permisos',
'LBL_SAVE_PERMISSIONS'=>'Guardar Permisos',
'LBL_READ_ONLY'=>'Público: Solo Lectura',
'LBL_EDIT_CREATE_ONLY'=>'Público: Lectura, Crear/Editar',
'LBL_READ_CREATE_EDIT_DEL'=>'Público: Lectura, Crear/Editar, Eliminar',
'LBL_PRIVATE'=>'Privado',

//Added fields in listnotificationschedulers.php
'LBL_HDR_EMAIL_SCHDS'=>'Usuarios: Notificaciones de Email',
'LBL_EMAIL_SCHDS_DESC'=>'Lo que sigue es la lista de las notificaciones que se activan automáticamente cuando el correspondiente evento ha ocurrido.',
'LBL_ACTIVE'=>'Activo',
'LBL_INACTIVE'=>'Inactivo',
'LBL_NOTIFICATION'=>'Notificación',
'LBL_DESCRIPTION'=>'Descripción',
'LBL_TASK_NOTIFICATION'=>'Notificación de tarea retrasada',
'LBL_TASK_NOTIFICATION_DESCRITPION'=>'Nofifica que una tarea se retrasa más de 24 hrs',
'LBL_MANY_TICKETS'=>'Notificación de demasiados partes abiertos',
'LBL_MANY_TICKETS_DESCRIPTION'=>'Notifica que una entidad tiene demasiados partes, puede reflejar cumplimiento de SLA',
'LBL_PENDING_TICKETS'=>'Notificación de partes pendientes',
'LBL_TICKETS_DESCRIPTION'=>'Notifica que existen partes en estado pendiente',
'LBL_START_NOTIFICATION'=>'Notificación de inicio de soporte',
'LBL_START_DESCRIPTION'=>'Notifica que se inicia el periodo de soporte contratado',
'LBL_BIG_DEAL'=>'Notificación de grandes negocios',
'LBL_BIG_DEAL_DESCRIPTION'=>'Nofifica que se ha cerrado un gran negocio',
'LBL_SUPPORT_NOTICIATION'=>'Notificación de fin de soporte',
'LBL_SUPPORT_DESCRIPTION'=>'Notifica que finaliza el periodo de soporte contratado',
'LBL_BUTTON_UPDATE'=>'Actualizar',
'LBL_MODULENAMES'=>'Módulo',

//Added fields in ListFieldPermissions.html
'LBL_FIELD_PERMISSION_FIELD_NAME'=>'Nombre de Campo',
'LBL_FIELD_PERMISSION_VISIBLE'=>'Visible',
'LBL_FIELD_PERMISSIOM_TABLE_HEADER'=>'Campos estandar',
'LBL_FIELD_LEVEL_ACCESS'=>'Nivel de acceso a campos',

//Added fields after 4.0.1
'LBL_SIGNATURE'=>'Firma',

//Added for Event Reminder 4.2 Alpha release
'LBL_ACTIVITY_NOTIFICATION'=>'Notificación de Eventos',
'LBL_ACTIVITY_REMINDER_DESCRIPTION'=>'Notifica un evento antes de que ocurra',
'LBL_MESSAGE'=>'Mensaje',

//Added for Global Privileges

'Public: Read Only'=>'Publico: Sólo Lectura',
'Public: Read, Create/Edit'=>'Publico: Lectura, Crear/Editar',
'Public: Read, Create/Edit, Delete'=>'Publico: Lectura, Crear/Editar, Borrar',
'Private'=>'Privado',
'Hide Details'=>'Ocultar Detalle',
'Hide Details and Add Events'=>'Ocultar Detalle y Añadir Eventos',
'Show Details'=>'Mostrar Detalles',
'Show Details and Add Events'=>'Mostrar Detalle y Añadir Eventos',

'LBL_USR_CANNOT_ACCESS'=>'Usuarios NO pueden acceder a otros usuarios ',
'LBL_USR_CAN_ACCESS'=>'Usuarios pueden ',
'LBL_USR_OTHERS'=>' otros usuarios ',

'Read Only '=>'Sólo Lectura ',
'Read, Create/Edit, Delete '=>'Lectura, Crear/Editar, Borrar ',
'Read, Create/Edit '=>'Lectura, Crear/Editar ',
'Read/Write'=>'Lectura/Escritura',
'LBL_GO_TO_TOP'=>'Ir al Inicio',
'LNK_CLICK_HERE'=>'Pinche aquí',
'LBL_RULE_NO'=>'Regla No.',
'LBL_CAN_BE_ACCESSED'=>'puede acceder',
'LBL_PRIVILEGES'=>'Privilegios',
'LBL_OF'=>'de',



//Added for 4.2GA support for mail server integration
'LBL_ADD_MAILSERVER_BUTTON_TITLE'=>'Añadir Servidor de Correo',
'LBL_ADD_MAILSERVER_BUTTON_KEY'=>'M',
'LBL_ADD_MAILSERVER_BUTTON_LABEL'=>'Añadir Servidor de Correo',

'LBL_LIST_MAILSERVER_BUTTON_TITLE'=>'Listar Servidores de Correo',
'LBL_LIST_MAILSERVER_BUTTON_KEY'=>'L',
'LBL_LIST_MAILSERVER_BUTTON_LABEL'=>'Listar Servidores de Correo',
//added for inventory terms and conditions
'INV_TANDC'=>'Condiciones Generales',
'INV_TERMSANDCONDITIONS'=>'Inventario - Condiciones Generales',
'LBL_INV_TERMSANDCONDITIONS'=>'Gestión de Inventario',


'INVENTORYNOTIFICATION'=>'Notificaciones de Inventario',
'LBL_INVENTORY_NOTIFICATIONS'=>'Editar Notificaciones de Inventario',
'LBL_INV_NOT_DESC'=>'Listado de las notificaciones que se envían a los proveedores cuando durante la creación de un presupuesto, pedido o factura, no hay cantidad suficiente de producto .',

'InvoiceNotification'=>'Notificación de stock de producto bajo durante la generación de una factura',
'InvoiceNotificationDescription'=>'Si durante la Factura el stock del producto almacenado es menor que la cantidad demandada en el Pedido, se enviará esta notificación al responsable del producto',

'QuoteNotification'=>'Notificación de stock de producto bajo durante la generación de un presupuesto',
'QuoteNotificationDescription'=>'Si durante el Presupuesto el stock del producto almacenado es menor que la cantidad demandada en el Pedido, se enviará esta notificación al responsable del producto',

'SalesOrderNotification'=>'Notificación de stock de producto bajo durante la generación de un Pedido',
'SalesOrderNotificationDescription'=>'Si durante el Pedido el stock del producto almacenado es menor que la cantidad demandada en el Pedido, se enviará esta notificación al responsable del producto',

//New addition for 4.2 GA
'LBL_USER_FIELDS'=>'Campos del Usuario',
'LBL_NOTE_DO_NOT_REMOVE_INFO'=>'Nota:  No quite ni altere los valores dentro de {  }',

//Added for patch2
'LBL_FILE_INFORMATION'=>'Información',

//Added after pathc2
'LBL_LEAD_FIELD_ACCESS'=>'Pre-Contactos',

'LBL_ACCOUNT_FIELD_ACCESS'=>'Cuentas',

'LBL_CONTACT_FIELD_ACCESS'=>'Contactos',

'LBL_OPPORTUNITY_FIELD_ACCESS'=>'Acceso a los campos de Oportunidades',

'LBL_HELPDESK_FIELD_ACCESS'=>'Acceso a los campos de Incidencias',

'LBL_PRODUCT_FIELD_ACCESS'=>'Acceso a los campos de Productos',

'LBL_NOTE_FIELD_ACCESS'=>'Acceso a los campos de Documentos',

'LBL_EMAIL_FIELD_ACCESS'=>'Acceso a los campos de Email',

'LBL_TASK_FIELD_ACCESS'=>'Acceso a los campos de Tareas',

'LBL_EVENT_FIELD_ACCESS'=>'Acceso a los campos de Eventos',
'LBL_VENDOR_FIELD_ACCESS'=>'Acceso a los campos de Proveedores',
'LBL_PB_FIELD_ACCESS'=>'Acceso a los campos de Tarifas',
'LBL_QUOTE_FIELD_ACCESS'=>'Acceso a los campos de Presupuestos',
'LBL_PO_FIELD_ACCESS'=>'Acceso a los campos de Órdenes de Compra',
'LBL_SO_FIELD_ACCESS'=>'Acceso a los campos de Pedidos',
'LBL_INVOICE_FIELD_ACCESS'=>'Acceso a los campos de Facturas',

//given for calendar color for an user user
'LBL_COLOR'=>'Color en el Calendario',
//added for activity view in home page
'LBL_ACTIVITY_VIEW'=>'Vista de Actividad Predeterminada',
//Added to change Home page order
'LBL_HOMEPAGE_ORDER_UPDATE'=>'Actualizar Órden de Bloques en la página de inicio',
'LBL_HOMEPAGE_ID'=>'Órden de bloques',
'ERR_INVALID_USER'=>'Acceso Inválido -- Acceder desde Mis Cuentas',
'ALVT'=>'Principales Empresas',
'PLVT'=>'Principales Oportunidades',
'QLTQ'=>'Principales Presupuestos',
'CVLVT'=>'Estadísticas',
'HLT'=>'Partes Principales',
'OLV'=>'Principales Actividades Abiertas',
'GRT'=>'Principales Tareas del Grupo',
'OLTSO'=>'Principales Pedidos',
'ILTI'=>'Principales Facturas',
'HDB'=>'Página de Inicio de los Indicadores',
'OLTPO'=>'Principales Órdenes de Compra',
'LTFAQ'=>'Mis Últimas FAQs',
'UA'=>'Próximas Actividades',
'PA'=>'Actividades Pendientes',

//Added for 5.0 alpha
'LBL_GROUP_NAME_ERROR'=>'¡El nombre del grupo ya existe!',
'MNL'=>'Últimos Pre-contactos',
'LBL_LEAD_VIEW'=>'Vista por defecto de Pre-contactos',
'LBL_TAG_CLOUD'=>'Nube de Etiquetas',
'LBL_LIST_TOOLS'=>'Operaciones',
'LBL_STATISTICS'=>'Estadísticas',
'LBL_TOTAL'=>'Total :',
'LBL_OTHERS'=>'Otros :',
'LBL_USERS'=>'Usuarios',
'LBL_USER_LOGIN_ROLE'=>'Nombre de Usuario y Rol',
'LBL_USER_MORE_INFN'=>'Más Información',
'LBL_USER_ADDR_INFN'=>'Dirección de Información',
'LBL_USER_IMAGE'=>'Imagen de Usuario',
'LBL_USR'=>'Usuarios',

'LBL_MY'=>'Mis',
'LBL_MY_DEFAULTS'=>'Mis valores por defecto',
'LBL_MY_DESG'=>'Mis detalles de Contacto y Designación',
'LBL_MY_ADDR'=>'Mi Dirección',
'LBL_MY_PHOTO'=>'Mi Foto',
'LBL_CHANGE_PHOTO'=>'Cambiar Foto...',
'LBL_CHANGE'=>'Cambiar',


//Added for Access Privileges

'LBL_GLOBAL_FIELDS_MANAGER'=>'Gestor de Privilegios de Acceso Globales',
'LBL_GLOBAL_ACCESS_PRIVILEGES'=>'Privilegios de Acceso Globales',
'LBL_CUSTOM_ACCESS_PRIVILEGES'=>'Privilegios de Acceso Personalizados',
'LBL_BOTH'=>'Ambos',
'LBL_VIEW'=>'Vista',
'LBL_RECALCULATE_BUTTON'=>'Recalcular',
'LBL_ADD_PRIVILEGES_BUTTON'=>'Añadir Privilegios',
'LBL_CUSTOM_ACCESS_MESG'=>'No hay reglas personalizadas de acceso definidas.',
'LBL_CREATE_RULE_MESG'=>'para crear una Regla Nueva',
'LBL_SELECT_SCREEN'=>'Seleccione la Pantalla / Módulo:',
'LBL_FIELDS_AVLBL'=>'Campos Disponibles en',
'LBL_FIELDS_SELECT_DESELECT'=>'Seleccione o Deseleccione para mostrar campos',
'LBL_ROLE_TO_BE_DELETED'=>'Rol para borrar',
'LBL_TRANSFER_USER_ROLE'=>'Mover Usuarios al Rol',
'LBL_DELETE_ROLE'=>'Borrar Rol',
'LBL_MORE_INFORMATION'=>'Más Información',
'LBL_USERLOGIN_ROLE'=>'Usuario Login y Rol',
'LBL_USER_IMAGE_INFORMATION'=>'Información de Imágen de Usuario',

//Added for 5.0 for all fields
'Role'=>'Rol',
'Email'=>'Email',
'Admin'=>'Admin',
'User Name'=>'Usuario',
'First Name'=>'Nombre',
'Last Name'=>'Apellidos',
'Status'=>'Estatus',
'Default Activity View'=>'Vista de Calendario predeterminada',
'Default Lead View'=>'Vista de Pre-Contactos predeterminada',
'Currency'=>'Moneda',
'Title'=>'Cargo',
'Office Phone'=>'Tel. Oficina',
'Department'=>'Departmento',
'Mobile'=>'Tel. Móvil',
'Reports To'=>'Informa a',
'Other Phone'=>'Tel. Directo',
'Other Email'=>'Email (Otro)',
'Fax'=>'Fax',
'Yahoo id'=>'Yahoo id',
'Home Phone'=>'Tel. Particular',
'User Image'=>'Imagen del Usuario',
'Date Format'=>'Formato de Fecha',
'Tag Cloud'=>'Nube de Etiquetas',
'Signature'=>'Firma',
'Documents'=>'Notas',
'Street Address'=>'Dirección',
'City'=>'Población',
'State'=>'Provincia',
'Postal Code'=>'Código Postal',
'Country'=>'País',
'Password'=>'Contraseña',
'Confirm Password'=>'Confirmar Contraseña',
'LBL_SHOWN'=>'Mostrar',
'LBL_HIDDEN'=>'Ocultar',
'LBL_SHOW'=>'Mostrar',
'LBL_HIDE'=>'Ocultar',
'LBL_HOME_PAGE_COMP'=>'Componentes de la Página Principal',
'LBL_LOGIN_HISTORY'=>'Histórico de Accesos',
'LBL_USERDETAIL_INFO'=>'Ver detalles del Usuario',
'LBL_DELETE_GROUP'=>'Borrar Grupo',
'LBL_DELETE_GROUPNAME'=>'Grupo para borrar',
'LBL_TRANSFER_GROUP'=>'Cambiar Propietario a: ',
'LBL_DELETE_USER'=>'Usuario para borrar',
'LBL_TRANSFER_USER'=>'Cambiar Propietario al Usuario',
'LBL_DELETE_PROFILE'=>'Borrar Perfil',
'LBL_TRANSFER_ROLES_TO_PROFILE'=>'Transferir Roles al Perfil',
'LBL_PROFILE_TO_BE_DELETED'=>'Perfil para Borrar',

//Added for disabling window Recalculate

'LBL_RECALC_MSG'=>'¿Seguro que quiere Modificar los accesos compartidos?',
'LBL_YES'=>'Si',
'LBL_NO'=>'No',

'LBL_MANDATORY_MSG'=>'Campos Obligatorios',
'LBL_DISABLE_FIELD_MSG'=>'Campos Deshabilitados desde Configuración de Acceso Global',

//Added for About Us

'LBL_CONTACT_US'=>'Contacte',
'LBL_READ_LICENSE'=>'Leer Licencia',
'LBL_VERSION'=>'Versión',
'LBL_TEAM'=>'Equipo',
'LBL_CREDITS'=>'Créditos',
'LBL_THIRD_PARTY'=>'Paquetes de Terceros',
'LBL_COMMUNITY'=>'Y Comunidad VTIGER',

'LBL_ASSIGN_ROLE'=>'Asignar Rol',

//Moved from Settings to here for Webmail client integration (for 5.0.3 release)

'LBL_ADD_MAIL_ACCOUNT'=>'Añadir Cuenta de Correo',
'LBL_NEW_MAIL_ACCOUNT_TITLE'=>'Nueva Cuenta de Correo [Alt+M]',
'LBL_NEW_MAIL_ACCOUNT_KEY'=>'M',
'LBL_NEW_MAIL_ACCOUNT_LABEL'=>'Nueva Cuenta de Correo',
'LBL_GENERAL_INFO'=>'Información General',
'LBL_DISPLAY_NAME'=>'Mostrar Nombre',
'LBL_MAIL_PROTOCOL'=>'Protocolo de Correo',
'LBL_LIST_PASSWORD'=>'Contraseña',
'LBL_MAIL_SERVER_NAME'=>'Nombre de Servidor de Correo o IP',
'LBL_INCOME_SERVER_SETTINGS'=>'Servidor Entrante',
'LBL_TEST_SETTINGS'=>'Probar la configuración de correo',
'LBL_TEST_BUTTON_TITLE'=>'¡Probar la cuenta ahora! [Alt+T]',
'LBL_TEST_BUTTON_KEY'=>'T',
'LBL_TEST_BUTTON_LABEL'=>'¡Probar la cuenta ahora!',
'LBL_DEFAULT'=>'Predeterminada',
'LBL_IMAP2'=>'IMAP2',
'LBL_IMAP4'=>'IMAP4',
'LBL_POP'=>'POP',
'LBL_IMAP'=>'IMAP',
'LBL_MAIL_DISCLAIM'=>'Los elementos señalados con <font color="red">*</font> son obligatorios<br>Los elementos señalados con <font color="red">* *</font> no están soportados completamente',
'LBL_SSL_OPTIONS'=>'Opciones de SSL',
'LBL_TLS'=>'TLS',
'LBL_NO_TLS'=>'No TLS',
'LBL_CERT_VAL'=>'Certificados Validos',
'LBL_INT_MAILER'=>'¿Usar Correo Interno?',
'LBL_INT_MAILER_USE'=>'Si',
'LBL_INT_MAILER_NOUSE'=>'No',
'LBL_VAL_SSL_CERT'=>'Validar Certificado SSL',
'LBL_DONOT_VAL_SSL_CERT'=>'No Validar Certificado SSL',
'LBL_WEB_MAIL_CONFIG'=>'Configuración de Email ',
'LBL_CONFIGURE_WEB_MAIL'=>' - Configurar Email',
'LBL_LIST_MAIL_ACCOUNT'=>'  Listar Cuentas de Correo',
'LBL_MY_MAIL_SERVER_DET'=>'Detalles del Servidor Entrante',
'LBL_MY_DETAILS'=>'Mis Detalles',
'LBL_EMAIL_ID'=>'Email ID',
'LBL_EMAIL_ADDRESS'=>'Email',
'LBL_NAME_EXAMPLE'=>'(Ejemplo : Juan García)',
'LBL_EMAIL_EXAMPLE'=>'(Ejemplo : juangarcia@xyz.com)',
'LBL_REFRESH_TIMEOUT'=>'Actualizar Tiempo de Refresco',
'LBL_1_MIN'=>'1 minuto',
'LBL_2_MIN'=>'2 minutos',
'LBL_3_MIN'=>'3 minutos',
'LBL_4_MIN'=>'4 minutos',
'LBL_5_MIN'=>'5 minutos',
'LBL_EMAILS_PER_PAGE'=>'Emails por Página',
// Added for 5.0.3

'LBL_ENTER_PROFILE'=>'Introducir Nombre del Perfil',
'TITLE_USER_DOCUMENT'=>'Documento sin Nombre',
'TITLE_VTIGER_CRM_5'=>'VTIGER CRM - Open Source CRM',
'ROLE_DRAG_ERR_MSG'=>'No puedes mover un Nodo Padre bajo un Nodo Hijo',

'LBL_NOTIFICATION_ACTIVITY'=>'Notificación de Actividad',
'LBL_NOTIFICATION_EMAIL_INFO'=>'Notificación de Información de Email',
'LBL_GOTO_LISTVIEW_BUTTON'=>'Ir a vista de lista',

// Added/Updated for vtiger CRM 5.0.4

'LBL_SSL' => 'SSL',
//Added to fix the issue #4081
'LBL_USERNAME_EXIST' => 'Ya existe un usuario con ese nombre!',
'LBL_UNAUTHORIZED_ACCESS' => 'No está autorizado a acceder a la administración de usuario',
//Added to provide User based TagCloud
'LBL_TAGCLOUD_DISPLAY'=>'Mostrar Nube de Etiquetas',
'INTERNAL_MAIL_COMPOSER'=>'Cliente de Email Interno',

// Added for 5.0.4 to Support Email notication on User Creation
'User Login Details'=>'Detalle de Conexión de Usuario',
'LBL_TO_LOGIN' => 'para Conectarse',

// Added after 5.0.4 GA

'LBL_USER_ADV_OPTIONS'=>'Opciones Avanzadas de Usuario',
'Reminder Interval'=>'Intervalo de Recordatorio',
'Webservice Access Key'=>'Clave de acceso',

//user-group fixes
'LBL_GROUPNAME_EXIST' => 'Ya existe un grupo con ese nombre!',
'LBL_PROFILENAME_EXIST' => 'Ya existe un perfil con ese nombre!',

//Fixed For Asterisk Configration
'Asterisk Configuration' => 'Configuración Asterisk',
'Asterisk Extension' => 'Extensión Asterisk',
' Receive Incoming Calls' => 'Recibir Llamadas Entrantes',

);

?>
