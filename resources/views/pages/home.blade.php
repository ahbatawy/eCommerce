<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>



    {{--  @if (@empty($name))
    من فضلك أدخل الاسم

    @else
    Welcome {{$name}} in Home page your age: {{$age}}

    @endif  --}}
    Welcome Dear
    <a href ="{{ route('callhome') }}">مرحبا بك فى صفحة البداية</a>

</body>
</html>
