<?php

return [
    'footer' => [
        // The original archive did not provide an official YouTube channel URL.
        // Use YouTube search until the owner supplies the verified channel URL.
        'youtube_url' => env('MREC_YOUTUBE_URL', 'https://www.youtube.com/results?search_query=MREC+Telkom+University'),
    ],
];
