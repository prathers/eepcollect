

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


Reference
^^^^^^^^^


General settings
""""""""""""""""

.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Property
         Property:
   
   Data type
         Data type:
   
   Description
         Description:
   
   Default
         Default:


.. container:: table-row

   Property
         templateFile
   
   Data type
         File
   
   Description
         Fileresource to the HTML-Template. You can also define a templatefile
         with higher priority inside the flexform of the contentelement for
         this plugin.
   
   Default
         EXT:eepcollect/template/eepcollect\_pi1.tmpl


.. container:: table-row

   Property
         pid\_list
   
   Data type
         Int
   
   Description
         StoragePage where to save collections in
   
   Default
         0


.. container:: table-row

   Property
         cookieStorageLifeExpires
   
   Data type
         Int
   
   Description
         Time in seconds how long the cookie with collection of pages should be
         alife for the client, after creating any collection
   
   Default
         60\*60\*24\*30 = 2592000


.. container:: table-row

   Property
         pidOfListPageCollect
   
   Data type
         Int
   
   Description
         Page where you will view a list of all collected pages. Uses template
         marker ###VIEWCOLLECTIONLINK### and builds a link to it
   
   Default
         empty


.. container:: table-row

   Property
         pidOfwhatIsPageCollect
   
   Data type
         Page uid
   
   Description
         Page where you can view more information about how to use and so on.
         Creates a titled link (\_LOCAL\_LANG.default.whatispagecollect) in the
         template by ###WHATISPAGECOLLECT###
   
   Default
         empty


.. container:: table-row

   Property
         pidOfExcludedPages
   
   Data type
         List of page uid's
   
   Description
         Commaseparated list of pages, where the selecttoolbarbuttons should
         not be available. Pages, which schouldn't be a part of pagecollection,
         but the collectionoverview should be viewed. Will be merged with
         Flexform settings.
   
   Default
         empty


.. container:: table-row

   Property
         default\_view\_mode
   
   Data type
         String
   
   Description
         Sets the view for plugin. Use:
         
         'view\_list\_mode' … show list of collected pages
         
         'view\_prozess\_mode' … show toolbar
   
   Default
         view\_list\_mode


.. container:: table-row

   Property
         default\_identify\_mode
   
   Data type
         Int
   
   Description
         Sets the kind of how to identify the user, using cookies or feuser
         login. Use:
         
         '1' … identify by cookie only
         
         '2' … identify by feuser only
         
         '3' … identify by both cookie or feuser
         
         (3 … in a special situation it builds two collections, which can't be
         merged automaticly)
   
   Default
         1


.. container:: table-row

   Property
         minimumitems\_toviewcollectionlink
   
   Data type
         Int
   
   Description
         Minimum items in collection, to view link to the hole collection
   
   Default
         1


.. container:: table-row

   Property
         minimumitems\_toviewclearalllink
   
   Data type
         Int
   
   Description
         Minimum items in collection, to view a 'clearAll' link in list.
   
   Default
         2


.. container:: table-row

   Property
         pagelinkType
   
   Data type
         Int
   
   Description
         Shows pagelink as title only or as full rootline. Use:
         
         '0' … Pagetitle
         
         '1' … Rootline
   
   Default
         0


.. container:: table-row

   Property
         pagerootline\_startatlevel
   
   Data type
         Int
   
   Description
         If you view rootline for each collected page, you can change
         startlevel
   
   Default
         0


.. container:: table-row

   Property
         pagerootline\_titlelength
   
   Data type
         Int
   
   Description
         If you view rootline for each collected page, you can change the
         string-length for the hole rootline
   
   Default
         20


.. container:: table-row

   Property
         **Settings for display** (its possible to manipulate a range of
         templateitems by the following stdWraps)


.. container:: table-row

   Property
         listitem.wrap
   
   Data type
         stdWrap
   
   Description
         Possibility for optionSplit wrap-functions
   
   Default
         wrap = \|\|\*\|<hr />\|\|\*\|<hr />\|\|\*\|\|


.. container:: table-row

   Property
         currentpageprozessimage\_stdWrap
   
   Data type
         stdWrap
   
   Description
   
   
   Default


.. container:: table-row

   Property
         currentpageprozesstext\_stdWrap
   
   Data type
         stdWrap
   
   Description
   
   
   Default


.. container:: table-row

   Property
         currentpageprozesstitle\_stdWrap
   
   Data type
         stdWrap
   
   Description
   
   
   Default


.. container:: table-row

   Property
         collectioninfo\_stdWrap
   
   Data type
         stdWrap
   
   Description
   
   
   Default


.. container:: table-row

   Property
         collectioninfo\_pagesnotfound\_stdWrap
   
   Data type
         stdWrap
   
   Description
   
   
   Default


.. container:: table-row

   Property
         viewcollectionlink\_stdWrap
   
   Data type
         stdWrap
   
   Description
   
   
   Default


.. container:: table-row

   Property
         whatispagecollect\_stdWrap
   
   Data type
         stdWrap
   
   Description
   
   
   Default


.. container:: table-row

   Property
         debuginfo\_stdWrap
   
   Data type
         stdWrap
   
   Description
   
   
   Default


.. container:: table-row

   Property
         error\_stdWrap
   
   Data type
         stdWrap
   
   Description
   
   
   Default


.. container:: table-row

   Property
         success\_stdWrap
   
   Data type
         stdWrap
   
   Description
   
   
   Default


.. container:: table-row

   Property
         prozessadd\_stdWrap
   
   Data type
         stdWrap
   
   Description
   
   
   Default


.. container:: table-row

   Property
         prozessdelete\_stdWrap
   
   Data type
         stdWrap
   
   Description
   
   
   Default


.. container:: table-row

   Property
         prozessmoveup\_stdWrap
   
   Data type
         stdWrap
   
   Description
   
   
   Default


.. container:: table-row

   Property
         prozessmovedown\_stdWrap
   
   Data type
         stdWrap
   
   Description
   
   
   Default


.. container:: table-row

   Property
         collectionlist\_pagelinkcurrent\_stdWrap
   
   Data type
         stdWrap
   
   Description
         The link in the list, which is equal to the current viewed page
   
   Default
         wrap = <strong>\|</strong>


.. container:: table-row

   Property
         collectionlist\_pagelink\_stdWrap
   
   Data type
         stdWrap
   
   Description
   
   
   Default


.. container:: table-row

   Property
         collectionlist\_pageurl\_stdWrap
   
   Data type
         stdWrap
   
   Description
   
   
   Default


.. container:: table-row

   Property
         collectionlist\_pagetitle\_stdWrap
   
   Data type
         stdWrap
   
   Description
   
   
   Default


.. container:: table-row

   Property
         **Settings for images**


.. container:: table-row

   Property
         path
   
   Data type
         string/path
   
   Description
         Path to your imagefolder
   
   Default
         typo3conf/ext/eepcollect/res/


.. container:: table-row

   Property
         prozessadd\_img\_small
   
   Data type
         imgfile
   
   Description
         Small button for 'add'
   
   Default
         button\_plus.gif


.. container:: table-row

   Property
         prozessdelete\_img\_small
   
   Data type
         imgfile
   
   Description
         Small button for 'delete
   
   Default
         button\_minus.gif


.. container:: table-row

   Property
         prozessmoveup\_img\_small
   
   Data type
         imgfile
   
   Description
         Small button for 'move up' sorting
   
   Default
         button\_up.gif


.. container:: table-row

   Property
         prozessmoveupdisabled\_img\_small
   
   Data type
         imgfile
   
   Description
         Small disabled button, cant moveup, first item
   
   Default
         button\_up\_disabled.gif


.. container:: table-row

   Property
         prozessmovedown\_img\_small
   
   Data type
         imgfile
   
   Description
         Small button for 'move down' sorting
   
   Default
         button\_down.gif


.. container:: table-row

   Property
         prozessmovedowndisabled\_img\_small
   
   Data type
         imgfile
   
   Description
         Small disabled button, cant movedown, last item
   
   Default
         button\_down\_disabled.gif


.. container:: table-row

   Property
         prozessadd\_img\_big
   
   Data type
         imgfile
   
   Description
         Big button for 'add'
   
   Default
         bigbutton\_plus.gif


.. container:: table-row

   Property
         prozessdelete\_img\_big
   
   Data type
         imgfile
   
   Description
         Big button for 'delete'
   
   Default
         bigbutton\_minus.gif


.. container:: table-row

   Property
         prozessokay\_img\_big
   
   Data type
         imgfile
   
   Description
         Big button if pages was successful included
   
   Default
         bigbutton\_okay.gif


.. container:: table-row

   Property
         **Settings for \_LOCAL\_LANG**


.. container:: table-row

   Property
         enableyourcookie
   
   Data type
         string
   
   Description
         textinfo, that cookie couldnt be set/read ###COOKIEINFO###
   
   Default
         Aktivate your cookies!


.. container:: table-row

   Property
         whatispagecollect
   
   Data type
         string
   
   Description
         linktext to any page which contains information about this tool
         ###WHATISPAGECOLLECT###
   
   Default
         What is 'Pagecollect'?


.. container:: table-row

   Property
         error\_unknown
   
   Data type
         string
   
   Description
   
   
   Default
         Any unknown Error occured.


.. container:: table-row

   Property
         error\_nochanges
   
   Data type
         string
   
   Description
         Textinfo, that no changes appears to the collection.
   
   Default
         Pagecollection wasn't updated!


.. container:: table-row

   Property
         error\_oldsession
   
   Data type
         string
   
   Description
         Textinfo, that no changes appears to the collection. This will
         happens, if the visitor browse back/forward and should refresh the
         site, where any collectionoption was choosen.
   
   Default
         Pagecollection wasn't updated!


.. container:: table-row

   Property
         error\_noviewmode
   
   Data type
         string
   
   Description
         If the admin didnt choose any viewmode for the plugin, this message
         appears.
   
   Default
         No view-mode defined for this plugin!


.. container:: table-row

   Property
         success\_changes
   
   Data type
         string
   
   Description
         Textinfo, that collection was succesfully updated.
   
   Default
         Pagecollection updated!


.. container:: table-row

   Property
         collectioninfo
   
   Data type
         string
   
   Description
         Info about the summary of the collected pages.
   
   Default
         %s page(s) collected


.. container:: table-row

   Property
         collectioninfo\_empty
   
   Data type
         string
   
   Description
         Info about the empty collection.
   
   Default
         No pages in collection.


.. container:: table-row

   Property
         addCurrentPageToCollection
   
   Data type
         string
   
   Description
         Linkttext to add current viewed page to the collection.
   
   Default
         Add this page:


.. container:: table-row

   Property
         delCurrentPageToCollection
   
   Data type
         string
   
   Description
         Linktext to delte the page from collection.
   
   Default
         Delete this page:


.. container:: table-row

   Property
         currentPageAddToCollection
   
   Data type
         string
   
   Description
         Status to the added page.
   
   Default
         Added:


.. container:: table-row

   Property
         currentPageInCollection
   
   Data type
         string
   
   Description
         Status to the saved page.
   
   Default
         Page saved:


.. container:: table-row

   Property
         showFullPageCollection
   
   Data type
         string
   
   Description
         Linktext for collectionresultlist ###VIEWCOLLECTIONLINK###
   
   Default
         Show pagecollection


.. container:: table-row

   Property
         prozess\_add
   
   Data type
         string
   
   Description
         Alttext for toolbarbutton 'add'
   
   Default
         Add page


.. container:: table-row

   Property
         prozess\_delete
   
   Data type
         string
   
   Description
         Alttext for toolbarbutton 'delete'
   
   Default
         Delete page


.. container:: table-row

   Property
         prozess\_moveup
   
   Data type
         string
   
   Description
         Alttext for toolbarbutton 'moveup'
   
   Default
         Move page up


.. container:: table-row

   Property
         prozess\_movedown
   
   Data type
         string
   
   Description
         Alttext for toolbarbutton 'movedown
   
   Default
         Move page down


.. ###### END~OF~TABLE ######

[tsref:plugin.tx\_eepcollect\_pi1]

