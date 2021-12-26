<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Praktikum 7</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Barlow+Condensed&display=swap');

    .fontt {
        font-size: 35px;
        font-family: 'Barlow Condensed', sans-serif;
    }

    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;

    }

    body {
        padding: 25px;
        background-color: white;
        color: black;
        font-size: 25px;
    }

    .dark {
        background-color: black;
        color: white;
    }
</style>

<body>
    <h1 class="font" style="background-color:SteelBlue;">Praktikum 7</h1>
    <img src="syugakuryokou_group_kids.png" class="center" alt="Kids holding map">

    <!-- buttondarkmode -->
    <button onclick="darkFunction()" class="fontt">Dark mode</button>

    <!-- provinsi dropdown -->
    <select id=" prov" class="fontt" onchange="giveSelection(this.value)">
        <option>Provinsi</option>
        <option>Kalimantan Timur</option>
        <option>Kalimantan Barat</option>
        <option>Kalimantan Selatan</option>
        <option>Kalimantan Utara</option>
        <option>Kalimantan Tengah</option>
    </select>

    <!-- kota/kabupaten dropdown -->
    <select id="kot" class="fontt" onchange="display(console.log(this.value))">
        <option>Kota</option>
    </select>

    <!-- u/ kalimat -->
    <p id="hasil"></p>

    <script>
        var prov = document.getElementById('prov');
        var kot = document.getElementById('kot');

        var opsi = {
            'Kalimantan Timur': `<option disabled selected>Kota</option>
    <option>Samarinda</option>
    <option>Balikpapan</option>
    <option>Kutai Kartanegara</option>
    <option>Kutai Barat</option>
    <option>Kutai Timur</option>`,

            'Kalimantan Barat': `<option disabled selected>Kota</option>
    <option>Pontianak</option>
    <option>Singkawang</option>
    <option>Ketapang</option>
    <option>Kapuas Hulu</option>
    <option>Sintang</option>`,

            'Kalimantan Selatan': `<option disabled selected>Kota</option>
    <option>Banjarmasin</option>
    <option>Banjarbaru</option>
    <option>Banjar</option>
    <option>Kotabaru</option>
    <option>Tabalong</option>`,

            'Kalimantan Utara': `<option disabled selected>Kota</option>
    <option>Tarakan</option>
    <option>Bulungan</option>
    <option>Malinau</option>
    <option>Nunukan</option>
    <option>Tana Tidung</option>`,

            'Kalimantan Tengah': `<option disabled selected>Kota</option>
    <option>Palangka Raya</option>
    <option>Barito Selatan</option>
    <option>Barito Timur</option>
    <option>Barito Utara</option>
    <option>Kapuas</option>`
        }

        function giveSelection(provalue) {
            kot.innerHTML = opsi[provalue];
        }

        function display(kotdis) {
            var provdis = console.log(prov);
            var hasil = document.getElementById('hasil');
            document.getElementById("hasil").innerHTML = `Pada provinsi ${provdis},terdapat kabupaten/kota ${kotdis}.`;
        }

        //darkmode
        function darkFunction() {
            var element = document.body;
            element.classList.toggle("dark");
        }
    </script>

</body>

</html>