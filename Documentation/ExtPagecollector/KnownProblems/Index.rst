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

- Pages, wich shows collections shouldn't be possible to include into
  collection. Otherwise your Server could run into ' **\*Fatal error\***
  : Allowed memory size of 123456789 bytes exhausted ..'. You have two
  possibilities to avoid this:- You schould exclude these Pages from
  collections vi TS:  *$plugin.tx\_eepcollect\_pi1.pidOfExcludedPages-*
  Choose another Template for these pages, where you will hide toolbar

- No separation between languages (a selected page, can be viewed in
  different languages but you cant select pages detached by a specific
  language)

- when using Extension 'rgtabs' at same pages, which can be collected:
  each PAGECONTENT renders multiple included JS during use of
  tslib\_fe->INTincScript()

- GET-Parameter '?tx\_eepcollect\_pi1[prozess]=' will be stored in table
  cache\_pages, in indexed\_search and also in public searchmachines as
  unique page.

- Please report bugs and features in forge:
  `http://forge.typo3.org/projects/show/extension-eepcollect
  <http://forge.typo3.org/projects/show/extension-eepcollect>`_


