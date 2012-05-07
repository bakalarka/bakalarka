/*
SQLyog Community v9.60 
MySQL - 5.5.20-log : Database - bc_01_dev
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `acos` */

DROP TABLE IF EXISTS `acos`;

CREATE TABLE `acos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT '',
  `foreign_key` int(10) unsigned DEFAULT NULL,
  `alias` varchar(255) DEFAULT '',
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=utf8;

/*Table structure for table `address_types` */

DROP TABLE IF EXISTS `address_types`;

CREATE TABLE `address_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `addresses` */

DROP TABLE IF EXISTS `addresses`;

CREATE TABLE `addresses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address_type_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `zip` varchar(10) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `aros` */

DROP TABLE IF EXISTS `aros`;

CREATE TABLE `aros` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT '',
  `foreign_key` int(10) unsigned DEFAULT NULL,
  `alias` varchar(255) DEFAULT '',
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Table structure for table `aros_acos` */

DROP TABLE IF EXISTS `aros_acos`;

CREATE TABLE `aros_acos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) unsigned NOT NULL,
  `aco_id` int(10) unsigned NOT NULL,
  `_create` char(2) NOT NULL DEFAULT '0',
  `_read` char(2) NOT NULL DEFAULT '0',
  `_update` char(2) NOT NULL DEFAULT '0',
  `_delete` char(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=476 DEFAULT CHARSET=utf8;

/*Table structure for table `attribute_product_types` */

DROP TABLE IF EXISTS `attribute_product_types`;

CREATE TABLE `attribute_product_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `attribute_id` int(11) DEFAULT NULL,
  `product_type_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk__attribute_product_types__attributes` (`attribute_id`),
  KEY `fk__attribute_product_types__product_types` (`product_type_id`),
  CONSTRAINT `fk__attribute_product_types__attributes` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`),
  CONSTRAINT `fk__attribute_product_types__product_types` FOREIGN KEY (`product_type_id`) REFERENCES `product_types` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `attribute_products` */

DROP TABLE IF EXISTS `attribute_products`;

CREATE TABLE `attribute_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `attribute_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk__attribute_products__products` (`product_id`),
  KEY `fk__attribute_products__attributes` (`attribute_id`),
  CONSTRAINT `fk__attribute_products__attributes` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`),
  CONSTRAINT `fk__attribute_products__products` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `attributes` */

DROP TABLE IF EXISTS `attributes`;

CREATE TABLE `attributes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_id` int(11) DEFAULT NULL,
  `units` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk__attributes__texts` (`name_id`),
  CONSTRAINT `fk__attributes__texts` FOREIGN KEY (`name_id`) REFERENCES `texts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `billings_methods` */

DROP TABLE IF EXISTS `billings_methods`;

