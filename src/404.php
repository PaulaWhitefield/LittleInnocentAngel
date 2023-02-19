<?php

$page_title = "Not Found (404)";
$friendly_urls = false;

$page_content = function()
{
?>

<div class="w3-center">
    <h2><b>Not Found (404)</b></h2>
    <p>Oops, looks like there is nothing to be found here. Please check and try again, or get in touch if you need help.</p>
</div>

<?php
};

include __DIR__ . DIRECTORY_SEPARATOR . "_includes" . DIRECTORY_SEPARATOR . "base.php";
