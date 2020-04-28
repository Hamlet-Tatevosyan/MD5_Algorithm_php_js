<?php
require_once ROOT . "/views/layouts/header.php"
?>

    <div class="blog blog-2 sp-80">

        <div class="container">
            <div class="row">

                <article class="col-md-9 blog-wrap">
                    <h1>
                        Security
                    </h1>
                    <hr>
                    <p>
                        The security of the MD5 hash function is severely compromised. A collision attack exists that can find collisions within seconds on a computer with a 2.6 GHz Pentium 4 processor (complexity of 224.1). Further, there is also a chosen-prefix collision attack that can produce a collision for two inputs with specified prefixes within seconds, using off-the-shelf computing hardware (complexity 239). The ability to find collisions has been greatly aided by the use of off-the-shelf GPUs. On an NVIDIA GeForce 8400GS graphics processor, 16–18 million hashes per second can be computed. An NVIDIA GeForce 8800 Ultra can calculate more than 200 million hashes per second.

                        These hash and collision attacks have been demonstrated in the public in various situations, including colliding document files and digital certificates. As of 2015, MD5 was demonstrated to be still quite widely used, most notably by security research and antivirus companies.

                        As of 2019, one quarter of widely used content management systems were reported to still use MD5 for password hashing.
                    </p>
                    <h3>
                        Overview of security issues
                    </h3>
                    <hr>
                    <p>
                        In 1996, a flaw was found in the design of MD5. While it was not deemed a fatal weakness at the time, cryptographers began recommending the use of other algorithms, such as SHA-1, which has since been found to be vulnerable as well. In 2004 it was shown that MD5 is not collision-resistant. As such, MD5 is not suitable for applications like SSL certificates or digital signatures that rely on this property for digital security. Also in 2004 more serious flaws were discovered in MD5, making further use of the algorithm for security purposes questionable; specifically, a group of researchers described how to create a pair of files that share the same MD5 checksum.[7][28] Further advances were made in breaking MD5 in 2005, 2006, and 2007.[29] In December 2008, a group of researchers used this technique to fake SSL certificate validity.[24][30]

                        As of 2010, the CMU Software Engineering Institute considers MD5 "cryptographically broken and unsuitable for further use",[31] and most U.S. government applications now require the SHA-2 family of hash functions. In 2012, the Flame malware exploited the weaknesses in MD5 to fake a Microsoft digital signature.
                    </p>

                </article>
            </div>
        </div>
    </div>

<?php
require_once ROOT . "/views/layouts/footer.php"
?>