

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

There are already defined styles inside the template file. It might be more useful to describe some classes for CSS and use them instead.


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
         Contain all markers to list and handle (toolbar features like 'add/delete/move') pages in collection


.. container:: table-row

   Marker
         COLLECTDISPLAY\_RESULTLIST
   
   Description
         Contains all markers just to list the given collection without toolbar features


.. container:: table-row

   Marker
         **Subsections**


.. container:: table-row

   Marker
         CURRENTPAGEPROZESSSECTION
   
   Description
         Section for viewing current available option for current viewed paged


.. container:: table-row

   Marker
   
   
   Description
         CURRENTPAGEPROZESSIMAGE
   
   c
         A button with the current available option for the current viewed page


.. container:: table-row

   Marker
   
   
   Description
         CURRENTPAGEPROZESSTEXT
   
   c
         A textinfo, about the current available option for the current viewed
         page


.. container:: table-row

   Marker
   
   
   Description
         CURRENTPAGEPROZESSTITLE
   
   c
         The title of the current viewed page


.. container:: table-row

   Marker
         COOKIEINFOSECTION
   
   Description
         If cookie is enabled it will be shown here


.. container:: table-row

   Marker
   
   
   Description
         COOKIEINFO
   
   c
         Shows a textinfo, that cookie couldn't be set/read


.. container:: table-row

   Marker
         VIEWCOLLECTIONINFOSECTION
   
   Description
         Shows info about the summary or emptiness of the collection


.. container:: table-row

   Marker
   
   
   Description
         COLLECTIONINFO
   
   c
         Will show the summary of the collection in a short textinfo


.. container:: table-row

   Marker
         VIEWCOLLECTIONTOOLBARLISTSECTION
   
   Description
         Section to show a list of pages in collection


.. container:: table-row

   Marker
         VIEWCOLLECTIONLISTSECTION
   
   Description
         Section to show a second list of pages in collection


.. container:: table-row

   Marker
   
   
   Description
         PROZESSDELETE
   
   c
         Button to handle the collection (delete)


.. container:: table-row

   Marker
   
   
   Description
         PROZESSMOVEUP
   
   c
         Button to handle the collection (moveup)


.. container:: table-row

   Marker
   
   
   Description
         PROZESSMOVEDOWN
   
   c
         Button to handle the collection (movedown)


.. container:: table-row

   Marker
   
   
   Description
         PAGELINK
   
   c
         Shows the pagetitle wrapped in a link


.. container:: table-row

   Marker
   
   
   Description
         PAGETITLE
   
   c
         Shows only the pagetitle


.. container:: table-row

   Marker
   
   
   Description
         PAGECONTENT
   
   c
         A placeholder to wrap it with some content defined via TypoScript
         (plugin.tx\_eepcollect\_pi1.display.pagecontent\_stdWrap)


.. container:: table-row

   Marker
         VIEWCOLLECTIONLINKSECTION
   
   Description
         Section to show some further links for collection handling


.. container:: table-row

   Marker
   
   
   Description
         VIEWCOLLECTIONLINK
   
   c
         Shows a link to the resultlistpage, as choosen in the plugin


.. container:: table-row

   Marker
         **Single markers (no sections)**


.. container:: table-row

   Marker
         COLLECTIONSMARTLIST
   
   Description
         Can be used to build an HMENU with TSSetup: stdWrap.setCurrent =1


.. container:: table-row

   Marker
         WHATISPAGECOLLECT
   
   Description
         Link to any page which contain information about this tool


.. ###### END~OF~TABLE ######

