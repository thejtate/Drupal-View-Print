<?php
  $view = views_get_view('VIEWS_MACHINE_NAME');
  $view->set_display('DISPLAY_ID');
  print $view->get_title();
  print $view->preview('DISPLAY_ID');
?> 