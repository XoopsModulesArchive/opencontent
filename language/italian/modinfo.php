<?php

// $Id: modinfo.php,v 1.12 2003/04/11 15:20:05 okazu Exp $
// Module Info
// Tradotto in italiano da Massimiliano Chiodi - www.openresource.it/network

// The name of this module
define('_MI_OPENCONTENT_NAME', 'Open Content');

// A brief description of this module
define('_MI_OPENCONTENT_DESC', 'Crea una sezione di link a documento dove utenti possono cercare/inviare/votare vari siti.');

// Names of blocks for this module (Not all module has blocks)
define('_MI_OPENCONTENT_BNAME1', 'Documenti recenti');
define('_MI_OPENCONTENT_BNAME2', 'I migliori documenti');

// Sub menu titles
define('_MI_OPENCONTENT_SMNAME1', 'Invia');
define('_MI_OPENCONTENT_SMNAME2', 'I più visitati');
define('_MI_OPENCONTENT_SMNAME3', 'I più votati');

// Names of admin menu items
define('_MI_OPENCONTENT_ADMENU2', 'Aggiungi/Modifica Documento');
define('_MI_OPENCONTENT_ADMENU3', 'Documenti Inviati');
define('_MI_OPENCONTENT_ADMENU4', 'Documenti Interrotti');
define('_MI_OPENCONTENT_ADMENU5', 'Documenti Modificati');
define('_MI_OPENCONTENT_ADMENU6', 'Controllore Documenti');

// Title of config items
define('_MI_OPENCONTENT_POPULAR', 'Click per essere popolare');
define('_MI_OPENCONTENT_NEWLINKS', 'Numero di documenti nuovi sulla pagina principale');
define('_MI_OPENCONTENT_PERPAGE', 'Documenti visualizzati per pagina');
define('_MI_OPENCONTENT_USESHOTS', 'Usa screenshot?');
define('_MI_OPENCONTENT_USEFRAMES', 'Usa frame?');
define('_MI_OPENCONTENT_SHOTWIDTH', 'Larghezza dello screenshot');
define('_MI_OPENCONTENT_ANONPOST', 'Consenti ad utenti anonimi di inviare segnalazioni di documenti?');
define('_MI_OPENCONTENT_AUTOAPPROVE', 'Approva automaticamente i nuovi documenti senza l\'intervento dell\'amministratore?');

// Description of each config items
define('_MI_OPENCONTENT_POPULARDSC', '');
define('_MI_OPENCONTENT_NEWLINKSDSC', '');
define('_MI_OPENCONTENT_PERPAGEDSC', '');
define('_MI_OPENCONTENT_USEFRAMEDSC', '');
define('_MI_OPENCONTENT_USESHOTSDSC', '');
define('_MI_OPENCONTENT_SHOTWIDTHDSC', '');
define('_MI_OPENCONTENT_AUTOAPPROVEDSC', '');

// Text for notifications

define('_MI_OPENCONTENT_GLOBAL_NOTIFY', 'Globale');
define('_MI_OPENCONTENT_GLOBAL_NOTIFYDSC', 'Opzioni globali di notifica dei documenti.');

define('_MI_OPENCONTENT_CATEGORY_NOTIFY', 'Categoria');
define('_MI_OPENCONTENT_CATEGORY_NOTIFYDSC', 'Opzioni di notifica che vengono applicate all\'attuale categoria di documento.');

define('_MI_OPENCONTENT_LINK_NOTIFY', 'Documento');
define('_MI_OPENCONTENT_LINK_NOTIFYDSC', 'Opzioni di notifica che vengono applicate all\'attuale documento.');

define('_MI_OPENCONTENT_GLOBAL_NEWCATEGORY_NOTIFY', 'Nuova Categoria');
define('_MI_OPENCONTENT_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Notificami quando una nuova categoria di documento viene creata.');
define('_MI_OPENCONTENT_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Ricevi una notifiica quando una nuova categoria di documento viene creata.');
define('_MI_OPENCONTENT_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} notifica automatica : Nuova categoria di documento');

