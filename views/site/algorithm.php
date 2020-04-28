<?php
require_once ROOT . "/views/layouts/header.php"
?>
<div class="blog blog-2 sp-80">

    <div class="container">
        <div class="row">

            <article class="col-md-9 blog-wrap">
                <h1>
                    Algrotihm
                </h1>
                <hr>
                <p>
                    MD5 processes a variable-length message into a fixed-length output of 128 bits. The input message is broken up into chunks of 512-bit blocks (sixteen 32-bit words); the message is padded so that its length is divisible by 512. The padding works as follows: first a single bit, 1, is appended to the end of the message. This is followed by as many zeros as are required to bring the length of the message up to 64 bits fewer than a multiple of 512. The remaining bits are filled up with 64 bits representing the length of the original message, modulo 264.

                    The main MD5 algorithm operates on a 128-bit state, divided into four 32-bit words, denoted A, B, C, and D. These are initialized to certain fixed constants. The main algorithm then uses each 512-bit message block in turn to modify the state. The processing of a message block consists of four similar stages, termed rounds; each round is composed of 16 similar operations based on a non-linear function F, modular addition, and left rotation. Figure 1 illustrates one operation within a round. There are four possible functions; a different one is used in each round:
                </p>
                <p>
                    <br><br>
                    F(B , C , D) = (B  &#x22C0 C) &#x22C1(&not;B &#x22C0 D)<br>
                    G(B , C , D) = (B  &#x22C0 D) &#x22C1(C &#x22C0 &not; D)<br>
                    H(B , C , D) = B &oplus; C &oplus; D <br>
                    I(B , C , D) = C &oplus; (B &#x22C1 &not; D)<br>
                    &oplus;, &#x22C0, &#x22C1 , &not;,  denote the XOR, AND, OR and NOT operations respectively.
                </p>



            </article>
            <div class="col-md-3" style="border:1px solid green;padding: 5px">
                <img src="/template/img/md5.png" alt="">
                <p>
                    Figure 1. One MD5 operation. MD5 consists of 64 of these operations, grouped in four rounds of 16 operations. F is a nonlinear function; one function is used in each round. Mi denotes a 32-bit block of the message input, and Ki denotes a 32-bit constant, different for each operation. <<<s denotes a left bit rotation by s places; s varies for each operation. {\displaystyle \boxplus }\boxplus  denotes addition modulo 232.
                </p>


            </div>
        </div>
    </div>
</div>
<?php
require_once ROOT . "/views/layouts/footer.php"
?>
