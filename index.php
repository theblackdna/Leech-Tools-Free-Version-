<!--
 __       ______   ______   ______   __  __   ______   __  __   ______   ______   ______    
/\ \     /\  ___\ /\  ___\ /\  ___\ /\ \_\ \ /\  ___\ /\ \_\ \ /\  __ \ /\  == \ /\  ___\   
\ \ \____\ \  __\ \ \  __\ \ \ \____\ \  __ \\ \___  \\ \  __ \\ \  __ \\ \  __< \ \  __\   
 \ \_____\\ \_____\\ \_____\\ \_____\\ \_\ \_\\/\_____\\ \_\ \_\\ \_\ \_\\ \_\ \_\\ \_____\ 
  \/_____/ \/_____/ \/_____/ \/_____/ \/_/\/_/ \/_____/ \/_/\/_/ \/_/\/_/ \/_/ /_/ \/_____/ 
                                                                                             
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <!-- STYLESHEETS -->
        <link rel="shortcut icon" href="assets/img/favicon.ico">
        <link rel="stylesheet" href="assets/css/main.css">
        <!-- SCRIPTS -->
        <noscript><link rel="stylesheet" href="assets/css/noscript.css"></noscript>
        <script type='text/javascript'>
            title = "LEECH & SHARE | BEST ONLINE FRAUD & CHECKING TOOLS | ";
            position = 0;
            function scrolltitle() {
                document.title = title.substring(position, title.length) + title.substring(0, position);
                position++;
                if (position > title.length) position = 0;
                titleScroll = window.setTimeout(scrolltitle,170);
            }
            scrolltitle();
        </script>
    </head>
    <body class="is-preload" onload="ccgen();">
        
        <div id="wrapper">
            
            <!-- HEADER -->
            <header id="header">
                
                <div class="logo">
                    <img src="assets/img/logo-round.png" style="width: 100%;">
                </div>
                
                <div class="content">
                    <div class="inner">
                        <h1>PUB.LEECHTOOLS.UK</h1>
                        <p>Generate Random And Fixed Credit Card Numbers, Check Card's Validity And Balance, See Information Like It's Bank Details, And Test Accounts Without Any Limitations.</p>
                    </div>
                </div>
                
                <nav>
                    <ul>
                        <li><a href="#bin2cc">CCGEN</a></li>
                        <li><a href="#ccextrap">CCEXTRAP</a></li>
                        <li><a href="#checker">CHECKER</a></li>
                        <li><a href="#about">ABOUT</a></li>
                    </ul>
                </nav>
                
            </header>
            <!-- HEADER END -->
            
            <!-- MAIN -->
            <div id="main">
                
                <!-- CCGEN -->
                <article id="bin2cc">
                    
                    <h2>Credit Card Generator</h2>
                    <p>Credit Card Generators are not intrinsically bad. In fact, credit card companies use them to come up with numbers to issue on their cards.</p>
                    
                    <section>
                        <form name="console" id="console" role="form" method="post" autocomplete="off">
                            <div class="fields">
                                
                                <div class="field">
                                    <label for="ccpN">
                                        <strong>BIN</strong>
                                    </label>
                                    <input type="text" id="ccpN" name="ccp" placeholder="xxxx xxxx xxxx xxxx" maxlength="19">
                                    <datalist id="iin-predefined"></datalist>
                                    <select name="ccnsp" class="input_text" style="display:none;">
                                        <option selected="selected">Nenhum</option>
                                    </select>
                                </div>
                                
                                <div class="field half">
                                    <label for="month">
                                        <strong>MONTH</strong>
                                    </label>
                                    <select name="emeses">
                                        <option value="rnd">rnd</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>
                                
                                <div class="field half">
                                    <label for="year">
                                        <strong>YEAR</strong>
                                    </label>
                                    <select name="eyear">
                                        <option value="rnd">rnd</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                        <option value="2028">2028</option>
                                        <option value="2029">2029</option>
                                        <option value="2030">2030</option>
                                    </select>
                                </div>
                                
                                <div class="field">
                                    <label for="eccv">
                                        <strong>CCV</strong>
                                    </label>
                                    <input type="text" id="eccv" name="eccv" placeholder="Leave blank to randomize">
                                </div>
                                
                                <div class="field half">
                                    <label for="quantity">
                                        <strong>NO.</strong>
                                    </label>
                                    <input type="text" name="ccghm" maxlength="4" value="10" placeholder="NO." required>
                                </div>
                                
                                <div class="field half">
                                    <label for="format">
                                        <strong>FORMAT</strong>
                                    </label>
                                    <select name="ccoudatfmt">
                                        <option value="CHECKER" selected="selected">CHK</option>
                                        <option value="CSV">CSV</option>
                                        <option value="XML">XML</option>
                                        <option value="JSON">JSON</option>
                                    </select>
                                </div>
                                
                                <div class="field half">
                                    <input type="checkbox" id="ccexpdat" name="ccexpdat">
                                    <label for="ccexpdat">DATE</label>
                                </div>
                                
                                <div class="field half">
                                    <input type="checkbox" id="ccvi" name="ccvi">
                                    <label for="ccvi">CCV</label>
                                </div>
                                
                                <div class="field half">
                                    <input type="checkbox" id="ccbank" name="ccbank">
                                    <label for="ccbank">BANK</label>
                                </div>
                                
                                <div class="field">
                                    <label for="results">
                                        <strong>RESULTS</strong>
                                    </label>
                                    <input type="hidden" name="tr" value="1000">
                                    <input type="hidden" name="L" style="width: 20px" value="1L">
                                    <div class="eighty">
                                        <div class="clean" id="cleanText"></div>
                                        <textarea name="output2" id="output2" rows="10" readonly></textarea>
                                    </div>
                                </div>
                                
                            </div>
                            <ul class="actions">
                                <li>
                                    <button type="reset" class="button" id="clear">Reset</button>
                                </li>
                                <li>
                                    <button type="button" class="button primary" id="generate" name="generate">Generate</button>
                                </li>
                            </ul>
                        </form>
                    </section>
                    
                </article>
                <!-- CCGEN END -->
                
                <!-- CCEXTRAP -->
                <article id="ccextrap">
                    
                    <h2>Credit Card Extrap</h2>
                    <p>Credit Card Extrap will automatically find all related card number combinations. This is useful for hunting live cards from current one.</p>
                    
                    <section>
                        <form name="InpForm" onsubmit="return validateInput(this);" autocomplete="off">
                            <div class="fields">
                                
                                <div class="field">
                                    <label for="ccno">
                                        <strong>CARD NUMBER</strong>
                                    </label>
                                    <input type="text" name="nomor" placeholder="666666xxxxxxxxxx">
                                </div>
                                
                                <div class="field half" style="display: none;">
                                    <label for="delim">
                                        <strong>SEPARATOR</strong>
                                    </label>
                                    <input type="text" name="delim" value="|">
                                </div>
                                
                                <div class="field half">
                                    <label for="exp">
                                        <strong>DATE</strong>
                                    </label>
                                    <input type="text" name="exp" placeholder="MM|YYYY">
                                </div>
                                
                                <div class="field half">
                                    <label for="cvv">
                                        <strong>CVV</strong>
                                    </label>
                                    <input type="text" name="cvv" placeholder="1234" maxlength="4">
                                </div>
                                
                                <div class="field">
                                    <label for="results">
                                        <strong>RESULTS</strong>
                                    </label>
                                    <textarea name="hasil" rows="10" readonly></textarea>
                                </div>
                                
                            </div>
                            <ul class="actions">
                                <li>
                                    <button type="reset" class="button">Reset</button>
                                </li>
                                <li>
                                    <button type="button" class="button primary" name="buat" onclick="findN(InpForm)">Extrap</button>
                                </li>
                            </ul>
                        </form>
                    </section>
                    
                </article>
                <!-- CCEXTRAP END -->
                
                <!-- CHECKER -->
                <article id="checker">
                    
                    <h2>Credit Card Checker</h2>
                    <p>The Luhn algorithm or Luhn formula, also known as the "modulus 10" or "mod 10" algorithm, is a simple checksum formula used to validate a variety of identification numbers, such as credit card numbers, IMEI numbers, National Provider Identifier numbers in the United States, Canadian Social Insurance Numbers, Israel ID Numbers and Greek Social Security Numbers (ΑΜΚΑ).</p>
                    
                    <section>
                        <form id="form" role="form" method="post" action="ls-priv/ccn1.php" autocomplete="off">
                            <div class="fields">
                                
                                <div class="field">
                                    <label for="cc">
                                        <strong>CARD NUMBERS</strong>
                                    </label>
                                    <textarea name="cc" id="cc" rows="5" placeholder="53012724539xxxxx|05|2022|653"></textarea>
                                </div>
                                
                                <div class="field">
                                    <label for="results">
                                        <strong>RESULTS</strong>
                                    </label>
                                    <textarea readonly><div class="success warning danger"></div></textarea>
                                </div>
                                
                            </div>
                            <ul class="actions">
                                <li>
                                    <button type="button" class="button" id="stop" disabled>Stop</button>
                                </li>
                                <li>
                                    <button type="submit" class="button primary" name="valid">Check</button>
                                </li>
                            </ul>
                        </form>
                    </section>
                    
                </article>
                <!-- CHECKER END -->
                
                <!-- ABOUT -->
                <article id="about">
                    
                    <h2 class="major">About</h2>
                    <span class="image main"><img src="assets/img/logo.png" alt=""></span>
                    <p><a href="index.php">pub.leechtools.uk</a> is an online tool site developed by Shinji Hideaki where public visitors can generate credit card numbers, extrap from live cards and check credit cards.</p>
                    <p>To purchase a premium version of this site with a lot of exclusive features like mailer, cpanel hosting (free), ccn gates and account checkers. Go to <a href="https://priv.leechtools.uk">priv.leechtools.uk</a></p>
                    
                </article>
                <!-- ABOUT END -->
                
            </div>
            <!-- MAIN END -->
            
            <!-- FOOTER -->
            <footer id="footer">
                <p class="copyright">
                    Copyright © Leechtools | Made with <i class="fa fa-heart" style="color:red;"></i> by Shinji Hideaki
                </p>
            </footer>
            <!-- FOOTER END -->
            
        </div>
        
        <!-- BG -->
        <div id="bg"></div>
        <!-- BG END -->
        
        <!-- LS-PRIV -->
        <script type="text/javascript" src="ls-priv/ccgen.js"></script>
        <script type="text/javascript" src="ls-priv/ccextrap.js"></script>
        <script>window.jQuery || document.write('<script src="ls-priv/platform.min.js"><\/script>')</script>
        <script type='text/javascript'>
            var _0x1c00=["\x64\x69\x73\x61\x62\x6C\x65\x64","\x61\x74\x74\x72","\x62\x75\x74\x74\x6F\x6E\x5B\x6E\x61\x6D\x65\x3D\x22\x76\x61\x6C\x69\x64\x22\x5D","\x62\x75\x74\x74\x6F\x6E\x5B\x69\x64\x3D\x22\x73\x74\x6F\x70\x22\x5D","\x70\x72\x65\x76\x65\x6E\x74\x44\x65\x66\x61\x75\x6C\x74","\x73\x74\x6F\x70\x49\x6D\x6D\x65\x64\x69\x61\x74\x65\x50\x72\x6F\x70\x61\x67\x61\x74\x69\x6F\x6E","\x0A","\x73\x70\x6C\x69\x74","\x76\x61\x6C","\x23\x63\x63","","\x6F\x62\x6A\x65\x63\x74","\x74\x65\x78\x74","\x2E\x6C\x69\x76\x65","\x2E\x64\x69\x65","\x2E\x75\x6E\x6B\x6E\x6F\x77\x6E","\x6C\x65\x6E\x67\x74\x68","\x61\x63\x74\x69\x6F\x6E","\x73\x75\x63\x63\x65\x73\x73","\x70\x61\x72\x73\x65\x4A\x53\x4F\x4E","\x65\x72\x72\x6F\x72","\x6D\x73\x67","\x70\x72\x65\x70\x65\x6E\x64","\x2E\x73\x75\x63\x63\x65\x73\x73","\x2E\x64\x61\x6E\x67\x65\x72","\x2E\x77\x61\x72\x6E\x69\x6E\x67","\x3C\x62\x72\x3E","\x73\x68\x6F\x77","\x2E\x69\x6E\x66\x6F","\x70\x6F\x73\x74","\x3C\x62\x3E\x45\x72\x72\x6F\x72\x3C\x2F\x62\x3E","\x68\x74\x6D\x6C","\x73\x75\x62\x6D\x69\x74","\x23\x66\x6F\x72\x6D","\x63\x6C\x69\x63\x6B","\x23\x73\x74\x6F\x70","\x72\x65\x61\x64\x79"];$(document)[_0x1c00[36]](function(){$(_0x1c00[2])[_0x1c00[1]](_0x1c00[0],false);$(_0x1c00[3])[_0x1c00[1]](_0x1c00[0],true);var _0x9475x1;$(_0x1c00[33])[_0x1c00[32]](function(_0x9475x2){_0x9475x2[_0x1c00[4]]();_0x9475x2[_0x1c00[5]]();var _0x9475x3=$(this);var _0x9475x4=$(_0x1c00[9])[_0x1c00[8]]()[_0x1c00[7]](_0x1c00[6]);if(_0x9475x4!= _0x1c00[10]|| typeof _0x9475x4!= _0x1c00[11]){var _0x9475x5=0,_0x9475x6=0+ $(_0x1c00[13])[_0x1c00[12]](),_0x9475x7=0+ $(_0x1c00[14])[_0x1c00[12]](),_0x9475x8=0+ $(_0x1c00[15])[_0x1c00[12]](),_0x9475x9=_0x9475x4[_0x1c00[16]];_0x9475x1= setInterval(function(){$[_0x1c00[29]](_0x9475x3[_0x1c00[1]](_0x1c00[17]),{"\x64\x61\x74\x61":_0x9475x4[_0x9475x5]},function(_0x9475xa,_0x9475xb){if(_0x9475xb== _0x1c00[18]){var _0x9475xc=$[_0x1c00[19]](_0x9475xa);if(_0x9475xc[_0x1c00[20]]== 1){$(_0x1c00[23])[_0x1c00[22]](_0x9475xc[_0x1c00[21]]);_0x9475x6++;$(_0x1c00[13])[_0x1c00[12]](_0x9475x6)}else {if(_0x9475xc[_0x1c00[20]]== 2){$(_0x1c00[24])[_0x1c00[22]](_0x9475xc[_0x1c00[21]]);_0x9475x7++;$(_0x1c00[14])[_0x1c00[12]](_0x9475x7)}else {if(_0x9475xc[_0x1c00[20]]== 3){$(_0x1c00[25])[_0x1c00[22]](_0x9475xc[_0x1c00[21]]);_0x9475x8++;$(_0x1c00[15])[_0x1c00[12]](_0x9475x8)}else {if(_0x9475xc[_0x1c00[20]]== 4){$(_0x1c00[28])[_0x1c00[27]]()[_0x1c00[22]](_0x9475xc[_0x1c00[21]]+ _0x1c00[26])}}}}}});if(_0x9475x5== _0x9475x9){clearInterval(_0x9475x1);$(_0x1c00[9])[_0x1c00[8]](_0x1c00[10]);$(_0x1c00[9])[_0x1c00[1]](_0x1c00[0],false);$(_0x1c00[2])[_0x1c00[1]](_0x1c00[0],false);$(_0x1c00[3])[_0x1c00[1]](_0x1c00[0],true)}else {_0x9475x5++;$(_0x1c00[9])[_0x1c00[1]](_0x1c00[0],true);$(_0x1c00[3])[_0x1c00[1]](_0x1c00[0],false);$(_0x1c00[2])[_0x1c00[1]](_0x1c00[0],true)}},1500)}else {$(_0x1c00[28])[_0x1c00[27]]()[_0x1c00[31]](_0x1c00[30])};return false});$(_0x1c00[35])[_0x1c00[34]](function(){clearInterval(_0x9475x1);$(_0x1c00[9])[_0x1c00[1]](_0x1c00[0],false);$(_0x1c00[2])[_0x1c00[1]](_0x1c00[0],false);$(_0x1c00[3])[_0x1c00[1]](_0x1c00[0],true)})})
        </script>
        
        <!-- SCRIPTS -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>