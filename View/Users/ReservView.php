<?php

class ReservView{
    public function show(){
        include 'C:/xampp/htdocs/Projet/View/ressourcesphp/headerLogin.php';
        ?>

    <!----------formulaire----------->
    <section>
        <b>Reservation</b>
        <form name="f3" method="POST" action="reserv">

            <div>
                <label for="phone_numb">Phone Number: <br></label>
                <input required type="text" name="Phone_number" placeholder="Type Here" onchange="veriftel(this)">
            </div>
            <br>

            <div>
                <label for="P_N">Number of people: <br></label>
                <input required type="Number" name="Number_of_people" placeholder="Type Here"  min="1" max="12">
            </div>
            <br>
           
           <div>
            <label for="date">Date:</label>
            <input type="date" id="Date" name="Date">
            </div>
            <br>

            <input type="submit" value="Reserver" onclick="">
        </form>
    </section>

        <?php
        
        include 'C:/xampp/htdocs/Projet/View/ressourcesphp/footer.php';
    }

}
