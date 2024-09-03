<?php
   $file = "sample.txt";

   // Clears cache for "sample.txt" only
   clearstatcache(true, $file); 
   echo "Cache cleared for $file\n";

   // Clear cache for all files
   clearstatcache(true); 
   echo "Cache cleared for all files\n";

?>