CREATE TABLE IF NOT EXISTS `issue_products` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	PRIMARY KEY (`id`)
	) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `issue_products` (`id`, `name`) VALUES
(1, 'Product 1');

CREATE TABLE IF NOT EXISTS `issue_product_variant_options` (
	`issue_product_id` int(11) NOT NULL,
	`issue_variant_option_id` int(11) NOT NULL,
	PRIMARY KEY (`issue_product_id`,`issue_variant_option_id`)
	) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `issue_product_variant_options` (`issue_product_id`, `issue_variant_option_id`) VALUES
(1, 1);

CREATE TABLE IF NOT EXISTS `issue_variant_options` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
	PRIMARY KEY (`id`)
	) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `issue_variant_options` (`id`, `name`) VALUES
(1, 'Variant option 1');

CREATE TABLE IF NOT EXISTS `issue_variant_option_locales` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`issue_variant_option_id` int(11) NOT NULL,
	`name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	PRIMARY KEY (`id`),
	KEY `issue_variant_option_id` (`issue_variant_option_id`)
	) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `issue_variant_option_locales` (`id`, `issue_variant_option_id`, `name`) VALUES
(1, 1, 'Variant option locales 1');