CREATE TABLE `billings_methods` (
  `id` int(11) NOT NULL,
  `name_id` int(11) DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk__billings_methods__texts` (`name_id`),
  CONSTRAINT `fk__billings_methods__texts` FOREIGN KEY (`name_id`) REFERENCES `texts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `product_type_id` int(11) DEFAULT NULL,
  `name_id` int(11) DEFAULT NULL,
  `slug_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk__categories__texts` (`name_id`),
  KEY `fk__categories__categories` (`parent_id`),
  KEY `fk__categories__product_types` (`product_type_id`),
  KEY `fk__categories__slugs` (`slug_id`),
  CONSTRAINT `fk__categories__categories` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`),
  CONSTRAINT `fk__categories__product_types` FOREIGN KEY (`product_type_id`) REFERENCES `products` (`id`),
  CONSTRAINT `fk__categories__slugs` FOREIGN KEY (`slug_id`) REFERENCES `slugs` (`id`),
  CONSTRAINT `fk__categories__texts` FOREIGN KEY (`name_id`) REFERENCES `texts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `category_products` */

DROP TABLE IF EXISTS `category_products`;

CREATE TABLE `category_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk__category_products__categories` (`category_id`),
  KEY `fk__category_products__products` (`product_id`),
  CONSTRAINT `fk__category_products__categories` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  CONSTRAINT `fk__category_products__products` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `companies` */

DROP TABLE IF EXISTS `companies`;

CREATE TABLE `companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `id_number` varchar(20) DEFAULT NULL,
  `tax_id_number` varchar(20) DEFAULT NULL,
  `vat_number` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `companies_users` */

DROP TABLE IF EXISTS `companies_users`;

CREATE TABLE `companies_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `currencies` */

DROP TABLE IF EXISTS `currencies`;

CREATE TABLE `currencies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_id` int(11) DEFAULT NULL,
  `abbreviation` varchar(5) DEFAULT NULL,
  `symbol` varchar(3) DEFAULT NULL,
  `exchange_rate` decimal(10,0) DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  `default` tinyint(4) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk__currencies__texts` (`name_id`),
  CONSTRAINT `fk__currencies__texts` FOREIGN KEY (`name_id`) REFERENCES `texts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `groups` */

DROP TABLE IF EXISTS `groups`;

CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Table structure for table `image_galleries` */

DROP TABLE IF EXISTS `image_galleries`;

CREATE TABLE `image_galleries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `default_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk__image_galleries__images` (`default_id`),
  CONSTRAINT `fk__image_galleries__images` FOREIGN KEY (`default_id`) REFERENCES `images` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `images` */

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_gallery_id` int(11) DEFAULT NULL,
  `small` varchar(255) DEFAULT NULL,
  `normal` varchar(255) DEFAULT NULL,
  `large` varchar(255) DEFAULT NULL,
  `original` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk__images__image_galleries` (`image_gallery_id`),
  CONSTRAINT `fk__images__image_galleries` FOREIGN KEY (`image_gallery_id`) REFERENCES `image_galleries` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `invoice_items` */

DROP TABLE IF EXISTS `invoice_items`;

CREATE TABLE `invoice_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `price_per_unit` decimal(10,0) DEFAULT NULL,
  `price_total` decimal(10,0) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk__invoice_items__invoices` (`invoice_id`),
  CONSTRAINT `fk__invoice_items__invoices` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `invoices` */

DROP TABLE IF EXISTS `invoices`;

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_number` varchar(255) DEFAULT NULL,
  `issue_date` datetime DEFAULT NULL,
  `due_date` datetime DEFAULT NULL,
  `provider_name` varchar(255) DEFAULT NULL,
  `provider_address_id` int(11) DEFAULT NULL,
  `provider_id_number` varchar(255) DEFAULT NULL,
  `provider_tax_id_number` varchar(255) DEFAULT NULL,
  `provider_vat_number` varchar(255) DEFAULT NULL,
  `provider_account` varchar(255) DEFAULT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `customer_address_id` int(11) DEFAULT NULL,
  `customer_id_number` varchar(255) DEFAULT NULL,
  `customer_tax_id_number` varchar(255) DEFAULT NULL,
  `customer_vat_number` varchar(255) DEFAULT NULL,
  `customer_account` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk__invoices__provider_address` (`provider_address_id`),
  KEY `fk__invoices__customer_address` (`customer_address_id`),
  CONSTRAINT `fk__invoices__customer_address` FOREIGN KEY (`customer_address_id`) REFERENCES `addresses` (`id`),
  CONSTRAINT `fk__invoices__provider_address` FOREIGN KEY (`provider_address_id`) REFERENCES `addresses` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `languages` */

DROP TABLE IF EXISTS `languages`;

CREATE TABLE `languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_id` int(11) DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  `on_page` tinyint(4) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk__languages__texts` (`name_id`),
  CONSTRAINT `fk__languages__texts` FOREIGN KEY (`name_id`) REFERENCES `texts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `order_items` */

DROP TABLE IF EXISTS `order_items`;

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `product_record_id` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `price_per_item` decimal(10,0) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk__order_items__orders` (`order_id`),
  KEY `fk__order_items__product_records` (`product_record_id`),
  CONSTRAINT `fk__order_items__orders` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  CONSTRAINT `fk__order_items__product_records` FOREIGN KEY (`product_record_id`) REFERENCES `product_records` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `order_states` */

DROP TABLE IF EXISTS `order_states`;

CREATE TABLE `order_states` (
  `id` int(11) NOT NULL,
  `name_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk__order_states__texts` (`name_id`),
  CONSTRAINT `fk__order_states__texts` FOREIGN KEY (`name_id`) REFERENCES `texts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `orders` */

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` varchar(255) DEFAULT NULL,
  `invoice_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `order_state` int(11) DEFAULT NULL,
  `billing_address_id` int(11) DEFAULT NULL,
  `shipping_address_id` int(11) DEFAULT NULL,
  `billing_method_id` int(11) DEFAULT NULL,
  `shipping_method_id` int(11) DEFAULT NULL,
  `currency_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk__orders__invoices` (`invoice_id`),
  KEY `fk__orders__users` (`user_id`),
  KEY `fk__orders__companies` (`company_id`),
  KEY `fk__orders__order_states` (`order_state`),
  KEY `fk__orders__billing_methods` (`billing_method_id`),
  KEY `fk__orders__shipping_methods` (`shipping_method_id`),
  KEY `fk__orders__billing_addresses` (`billing_address_id`),
  KEY `fk__orders__shipping_addresses` (`shipping_address_id`),
  KEY `fk__orders__currencies` (`currency_id`),
  CONSTRAINT `fk__orders__billing_addresses` FOREIGN KEY (`billing_address_id`) REFERENCES `addresses` (`id`),
  CONSTRAINT `fk__orders__billing_methods` FOREIGN KEY (`billing_method_id`) REFERENCES `billings_methods` (`id`),
  CONSTRAINT `fk__orders__companies` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`),
  CONSTRAINT `fk__orders__currencies` FOREIGN KEY (`currency_id`) REFERENCES `currencies` (`id`),
  CONSTRAINT `fk__orders__invoices` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`id`),
  CONSTRAINT `fk__orders__order_states` FOREIGN KEY (`order_state`) REFERENCES `order_states` (`id`),
  CONSTRAINT `fk__orders__shipping_addresses` FOREIGN KEY (`shipping_address_id`) REFERENCES `addresses` (`id`),
  CONSTRAINT `fk__orders__shipping_methods` FOREIGN KEY (`shipping_method_id`) REFERENCES `shipping_methods` (`id`),
  CONSTRAINT `fk__orders__users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `price_values` */

DROP TABLE IF EXISTS `price_values`;

CREATE TABLE `price_values` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `price_id` int(11) DEFAULT NULL,
  `value` decimal(10,0) DEFAULT NULL,
  `currency_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk__price_values__currencies` (`currency_id`),
  KEY `fk__price_values__prices` (`price_id`),
  CONSTRAINT `fk__price_values__currencies` FOREIGN KEY (`currency_id`) REFERENCES `currencies` (`id`),
  CONSTRAINT `fk__price_values__prices` FOREIGN KEY (`price_id`) REFERENCES `prices` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `prices` */

DROP TABLE IF EXISTS `prices`;

CREATE TABLE `prices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `default_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk__prices__price_values` (`default_id`),
  CONSTRAINT `fk__prices__price_values` FOREIGN KEY (`default_id`) REFERENCES `price_values` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `product_records` */

