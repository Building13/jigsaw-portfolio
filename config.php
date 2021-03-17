<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => 'http://jigsaw-portfolio.test',
    'title' => 'Jigsaw Portfolio',
    'description' => 'This is a portfolio site built on Jigsaw.',
        // collections
        'collections' => [
        'projects' => [
        'sort' => '-date',
        'path' => 'projects/{filename}',
        'filter' => function ($item) {
        return $item->published;
        }
        ],
        'proposals' => [
        'sort' => '-date',
        'path' => 'proposals/{filename}',
        'filter' => function ($item) {
        return $item->published;
        }
        ],
        'videos' => [
        'author' => 'Nathan Gross', // Default author, if not provided in a post
        'sort' => '-date',
        'path' => 'video/{filename}',
        'filter' => function ($item) {
        return $item->published;
        }
        ],
        'posts' => [
        'author' => 'Nathan Gross', // Default author, if not provided in a post
        'sort' => '-date',
        'path' => 'blog/{filename}',
        'filter' => function ($item) {
        return $item->published;
        }
        ],
        'archive' => [
        'author' => 'Nathan Gross', // Default author, if not provided in a post
        'sort' => '-date',
        'path' => 'archive/{filename}',
        'filter' => function ($item) {
        return $item->published;
        }
        ],
        // 'categories' => [
        // 'path' => '/blog/categories/{filename}',
        // 'posts' => function ($page, $allPosts) {
        // return $allPosts->filter(function ($post) use ($page) {
        // return $post->categories ? in_array($page->getFilename(), $post->categories, true) : false;
        // });
        // },
        // ],
        ],

        // helpers
        'getDate' => function ($page) {
        return Datetime::createFromFormat('U', $page->date);
        },
        'getExcerpt' => function ($page, $length = 255) {
        if ($page->excerpt) {
        return $page->excerpt;
        }

        $content = preg_split('/
        <!-- more -->/m', $page->getContent(), 2);
        $cleaned = trim(
        strip_tags(
        preg_replace(['/
        <pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $content[0]),
                '<code>'
            )
        );

        if (count($content) > 1) {
            return $cleaned;
        }

        $truncated = substr($cleaned, 0, $length);

        if (substr_count($truncated, '<code>') > substr_count($truncated, '</code>')) {
            $truncated .= '</code>';
        }

        return strlen($cleaned) > $length
            ? preg_replace('/\s+?(\S+)?$/', '', $truncated) . '...'
            : $cleaned;
    },
    'isPublished' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
];