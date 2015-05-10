.. include:: Images.txt

.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. ==================================================
.. DEFINE SOME TEXTROLES
.. --------------------------------------------------
.. role::   underline
.. role::   typoscript(code)
.. role::   ts(typoscript)
   :class:  typoscript
.. role::   php(code)


|img-6| Known problems
----------------------

- It shouldn't be possible to include pages that show collections into 
  your collection. Otherwise, your server could run into ' **\*Fatal error\***
  Allowed memory size of 123456789 bytes exhausted ..'. You have two possibilities to avoid this:
  1) You should exclude these pages from collections with TS: $plugin.tx_eepcollect_pi1.pidOfExcludedPages. 
  2) Choose another Template for these pages, where you will hide toolbar.

- No separation between languages (a selected page can be viewed in different languages 
  but you can’t select pages detached by a specific language).

- When using Extension 'rgtabs' at same pages, which can be collected: each PAGECONTENT 
  renders multiple included JS during use of tslib\_fe->INTincScript() 

- GET-Parameter '?tx\_eepcollect\_pi1[prozess]=' will be stored in table cache\_pages, 
  in indexed_search and also in public search machines as unique page.

- Please report bugs and features in forge: 
  `http://forge.typo3.org/projects/show/extension-eepcollect
  <http://forge.typo3.org/projects/show/extension-eepcollect>`_

