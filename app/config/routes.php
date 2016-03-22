<?php 
  // Home
  Router::connect('/', array('controller' => 'articles', 'category' => 'all'));
  Router::connect('/news_hot/', array('controller' => 'articles', 'category' => 'news_hot'));
  Router::connect('/updates/', array('controller' => 'articles', 'category' => 'news_hot'));
  Router::connect('/news_society/', array('controller' => 'articles', 'category' => 'news_society'));
  Router::connect('/news_entertainment/', array('controller' => 'articles', 'category' => 'news_entertainment'));
  Router::connect('/news_tech/', array('controller' => 'articles', 'category' => 'news_tech'));
  Router::connect('/news_car/', array('controller' => 'articles', 'category' => 'news_car'));
  Router::connect('/news_sports/', array('controller' => 'articles', 'category' => 'news_sports'));
  Router::connect('/news_finance/', array('controller' => 'articles', 'category' => 'news_finance'));

  Router::connect('/admin', array('controller' => 'users', 'action' => 'index', 'admin' => true));

  // Static - no databases
  Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
