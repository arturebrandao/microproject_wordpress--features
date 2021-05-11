<?php
function getExtension($filepath)
{
    $filePath = pathinfo($filepath);
    $extension = $filePath['extension'];
    return $extension;
}
