<div id="navigation"> 
    	 <div id="menu-container"> 
            <ul>  
            	<li><a href="index.php">Livraria Online</a></li>          
              <li><a href="index.php">Home<span>Ir para a homepage</span></a></li> 
              <li><a href="index.php?area=lista-de-livros">Livraria<span>procure um livro</span></a></li> 
              
              <?php
                if(isset($_SESSION['id_do_cliente']))
                {
                  ?>
                    <li><a href="logout.php">LOGOUT<span>obrigada pela sua visita</span></a></li> 
                  <?php
                }
                else
                {
                  ?>
                    <li><a href="index.php?area=registo">Registo<span>conheça os nossos serviços</span></a></li> 
                  <?php
                }
              ?>
              
              <li><a href="index.php?area=contactos">Contactos<span>contacte a livraria</span></a></li>                              
            </ul>
        </div>

        <div class="clear"></div>                   
    </div>