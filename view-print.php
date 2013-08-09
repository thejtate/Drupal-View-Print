<?php
  // More control to printing view
  $view = views_get_view('VIEWS_MACHINE_NAME');
  $view->set_display('DISPLAY_ID');
  print $view->get_title();
  print $view->preview('DISPLAY_ID');
  
  
  // Easier method of printing view
  print views_embed_view('VIEWS_MACHINE_NAME', 'DISPLAY_ID', $view_arg); 
?> 