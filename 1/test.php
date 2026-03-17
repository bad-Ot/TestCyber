<?php

require_once('../_helpers/strip.php');

$xml = isset($_GET['xml']) && strlen($_GET['xml']) > 0
    ? $_GET['xml']
    : '<root><content>No XML found</content></root>';

$document = new DOMDocument();
$document->loadXML($xml);
$parsedDocument = simplexml_import_dom($document);

echo $parsedDocument->content;