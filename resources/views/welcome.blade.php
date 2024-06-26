<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="bg-teal-500 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a class="border" href="">LOGO</a>
            <ul class="flex space-x-4">
                <li class="px-2"><a href="#" class="text-white">INICIO</a></li>
                <li class="px-2"> <a href="#" class="text-white">PRODUCTOS</a></li>
                <li class="px-2"> <a href="#" class="text-white">NOSOTROS</a></li>
                <li class="px-2"> <a href="{{route('indexLogin')}}" class="text-white">LOGIN</a></li>
                <li class="px-2"> <a href="#" class="text-white">REGISTRARSE</a></li>
            </ul>    
        </div>
    </nav>
</body>
</html>