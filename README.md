# ![Easy Admin Grids_New](https://user-images.githubusercontent.com/13532448/122935610-1a00aa00-d38e-11eb-8ba6-806288064800.png)

[![Latest Stable Version](http://poser.pugx.org/juashyam/easy-admin-grids/v)](https://packagist.org/packages/juashyam/easy-admin-grids)
[![Total Downloads](http://poser.pugx.org/juashyam/easy-admin-grids/downloads)](https://packagist.org/packages/juashyam/easy-admin-grids)
[![License](http://poser.pugx.org/juashyam/easy-admin-grids/license)](https://packagist.org/packages/juashyam/easy-admin-grids)

Easy and joyful replacement of native UI component based Admin Grids using [Hyvä Admin](https://github.com/hyva-themes/magento2-hyva-admin) module.

## Installation

> This package is not installable via Composer 1.x, please make sure you upgrade to Composer 2+.

```
composer require juashyam/easy-admin-grids
php bin/magento module:enable Juashyam_EasyAdminGrids
php bin/magento setup:upgrade
```

## Configuration
Enable Easy Admin Grid in **Admin → Stores → Configuration → JUASHYAM → Easy Admin Grids**

![Easy Admin Grids Configuration](https://user-images.githubusercontent.com/13532448/122933715-82e72280-d38c-11eb-9c0b-8febef854d45.png)

## Features
As of now, this module replaces following native grids out of the box.
- Content (Admin → Content)
  - Block
  - Pages
- Customers (Admin → Customers)
  - All Customers

## To Do List
- Customers (Admin → Customers)
  - Customers Now Online
  - Customer Segments
  - Customer Groups
- Marketing (Admin → Marketing)
  - Cart Price Rules
  - Catalog Price Rule
  - Gift Card Accounts
  - Related Products Rules

## Authors

[Shyam Kumar](https://github.com/juashyam)

## Acknowledgments

[@Vinai](https://github.com/Vinai) for the base [Hyvä Admin](https://github.com/hyva-themes/magento2-hyva-admin) module.

## License

The module is released under the [BSD-3 Clause license](https://github.com/juashyam/easy-admin-grids/blob/main/LICENSE).
