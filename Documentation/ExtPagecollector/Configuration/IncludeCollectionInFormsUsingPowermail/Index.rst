

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


Include collection in forms, using Powermail
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

To use collections in HTML-forms (for example to build an orderform)
this extension offera way, using it in powermail.

There are two example templates inside the template folder (for
checkboxes and as a selectbox).


**Example (Checkbox)**
""""""""""""""""""""""

**HTML-Template:**

*<!-- ###COLLECTDISPLAY\_RESULTLIST### begin →<!--
###VIEWCOLLECTIONTOOLBARLISTSECTION### begin →<input type="checkbox"
id="uid321" name="tx\_powermail\_pi1[uid321][###PAGEID###]"
value="###PAGETITLE###" />###PAGETITLE###<br /><!--
###VIEWCOLLECTIONTOOLBARLISTSECTION### end →<!--
###COLLECTDISPLAY\_RESULTLIST### end →*

**TypoScript:**

*# eepcollect in powermaillib.powermailCheckbox\_eepcollect <
plugin.tx\_eepcollect\_pi1lib.powermailCheckbox\_eepcollect {userFunc
= tx\_eepcollect\_pi1->maintemplateFile = EXT:eepcollect/template/eepc
ollect\_powermail\_checkbox.tmpldefault\_view\_mode =
view\_list\_modepid\_list = 123}*

**Plugin powermail settings:**

Use in your fieldset for your field a fieldtype called 'Add typoscript
object' and in 'Typoscript object' settings write the name of your
typoscript object called ' *lib.powermailCheckbox\_eepcollect* '.

Important! Compare the uids for pid\_list (123) and powermail-field
(321) with your real ones in templatefile and typoscript.

