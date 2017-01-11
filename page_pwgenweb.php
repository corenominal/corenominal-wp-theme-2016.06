<?php /* Template Name: Project Page */
get_header();
?>
<section class="content project">
<?php
// The loop
while ( have_posts() ) :
the_post();
?>
<article class="h-entry post">
<h1>pwgenWEB <span>Password Generator</span></h1>
<div class="e-content pwgenWEB">
             
    <label class="label"> Password:
    <input type="text" id="password" class="full-width password" spellcheck="false">
    </label>

    <label class="label">
        <select id="length">
            <?php for ($i=8; $i < 65; $i++) { 
                echo '<option val="' . $i . '">' . $i . '</option>';
            } ?>
        </select>
        <span class="label-body checkbox-custom-label">Number of characters</span>
    </label>
    
    <label class="label">
        <input id="capitalize" class="checkbox-custom" type="checkbox" checked>
        <span class="label-body checkbox-custom-label">Include at least one capital letter in the password</span>
    </label>

    <label class="label">
        <input id="numerals" class="checkbox-custom" type="checkbox" checked>
        <span class="label-body checkbox-custom-label">Include at least one number in the password</span>
    </label>

    <label class="label">
        <input id="symbols" class="checkbox-custom" type="checkbox" checked>
        <span class="label-body checkbox-custom-label">Include at least one special symbol in the password</span>
    </label>

    <button id="generate" class="pwgen-button button button-primary">New Password</button> 
    <button id="copy" data-clipboard-target="#password" class="pwgen-button button button-primary">Copy to Clipboard</button>

    <div id="pwgen-notify" class="pwgen-notify"></div>

    <div class="about">
        <?php the_content() ?>
    </div>

</div>
</article>
<?php
comments_template();
endwhile;
?>
</section>
<?php
get_sidebar();
get_footer();
