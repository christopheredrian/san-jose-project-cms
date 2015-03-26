<?php include_once 'includes/header.html'; ?>

<main id="main">
    <section class="content">
        <header class="header">
            <h1>Add Ordained</h1>
        </header>
        <form action="#" class="pure-form pure-form-stacked">
            <fieldset>
                <div class="pure-control-group">
                    <div class="pure-g">
                        <div class="pure-u-2-3">
                            <label>Name</label>
                            <input type="text" class="pure-u-4-5" name="name" required placeholder="Name (Lastname, Firstname)">
                            <label>Diocese</label>
                            <input type="text" class="pure-u-4-5" name="diocese" placeholder="Archdiocese of San Fernando, Pampanga">
                            <label>Birthday</label>
                            <input type="date" class="pure-u-4-5" name="birthday">
                            <label>Ordination Date</label>
                            <input type="date" class="pure-u-4-5" name="ordination">
                            

                            
                        </div>
                        <div class="pure-u-1-3">
                        <label>Phone</label>
                            <input type="text" class="pure-u-1" name="phone" placeholder="(032)4323212">
                            <label>Fax</label>
                            <input type="text" class="pure-u-1" name="fax" placeholder="(02) 1234567">
                            <label>Mobile</label>
                            <input type="text" class="pure-u-1" name="mobile" placeholder="09173214567">
                            <label>Email</label>
                            <input type="email" class="pure-u-1" name="email" placeholder="sj321@gm.com"><br>
                        </div>
                    </div>
                </div>  
                <label>Address</label>
                <input type="text" class="pure-input-1" name="diocese" placeholder="(Seminary Road, Ateneo de Manila University Katipunan, Quezon City, Philippines)">
                <br><input class="pure-u-1 pure-button pure-button-primary button-large" type="submit" value="Save" id="save" >
            </fieldset>   
        </form>
        
    </section>
    <hr>
        <header class="header">
            <h1>Ordained</h1>
        </header>
    <section class="content content-table" id="ordainedLink">
        <table class="pure-table pure-table-bordered">
<!--           <colgroup>
          <col width="50%">
          <col width="25%">
          <col width="25%">
      </colgroup> -->
      <thead>
        <tr>
            <th>Name</th>
            <th>Diocese</th>
            <th>Birthday</th>
            <th>Ordination</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Fax</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Operations</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Cee Es</td>
            <td>San Fernando</td>
            <td>January 12, 1967</td>
            <td>January 24, 1988</td>
            <td>132 hernandez st.</td>
            <td>09322233213</td>
            <td>09322233213</td>
            <td>09322233213</td>
            <td>es@gam.com</td>
            <td>
                <form action="demo_form.asp">
                <!-- HIDDEN id here -->
                  <input type="image" src="images/favicon.png" alt="Submit">
                  <input type="image" src="images/favicon.png" alt="Submit">
                 </form>
            </td>
        </tr>
        <tr>
            <td>Cee Es</td>
            <td>San Fernando</td>
            <td>January 12, 1967</td>
            <td>January 24, 1988</td>
            <td>132 hernandez st.</td>
            <td>09322233213</td>
            <td>09322233213</td>
            <td>09322233213</td>
            <td>es@gam.com</td>
            <td>es@gam.com</td>
        </tr>
        <tr>
            <td>Espiritu, Christopher Edrian L.</td>
            <td>San Fernando</td>
            <td>January 12, 1967</td>
            <td>January 24, 1988</td>
            <td>132 hernandez st.</td>
            <td>09322233213</td>
            <td>09322233213</td>
            <td>09322233213</td>
            <td>es@gam.com</td>
            <td>es@gam.com</td>
        </tr>
        <tr>
            <td>Cee Es</td>
            <td>San Fernando</td>
            <td>January 12, 1967</td>
            <td>January 24, 1988</td>
            <td>132 hernandez st. Desktop test angeles ond das wa lorem ipsum</td>
            <td>09322233213</td>
            <td>09322233213</td>
            <td>09322233213</td>
            <td>es@gam.com</td>
            <td>es@gam.com</td>
        </tr>
        <tr>
            <td>Cee Es</td>
            <td>San Fernando</td>
            <td>January 12, 1967</td>
            <td>January 24, 1988</td>
            <td>132 hernandez st.</td>
            <td>09322233213</td>
            <td>09322233213</td>
            <td>09322233213</td>
            <td>es@gam.com</td>
            <td>
                <form action="demo_form.asp">
                <!-- HIDDEN id here -->
                  <input type="image" src="images/favicon.png" alt="Submit">
                  <input type="image" src="images/favicon.png" alt="Submit">
                 </form>
            </td>
        </tr>
        <tr>
            <td>Cee Es</td>
            <td>San Fernando</td>
            <td>January 12, 1967</td>
            <td>January 24, 1988</td>
            <td>132 hernandez st.</td>
            <td>09322233213</td>
            <td>09322233213</td>
            <td>09322233213</td>
            <td>es@gam.com</td>
            <td>
                <form action="demo_form.asp">
                <!-- HIDDEN id here -->
                  <input type="image" src="images/favicon.png" alt="Submit">
                  <input type="image" src="images/favicon.png" alt="Submit">
                 </form>
            </td>
        </tr>
    </tbody>  

</table>        
</section>
</main>


<?php  include_once('includes/footer.html');?>
