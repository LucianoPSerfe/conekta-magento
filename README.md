conekta-magento
==============

Magento Version Compatibility
-----------
The plugin has been tested for Magento 1.7 and 1.8. Conflicts can be found if installed in non tested Magento versions.

Installation
-----------

  * Copy the folder and paste it in the folder where you have installed Magento.
  * In the Magento admin, navigate to 'System-Cache Management'. Select and disable all Cache Types.  Additionally, click "Flush Magento Cache" and "Flush Cache Storage".  These steps will allow you to start testing the plugin.
  * In the 'System->Configuration' section, click the 'Payment Methods' link in the left hand navigation.  Check that the payment methods "Pago con Tarjeta de Débito / Crédito", "Pago con Oxxo" and "Pago con Transferencia Bancaria" appear. If these payment methods do not show up, check that your magento user has priviledges to access the Magento folder.
  * Each of the payment methods should should 'Enabled'=>'Yes', in the 'Api Keys' section for the payment methods paste the api keys found in https://admin.conekta.io#developers.keys, e.g.
    
Api Public Key: 
    `key_KJysdbf6PotS2ut2`
Api Private Key: 
    `key_eYvWV7gSDkNYXsmr`

Inventory Notes
---------------

Your product inventory will only be adjusted when your server receives a payment notification from Conekta, this allows for offline payment methods like Bank Deposits and Oxxo to be processed.

Modules in this plugin
-----------

  * Conekta_Card
