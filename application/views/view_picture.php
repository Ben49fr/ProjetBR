<section class="portfolio-item-details">
    <div class="row-fluid">
        <div class="span8">
            <img src="<?=$picture->getLink()?>">
        </div>
        <div class="span4">
            <div class="close-portfolio">
                <span>&#10006;</span>
                <div class="clearfix"></div>
            </div>
            <h5><?=$picture->title?></h5>
            <article class="smallFontBy08">
                <p><?=$picture->description?></p>
            </article>
            <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Partager</a></div>
            <div class="social-icons sicon-black bordered bordered-black">
                <!--a href="#" class="sicon-facebook"><i>Facebook</i></a-->
                <a href="https://www.instagram.com/br_photographie/" target="_blank" class="sicon-instagram"><i>Instagram</i></a>
                <a href="https://www.linkedin.com/in/benjamin-rauturier-6b324896?trk=nav_responsive_tab_profile_pic" target="_blank" class="sicon-linkedin"><i>LinkedIn</i></a>
                <!--a href="#" class="sicon-youtube"><i>Youtube</i></a>
                <a href="#" class="sicon-pinterest"><i>Pinterest</i></a-->
            </div>
        </div>
    </div>
</section>
