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

$products = array(
		'CHARSET' => 'UTF-8',
		'ProductRef' => 'Product ref.',
		'ProductLabel' => 'Product label',
		'ProductServiceCard' => 'Products/Services card',
		'Products' => 'Products',
		'Services' => 'Services',
		'Product' => 'Product',
		'Service' => 'Service',
		'ProductId' => 'Product/service id',
		'Create' => 'Create',
		'Reference' => 'Reference',
		'NewProduct' => 'New product',
		'NewService' => 'New service',
		'ProductCode' => 'Product code',
		'ServiceCode' => 'Service code',
		'ProductAccountancyBuyCode' => 'Accountancy code (buy)',
		'ProductAccountancySellCode' => 'Accountancy code (sell)',
		'ProductOrService' => 'Product or Service',
		'ProductsAndServices' => 'Products and Services',
		'ProductsOrServices' => 'Products or Services',
		'ProductsAndServicesOnSell' => 'Available Products and Services',
		'ProductsAndServicesNotOnSell' => 'Obsolete Products and Services',
		'ProductsAndServicesStatistics' => 'Products and Services statistics',
		'ProductsStatistics' => 'Products statistics',
		'ProductsOnSell' => 'Available products',
		'ProductsNotOnSell' => 'Obsolete products',
		'ServicesOnSell' => 'Available services',
		'ServicesNotOnSell' => 'Obsolete services',
		'InternalRef' => 'Internal reference',
		'LastRecorded' => 'Last products/services on sell recorded',
		'LastRecordedProductsAndServices' => 'Last %s recorded products/services',
		'LastModifiedProductsAndServices' => 'Last %s modified products/services',
		'LastRecordedProducts' => 'Last %s products recorded',
		'LastRecordedServices' => 'Last %s services recorded',
		'LastProducts' => 'Last products',
		'CardProduct0' => 'Product card',
		'CardProduct1' => 'Service card',
		'CardContract' => 'Contract card',
		'Warehouse' => 'Warehouse',
		'Warehouses' => 'Warehouses',
		'WarehouseOpened' => 'Warehouse opened',
		'WarehouseClosed' => 'Warehouse closed',
		'Stock' => 'Stock',
		'Stocks' => 'Stocks',
		'Movement' => 'Movement',
		'Movements' => 'Movements',
		'Sell' => 'Sales',
		'Buy' => 'Purchases',
		'OnSell' => 'For sale',
		'OnBuy' => 'For purchase',
		'NotOnSell' => 'Not for sale',
		'ProductStatusOnSell' => 'For sale',
		'ProductStatusNotOnSell' => 'Not for sale',
		'ProductStatusOnSellShort' => 'For sale',
		'ProductStatusNotOnSellShort' => 'Not for sale',
		'ProductStatusOnBuy' => 'For purchase',
		'ProductStatusNotOnBuy' => 'Not for purchase',
		'ProductStatusOnBuyShort' => 'For purchase',
		'ProductStatusNotOnBuyShort' => 'Not for purchase',
		'UpdatePrice' => 'Update price',
		'AppliedPricesFrom' => 'Applied prices from',
		'SellingPrice' => 'Selling price',
		'SellingPriceHT' => 'Selling price (net of tax)',
		'SellingPriceTTC' => 'Selling price (inc. tax)',
		'PublicPrice' => 'Public price',
		'CurrentPrice' => 'Current price',
		'NewPrice' => 'New price',
		'MinPrice' => 'Minim. selling price',
		'CantBeLessThanMinPrice' => 'The selling price can\'t be lower than minimum allowed for this product (%s without tax). This message can also appears if you type a too important discount.',
		'ContractStatus' => 'Contract status',
		'ContractStatusClosed' => 'Closed',
		'ContractStatusRunning' => 'Running',
		'ContractStatusExpired' => 'expired',
		'ContractStatusOnHold' => 'Not running',
		'ContractStatusToRun' => 'A mettre en service',
		'ContractNotRunning' => 'This contract is not running',
		'ErrorProductAlreadyExists' => 'A product with reference %s already exists.',
		'ErrorProductBadRefOrLabel' => 'Wrong value for reference or label.',
		'Suppliers' => 'Suppliers',
		'SupplierRef' => 'Supplier\'s product ref.',
		'ShowProduct' => 'Show product',
		'ShowService' => 'Show service',
		'ProductsAndServicesArea' => 'Product and Services area',
		'ProductsArea' => 'Product area',
		'ServicesArea' => 'Services area',
		'AddToMyProposals' => 'Add to my proposals',
		'AddToOtherProposals' => 'Add to other proposals',
		'AddToMyBills' => 'Add to my bills',
		'AddToOtherBills' => 'Add to other bills',
		'CorrectStock' => 'Correct stock',
		'AddPhoto' => 'Add photo',
		'ListOfStockMovements' => 'List of stock movements',
		'NoPhotoYet' => 'No pictures available yet',
		'BuiingPrice' => 'Buying price',
		'SupplierCard' => 'Supplier card',
		'CommercialCard' => 'Commercial card',
		'AllWays' => 'Path to find your product in stock',
		'NoCat' => 'Your product is not in any category',
		'PrimaryWay' => 'Primary path',
		'DeleteFromCat' => 'Remove from category',
		'PriceRemoved' => 'Price removed',
		'BarCode' => 'Barcode',
		'BarcodeType' => 'Barcode type',
		'SetDefaultBarcodeType' => 'Set barcode type',
		'BarcodeValue' => 'Barcode value',
		'GenbarcodeLocation' => 'Bar code generation command line tool (used by internal engine for some bar code types)',
		'NoteNotVisibleOnBill' => 'Note (not visible on invoices, proposals...)',
		'CreateCopy' => 'Create copy',
		'ServiceLimitedDuration' => 'If product is a service with limited duration:',
		'MultiPricesAbility' => 'Activate the multi-prices',
		'MultiPricesNumPrices' => 'Number of price',
		'MultiPriceLevelsName' => 'Price categories',
		'AssociatedProductsAbility' => 'Activate the sub-products',
		'AssociatedProducts' => 'Sub-products',
		'AssociatedProductsNumber' => 'Number of products composing this product',
		'ParentProductsNumber' => 'Number of parent product',
		'EditAssociate' => 'Associate',
		'Translation' => 'Translation',
		'KeywordFilter' => 'Keyword filter',
		'CategoryFilter' => 'Category filter',
		'ProductToAddSearch' => 'Search product to add',
		'AddDel' => 'Add/Delete',
		'Quantity' => 'Quantity',
		'NoMatchFound' => 'No match found',
		'ProductAssociationList' => 'List of related products/services: name of product/service (quantity affected)',
		'ProductParentList' => 'List of products/services with this product as a component',
		'ErrorAssociationIsFatherOfThis' => 'One of selected product is parent with current product',
		'DeleteProduct' => 'Delete a product/service',
		'ConfirmDeleteProduct' => 'Are you sure you want to delete this product/service?',
		'ProductDeleted' => 'Product/Service "%s" deleted from database.',
		'DeletePicture' => 'Delete a picture',
		'ConfirmDeletePicture' => 'Are you sure you want to delete this picture ?',
		'ExportDataset_produit_1' => 'Products',
		'ExportDataset_service_1' => 'Services',
		'ImportDataset_produit_1' => 'Products',
		'ImportDataset_service_1' => 'Services',
		'DeleteProductLine' => 'Delete product line',
		'ConfirmDeleteProductLine' => 'Are you sure you want to delete this product line?',
		'NoProductMatching' => 'No product/service match your criteria',
		'MatchingProducts' => 'Matching products/services',
		'NoStockForThisProduct' => 'No stock for this product',
		'NoStock' => 'No Stock',
		'Restock' => 'Restock',
		'ProductSpecial' => 'Special',
		'QtyMin' => 'Quantity minimum',
		'PriceQty' => 'Price for this quantity',
		'PriceQtyMin' => 'Price quantity min. (without discount)',
		'VATRateForSupplierProduct' => 'VAT Rate (for this supplier/product)',
		'DiscountQtyMin' => 'Discount quantity min. (by default)',
		'NoPriceDefinedForThisSupplier' => 'No price/qty defined for this supplier/product',
		'NoSupplierPriceDefinedForThisProduct' => 'No supplier price/qty defined for this product',
		'RecordedProducts' => 'Products recorded',
		'RecordedProductsAndServices' => 'Products/services recorded',
		'GenerateThumb' => 'Generate thumb',
		'ProductCanvasAbility' => 'Use special "canvas" addons',
		'ServiceNb' => 'Service #%s',
		'ListProductServiceByPopularity' => 'List of products/services by popularity',
		'ListProductByPopularity' => 'List of products by popularity',
		'ListServiceByPopularity' => 'List of services by popularity',
		'Finished' => 'Manufactured product',
		'RowMaterial' => 'First material',
		'CloneProduct' => 'Clone product or service',
		'ConfirmCloneProduct' => 'Are you sure you want to clone product or service <b>%s</b> ?',
		'CloneContentProduct' => 'Clone all main informations of product/service',
		'ClonePricesProduct' => 'Clone main informations and prices',
		'ProductIsUsed' => 'This product is used',
		'NewRefForClone' => 'Ref. of new product/service',
		'CustomerPrices' => 'Customers prices',
		'SuppliersPrices' => 'Suppliers prices',
		'CustomCode' => 'Customs code',
		'CountryOrigin' => 'Origin country',
		'HiddenIntoCombo' => 'Hidden into select lists',
		'Nature' => 'Nature',
		'ProductCodeModel' => 'Product code model',
		'ServiceCodeModel' => 'Service code model',
		'AddThisProductCard' => 'Create product card',
		'HelpAddThisProductCard' => 'This option allows you to create or clone a product if it does not exist.',
		'AddThisServiceCard' => 'Create service card',
		'HelpAddThisServiceCard' => 'This option allows you to create or clone a service if it does not exist.',
		'CurrentProductPrice' => 'Current price',
		'AlwaysUseNewPrice' => 'Always use current price of product/service',
		'AlwaysUseFixedPrice' => 'Use the fixed price',
		'ProductList' => 'Liste produits',
		'CardProductPRODUCT' => 'Fiche produit',
		'CardProductSERVICE' => 'Fiche service',
		'OnBuySell' => 'En achat/vente',
		'UseEcotax' => 'Utilisation de l\'ecotaxe',
		'Ecotax' => 'Ecotaxe',
		'EcotaxHT' => 'Ecotaxe HT',
		'EcotaxTTC' => 'Ecotaxe TTC',
		'AmountEcotaxHT' => 'Total écotaxe HT',
		'EcotaxIncluded' => 'Ecotaxe incluse',
		'AmountEcotax' => 'Montant Ecotaxe',
		'DatePriceUTD' => 'Date MAJ Prix',
		'ListProducts' => 'Liste des produits',
		'ListServices' => 'Liste des services',
		'ListAll' => 'Liste complète'
);
?>