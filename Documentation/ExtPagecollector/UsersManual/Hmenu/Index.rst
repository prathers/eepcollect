

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


HMENU
^^^^^

There is a marker called ###COLLECTIONSMARTLIST### that contains a
komma separated list of page-uids, which are currently selected in the
collection. Whith these uid's you cann create your own HMENU objects
like:

myMenu = HMENUmyMenu {special = listspecial.value = #comes from
'collectionsmartlist'1 = TMENU# ...}

plugin.tx\_eepcollect\_pi1.display.collectionsmartlist\_stdWrap.stdWra
p {setContentToCurrent = 1cObject < myMenucObject.special.data =
current:1}

