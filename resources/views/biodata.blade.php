<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Formulir Biodata</h2>
    <form action="/biodata"method="POST">
        Nama : <br>
        <input type="text" name="name"value="{{ @old('nama') }}">
        @error('nama')
            <br><label style="color: red">{{ $message }}</label>
        @enderror
        <br>
        Jenis Kelamin : <br>
        <select nam="gender">
            <option value="">--pilih--</option>
            <option value="laki-laki">Laki-laki </option>
            <option value="Perempuan">Perempuan </option>
        </select> <br>
        Email :<br>
        <input type="text" name="email" id=""> <br>
        Nomor Ponsel : <br>
        <input type="text" name="Ponsel" id=""> <br>
        <button type="submit">Kirim</button>
</body>

</html>
