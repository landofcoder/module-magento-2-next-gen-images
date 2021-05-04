# Magento 2 module for NextGenImages
This module adds next-gen image support to Magento 2. Please note that this is a base extension for other extensions to use. See [Lof_Webp2](https://github.com/landofcoder/module-magento-2-webp2) for details.

## Development
This module features some settings and info panels in the Magento Store Configuration. But the major feature is a plugin on the `Layout` that scans for HTML `<img/>` tags to convert them into `<picture/>` tags with sources for alternative image formats.

A module `Foo_Bar` could add a `etc/di.xml` file to add a new convertor (a class implementing `\Lof\NextGenImages\Convertor\ConvertorInterface`) to the convertor listing:

```xml
<?xml version="1.0"?>
<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:noNamespaceSchemaLocation="urn:magento:framework:ObjectManager/etc/config.xsd">
    <type name="Lof\NextGenImages\Convertor\ConvertorListing">
        <arguments>
            <argument name="convertors" xsi:type="array">
                <item name="foobar" xsi:type="object">Foo\Bar\Convertor</item>
            </argument>
        </arguments>
    </type>
</config>
```

- The module was forked from [Yireo_NextGenImages](https://github.com/lof/Lof_NextGenImages) to update features and fix issues.
# Roadmap
- Add more next gen image formats
    - JPEG 2000
    - HEIC
    - AVIF
    - JPEG XL
    - WebP2


## Donation

If this project help you reduce time to develop, you can give me a cup of coffee :) 

[![paypal](https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif)](https://www.paypal.com/paypalme/allorderdesk)


**Our Magento 2 Extensions List**
* [Megamenu for Magento 2](https://landofcoder.com/magento-2-mega-menu-pro.html/)

* [Page Builder for Magento 2](https://landofcoder.com/magento-2-page-builder.html/)

* [Magento 2 Marketplace](https://landofcoder.com/magento-2-marketplace-extension.html/)

* [Magento 2 Form Builder](https://landofcoder.com/magento-2-form-builder.html/)

* [Magento 2 Reward Points](https://landofcoder.com/magento-2-reward-points.html/)

* [Magento 2 Flash Sales - Private Sales](https://landofcoder.com/magento-2-flash-sale.html)

* [Magento 2 B2B Packages](https://landofcoder.com/magento-2-b2b-extension-package.html)

* [Magento 2 One Step Checkout](https://landofcoder.com/magento-2-one-step-checkout.html/)

* [Magento 2 Customer Membership](https://landofcoder.com/magento-2-membership-extension.html/)

* [Magento 2 Checkout Success Page](https://landofcoder.com/magento-2-checkout-success-page.html/)


**Featured Magento Services**

* [Customization Service](https://landofcoder.com/magento-2-create-online-store/)

* [Magento 2 Support Ticket Service](https://landofcoder.com/magento-support-ticket.html/)

* [Magento 2 Multi Vendor Development](https://landofcoder.com/magento-2-create-marketplace/)

* [Magento Website Maintenance Service](https://landofcoder.com/magento-2-customization-service/)

* [Magento Professional Installation Service](https://landofcoder.com/magento-2-installation-service.html)

* [Customization Service](https://landofcoder.com/magento-customization-service.html)

