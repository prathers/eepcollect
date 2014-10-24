

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


Template
^^^^^^^^

There are defined styles already inside the templatefile. It might be
more usefull to describe some classes for CSS and use them instead.


Markers for use in template
"""""""""""""""""""""""""""

.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Marker
         Marker:
   
   Description
         Description:


.. container:: table-row

   Marker
         **Mainsections for choosen view mode**


.. container:: table-row

   Marker
         COLLECTDISPLAY\_TOOLBAR
   
   Description
         contains all markers to list and handle (toolbarfeatures like
         'add/delete/move') pages in collection


.. container:: table-row

   Marker
         COLLECTDISPLAY\_RESULTLIST
   
   Description
         contains all markers just to list the given collection without
         toolbarfeatures


.. container:: table-row

   Marker
         **Subsections**


.. container:: table-row

   Marker
         CURRENTPAGEPROZESSSECTION
   
   Description
         section for viewing current available option for current viewed paged


.. container:: table-row

   Marker
   
   
   Description
         CURRENTPAGEPROZESSIMAGE
   
   c
         a button with the currentavailable option for the current viewed page


.. container:: table-row

   Marker
   
   
   Description
         CURRENTPAGEPROZESSTEXT
   
   c
         a textinfo, about the current available option for the current viewed
         page


.. container:: table-row

   Marker
   
   
   Description
         CURRENTPAGEPROZESSTITLE
   
   c
         thetitle of the current viewed page


.. container:: table-row

   Marker
         COOKIEINFOSECTION
   
   Description
         if cookie are enabled it will be shown here


.. container:: table-row

   Marker
   
   
   Description
         COOKIEINFO
   
   c
         shows a textinfo, that cookie couldnt be set/read


.. container:: table-row

   Marker
         VIEWCOLLECTIONINFOSECTION
   
   Description
         shows info about the summary or emptyness of the collection


.. container:: table-row

   Marker
   
   
   Description
         COLLECTIONINFO
   
   c
         will show the summary of the collection in a short textinfo


.. container:: table-row

   Marker
         VIEWCOLLECTIONTOOLBARLISTSECTION
   
   Description
         section to show a list of pages in collection


.. container:: table-row

   Marker
         VIEWCOLLECTIONLISTSECTION
   
   Description
         section to show a second list of pages in collection


.. container:: table-row

   Marker
   
   
   Description
         PROZESSDELETE
   
   c
         button to handle the collection (delete)


.. container:: table-row

   Marker
   
   
   Description
         PROZESSMOVEUP
   
   c
         button to handle the collection (moveup)


.. container:: table-row

   Marker
   
   
   Description
         PROZESSMOVEDOWN
   
   c
         button to handle the collection (movedown)


.. container:: table-row

   Marker
   
   
   Description
         PAGELINK
   
   c
         shows the pagetile wrapped in a link


.. container:: table-row

   Marker
   
   
   Description
         PAGETITLE
   
   c
         shows only the pagetitle


.. container:: table-row

   Marker
   
   
   Description
         PAGECONTENT
   
   c
         a placeholder to wrap it with some content defined via TypoScript
         (plugin.tx\_eepcollect\_pi1.display.pagecontent\_stdWrap)


.. container:: table-row

   Marker
         VIEWCOLLECTIONLINKSECTION
   
   Description
         section to show some further links for collectionhandling


.. container:: table-row

   Marker
   
   
   Description
         VIEWCOLLECTIONLINK
   
   c
         shows a link to the resultlistpage, as choosen in the plugin


.. container:: table-row

   Marker
         **Single markers (no sections)**


.. container:: table-row

   Marker
         COLLECTIONSMARTLIST
   
   Description
         can be used to build an HMENU with TSSetup: stdWrap.setCurrent =1


.. container:: table-row

   Marker
         WHATISPAGECOLLECT
   
   Description
         link to any page which contains information about this tool


.. ###### END~OF~TABLE ######

