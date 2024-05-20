<?php

function getAllNotes(): void {
    $filePath = __DIR__ . '/../notes.txt';
    echo file_get_contents($filePath);
}
