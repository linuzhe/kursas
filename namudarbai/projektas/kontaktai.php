<?php
    include_once 'header.php';
?> 

    <section id="contacts">
        <div>        
            <h2>Susisiekite:</h2>
             <section class="main-container">
             <div class="main-wrapper-signup">        
               <form action="#">

            <fieldset style="width:800px">
            <legend>Jūsų informacija
            </legend>
                <div id="name">
                    <label for="name">Vardas:</label>
                    <input type="text" name="name" placeholder="Įrašykite vardą">
                </div>
                <div class="visai" id="lastName">
                    <label for="lastName">Pavardė:</label>
                    <input type="text" name="lastName" placeholder="Įrašykite pavardę">
                </div>
            </fieldset>

            <fieldset style="width:800px">
            <legend>Klausimai</legend>
                <div class="visai" id="how">
                    <label for="how">Kaip sužinojote apie mus?</label>
                        <select>
                          <option name="how" value="google">Google</option>
                          <option name="how" value="tv">TV</option>
                          <option name="how" value="radijas">Radijas</option>
                          <option name="how" value="draugai">Draugai</option>
                        </select>
                </div>
                <div class="visai" id="visitAgain">
                    <label for="visitAgain">Ar apsilankysite vėl?</label><br>
                           Taip <input type="radio" name="visitAgain" value="yes">
                           Ne <input type="radio" name="visitAgain" value="no">
                           Galbūt <input type="radio" name="visitAgain" value="maybe">

                </div>
                <div class="visai" id="message">
                    <label for="message">Jūsų atsiliepimas, klausimas, poreikis:</label>
                    <br>
                    <input type="textarea" name="message" placeholder ="Jūsų žinutės tekstas...">
                </div>
                <div id="checkbox">
                <label for="checkbox">Pažymėkite programavimo/žymėjimo kalbas su kuriomis esate susipažinę:</label>
                        <ul class="checkbox">
                            <li><input type="checkbox" name="c#" value="c#">C#</li>
                            <li><input type="checkbox" name="html" value="html">HTML</li>
                            <li><input type="checkbox" name="python" value="python">Python</li>
                            <li><input type="checkbox" name="css" value="css">CSS</li>
                            <li><input type="checkbox" name="javascript" value="javascript">JavaScript</li>
                        </ul>
                </div>
                <div class="submit" id="submit">
                            <input type="submit" name="submit" value="Siųsti">
                </div>
             </fieldset>

        </form>
           
             <div class="map">
                <p>
                  <iframe width='828' height='300' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='http://dc1.maps.lt/maps/quickmap.html#obj=583001%2C6064656&s=5000&xy=%5B583001%2C6064656%5D&bg=vector&title=Pa%C5%BEym%C4%97tas%20ta%C5%A1kas&lang=lt&toggle25d=true'>
                  </iframe>
                </p>
              </div>
                    </div>
             </section>  
        </div>
    
    
    
    <div class="footer">
        <div>
            <p>2019 metai</p>
        </div>
   </div> 
    



<?php
    include_once 'footer.php';
?>


