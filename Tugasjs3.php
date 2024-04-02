<!DOCTYPE html>
<html>
    <body>
        <h2> Tugas3 </h2>
        
        <form>
        <input type="checkbox" id="Balok" name="Balok" value="Balok">
        <label for="Balok"> Balok </label>
        <input type="checkbox" id="Kubus" name="Kubus" value="Kubus">
        <label for="Kubus"> Kubus </label>
        <br>
        <input type="number" name="sisi" id="sisi">
        <br>
        <button type="button" onclick = "myfungsi()">total</button>
        <br>
        <input type="number" name="hasil" id="hasil">
        </form>

        <script>
            if (isset($_POST['Kubus'])) {
                function myFungsi1()
                {
                    let x = document.getElementById("nilai1").value;
                    console.log(x);
                    let z = parseInt(x) * parseInt(x) * parseInt(x)
                        console.log(z);
                        document.getElementById("hasil").value = z;
                }
            }else {
   // Checkbox is not checked
   // Perform actions or logic for unchecked checkbox
            }
        </script>


    </body>
</html>