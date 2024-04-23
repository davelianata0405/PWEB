<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Bangun Ruang</title>
    <style>
        label {
            display: block;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <h2>Kalkulator Bangun Ruang</h2>
    <form>
        <label><input type="checkbox" name="bangunRuang" value="volume_balok"> Volume Balok</label>
        <label><input type="checkbox" name="bangunRuang" value="volume_kubus"> Volume Kubus</label>
        <label><input type="checkbox" name="bangunRuang" value="volume_tabung"> Volume Tabung</label>
        <label><input type="checkbox" name="bangunRuang" value="luas_permukaan_balok"> Luas Permukaan Balok</label>
        <label><input type="checkbox" name="bangunRuang" value="luas_permukaan_kubus"> Luas Permukaan Kubus</label>
        <label><input type="checkbox" name="bangunRuang" value="luas_permukaan_tabung"> Luas Permukaan Tabung</label>

        <div id="inputFields">
            <!-- Input fields for specific calculations will be inserted here -->
        </div>

        <button type="button" onclick="hitung()">Hitung</button>
    </form>
    <script src ="kuis1.js"></script>

    <script>
        function hitung() {
            let selectedShapes = document.querySelectorAll('input[name="bangunRuang"]:checked');
            let inputFields = document.getElementById("inputFields");
            inputFields.innerHTML = "";

            selectedShapes.forEach(shape => {
                if (shape.value === "volume_balok" || shape.value === "luas_permukaan_balok") {
                    inputFields.innerHTML += `
                        <label>Panjang: <input type="number" id="panjang_${shape.value}" min="0"></label>
                        <label>Lebar: <input type="number" id="lebar_${shape.value}" min="0"></label>
                        <label>Tinggi: <input type="number" id="tinggi_${shape.value}" min="0"></label>
                    `;
                } else if (shape.value === "volume_kubus" || shape.value === "luas_permukaan_kubus") {
                    inputFields.innerHTML += `
                        <label>Sisi: <input type="number" id="sisi_${shape.value}" min="0"></label>
                    `;
                } else if (shape.value === "volume_tabung" || shape.value === "luas_permukaan_tabung") {
                    inputFields.innerHTML += `
                        <label>Jari-jari: <input type="number" id="jari_${shape.value}" min="0"></label>
                        <label>Tinggi: <input type="number" id="tinggi_${shape.value}" min="0"></label>
                    `;
                }
            });
        }
    </script>
</body>
</html>
