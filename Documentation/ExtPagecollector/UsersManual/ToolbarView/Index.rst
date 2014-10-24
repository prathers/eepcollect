

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


Toolbar View
^^^^^^^^^^^^

A toolbar to add different pages to a virtual collection should be
available on differnet pages. Therfor it would be a good idea to set
this plugin with the toolbar into a prefered place on each page, which
should be possible to collect. Choose a dynamicly way to do this (like
page.10.subparts.pagecollectortoolbar).

Create or use a page in your pagetree (it can be a sysfolder) where
you just store some contentelements, you will use different ways and
places. Create a contentelement with the type of 'insert plugin' where
you select this plugin to insert. Choose 'toolbar' as viewmode. Save.

Then you can set this toolbar on each pache you wish by these
TypoScript-Setup settings:

page.10.subparts.pagecollectortoolbar =
CONTENTpage.10.subparts.pagecollectortoolbar {table =
tt\_contentselect {pidInList = #the pid of the page, whereuidInList =
# uid of the contentelemnt which holds the plugin with viewmode
'toolbar'}}

You should have a subpart called: 'pagecollectortoolbar' or find any
other subpart to place this element. The toolbar will work on each
page, and will show the options to add, delete or move the current
viewed page in the collection.

