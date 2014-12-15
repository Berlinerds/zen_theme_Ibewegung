   <?php 
     $query = "SELECT nid FROM node WHERE type='highlight' ORDER BY changed DESC";
     $queryResult = db_query ($query);

     while ($fila = db_fetch_object($queryResult)) {   

         $nodo = node_load($fila->nid);
         
         //dsm($nodo);
         
         if ($nodo->field_show_highlight[0]["value"]){ 
           
           $link = '<img src="/'. $nodo->field_highlight_image[0]["filepath"] . '" 
                    title="'. $nodo->field_highlight_footer[0]["value"].'" />';
           
           if ($nodo->field_highlight_link[0]["value"] != NULL)
             echo '<a href="'.$nodo->field_highlight_link[0]["value"].'">' . $link . '</a>';
           else
             echo $link;
             
           if ($nodo->field_highlight_footer[0]["value"] != NULL)
             echo '<div id="right-block-title-1">'. $nodo->field_highlight_footer[0]["value"] .'</div>';
           
           break;
         }
      }
   ?>