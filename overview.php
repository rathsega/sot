<?php
require 'vendor/autoload.php';

use PhpOffice\PhpWord\IOFactory;

// Path to the Word document
$filePath = 'overviews/' . $current_slug . '.docx';

// Load the Word document
$phpWord = IOFactory::load($filePath);

// Create an HTML writer
$htmlWriter = IOFactory::createWriter($phpWord, 'HTML');

// Save the document as an HTML string
ob_start();
$htmlWriter->save('php://output');
$htmlContent = ob_get_clean();

// Function to fix list elements in the HTML
function fixHtmlLists($htmlContent) {
    $htmlContent = preg_replace_callback('/<li>.*?<\/li>/s', function($matches) {
        $match = $matches[0];
        // Fix ordered lists
        if (strpos($match, 'data-list-level="0"') !== false) {
            $match = preg_replace('/<li data-list-level="0">(.*?)<\/li>/s', '<ol><li>$1</li></ol>', $match);
        }
        // Fix unordered lists
        if (strpos($match, 'data-list-level="1"') !== false) {
            $match = preg_replace('/<li data-list-level="1">(.*?)<\/li>/s', '<ul><li>$1</li></ul>', $match);
        }
        return $match;
    }, $htmlContent);

    // Remove the data-list-level attributes
    $htmlContent = preg_replace('/ data-list-level="\d+"/', '', $htmlContent);

    // Merge consecutive lists
    $htmlContent = preg_replace('/<\/ol>\s*<ol>/', '', $htmlContent);
    $htmlContent = preg_replace('/<\/ul>\s*<ul>/', '', $htmlContent);

    return $htmlContent;
}

// Fix lists in the HTML content
echo fixHtmlLists($htmlContent);
?>

