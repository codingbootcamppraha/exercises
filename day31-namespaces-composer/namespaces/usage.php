<?php

namespace Whatever;

use PolakJan\Bookshop\Page as WebsitePage;
use JohnDoe\BookPreviews\Page as BookPage;
use JohnDoe\BookPreviews\Page; // == use JohnDoe\BookPreviews\Page as Page

require_once 'Page.php';
require_once 'BookPreviews/Page.php';

$homepage = new WebsitePage;

var_dump( $homepage );

$page_1 = new BookPage;

var_dump( $page_1 );
