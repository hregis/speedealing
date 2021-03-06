<?php
/* Copyright (C) 2012	Regis Houssin	<regis.houssin@capnetworks.com>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

$withdrawals = array(
		'CHARSET' => 'UTF-8',
		'StandingOrdersArea' => 'Standandi fyrirmæli area',
		'CustomersStandingOrdersArea' => 'Viðskiptavinir standandi fyrirmæli area',
		'StandingOrders' => 'Standandi pantanir',
		'StandingOrder' => 'Standandi pantanir',
		'NewStandingOrder' => 'Ný staða þess',
		'StandingOrderToProcess' => 'Til að ganga frá',
		'StandingOrderProcessed' => 'Afgreitt',
		'Withdrawals' => 'Útborganir',
		'Withdrawal' => 'Uppsögn',
		'WithdrawalsReceipts' => 'Uppsögn kvittunum',
		'WithdrawalReceipt' => 'Uppsögn barst',
		'WithdrawalReceiptShort' => 'Kvittun',
		'LastWithdrawalReceipts' => 'Last %s  afturköllun kvittunum',
		'WithdrawedBills' => 'Afturkallað reikningum',
		'WithdrawalsLines' => 'Uppsögn línur',
		'RequestStandingOrderToTreat' => 'Beiðni fyrir standandi fyrirmæli til meðferðar',
		'RequestStandingOrderTreated' => 'Beiðni um stöðu pantana sem fengu',
		'CustomersStandingOrders' => 'Viðskiptavinur standa pantanir',
		'CustomerStandingOrder' => 'Viðskiptavinur standandi röð',
		'NbOfInvoiceToWithdraw' => 'ATH reiknings með afturkalla beiðni',
		'NbOfInvoiceToWithdrawWithInfo' => 'Nb af reikningi með afturkalla beiðni um viðskiptavini sem hafa skilgreint upplýsingar um bankareikning',
		'InvoiceWaitingWithdraw' => 'Invoice að bíða eftir að afturkalla',
		'AmountToWithdraw' => 'Upphæð til baka',
		'WithdrawsRefused' => 'Segir upp neitaði',
		'NoInvoiceToWithdraw' => 'Enginn viðskiptavinur reikning í ham greiðslu "afturkalla" er í bið. Fara á flipanum \'Dragið\' reikning kort til að leggja fram beiðni.',
		'ResponsibleUser' => 'Ábyrg notanda',
		'WithdrawalsSetup' => 'Uppsögn skipulag',
		'WithdrawStatistics' => 'tölfræði Dragið\'s',
		'WithdrawRejectStatistics' => 'Dragið hafna\'s tölfræði',
		'LastWithdrawalReceipt' => 'Last %s  afturkalla kvittunum',
		'MakeWithdrawRequest' => 'Gerðu afturkalla beiðni',
		'ThirdPartyBankCode' => 'Í þriðja aðila bankakóði',
		'ThirdPartyDeskCode' => 'Í þriðja aðila skrifborðið kóða',
		'NoInvoiceCouldBeWithdrawed' => 'Engin reikningur withdrawed með góðum árangri. Athugaðu að Reikningar eru fyrirtæki með gilt bann.',
		'ClassCredited' => 'Flokka fært',
		'ClassCreditedConfirm' => 'Ertu viss um að þú viljir að flokka þessa afturköllun berst sem lögð á bankareikning þinn?',
		'TransData' => 'Date Sending',
		'TransMetod' => 'Aðferð Sending',
		'Send' => 'Senda',
		'Lines' => 'Línur',
		'StandingOrderReject' => 'Útgáfudagur a hafna',
		'InvoiceRefused' => 'Hleðsla höfnun til viðskiptavina',
		'WithdrawalRefused' => 'Útborganir Refuseds',
		'WithdrawalRefusedConfirm' => 'Ertu viss um að þú viljir að slá inn uppsögn höfnun fyrir samfélagið',
		'RefusedData' => 'Dagsetning synjunar',
		'RefusedReason' => 'Ástæða fyrir höfnun',
		'RefusedInvoicing' => 'Innheimta höfnun',
		'NoInvoiceRefused' => 'Ekki hlaða höfnun',
		'InvoiceRefused' => 'Hleðsla höfnun til viðskiptavina',
		'Status' => 'Status',
		'StatusUnknown' => 'Óþekkt',
		'StatusWaiting' => 'Bíð',
		'StatusTrans' => 'Senda',
		'StatusCredited' => 'Trúnaður',
		'StatusRefused' => 'Neitaði',
		'StatusMotif0' => 'Ótilgreint',
		'StatusMotif1' => 'Kveða insuffisante',
		'StatusMotif2' => 'Tirage conteste',
		'StatusMotif3' => 'Nei Uppsögn röð',
		'StatusMotif4' => 'Customer Order',
		'StatusMotif5' => 'RIB inexploitable',
		'StatusMotif6' => 'Reikningur án jafnvægi',
		'StatusMotif7' => 'Dómstóla ákvörðun',
		'StatusMotif8' => 'Aðrar ástæður',
		'CreateAll' => 'Dragið alla',
		'CreateGuichet' => 'Aðeins skrifstofa',
		'CreateBanque' => 'Eini bankinn',
		'OrderWaiting' => 'Beðið eftir meðferð',
		'NotifyTransmision' => 'Uppsögn Sending',
		'NotifyEmision' => 'Uppsögn Útsending',
		'NotifyCredit' => 'Uppsögn Credit',
		'NumeroNationalEmetter' => 'National Sendandi Fjöldi',
		'PleaseSelectCustomerBankBANToWithdraw' => 'Veldu upplýsingar um viðskiptavini bankareikning til að taka',
		'WithBankUsingRIB' => 'Fyrir bankareikninga með RIB',
		'WithBankUsingBANBIC' => 'Fyrir bankareikninga með IBAN / BIC / Swift',
		'BankToReceiveWithdraw' => 'Bankareikning til að fá hættir',
		'CreditDate' => 'Útlán á',
		'WithdrawalFileNotCapable' => 'Ekki er hægt að búa til fráhvarfs kvittunar skrá fyrir þínu landi',
		'ShowWithdraw' => 'Sýna Dragið',
		'IfInvoiceNeedOnWithdrawPaymentWontBeClosed' => 'Hins vegar, ef reikningur hefur að minnsta kosti einn hætt greiðslu ekki enn afgreidd, mun það ekki vera eins og borgað til að leyfa að stjórna afturköllun áður.',
		'DoStandingOrdersBeforePayments' => 'Þetta tabs leyfa þér að biðja fyrir standandi röð. Þegar það verður lokið, getur þú slegið greiðslu til loka reikning.',
		////// Notifications
		'InfoCreditSubject' => 'Greiðsla standa röð %s af bankanum',
		'InfoCreditMessage' => 'Það stendur til %s hefur verið greitt af bankanum <br> Gögn um greiðslu: %s',
		'InfoTransSubject' => 'Sending standa röð %s í bankann',
		'InfoTransMessage' => 'Það stendur til %s hefur verið transmited í bankann með %s %s. <br><br>',
		'InfoTransData' => 'Upphæð: %s <br> Metode: %s <br> Date: %s',
		'InfoFoot' => 'Þetta er sjálfvirkt skilaboð send með Speedealing',
		'InfoRejectSubject' => 'Standandi þess neitaði',
		'InfoRejectMessage' => 'Halló, <br><br> að standig þess reiknings %s tengjast félaginu %s, með fjárhæð %s hefur verið hafnað af bankanum. <br><br> - <br> % $',
		'ModeWarning' => 'Valkostur fyrir alvöru ham var ekki sett, að hætta við eftir þessa uppgerð'
);
?>