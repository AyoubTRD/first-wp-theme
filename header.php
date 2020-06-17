<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
  <meta charset="<?php bloginfo("charset") ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>First theme</title>
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <?php wp_head() ?>
</head>

<body>
  <header class="mb-5">
    <nav class="container mx-auto flex items-center justify-between h-24 px-3 md:px-6">
      <h1 class="text-blue-400 text-4xl font-bold">Hello world</h1>
      <ul class="flex justify-between">
        <li><a href="#" class="text-black hover:text-blue-400 transition duration-100 text-lg mx-4">Home</a></li>
        <li><a href="#" class="text-black hover:text-blue-400 transition duration-100 text-lg mx-4">Blog</a></li>
      </ul>
    </nav>
  </header>