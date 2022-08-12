 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Gych CMS</title>
    <script src="/js/app.js" defer></script>
    <link href="/css/app.css" rel="stylesheet">

    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>

</head>
<body>
<div class="flex flex-col min-h-screen">
    <x-header />



    <main class="bg-slate-200 pt-2 flex justify-center flex-1">
        <div class="w-4/5 flex pb-2">
            {{ $slot }}
        </div>
    </main>

    <x-footer /> 

    <x-flash /> 
    </div>
</body>
</html>

