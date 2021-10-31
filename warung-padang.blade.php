<!DOCTYPE html>
<html lang="en">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>warung padang</title>
</head>
<body>
    <form action="/pesan/proses" method="post">
    @csrf
        @foreach($makan as $makanan)
        <input type="checkbox" name="makanan" value="{{$makanan}}">{{$makanan}}<br>
        @endforeach <br>
        @foreach($minum as $minuman)
        <input type="checkbox" name="minuman" value="{{$minuman}}">{{$minuman}}<br>
        @endforeach
        <br>
        <input type="submit" value="KIRIM" name="submit">
    </form>
</body>
</html>