DROP TABLE IF EXISTS `product_records`;

CREATE TABLE `product_records` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `product_type_id` int(11) DEFAULT NULL,
  `sku` varchar(255) DEFAULT NULL,
  `name_id` int(11) DEFAULT NULL,
  `slug_id` int(11) DEFAULT NULL,
  `short_description_id` int(11) DEFAULT NULL,
  `description_id` int(11) DEFAULT NULL,
  `image_gallery_id` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `price_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk__product_records__products` (`product_id`),
  KEY `fk__product_records__prodyct_types` (`product_type_id`),
  KEY `fk__product_records__texts` (`name_id`),
  KEY `fk__product_records__slugs` (`slug_id`),
  KEY `fk__product_records__short_description` (`short_description_id`),
  KEY `fk__product_records__description` (`description_id`),
  KEY `fk__product_records__prices` (`price_id`),
  CONSTRAINT `fk__product_records__description` FOREIGN KEY (`description_id`) REFERENCES `texts` (`id`),
  CONSTRAINT `fk__product_records__prices` FOREIGN KEY (`price_id`) REFERENCES `prices` (`id`),
  CONSTRAINT `fk__product_records__products` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  CONSTRAINT `fk__product_records__prodyct_types` FOREIGN KEY (`product_type_id`) REFERENCES `product_types` (`id`),
  CONSTRAINT `fk__product_records__short_description` FOREIGN KEY (`short_description_id`) REFERENCES `texts` (`id`),
  CONSTRAINT `fk__product_records__slugs` FOREIGN KEY (`slug_id`) REFERENCES `slugs` (`id`),
  CONSTRAINT `fk__product_records__texts` FOREIGN KEY (`name_id`) REFERENCES `texts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `product_tags` */

DROP TABLE IF EXISTS `product_tags`;

CREATE TABLE `product_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `tag_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk__product_tags__products` (`product_id`),
  KEY `fk__product_tags__tags` (`tag_id`),
  CONSTRAINT `fk__product_tags__products` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  CONSTRAINT `fk__product_tags__tags` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `product_types` */

DROP TABLE IF EXISTS `product_types`;

CREATE TABLE `product_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk__product_types__texts` (`name_id`),
  KEY `fk__product_types__product_types` (`parent_id`),
  CONSTRAINT `fk__product_types__product_types` FOREIGN KEY (`parent_id`) REFERENCES `product_types` (`id`),
  CONSTRAINT `fk__product_types__texts` FOREIGN KEY (`name_id`) REFERENCES `texts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_record_id` int(11) DEFAULT NULL,
  `slug_id` int(11) DEFAULT NULL,
  `hidden` tinyint(4) DEFAULT NULL,
  `deleted` tinyint(4) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk__products__slugs` (`slug_id`),
  KEY `fk__products__product_records` (`product_record_id`),
  CONSTRAINT `fk__products__product_records` FOREIGN KEY (`product_record_id`) REFERENCES `product_records` (`id`),
  CONSTRAINT `fk__products__slugs` FOREIGN KEY (`slug_id`) REFERENCES `slugs` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `relation_types` */

DROP TABLE IF EXISTS `relation_types`;

CREATE TABLE `relation_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk__relation_types__texts` (`name_id`),
  CONSTRAINT `fk__relation_types__texts` FOREIGN KEY (`name_id`) REFERENCES `texts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `relations` */

