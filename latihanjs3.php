<!DOCTYPE html>
<html>
<body>
<h2>Kalkulator</h2>
<form>
nilai 1:
<input type="number" name="nilai1" id="nilai1">
<br><br>
nilai2:
<input type="number" name="nilai2" id="nilai2">
<br><br>
<button type="button" onclick ="myfungsi()">tambah</button>
<button type="button" onclick ="myfungsi1()">kurang</button>
<button type="button" onclick ="myfungsi2()">kali</button>
<button type="button" onclick ="myfungsi3()">bagi</button>
<br><br>
<input type="number" name="hasil" id="hasil">
</form>

<script>
    function luas(p,l){
                let L = p*l;
                return L;
            }

            // Fungsi Tambah
            function myfungsi(n1, n2){
                let x = n1;
                let y = n2;
                console.log(x);
                console.log(y);
                let z = parseInt(x) + parseInt(y);
                console.log(z);
                document.getElementById("hasil").value = z;
            }
    // function myfungsi()
    // {
    //     let x = document.getElementById("nilai1").value;
    //     let y = document.getElementById("nilai2").value;
    //     console.log(x);
    //     console.log(y);
    //     let z = parseInt(x)+parseInt(y);
    //     console.log(z);
    //     document.getElementById("hasil").value = z;
    // }

    function myfungsi1()
    {
        let x = document.getElementById("nilai1").value;
        let y = document.getElementById("nilai2").value;
        console.log(x);
        console.log(y);
        let z = parseInt(x) - parseInt(y);
        console.log(z);
        document.getElementById("hasil").value = z;
    }

    function myfungsi2()
    {
        let x = document.getElementById("nilai1").value;
        let y = document.getElementById("nilai2").value;
        console.log(x);
        console.log(y);
        let z = parseInt(x)*parseInt(y);
        console.log(z);
        document.getElementById("hasil").value = z;
    }

    function myfungsi3()
    {
        let x = document.getElementById("nilai1").value;
        let y = document.getElementById("nilai2").value;
        console.log(x);
        console.log(y);
        let z = parseInt(x)/parseInt(y);
        console.log(z);
        document.getElementById("hasil").value = z;
    }
</script>
</body>
</html>