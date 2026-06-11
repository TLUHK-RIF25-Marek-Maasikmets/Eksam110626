<?php get_header(); ?>

<div class="page-banner">
    <?php if (has_post_thumbnail()) : ?>
        <div class="page-banner-image"><?php the_post_thumbnail('full'); ?></div>
    <?php endif; ?>
    <div class="container">
        <h1>Kontakt</h1>
        <p class="breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>">Avaleht</a> &rsaquo; Kontakt</p>
    </div>
</div>

<div class="content-area">
    <div class="container">
        <div class="contact-grid">

            <div class="contact-info">
                <h2>Võta meiega ühendust</h2>

                <div class="contact-item">
                    <span class="contact-label">Aadress</span>
                    <span class="contact-value">Pagari 1, 10151 Tallinn</span>
                </div>
                <div class="contact-item">
                    <span class="contact-label">Telefon</span>
                    <span class="contact-value"><a href="tel:+3725551234">+372 666 666</a></span>
                </div>
                <div class="contact-item">
                    <span class="contact-label">E-post</span>
                    <span class="contact-value"><a href="mailto:info@tarkkasi.ee">info@tarkkasi.ee</a></span>
                </div>
                <div class="contact-item">
                    <span class="contact-label">Reg-nr</span>
                    <span class="contact-value">12345678</span>
                </div>

                <div class="opening-hours">
                    <h3>Lahtiolekuajad</h3>
                    <table class="hours-table">
                        <tr><td>Esmaspäev – reede</td><td>7:00 – 18:00</td></tr>
                        <tr><td>Laupäev</td><td>8:00 – 15:00</td></tr>
                        <tr><td>Pühapäev</td><td>Suletud</td></tr>
                    </table>
                </div>
            </div>

            <div>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/map.png" alt="Kaart: Pagari tänav 5, Tallinn" style="width:100%;border-radius:8px;">
            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>
