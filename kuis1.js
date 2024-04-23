function hitung() {
    let selectedShapes = document.querySelectorAll('input[name="bangunRuang"]:checked');
    let inputFields = document.getElementById("inputFields");
    let resultDiv = document.getElementById("result");
    resultDiv.innerHTML = ""; // Kosongkan hasil sebelumnya

    selectedShapes.forEach(shape => {
        if (shape.value === "volume_balok") {
            let panjang = parseFloat(document.getElementById("panjang_volume_balok").value);
            let lebar = parseFloat(document.getElementById("lebar_volume_balok").value);
            let tinggi = parseFloat(document.getElementById("tinggi_volume_balok").value);
            let volume = panjang * lebar * tinggi;
            resultDiv.innerHTML += `<p>Volume Balok: ${volume}</p>`;
        } else if (shape.value === "volume_kubus") {
            let sisi = parseFloat(document.getElementById("sisi_volume_kubus").value);
            let volume = Math.pow(sisi, 3);
            resultDiv.innerHTML += `<p>Volume Kubus: ${volume}</p>`;
        } else if (shape.value === "volume_tabung") {
            let jari = parseFloat(document.getElementById("jari_volume_tabung").value);
            let tinggi = parseFloat(document.getElementById("tinggi_volume_tabung").value);
            let volume = Math.PI * Math.pow(jari, 2) * tinggi;
            resultDiv.innerHTML += `<p>Volume Tabung: ${volume.toFixed(2)}</p>`;
        } else if (shape.value === "luas_permukaan_balok") {
            let panjang = parseFloat(document.getElementById("panjang_luas_permukaan_balok").value);
            let lebar = parseFloat(document.getElementById("lebar_luas_permukaan_balok").value);
            let tinggi = parseFloat(document.getElementById("tinggi_luas_permukaan_balok").value);
            let luasPermukaan = 2 * ((panjang * lebar) + (panjang * tinggi) + (lebar * tinggi));
            resultDiv.innerHTML += `<p>Luas Permukaan Balok: ${luasPermukaan}</p>`;
        } else if (shape.value === "luas_permukaan_kubus") {
            let sisi = parseFloat(document.getElementById("sisi_luas_permukaan_kubus").value);
            let luasPermukaan = 6 * Math.pow(sisi, 2);
            resultDiv.innerHTML += `<p>Luas Permukaan Kubus: ${luasPermukaan}</p>`;
        } else if (shape.value === "luas_permukaan_tabung") {
            let jari = parseFloat(document.getElementById("jari_luas_permukaan_tabung").value);
            let tinggi = parseFloat(document.getElementById("tinggi_luas_permukaan_tabung").value);
            let luasPermukaan = 2 * Math.PI * jari * (jari + tinggi);
            resultDiv.innerHTML += `<p>Luas Permukaan Tabung: ${luasPermukaan.toFixed(2)}</p>`;
        }
    });
}
