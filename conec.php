<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="coneccss.css">
    <title>STRAW HAT PIRATE</title>
</head>

<body>
    <?php
    $cekin = $_POST["cekin"];
    $cekout = $_POST["cekout"];
    // $jumlahk = $_POST["jumlahk"];
    ?>


    <header class="banner">

    </header>
    <nav>
        <div>
            <h1>ONE PIECE</h1>
        </div>
        <div class="menu_link">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <ul>
            <li><a href="#home" class="link">Home</a></li>
            <li><a href="#kamar" class="link">Kamar</a></li>
            <li><a href="#fasilitas" class="link">Fasilitas</a></li>
            <li><a href="#kontak" class="link">About Us</a></li>
            <li><a href="f1.html">Kembali</a></li>

        </ul>
        <div>  <a href="admin.php" class="tbl-biru">Sign Up</a></div>
    </nav>
    <div>
        <center>
            <form action="dbconec.php" method="post">
              
                <table>
                    <tr>
                        <td>Tanggal Cek In</td>
                        
                 <td>Tanggal Cek Out</td>
               <!-- <td>Jumlah Kamar</td> -->
               
        
                    </tr>
                    <tr>
                        <td><input type="date" name="cekin" id="" value="<?php echo $_POST["cekin"] ?> "> </td>
                        <td><input type="date" name="cekout" id="" value="<?php echo $_POST["cekout"]?>"> </td>
                        <!-- <td><input type="date" name="cekout" id="" value="<?php echo $_POST["cekout"] ?>"></td> -->
                       
                        <!-- <td><input type="number" name="jumlahk" id="" value="<?php echo $_POST["jumlahk"] ?>"></td> -->
                    </tr>

                </table>
                <br>
                <br>
                <table>
                    <tr>
                        <td>Nama Pemesan</td>
                        <td></td>
                        <td>:</td>
                        <td><input type="text" name="nama_pemesan"><br></td>
                    </tr>

                    <tr>
                        <td>Email</td>
                        <td></td>
                        <td>:</td>
                        <td><input type="text" name="email"><br></td>
                    </tr>
                    <tr>
                        <td>No.Handphone</td>
                        <td></td>
                        <td>:</td>
                        <td><input type="text" name="hp"><br></td>
                    </tr>
                    <tr>
                        <td>Nama Tamu</td>
                        <td></td>
                        <td>:</td>
                        <td><input type="text" name="nama_tamu"><br></td>
                    </tr>
                    <tr>
                        <td>Jumlah Kamar</td>
                        <td></td>
                        <td>:</td>

                        <td><input type="number" name="jumlahk" id=""></td>
                    </tr>
                    <tr>
                        <td>Tipe Kamar</td>
                        <td></td>
                        <td>:</td>
                        <td>
                            <select name="level" id="">
                            <option value="suite">Suite Room</option>
                            <option value="junior">Junior Suite Room</option>
                            <option value="senior">Senior Suite Room</option>
                            </select>
                            <br>
                        </td>
                    </tr>
                    
                
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>

                        <td><input type="submit" name="pesan" value="Pesan"></td>
                    </tr>
                </table>
            </form>

            </article>
        </center>
    </div>

    <main>
        <div id="konten">
            <article id="home" class="card">
                <h2>
                    One Piece
                </h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. \Illo repudiandae, excepturi deserunt
                    commodi
                    quos laborum suscipit dolorem atque, quas veniam perferendis ab quo magnam sequi sint consectetur
                    dolor
                    omnis veritatis vero labore molestias itaque? Tempore omnis praesentium neque. Eligendi voluptatem
                    pariatur
                    nostrum aliquid earum repudiandae iure veritatis aspernatur, voluptates ab.
                </p>
                <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem facilis earum officia voluptates,
                    debitis quia quos saepe. Cum beatae ducimus vero praesentium nesciunt repudiandae debitis fuga.
                    Eligendi hic neque consectetur molestiae totam sint natus suscipit dolor ipsum ea dolorum, vero
                    tempore laudantium. Exercitationem, voluptatum dolor minus, facere atque est debitis deserunt cum,
                    doloribus non quos voluptatem sed ex quidem neque officia amet hic autem eius quas distinctio
                    dolorum. Minima iusto fugit, atque enim dolorum velit, tenetur magnam obcaecati nemo explicabo
                    aspernatur nulla repudiandae vero possimus hic dolorem alias modi! Assumenda at veritatis illum
                    doloremque, est in accusamus rem soluta sit.
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, libero nobis! Quae velit dolore
                    soluta incidunt corrupti reiciendis saepe ex? Alias qui blanditiis esse doloribus, iste quisquam
                    sapiente libero, architecto, minus aliquid neque temporibus. Id explicabo aperiam nostrum alias
                    odit.
                </p>
                </p>
            </article>
            <article id="kamar" class="card">
            <h2>Tipe Kamar</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. \Illo repudiandae, excepturi deserunt
                commodi
                quos laborum suscipit dolorem atque, quas veniam perferendis ab quo magnam sequi sint consectetur
                dolor
                omnis veritatis vero labore molestias itaque? Tempore omnis praesentium neque. Eligendi voluptatem
                pariatur
                nostrum aliquid earum repudiandae iure veritatis aspernatur, voluptates ab.
            </p>
            <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem facilis earum officia voluptates,
                debitis quia quos saepe. Cum beatae ducimus vero praesentium nesciunt repudiandae debitis fuga.
                Eligendi hic neque consectetur molestiae totam sint natus suscipit dolor ipsum ea dolorum, vero
                tempore laudantium. Exercitationem, voluptatum dolor minus, facere atque est debitis deserunt cum,
                doloribus non quos voluptatem sed ex quidem neque officia amet hic autem eius quas distinctio
                dolorum. Minima iusto fugit, atque enim dolorum velit, tenetur magnam obcaecati nemo explicabo
                aspernatur nulla repudiandae vero possimus hic dolorem alias modi! Assumenda at veritatis illum
                doloremque, est in accusamus rem soluta sit.
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, libero nobis! Quae velit dolore
                soluta incidunt corrupti reiciendis saepe ex? Alias qui blanditiis esse doloribus, iste quisquam
                sapiente libero, architecto, minus aliquid neque temporibus. Id explicabo aperiam nostrum alias
                odit.
            </p>
            </p>
       <br>
            
                <h3><a href="suiteroom.html" id="link">Suite Room</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro ipsum soluta quasi non cumque
                    explicabo hic odit, praesentium ut, iste tempore sed veniam suscipit natus recusandae dolorem
                    aliquam nostrum autem aspernatur voluptatibus reprehenderit dicta cupiditate. Ducimus sit adipisci
                    et quasi ad incidunt. Fugiat quibusdam ratione error, libero sed veritatis laudantium accusantium
                    excepturi. Sapiente repellendus expedita debitis perferendis, dicta veritatis odit, alias architecto
                    at vitae delectus nostrum animi amet commodi ducimus, soluta a. Reiciendis corporis necessitatibus
                    pariatur totam nam beatae exercitationem corrupti placeat omnis. Nobis odio laudantium dolores,
                    dignissimos asperiores nihil magni delectus tempore quam praesentium ullam necessitatibus ut officia
                    error ratione libero totam, nam laboriosam eos eligendi sed. Dolorum omnis consequuntur animi
                    laborum quisquam voluptatum quaerat delectus? Beatae aut, ipsum a hic architecto temporibus iusto,
                    blanditiis id qui animi provident ab necessitatibus quidem eligendi illum accusantium consequuntur
                    eveniet explicabo autem repellat doloribus tempore magni rem! Quia sint repellat animi, asperiores
                    ipsa exercitationem natus eius ratione, iure, excepturi temporibus voluptate necessitatibus a ipsam
                    nesciunt vel. Voluptate, asperiores. Quis deleniti nihil temporibus tempora laboriosam veritatis?
                    Maiores eaque a aperiam. Ducimus, odio eveniet dicta cum non temporibus fuga enim animi laborum
                    incidunt quas eius aliquid, ipsam, eaque quasi modi voluptatibus omnis dolores similique.</p>

                <section class="kmr">
                    <div class="pic1">
                        <h3> Suite Room </h3>
                        <img src="hotel/SUITE ROOM.jpg" alt="ini gambar" class="gm1">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi, voluptatibus.</p>
                    </div>
                    <div class="pic1">
                        <h3> Suite Room </h3>
                        <img src="hotel/SUITE ROOM (2).jpg" alt="Ini Gambar" class="gm1">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel, praesentium.</p>
                    </div>
                    <div class="pic1">
                        <h3> Suite Room </h3>
                        <img src="hotel/SUITE ROOM (3).jpg" alt="Ini Gambar" class="gm1">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit, aperiam!</p>
                    </div>
                </section>
                <br> 
                <h3><a href="juniorroom.html" id="link">Junior Suite Room</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro ipsum soluta quasi non cumque
                    explicabo hic odit, praesentium ut, iste tempore sed veniam suscipit natus recusandae dolorem
                    aliquam nostrum autem aspernatur voluptatibus reprehenderit dicta cupiditate. Ducimus sit adipisci
                    et quasi ad incidunt. Fugiat quibusdam ratione error, libero sed veritatis laudantium accusantium
                    excepturi. Sapiente repellendus expedita debitis perferendis, dicta veritatis odit, alias architecto
                    at vitae delectus nostrum animi amet commodi ducimus, soluta a. Reiciendis corporis necessitatibus
                    pariatur totam nam beatae exercitationem corrupti placeat omnis. Nobis odio laudantium dolores,
                    dignissimos asperiores nihil magni delectus tempore quam praesentium ullam necessitatibus ut officia
                    error ratione libero totam, nam laboriosam eos eligendi sed. Dolorum omnis consequuntur animi
                    laborum quisquam voluptatum quaerat delectus? Beatae aut, ipsum a hic architecto temporibus iusto,
                    blanditiis id qui animi provident ab necessitatibus quidem eligendi illum accusantium consequuntur
                    eveniet explicabo autem repellat doloribus tempore magni rem! Quia sint repellat animi, asperiores
                    ipsa exercitationem natus eius ratione, iure, excepturi temporibus voluptate necessitatibus a ipsam
                    nesciunt vel. Voluptate, asperiores. Quis deleniti nihil temporibus tempora laboriosam veritatis?
                    Maiores eaque a aperiam. Ducimus, odio eveniet dicta cum non temporibus fuga enim animi laborum
                    incidunt quas eius aliquid, ipsam, eaque quasi modi voluptatibus omnis dolores similique.</p>

                <section class="kmr">
                    <div class="pic1">
                   
                        <h3>Junior Suite Room </h3>
                        <img src="hotel/JUNIOR SUITE ROOM.jpg" alt="ini gambar" class="gm1">                   
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi, voluptatibus.</p>
                    </div>
                    <div class="pic1">
                        <h3>Junior Suite Room </h3>
                        <img src="hotel/JUNIOR SUITE ROOM (2).jpg" alt="Ini Gambar" class="gm1">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel, praesentium.</p>
                    </div>
                    <div class="pic1">
                        <h3>Junior Suite Room </h3>
                        <img src="hotel/JUNIOR SUITE ROOM (3).jpg" alt="Ini Gambar" class="gm1">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit, aperiam!</p>
                    </div>
                </section>
                <br>
                <h3><a href="seniorroom.html" id="link">Senior Suite Room</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro ipsum soluta quasi non cumque
                    explicabo hic odit, praesentium ut, iste tempore sed veniam suscipit natus recusandae dolorem
                    aliquam nostrum autem aspernatur voluptatibus reprehenderit dicta cupiditate. Ducimus sit adipisci
                    et quasi ad incidunt. Fugiat quibusdam ratione error, libero sed veritatis laudantium accusantium
                    excepturi. Sapiente repellendus expedita debitis perferendis, dicta veritatis odit, alias architecto
                    at vitae delectus nostrum animi amet commodi ducimus, soluta a. Reiciendis corporis necessitatibus
                    pariatur totam nam beatae exercitationem corrupti placeat omnis. Nobis odio laudantium dolores,
                    dignissimos asperiores nihil magni delectus tempore quam praesentium ullam necessitatibus ut officia
                    error ratione libero totam, nam laboriosam eos eligendi sed. Dolorum omnis consequuntur animi
                    laborum quisquam voluptatum quaerat delectus? Beatae aut, ipsum a hic architecto temporibus iusto,
                    blanditiis id qui animi provident ab necessitatibus quidem eligendi illum accusantium consequuntur
                    eveniet explicabo autem repellat doloribus tempore magni rem! Quia sint repellat animi, asperiores
                    ipsa exercitationem natus eius ratione, iure, excepturi temporibus voluptate necessitatibus a ipsam
                    nesciunt vel. Voluptate, asperiores. Quis deleniti nihil temporibus tempora laboriosam veritatis?
                    Maiores eaque a aperiam. Ducimus, odio eveniet dicta cum non temporibus fuga enim animi laborum
                    incidunt quas eius aliquid, ipsam, eaque quasi modi voluptatibus omnis dolores similique.</p>

                <section class="kmr">
                    <div class="pic1">
                        <h3>Senior  Suite Room </h3>
                        <img src="hotel/SENIOR SUITE ROOM.jpg" alt="ini gambar" class="gm1">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi, voluptatibus.</p>
                    </div>
                    <div class="pic1">
                        <h3>Senior  Suite Room </h3>
                        <img src="hotel/SENIOR SUITE ROOM2.jpg" alt="Ini Gambar" class="gm1">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel, praesentium.</p>
                    </div>
                    <div class="pic1">
                        <h3>Senior  Suite Room </h3>
                        <img src="hotel/SENIOR SUITE ROOM3.jpg" alt="Ini Gambar" class="gm1">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit, aperiam!</p>
                    </div>
                </section>

            </article>
            <article id="fasilitas" class="card">
                <h2>Fasilitas Hotel </h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae quod porro repellat. Corrupti
                    aspernatur explicabo dignissimos obcaecati doloremque sapiente nisi commodi eos possimus enim neque
                    quaerat illo deserunt accusamus amet tenetur, voluptates labore provident est quod aperiam.
                    Temporibus nostrum, perspiciatis beatae explicabo quaerat accusantium aliquid voluptates sit dolorem
                    eveniet facere placeat nesciunt quasi tenetur voluptas officia laboriosam iure corrupti culpa, rem
                    dolore. Aliquid magni voluptatibus est saepe similique aspernatur, nam reiciendis consequatur
                    molestiae. Natus debitis ex quam corporis itaque ratione, inventore velit in nam! Culpa atque,
                    expedita laudantium adipisci iste debitis quis animi facilis magnam blanditiis, in voluptate
                    explicabo suscipit?</p>

                <section class="fas">
                    <div class="fasi1">
                        <h2>Kolam</h2>
                        <img src="hotel/KOLAM.jpg"
                            alt="ini gambar" class="fass">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum consequuntur reprehenderit,
                            perferendis doloribus corrupti praesentium earum iusto ad inventore, quae amet quos
                            laudantium
                            molestiae dolorem. Voluptatum eveniet possimus nemo doloremque assumenda illum reiciendis
                            unde
                            sit. Esse natus mollitia, odit et vel impedit beatae culpa, molestiae consequuntur
                            asperiores,
                            eveniet accusamus nam!</p>
                    </div>
                    <div class="fasi1">
                        <h2>Bar</h2>
                        <img src="hotel/BAR.jpg" alt="ini gambar" class="fass">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum consequuntur reprehenderit,
                            perferendis doloribus corrupti praesentium earum iusto ad inventore, quae amet quos
                            laudantium
                            molestiae dolorem. Voluptatum eveniet possimus nemo doloremque assumenda illum reiciendis
                            unde
                            sit. Esse natus mollitia, odit et vel impedit beatae culpa, molestiae consequuntur
                            asperiores,
                            eveniet accusamus nam!</p>
                    </div>
                </section>

                <section class="fas">
                    <div class="fasi1">
                        <h2>Bioskop</h2>
                        <img src="hotel/BIOSKOP.jpg" alt="ini gambar"
                            class="fass">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum consequuntur reprehenderit,
                            perferendis doloribus corrupti praesentium earum iusto ad inventore, quae amet quos
                            laudantium
                            molestiae dolorem. Voluptatum eveniet possimus nemo doloremque assumenda illum reiciendis
                            unde
                            sit. Esse natus mollitia, odit et vel impedit beatae culpa, molestiae consequuntur
                            asperiores,
                            eveniet accusamus nam!</p>
                    </div>
                    <div class="fasi1">
                        <h2>Gym</h2>
                        <img src="hotel/GYM.jpg" alt="ini gambar"
                            class="fass">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum consequuntur reprehenderit,
                            perferendis doloribus corrupti praesentium earum iusto ad inventore, quae amet quos
                            laudantium
                            molestiae dolorem. Voluptatum eveniet possimus nemo doloremque assumenda illum reiciendis
                            unde
                            sit. Esse natus mollitia, odit et vel impedit beatae culpa, molestiae consequuntur
                            asperiores,
                            eveniet accusamus nam!</p>
                    </div>

                </section>
                <br>
                <h2>Fasilitas Kamar </h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae quod porro repellat. Corrupti
                    aspernatur explicabo dignissimos obcaecati doloremque sapiente nisi commodi eos possimus enim neque
                    quaerat illo deserunt accusamus amet tenetur, voluptates labore provident est quod aperiam.
                    Temporibus nostrum, perspiciatis beatae explicabo quaerat accusantium aliquid voluptates sit dolorem
                    eveniet facere placeat nesciunt quasi tenetur voluptas officia laboriosam iure corrupti culpa, rem
                    dolore. Aliquid magni voluptatibus est saepe similique aspernatur, nam reiciendis consequatur
                    molestiae. Natus debitis ex quam corporis itaque ratione, inventore velit in nam! Culpa atque,
                    expedita laudantium adipisci iste debitis quis animi facilis magnam blanditiis, in voluptate
                    explicabo suscipit?</p>

                <section class="fas">
                    <div class="fasi1">
                        <h2>Single Bed</h2>
                        <img src="hotel/singlebad.jpg"
                            alt="ini gambar" class="fass">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum consequuntur reprehenderit,
                            perferendis doloribus corrupti praesentium earum iusto ad inventore, quae amet quos
                            laudantium
                            molestiae dolorem. Voluptatum eveniet possimus nemo doloremque assumenda illum reiciendis
                            unde
                            sit. Esse natus mollitia, odit et vel impedit beatae culpa, molestiae consequuntur
                            asperiores,
                            eveniet accusamus nam!</p>
                    </div>
                    <div class="fasi1">
                        <h2>Two Bed</h2>
                        <img src="hotel/twobed.jpg" alt="ini gambar" class="fass">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum consequuntur reprehenderit,
                            perferendis doloribus corrupti praesentium earum iusto ad inventore, quae amet quos
                            laudantium
                            molestiae dolorem. Voluptatum eveniet possimus nemo doloremque assumenda illum reiciendis
                            unde
                            sit. Esse natus mollitia, odit et vel impedit beatae culpa, molestiae consequuntur
                            asperiores,
                            eveniet accusamus nam!</p>
                    </div>
                    <div class="fasi1">
                        <h2>Twin Bed</h2>
                        <img src="hotel/twinbed.jpg" alt="ini gambar"
                            class="fass">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum consequuntur reprehenderit,
                            perferendis doloribus corrupti praesentium earum iusto ad inventore, quae amet quos
                            laudantium
                            molestiae dolorem. Voluptatum eveniet possimus nemo doloremque assumenda illum reiciendis
                            unde
                            sit. Esse natus mollitia, odit et vel impedit beatae culpa, molestiae consequuntur
                            asperiores,
                            eveniet accusamus nam!</p>
                    </div>
                </section>
                
                <section class="fas">
                    <div class="fasi1">
                        <h2>Kamar Mandi Senior Suite Room</h2>
                        <img src="hotel/wckelas1.jpg"
                            alt="ini gambar" class="fass">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum consequuntur reprehenderit,
                            perferendis doloribus corrupti praesentium earum iusto ad inventore, quae amet quos
                            laudantium
                            molestiae dolorem. Voluptatum eveniet possimus nemo doloremque assumenda illum reiciendis
                            unde
                            sit. Esse natus mollitia, odit et vel impedit beatae culpa, molestiae consequuntur
                            asperiores,
                            eveniet accusamus nam!</p>
                    </div>
                    <div class="fasi1">
                        <h2>Kamar Mandi Junior Suite Room</h2>
                        <img src="hotel/wckelas2.jpg" alt="ini gambar" class="fass">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum consequuntur reprehenderit,
                            perferendis doloribus corrupti praesentium earum iusto ad inventore, quae amet quos
                            laudantium
                            molestiae dolorem. Voluptatum eveniet possimus nemo doloremque assumenda illum reiciendis
                            unde
                            sit. Esse natus mollitia, odit et vel impedit beatae culpa, molestiae consequuntur
                            asperiores,
                            eveniet accusamus nam!</p>
                    </div>
                    <div class="fasi1">
                        <h2>Kamar Mandi Suite Room</h2>
                        <img src="hotel/wckelas3.jpg" alt="ini gambar"
                            class="fass">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum consequuntur reprehenderit,
                            perferendis doloribus corrupti praesentium earum iusto ad inventore, quae amet quos
                            laudantium
                            molestiae dolorem. Voluptatum eveniet possimus nemo doloremque assumenda illum reiciendis
                            unde
                            sit. Esse natus mollitia, odit et vel impedit beatae culpa, molestiae consequuntur
                            asperiores,
                            eveniet accusamus nam!</p>
                    </div>
                </section>
                <section class="fas">
                    <div class="fasi1">
                        <h2>Tv Ukuran 32inc</h2>
                        <img src="hotel/32inc.jpg"
                            alt="ini gambar" class="fass">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum consequuntur reprehenderit,
                            perferendis doloribus corrupti praesentium earum iusto ad inventore, quae amet quos
                            laudantium
                            molestiae dolorem. Voluptatum eveniet possimus nemo doloremque assumenda illum reiciendis
                            unde
                            sit. Esse natus mollitia, odit et vel impedit beatae culpa, molestiae consequuntur
                            asperiores,
                            eveniet accusamus nam!</p>
                    </div>
                    <div class="fasi1">
                        <h2>Tv Ukuran 42inc</h2>
                        <img src="hotel/42inc.jpg" alt="ini gambar" class="fass">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum consequuntur reprehenderit,
                            perferendis doloribus corrupti praesentium earum iusto ad inventore, quae amet quos
                            laudantium
                            molestiae dolorem. Voluptatum eveniet possimus nemo doloremque assumenda illum reiciendis
                            unde
                            sit. Esse natus mollitia, odit et vel impedit beatae culpa, molestiae consequuntur
                            asperiores,
                            eveniet accusamus nam!</p>
                    </div>
              
                </section>
                <section class="fas">
                    <div class="fasi1">
                        <h2>Tv Ukuran 55inc</h2>
                        <img src="hotel/55inc.jpg" alt="ini gambar"
                            class="fass">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum consequuntur reprehenderit,
                            perferendis doloribus corrupti praesentium earum iusto ad inventore, quae amet quos
                            laudantium
                            molestiae dolorem. Voluptatum eveniet possimus nemo doloremque assumenda illum reiciendis
                            unde
                            sit. Esse natus mollitia, odit et vel impedit beatae culpa, molestiae consequuntur
                            asperiores,
                            eveniet accusamus nam!</p>
                    </div>
                    <div class="fasi1">
                        <h2>Saluran Tv Premium</h2>
                        <img src="hotel/saluran tv premium.jpg" alt="ini gambar"
                            class="fass">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum consequuntur reprehenderit,
                            perferendis doloribus corrupti praesentium earum iusto ad inventore, quae amet quos
                            laudantium
                            molestiae dolorem. Voluptatum eveniet possimus nemo doloremque assumenda illum reiciendis
                            unde
                            sit. Esse natus mollitia, odit et vel impedit beatae culpa, molestiae consequuntur
                            asperiores,
                            eveniet accusamus nam!</p>
                    </div>

                </section>
               
                <section>
                <h2>Restaurant</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro ipsum soluta quasi non cumque
                    explicabo hic odit, praesentium ut, iste tempore sed veniam suscipit natus recusandae dolorem
                    aliquam nostrum autem aspernatur voluptatibus reprehenderit dicta cupiditate. Ducimus sit adipisci
                    et quasi ad incidunt. Fugiat quibusdam ratione error, libero sed veritatis laudantium accusantium
                    excepturi. Sapiente repellendus expedita debitis perferendis, dicta veritatis odit, alias architecto
                    at vitae delectus nostrum animi amet commodi ducimus, soluta a. Reiciendis corporis necessitatibus
                    pariatur totam nam beatae exercitationem corrupti placeat omnis. Nobis odio laudantium dolores,
                    dignissimos asperiores nihil magni delectus tempore quam praesentium ullam necessitatibus ut officia
                    error ratione libero totam, nam laboriosam eos eligendi sed. Dolorum omnis consequuntur animi
                    laborum quisquam voluptatum quaerat delectus? Beatae aut, ipsum a hic architecto temporibus iusto,
                    blanditiis id qui animi provident ab necessitatibus quidem eligendi illum accusantium consequuntur
                    eveniet explicabo autem repellat doloribus tempore magni rem! Quia sint repellat animi, asperiores
                    ipsa exercitationem natus eius ratione, iure, excepturi temporibus voluptate necessitatibus a ipsam
                    nesciunt vel. Voluptate, asperiores. Quis deleniti nihil temporibus tempora laboriosam veritatis?
                    Maiores eaque a aperiam. Ducimus, odio eveniet dicta cum non temporibus fuga enim animi laborum
                    incidunt quas eius aliquid, ipsam, eaque quasi modi voluptatibus omnis dolores similique.</p>

                <section class="kmr">
                    <div class="pic1">
                        <h3>Restaurant Kelas 1 </h3>
                        <img src="hotel/RESTAURANT KELAS 1.jpg" alt="ini gambar" class="gm1">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi, voluptatibus.</p>
                    </div>
                    <div class="pic1">
                        <h3>Restaurant Kelas 2 </h3>
                        <img src="hotel/RESTAURANT KELAS 2.jpg" alt="Ini Gambar" class="gm1">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel, praesentium.</p>
                    </div>
                    <div class="pic1">
                        <h3>Restaurant Kelas 3</h3>
                        <img src="hotel/RETAURAN KELAS 3.jpg" alt="Ini Gambar" class="gm1">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit, aperiam!</p>
                    </div>
                </section>
              </section>



            </article>
        </div>


        <aside>
            <article id="kontak" class="card">
                <header>
                    <h3>Kontak kami</h3>
                    <figure>
                        <img src="gambar/sosial/kisspng-download-abstraction-abstract-bulb-5a9f36f28d2838.7761921915203837305782.png"
                            alt="foto" class="logo">
                        <figcaption></figcaption>
                    </figure>
                </header>
                <section>
                    <table>
                        <tr>
                            <td colspan="2" class="tdhead">Detail</td>
                        </tr>
                        <tr>
                            <td><img src="gambar/sosial/5a2307bc1bddf7.7797386615122451801142.png" alt="" class="ikon">
                            </td>
                            <td>+6282342359160</td>
                        </tr>
                        <tr>
                            <td><img src="gambar/sosial/kisspng-gmail-computer-icons-logo-email-gmail-5abe0b09a7c104.1578517615224041056871.png"
                                    alt="" class="ikon"></td>
                            <td>iyanbang@gmail.com</td>
                        </tr>
                        <tr>
                            <td><img src="gambar/sosial/kisspng-computer-icons-logo-image-sharing-flat-design-instagram-5abe0f2f495613.4955694015224051673004.png"
                                    alt="" class="ikon"></td>
                            <td>@iyanbang</td>
                        </tr>
                        <tr>
                            <td><img src="gambar/sosial/kisspng-telegram-logo-computer-icons-telegram-5abd165f637699.6665211615223414714074.png"
                                    alt="" class="ikon"></td>
                            <td>@iyanbang</td>
                        </tr>

                    </table>

                </section>

            </article>


        </aside>
    </main>
    <footer>
        <p>Submition Belajar Dasar Pemrograman Web &#169; bryanoktovianoramadhan 2022</p>
    </footer>


    <script src="script/jsscript.js"></script>
</body>

</html>