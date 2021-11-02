<!DOCTYPE html>
<html>
    <head>
        <title>Formulir Data</title>
    </head>
    <body>
        <form action="/formulir/proses" method="POST">
        @csrf
            <br>
            <label>Nama</label>
            <br>
            <input type="text" name="nama">
            <br>
            <label>Alamat</label>
            <br>
            <textarea name="alamat"></textarea>
            <br>
            <input type="submit" value="Simpan">
        </form>
    </body> 
</html>
