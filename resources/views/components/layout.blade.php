<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css' , 'resources/js/app.js'])
    <title>the aulab post</title>
</head>
<body>
    <x-navbar></x-navbar>
    <div class="container background min-vh-100">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                {{$slot}}
    
            </div>     
        </div>
     </div>
    
    <x-footer></x-footer>
</body>
</html>