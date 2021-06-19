# Easy Admin Grids
A replacement of Magento 2 UI components to create Admin Grids by using [Hyvä Admin](https://github.com/hyva-themes/magento2-hyva-admin) module.

## Installation

> This package is not installable via Composer 1.x, please make sure you upgrade to Composer 2+.

```
composer require juashyam/easy-admin-grids
php bin/magento module:enable Juashyam_EasyAdminGrids
php bin/magento setup:upgrade
```

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

## License

The module is released under the [BSD-3 Clause license](https://github.com/juashyam/easy-admin-grids/blob/main/LICENSE).
