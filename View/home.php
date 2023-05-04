<?php
class home {
    
   public function show() {
       include '../View/ressourcesphp/header.php';    
?>
<!-----categories------>
<div class="categories">
        <div class="small-container">
            <center><h5>our categories</h5></center>
            <div class="row">
                <div class="col-3">
                    <a href="#it"><img src="/projet/public/ressources/Images/it.jpg" alt="" width="250px" height="300px"></a>
                    <p>italian food</p>
                </div>
                <div class="col-3">
                    <a href="#tu"><img src="/projet/public/ressources/Images/Plat-Tunisien.png" alt="" width="250px" height="300px"></a>
                    <p>tunisian food</p>
                </div>
                <div class="col-3">
                    <a href="#jp"><img src="/projet/public/ressources/Images/jp.jpg" alt=""width="250px" height="300px"></a>
                    <p>japanese food</p>
                </div>
            </div>
        </div>
       </div>

       <!------menu------>
       <div class="small-container" id="menu">
        <h2 class="title">the Menu</h2>
        <div class="cat" id="tu"><h3>tunisian food</h3>       
         <div class="row">
            <div class="col-4">
                <img src="/projet/public/ressources/Images/couscous.jfif" alt="" height="200px">
                <h4>couscous</h4>
                <p>23dt</p>
            </div>
            <div class="col-4">
                <img src="/projet/public/ressources/Images/lablebi.jpg" alt="" height="200px">
                <h4>lablebi</h4>
                <p>10dt</p>
            </div>
            <div class="col-4">
                <img src="/projet/public/ressources/Images/kafteji.jfif" alt="" height="200px">
                <h4>kafteji</h4>
                <p>15dt</p>
            </div>
        </div>
       </div>
       <hr>
    </div>
    
    <div class="small-container">
        <div class="cat" id="it">
            <h3>italian food</h3> 
         <div class="row">
            <div class="col-4">
                <img src="/projet/public/ressources/Images/lasagnes.jpg" alt="" height="200px">
                <h4>lasagnes</h4>
                <p>30dt</p>
            </div>
            <div class="col-4">
                <img src="/projet/public/ressources/Images/pizza.jfif" alt="" height="200px">
                <h4>pizza</h4>
                <p>28dt</p>
            </div>
            <div class="col-4">
                <img src="/projet/public/ressources/Images/pasta.jfif" alt="" height="200px">
                <h4>pasta</h4>
                <p>35dt</p>
            </div>
        </div>
       </div>
       <hr>
    </div>

    <div class="small-container">
        <div class="cat" id="jp"><h3>japanese food</h3>       
         <div class="row">
            <div class="col-4">
                <img src="/projet/public/ressources/Images/ramen.jfif" alt="" height="200px">
                <h4>ramen</h4>
                <p>18dt</p>
            </div>
            <div class="col-4">
                <img src="/projet/public/ressources/Images/sushi.jpg" alt="" height="200px">
                <h4>sushi</h4>
                <p>55dt</p>
            </div>
            <div class="col-4">
                <img src="/projet/public/ressources/Images/dango.jpg" alt="" height="200px">
                <h4>dango</h4>
                <p>60dt</p>
            </div>
        </div>
       </div>
    </div>

    <!-------------offer------>
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="/projet/public/ressources/Images/drink.jfif" alt="" class="offer-img">
                </div>
                <div class="col-2">
                    <h1>we also offer drinks</h1>
                    <p>Soda / juice / cocktail / water / coffee<i class="fa-regular fa-user-chef"></i> </p>
                </div>
            </div>
        </div>
    </div>

    <!------chef----------->
    <div class="small-container" id="chef">
        <h2 class="title t1">the chefs</h2>      
         <div class="row">
            <div class="col-5">
                <div class="profil">
                    <img src="/projet/public/ressources/Images/ThomasKeller.jpg" alt="" height="350px">
                    <h2>Thomas Keller</h2>
                    <p>Master chef</p>
                </div>
            </div>
            <div class="col-5">
                <div class="profil">
                    <img src="/projet/public/ressources/Images/elena-arzak.jpg" alt="" height="350px">
                    <h2>Elena Arzak</h2>
                    <p>Master chef</p>
                </div>
            </div>
            <div class="col-5">
                <div class="profil">
                    <img src="/projet/public/ressources/Images/mohaned.jpg" alt="" height="350px">
                    <h2>Hannibal</h2>
                    <p>Master chef</p>
                </div>
            </div>
        </div>
       </div>
       <hr>
    </div>

    <?php
        
        include '../View/ressourcesphp/footer.php';
    }

}