DROP TABLE IF EXISTS `relations`;

CREATE TABLE `relations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `related_to_id` int(11) DEFAULT NULL,
  `relation_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk__relations__products` (`product_id`),
  KEY `fk__relations__related_to` (`related_to_id`),
  KEY `fk__relations__ralation_types` (`relation_id`),
  CONSTRAINT `fk__relations__products` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  CONSTRAINT `fk__relations__ralation_types` FOREIGN KEY (`relation_id`) REFERENCES `relation_types` (`id`),
  CONSTRAINT `fk__relations__related_to` FOREIGN KEY (`related_to_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `report_types` */

DROP TABLE IF EXISTS `report_types`;

CREATE TABLE `report_types` (
  `id` int(11) NOT NULL,
  `name_id` int(11) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk__report_types__texts` (`name_id`),
  CONSTRAINT `fk__report_types__texts` FOREIGN KEY (`name_id`) REFERENCES `texts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `reports` */

DROP TABLE IF EXISTS `reports`;

CREATE TABLE `reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `report_type_id` int(11) DEFAULT NULL,
  `message_id` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `is_read` tinyint(4) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk__reports__report_types` (`report_type_id`),
  KEY `fk__reports__texts` (`message_id`),
  CONSTRAINT `fk__reports__report_types` FOREIGN KEY (`report_type_id`) REFERENCES `report_types` (`id`),
  CONSTRAINT `fk__reports__texts` FOREIGN KEY (`message_id`) REFERENCES `texts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `settings` */

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `settings_type_id` int(11) DEFAULT NULL,
  `name_id` int(11) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `settings_types` */

DROP TABLE IF EXISTS `settings_types`;

CREATE TABLE `settings_types` (
  `id` int(11) NOT NULL,
  `name_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk__settings_types__texts` (`name_id`),
  CONSTRAINT `fk__settings_types__texts` FOREIGN KEY (`name_id`) REFERENCES `texts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `shipping_methods` */

DROP TABLE IF EXISTS `shipping_methods`;

CREATE TABLE `shipping_methods` (
  `id` int(11) NOT NULL,
  `name_id` int(11) DEFAULT NULL,
  `price_id` int(11) DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk__shipping_methods__texts` (`name_id`),
  KEY `fk__shipping_methods__prices` (`price_id`),
  CONSTRAINT `fk__shipping_methods__prices` FOREIGN KEY (`price_id`) REFERENCES `prices` (`id`),
  CONSTRAINT `fk__shipping_methods__texts` FOREIGN KEY (`name_id`) REFERENCES `texts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `slug_records` */

DROP TABLE IF EXISTS `slug_records`;

CREATE TABLE `slug_records` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug_id` int(11) DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk__slug_records__slugs` (`slug_id`),
  CONSTRAINT `fk__slug_records__slugs` FOREIGN KEY (`slug_id`) REFERENCES `slug_records` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `slugs` */

DROP TABLE IF EXISTS `slugs`;

CREATE TABLE `slugs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `default_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk__slugs__slug_records` (`default_id`),
  CONSTRAINT `fk__slugs__slug_records` FOREIGN KEY (`default_id`) REFERENCES `slug_records` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `tags` */

DROP TABLE IF EXISTS `tags`;

CREATE TABLE `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk__tags__texts` (`name_id`),
  CONSTRAINT `fk__tags__texts` FOREIGN KEY (`name_id`) REFERENCES `texts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `taxes` */

DROP TABLE IF EXISTS `taxes`;

CREATE TABLE `taxes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_id` int(11) DEFAULT NULL,
  `value` decimal(10,0) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk__taxes__texts` (`name_id`),
  CONSTRAINT `fk__taxes__texts` FOREIGN KEY (`name_id`) REFERENCES `texts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `text_records` */

DROP TABLE IF EXISTS `text_records`;

CREATE TABLE `text_records` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(255) DEFAULT NULL,
  `text_id` int(11) DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk__texts__text_records` (`text_id`),
  KEY `fk__texts__languages` (`language_id`),
  CONSTRAINT `fk__texts__languages` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`),
  CONSTRAINT `fk__texts__text_records` FOREIGN KEY (`text_id`) REFERENCES `texts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `texts` */

DROP TABLE IF EXISTS `texts`;

CREATE TABLE `texts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `default_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `disabled` tinyint(1) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  `registration_code` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk__users__groups` (`group_id`),
  CONSTRAINT `fk__users__groups` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
