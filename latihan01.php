<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Latihan Form</title>
</head>
<body>
    <form name="latihan01" id="latihan01" method="POST" onsubmit="return checkform(this)" class="form-control w-50 m-auto mt-4">
        <div>
            NIM
            <input class="form-control" type="text" name="txNIM" id="NIM">
        </div> <br>
        <div>
            NAMA
            <input class="form-control" type="text" name="txNAMA" id="NAMA">
        </div> <br>
        <div>
            Jenis Kelamin
            <input type="radio" name="txJKEL" id="JKEL" value="L">Laki-Laki
            <input type="radio" name="txJKEL" id="JKEL" value="P">Perempuan
        </div> <br>
        <div>
            Jurusan
            <select name="txJURUSAN" id="JURUSAN" class="form-control">
                <option value="Tata Boga">Tata Boga</option>
                <option value="Tata Busana">Tata Busana</option>
                <option value="Tata Mesin">Tata Mesin</option>
                <option value="Tata Elektro">Tata Elektro</option>
                <option value="Tata Multimedia">Tata Multimedia</option>
            </select>
        </div> <br>
        <div>
            Hobi
            <input type="checkbox" name="txHOBI_Mancing" value="Mancing">Mancing
            <input type="checkbox" name="txHOBI_Nyanyi" value="Nyanyi" >Nyanyi
            <input type="checkbox" name="txHOBI_Tidur" value="Tidur" >Tidur
            <input type="checkbox" name="txHOBI_Manggang" value="Manggang" >Manggang
            <input type="checkbox" name="txHOBI_Nganggur" value="Nganggur">Nganggur
            <input type="checkbox" name="txHOBI_Makan" value="Makan">Makan
            <input type="checkbox" name="txHOBI_Bermain" value="Bermain">Bermain
            <input type="checkbox" name="txHOBI_Berkebun" value="Berkebun" >Berkebun
        </div> <br>
        <button class="btn btn-dark" type="submit"> Kirim Data</button>
    </form>

    <script>
        function checkform(frm){
            let F = frm.elements;
            let nim = F.namedItem("txNIM").value;
            let nama = F.namedItem("txNAMA").value;
            let jnskel = F.namedItem("txJKEL").value;
            let jur = F.namedItem("txJURUSAN").value;
            let hob = [
                F.namedItem("txHOBI_Mancing").checked,
                F.namedItem("txHOBI_Nyanyi").checked,
                F.namedItem("txHOBI_Tidur").checked,
                F.namedItem("txHOBI_Manggang").checked,
                F.namedItem("txHOBI_Nganggur").checked,
                F.namedItem("txHOBI_Bermain").checked,
                F.namedItem("txHOBI_Berkebun").checked
            ]

            console.log("NIM" + nim);
            console.log("NAMA" + nama);
            console.log("Jenis Kelamin" + jnskel);
            console.log("Jurusan" + jur);
            console.log("Hobi" + hob);

            return false;
        }
    </script>
</body>
</html>