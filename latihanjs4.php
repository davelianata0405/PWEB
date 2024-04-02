<!DOCTYPE html>
    <html>
        <body>
            <h2>JavaScript if</h2>

            <p id= "isi"> Good Evening!</p>
            <form>
                UTS:
                <input type="number" name="nilaiuts" id="nilaiuts">
                <br><br>
                <input type="number" name="nilaiuas" id="nilaiuas">
                <br><br>
                <input type="number" name="nilaitugas" id="nilaitugas">
                <button type="button" onclick = "myfungsi()">total</button>
                <br><br>
                <input type="varchar" name="nilaihuruf" id="nilaihuruf">

            <script>
                let nilai=80;
                if(nilai >= 80){
                    document.getElementById("isi").innerHTML = "A";
                }
                else if (nilai >= 70)
                {
                    document.getElementById("isi").innerHTML = "B";
                }
                else
                {
                    document.getElementById("isi").innerHTML = "C";
                }
            </script>
        </body>
    </html>
