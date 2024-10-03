<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>

<div class="h-screen w-full flex">
    <aside class="p-6 w-64 flex flex-col items-center gap-4 border-r border-gray-200 text-sm">
        <a class="h-10 w-full flex justify-center items-center border border-black hover:bg-black hover:text-white" href="/">Home</a>
        <a class="h-10 w-full flex justify-center items-center border border-black hover:bg-black hover:text-white" href="/create">Tambah Data</a>
    </aside>

    <main class="w-full grow p-6">