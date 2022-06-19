<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div id="container">
            <header>
                <h1>Layout Sederhana</h1>
            </header>
            <nav>
                <a href="Home.php">home</a>
                <a href="artikel.php" >Artikel</a>
                <a href="about.php" >About</a>
                <a href="kontak.php" class="active">Kontak</a>
            </nav>
     <form action="proses.php" method="post">
             <fieldset>
                    <legend>Data Pelanggan</legend>
                    <p>
                        <label for="nama">Nama</label>
                        <input type="text" id="nama" name="nama">
                    </p>
                    
                     <select id="fakultas">
                            <option value="fakultas">Pilih Kelas</option>
                            <option value="Teknik">TI.20.B.1</option>
                    </select>
                    <select id="nim">
                        <option value="nim">Pilih NIM</option>
                        <option value="Teknik">312010154</option>
                    </select>
                    <p>
                        <label for="m">Message</label>
                        <textarea id="m" name="m" cols="20" rows="3"></textarea>
                    </p>
                <p><input type="submit" value="Input"></p>
            </fieldset>
            </form>
            