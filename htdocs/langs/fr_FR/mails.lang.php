<?php
/* Copyright (C) 2012	Regis Houssin	<regis.houssin@capnetworks.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

$mails = array(
		'CHARSET' => 'UTF-8',
		'Mailing' => 'EMailing',
		'EMailing' => 'EMailing',
		'Mailings' => 'EMailings',
		'EMailings' => 'EMailings',
		'AllEMailings' => 'Tous les EMailings',
		'MailCard' => 'Fiche emailing',
		'MailTargets' => 'Destinataires',
		'MailRecipients' => 'Destinataires',
		'MailRecipient' => 'Destinataire',
		'MailTitle' => 'Description',
		'MailFrom' => 'Émetteur',
		'MailErrorsTo' => 'Erreurs à',
		'MailReply' => 'Réponse à',
		'MailTo' => 'Destinataire(s)',
		'MailCC' => 'Copie à',
		'MailCCC' => 'Copie cachée à',
		'MailTopic' => 'Sujet du mail',
		'MailText' => 'Message',
		'MailFile' => 'Fichiers joints',
		'MailMessage' => 'Message du mail',
		'ShowEMailing' => 'Afficher emailing',
		'ListOfEMailings' => 'Liste des emailings',
		'NewMailing' => 'Nouvel emailing',
		'EditMailing' => 'Éditer emailing',
		'ResetMailing' => 'Nouvel envoi',
		'DeleteMailing' => 'Supprimer emailing',
		'DeleteAMailing' => 'Supprimer un emailing',
		'PreviewMailing' => 'Prévisualiser emailing',
		'PrepareMailing' => 'Préparer emailing',
		'CreateMailing' => 'Créer emailing',
		'MailingDesc' => 'Cette page vous permet d\'envoyer des emailings à un groupe de personnes.',
		'MailingResult' => 'Résultat de l\'envoi de mails',
		'TestMailing' => 'Tester emailing',
		'ValidMailing' => 'Valider emailing',
		'ApproveMailing' => 'Approuver emailing',
		'MailingStatusDraft' => 'Brouillon',
		'MailingStatusValidated' => 'Validé',
		'MailingStatusApproved' => 'Approuvé',
		'MailingStatusSent' => 'Envoyé',
		'MailingStatusSentPartialy' => 'Envoyé partiellement',
		'MailingStatusSentCompletely' => 'Envoyé complètement',
		'MailingStatusError' => 'Erreur',
		'MailingStatusNotSent' => 'Non envoyé',
		'MailSuccessfulySent' => 'Mail correctement envoyé (de %s à %s)',
		'MailingSuccessfullyValidated' => 'Mail validé',
		'MailUnsubcribe' => 'Desinscription',
		'Unsuscribe' => 'Desinscription',
		'MailingStatusNotContact' => 'Ne plus contacter',
		'ErrorMailRecipientIsEmpty' => 'L\'adresse du destinataire est vide',
		'WarningNoEMailsAdded' => 'Aucun nouvel e-mail à ajouter à la liste des destinataires.',
		'ConfirmValidMailing' => 'Confirmez-vous la validation du mailing ?',
		'ConfirmResetMailing' => 'Attention, en réinitialisant le mailing <b>%s</b>, vous autorisez son émission en masse une nouvelle fois. Est-ce bien ce que vous voulez faire ?',
		'ConfirmDeleteMailing' => 'Confirmez-vous la suppression du mailing ?',
		'NbOfRecipients' => 'Nombre de destinataires',
		'NbOfUniqueEMails' => 'Nb d\'emails uniques',
		'NbOfEMails' => 'Nbre d\'EMails',
		'TotalNbOfDistinctRecipients' => 'Nombre de destinataires uniques',
		'NoTargetYet' => 'Aucun destinataire défini (Aller sur l\'onglet Destinataires)',
		'AddRecipients' => 'Ajout de destinataires',
		'RemoveRecipient' => 'Supprime destinataire',
		'CommonSubstitutions' => 'Substitutions communes',
		'YouCanAddYourOwnPredefindedListHere' => 'Pour créer votre module sélection mails, voir htdocs/core/modules/mailings/README.',
		'EMailTestSubstitutionReplacedByGenericValues' => 'En mode test, les variables de substitution sont remplacées par des valeurs génériques',
		'MailingAddFile' => 'Joindre ce fichier',
		'NoAttachedFiles' => 'Aucun fichier joint',
		'BadEMail' => 'EMail incorrect',
		'CloneEMailing' => 'Cloner Emailing',
		'ConfirmCloneEMailing' => 'Êtes vous sûr de vouloir cloner cet emailing ?',
		'CloneContent' => 'Cloner message',
		'CloneReceivers' => 'Cloner destinataires',
		'DateLastSend' => 'Date du dernier envoi',
		'DateSending' => 'Date envoi',
		'SentTo' => 'Envoyés à <b>%s</b>',
		'MailingStatusRead' => 'Lu',
		'CheckRead' => 'Accusé de lecture',
		'YourMailUnsubcribeOK' => 'L\'adresse e-mail <b>%s</b> est bien désincrite de la liste.',
		'MailtoEMail' => 'Ecrire a e-mail (lien)',
		'ActivateCheckRead' => 'Permettre l\'utilisation du tracker d\'accusé de lecture et du lien de désincription',
		'ActivateCheckReadKey' => 'Clef de sécurité utilisée pour l\'encryption des URL utilisées dans les fonctions d\'accusé de lecture et de désincription',
		// Libelle des modules de liste de destinataires mailing
		'MailingModuleDescContactCompanies' => 'Contacts de tiers (prospects, clients, fournisseurs...)',
		'MailingModuleDescDolibarrUsers' => 'Utilisateurs de Dolibarr',
		'MailingModuleDescFundationMembers' => 'Adhérents',
		'MailingModuleDescEmailsFromFile' => 'EMails issus d\'un fichier texte (email;nom;prenom;autre)',
		'MailingModuleDescEmailsFromUser' => 'EMails saisi manuellement (email;nom;prenom;autre)',
		'MailingModuleDescContactsCategories' => 'Tiers (par catégorie)',
		'MailingModuleDescDolibarrContractsLinesExpired' => 'Tiers avec lignes de contrats de services expirées',
		'MailingModuleDescContactsByCompanyCategory' => 'Contacts de tiers (par catégorie de tiers)',
		'MailingModuleDescMembersCategories' => 'Adhérents (par catégorie)',
		'MailingModuleDescContactsByFunction' => 'Contacts de tiers (par poste/fonction)',
		'LineInFile' => 'Ligne %s du fichier',
		'RecipientSelectionModules' => 'Modules de sélection des destinataires',
		'MailSelectedRecipients' => 'Destinataires sélectionnés',
		'MailingArea' => 'Espace emailings',
		'LastMailings' => 'Les %s derniers emailings',
		'TargetsStatistics' => 'Statistiques destinataires',
		'NbOfCompaniesContacts' => 'Contacts uniques des sociétés',
		'MailNoChangePossible' => 'Destinataires d\'un mailing validé non modifiables',
		'SearchAMailing' => 'Rechercher un mailing',
		'SendMailing' => 'Envoi emailing',
		'SendMail' => 'Envoi mail',
		'SentBy' => 'Envoyé par',
		'MailingNeedCommand' => 'Pour des raisons de sécurité, il est recommandé de faire les envois d\'un mailing de masse depuis une ligne de commande. Demandez à votre administrateur de lancer la commande suivante pour envoyer le mailing à tous les destinataires :',
		'MailingNeedCommand2' => 'Vous pouvez toutefois quand même les envoyer par l\'interface écrans en ajoutant le paramètre MAILING_LIMIT_SENDBYWEB avec la valeur du nombre max de mails envoyés par session d\'envoi. Pour cela, aller dans Accueil - Configuration - Divers.',
		'ConfirmSendingEmailing' => 'Confirmez-vous l\'envoi de l\'emailing depuis le mode web ?',
		'LimitSendingEmailing' => 'L\'envoi d\'un emailing depuis les écrans est limité pour raisons de sécurité et de timeout à <b>%s</b> destinataires par session d\'envoi.',
		'TargetsReset' => 'Vider liste',
		'ToClearAllRecipientsClickHere' => 'Pour vider la liste des destinataires de cet emailing, cliquer le bouton',
		'ToAddRecipientsChooseHere' => 'Pour ajouter des destinataires, choisir dans les listes ci-dessous',
		'NbOfEMailingsReceived' => 'EMailings de masse reçus',
		'IdRecord' => 'ID enregistrement',
		'DeliveryReceipt' => 'Accusé de réception',
		'YouCanUseCommaSeparatorForSeveralRecipients' => 'Vous pouvez utiliser le caractère de séparation <b>virgule</b> pour spécifier plusieurs destinataires.',
		'TagCheckMail' => 'Tracker ouverture mail',
		'TagUnsubscribe' => 'Lien désinscription mailing masse',
		'TagSignature' => 'Signature utilisateur émetteur',
		'TagMailtoEmail' => 'EMail destinataire',
		// Module Notifications
		'Notifications' => 'Notifications',
		'NoNotificationsWillBeSent' => 'Aucune notification par email n\'est prévue pour cet événement et société',
		'ANotificationsWillBeSent' => '1 notification va être envoyée par email',
		'SomeNotificationsWillBeSent' => '%s notifications vont être envoyées par email',
		'AddNewNotification' => 'Activer une nouvelle demande de notification email',
		'ListOfActiveNotifications' => 'Liste des demandes de notifications emails actives',
		'ListOfNotificationsDone' => 'Liste des notifications emails envoyées'
);
?>