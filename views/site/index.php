<?php
 require_once ROOT . "/views/layouts/header.php"
?>

<div class="blog blog-2 sp-80">

    <div class="container">
        <div class="row">

            <article class="col-md-9 blog-wrap">

                <div class="verti">

                    <h2>MD5 Encryption</h2>
                    <div class="form">
                        <div class="form_title">
                            Enter a word here to get its MD5 hash :
                        </div>
                        <div class="form_field">
                            <input  id="myinput" name="word"  style="width:80%">
                        </div>
                        <div class="form_submit">
                            <button  onclick="encrypt()">
                                Crypt
                            </button>
                        </div>

                        <span class="result" id="loading"></span>
                        <span id="name" style="color: red;font-size:20px"></span>
                        <span id="hash" style="font-weight: bold"></span>



                    </div>
                    <p>&nbsp;</p>
                    <h2>MD5</h2>
                    <p>&nbsp;</p>
                    <p>
                        The MD5 message-digest algorithm is a widely used hash function producing a 128-bit hash value. Although MD5 was initially designed to be used as a cryptographic hash function, it has been found to suffer from extensive vulnerabilities. It can still be used as a checksum to verify data integrity, but only against unintentional corruption. It remains suitable for other non-cryptographic purposes, for example for determining the partition for a particular key in a partitioned database.
                        MD5 was designed by Ronald Rivest in 1991 to replace an earlier hash function MD4, and was specified in 1992 as RFC 1321.<br>

                        One basic requirement of any cryptographic hash function is that it should be computationally infeasible to find two distinct messages that hash to the same value. MD5 fails this requirement catastrophically; such collisions can be found in seconds on an ordinary home computer.

                        The weaknesses of MD5 have been exploited in the field, most infamously by the Flame malware in 2012. The CMU Software Engineering Institute considers MD5 essentially "cryptographically broken and unsuitable for further use".

                        As of 2019, MD5 continues to be widely used, in spite of its well-documented weaknesses and deprecation by security experts.
                    </p>
                    <br>
                </div>
            </article>
        </div>
    </div>
</div>

<?php
require_once ROOT . "/views/layouts/footer.php"
?>
