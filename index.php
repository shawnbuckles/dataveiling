<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Data for sale: I will sell you my soul</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Auctioning my personal data to the highest bidding organization.">
    
    <link rel="stylesheet" href="./css/vendor/normalize.css" />
    <link  rel="stylesheet" href="./css/flat-ui.css" />
    <link  rel="stylesheet" href="./css/style.css" />
    <link  rel="stylesheet" href="./css/responsive.css" />
    <link href='http://fonts.googleapis.com/css?family=Monofett|Roboto+Slab:300' rel='stylesheet' type='text/css'>
    <script src="email/validation.js" type="text/javascript"></script>
    
</head>
<body>
    <div class="story-content">

        <section class="auction">
            <div class="site-width">
                <div class="copy-width">
                    <h1>FOR $ALE personal data</h1>
                    <h2>I'm Shawn Buckles</h2>
                    <p>and I will sell my personal data to the highest bidding organization. Auction closes at the 12th of april 2014.</p>
                    <form>
                        <input class="form-control input-hg" type="text" name="organization" placeholder="Organization" value="">
                        <input class="form-control input-hg" type="text" name="country" placeholder="Country" value="">
                        <input class="form-control input-hg" type="text" name="price" placeholder="Bid in €" value="">
                        <button class="btn btn-embossed btn-primary btn-hg">Place bid</button>
                    </form>
                        <h1>Contact Us</h1>
                           <h3 style="color:#FF6633;"><?php echo $_GET[msg];?></h3>
                           <hr>
                                                                                
                        <form name="enq" method="post" action="email/" onsubmit="return validation();">
                        <fieldset>
                            
                        <input type="text" name="name" id="name" value=""  class="input-block-level" placeholder="Name" />
                        <input type="text" name="email" id="email" value="" class="input-block-level" placeholder="Email" />
                        <textarea rows="11" name="message" id="message" class="input-block-level" placeholder="Comments"></textarea>
                           
                        <div class="actions">
                        <input type="submit" value="Send Your Message" name="submit" id="submitButton" class="btn btn-info pull-right" title="Click here to submit your message!" />
                        </div>
                            
                        </fieldset>
                        </form> 
                </div>
            </div>
        </section>

        <section class="data">
            <div class="site-width">
                <div class="copy-width">
                    <h2>What you'll get</h2>
                    <p>The highest bidder will receive the following of my data:</p>
                    <div class="tile">
                        <img class="tile-image big-illustration" src="img/icons/Clipboard.png" />
                        <p>My personal records</p>
                    </div>
                     <div class="tile">
                        <img class="tile-image big-illustration" src="img/icons/Map.png" />
                        <p>My location track records</p>
                    </div>
                    <div class="tile">
                        <img class="tile-image big-illustration" src="img/icons/Compas.png" />
                        <p>My browsing history</p>
                    </div>
                     <div class="tile">
                        <img class="tile-image big-illustration" src="img/icons/Calendar.png" />
                        <p>My personal calendar</p>
                    </div>
                    <div class="tile">
                        <img class="tile-image big-illustration" src="img/icons/Mail.png" />
                        <p>My email conversations</p>
                    </div>
                     <div class="tile">
                        <img class="tile-image big-illustration" src="img/icons/Chat.png" />
                        <p>My online conversations</p>
                    </div>
                    <div class="tile">
                        <img class="tile-image big-illustration" src="img/icons/Book.png" />
                        <p>My thoughts</p>
                    </div>
                    <div class="tile">
                        <img class="tile-image big-illustration" src="img/icons/Pocket.png" />
                        <p>My consumer preferences</p>
                    </div>
                     <div class="tile">
                        <img class="tile-image big-illustration" src="img/icons/Infinity-Loop.png" />
                        <p>My behavioral patterns</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta">
            <div class="site-width">
                <div class="copy-width">
                    <h1>Buy me out</h1>
                    <form>
                    <p>Auction closes the 12th of April <br /> at 12.00pm Amsterdam Time.</p>
                        <input class="form-control input-hg" type="text" name="price" placeholder="Bid in €" value="">
                        <button class="btn btn-embossed btn-primary btn-hg">Place bid</button>
                   </form>
                </div>
            </div>
        </section>

        <section class="prologue">
            <div class="site-width">
                <div class="copy-width">
                    <p>Everyday, I collect a vast amount of personal data. The computers I’m surrounded with have memory: they monitor my every move. While current legislation is lagging, organizations trade my privacy massively.</p>
                    <p>I agree to all of this by using services as Google, Facebook and Apple. They specialize in collecting data on (consumer)behavior, location and interests -and use my (online) conversations and agenda to map out my networks.</p>
                    <p>Though the real problem lies with governments misusing this big data.</p>
                    <p>Facebook isn’t free.</p>
                    <p>You pay with your identity.</p>
                </div>
            </div>
        </section>

        <section class="contact">
            <div class="site-width">
                <div class="copy-width">
                    <p></p>
                    <p>Shawn Buckles<br /><a target="blank" href="http://ikvraagmeaf.tumblr.com/tagged/dataforsale/chrono">More on the subject (Dutch)</a><br />Get in touch with me <a href="mailto:&#115;&#104;&#097;&#119;&#110;&#046;&#098;&#117;&#099;&#107;&#108;&#101;&#115;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;">by e-mail</a>. Here's <a href="http://shawnbuckles.nl/">my website.</a></p>
                </div>
            </div>
        </section>

    </div>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45040211-2', 'shawnbuckles.github.io');
  ga('send', 'pageview');

</script>

</body>