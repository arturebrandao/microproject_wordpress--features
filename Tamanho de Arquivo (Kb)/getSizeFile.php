<?php
function getSizeFile($filepath)
{
    $remoteFile = $filepath;
    $curl = curl_init($remoteFile);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HEADER, true);
    curl_setopt($curl, CURLOPT_NOBODY, true);
    curl_exec($curl);
    $fileSize = curl_getinfo($curl, CURLINFO_CONTENT_LENGTH_DOWNLOAD);

    $fileSizeKB = round($fileSize / 1024);
    return $fileSizeKB;
}