define('_MI_OPENCONTENT_GLOBAL_LINKMODIFY_NOTIFY', 'Richiesta di modifica documento');
define('_MI_OPENCONTENT_GLOBAL_LINKMODIFY_NOTIFYCAP', 'Notificami per ogni richiesta di modifica di un documento.');
define('_MI_OPENCONTENT_GLOBAL_LINKMODIFY_NOTIFYDSC', 'Ricevi una notifica quando una richiesta di modifica di un documento viene inviata.');
define('_MI_OPENCONTENT_GLOBAL_LINKMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} notifica automatica : Richiesta di modifica documento');

define('_MI_OPENCONTENT_GLOBAL_LINKBROKEN_NOTIFY', 'Segnalazione di documento interrotto');
define('_MI_OPENCONTENT_GLOBAL_LINKBROKEN_NOTIFYCAP', 'Notifica per ogni segnalazione di documento interrotto.');
define('_MI_OPENCONTENT_GLOBAL_LINKBROKEN_NOTIFYDSC', 'Ricevi una notifica quando una segnalazione di documento interrotto viene inviata.');
define('_MI_OPENCONTENT_GLOBAL_LINKBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} notifica automatica : Segnalazione di documento interrotto');

define('_MI_OPENCONTENT_GLOBAL_LINKSUBMIT_NOTIFY', 'Nuovo documento inviato');
define('_MI_OPENCONTENT_GLOBAL_LINKSUBMIT_NOTIFYCAP', 'Notificami per ogni invio di documento (in attesa di approvazione).');
define('_MI_OPENCONTENT_GLOBAL_LINKSUBMIT_NOTIFYDSC', 'Ricevi una notifica quando un nuovo documento viene inviato (in attesa di approvazione).');
define('_MI_OPENCONTENT_GLOBAL_LINKSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} notifica automatica : Nuovo documento inviato');

define('_MI_OPENCONTENT_GLOBAL_NEWLINK_NOTIFY', 'Nuovo Documento');
define('_MI_OPENCONTENT_GLOBAL_NEWLINK_NOTIFYCAP', 'Notificami per ogni nuovo documento inviato.');
define('_MI_OPENCONTENT_GLOBAL_NEWLINK_NOTIFYDSC', 'Ricevi una notifica quando un nuovo documento viene inviato.');
define('_MI_OPENCONTENT_GLOBAL_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} notifica automatica : Nuovo documento');

define('_MI_OPENCONTENT_CATEGORY_LINKSUBMIT_NOTIFY', 'Nuovo documento inviato in una categoria');
define('_MI_OPENCONTENT_CATEGORY_LINKSUBMIT_NOTIFYCAP', 'Notificami quando un nuovo documento viene inviato (in attesa di approvazione) nella categoria attuale.');
define('_MI_OPENCONTENT_CATEGORY_LINKSUBMIT_NOTIFYDSC', 'Ricevi una notifica quando un nuovo documento viene inviato (in attesa di approvazione) nella categoria attuale.');
define('_MI_OPENCONTENT_CATEGORY_LINKSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} notifica automatica : Nuovo documento inviato nella categoria');

define('_MI_OPENCONTENT_CATEGORY_NEWLINK_NOTIFY', 'Nuovo documento');
define('_MI_OPENCONTENT_CATEGORY_NEWLINK_NOTIFYCAP', 'Notificami quando un nuovo documento viene inviato nella categoria attuale.');
define('_MI_OPENCONTENT_CATEGORY_NEWLINK_NOTIFYDSC', 'Ricevi una notifica quando un nuovo documento viene inviato nella categoria attuale.');
define('_MI_OPENCONTENT_CATEGORY_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} notifica automatica : Nuovo documento nella categoria.');

define('_MI_OPENCONTENT_LINK_APPROVE_NOTIFY', 'Documento approvato');
define('_MI_OPENCONTENT_LINK_APPROVE_NOTIFYCAP', 'Notificami quando questo documento viene approvato.');
define('_MI_OPENCONTENT_LINK_APPROVE_NOTIFYDSC', 'Ricevi una notifica quando questo documento viene approvato.');
define('_MI_OPENCONTENT_LINK_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} notifica automatica : Documento approvato');
