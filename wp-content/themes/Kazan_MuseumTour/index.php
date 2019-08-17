<?php get_header(); ?>
<main id="content">
    <h1>Look at the popular events and places in Kazan!</h1>
<section id="slider">
    <?php echo do_shortcode('[wonderplugin_carousel id="1"]'); ?>
</section>
    <?php dynamic_sidebar( 'primary-widget-area-2' ); ?>

<section id="museums">
        <h2>Museums</h2>

        <h3>Filter events by category</h3>
<!--        --><?//var_dump(get_field_object())?>
    <?
    ?>
    <form id="filter" action="" method="get">
        <div class="row">
            <input type="radio" name="category" value="history" id="history"> <label for="history">Historical</label>
            <input type="radio" name="category" value="art" id="art"> <label for="art">Art</label>
            <input type="radio" name="category" value="war" id="war"> <label for="war">Military</label>
        </div>
            <input type="submit" value="Filter">
    </form>
        <div class="list">
            <?
            if(!empty($_GET['category']))
            $posts = get_posts([
                    'category'=>3,
                    'meta_query'=>[
                            'OR'=>[
                                    [
                                            'meta_key'=>'category',
                                            'value'=>$_GET['category'],
                                            'compare'=>'LIKE'
                                    ]
                            ]
                    ]
            ]);

            else
                $posts = get_posts([
                    'category'=>3,
                ]);
            foreach ($posts as $post): setup_postdata($post);

            $object = get_field_object('category')['choices'];
            $cat= get_field('category')[0];

            ?>
            <div class="museum">
                <div class="photo">
                    <img src="<?the_field('image')?>" alt="<?the_field('image_alt')?>" title="<?the_field('image_title')?>">
                </div>
                <div class="desc">
                    <h3><?the_title();?></h3>
                    <span class="gray"><?=$object[$cat]?></span>
                    <p><?the_content()?></p>
                </div>
            </div>
            <?
            endforeach;
            ?>
        </div>
    </section>

<section class="news-events">
    <div id="events">
        <h2>
            Events
        </h2>
        <div class="list">
<?
$posts = get_posts([
    'category'=>2,
    'orderBy'=>'meta_value',
    'meta_key'=>'date',
    'order'=>'ASC',
    'meta_query'=>[
            'OR'=>[
                    [
                        'meta_key'=>'date',
                        'value'=>date('Y-m-d',time()),
                        'compare'=>'>=',
                        'type'=>'DATE'
                    ]
            ]
    ]
]);
foreach ($posts as $post):
    ?>
            <div class="event">
                <h3><?the_title()?></h3>
                <span class="gray"><?the_field('date')?></span>
                <div class="desc"><?the_content()?></div>
            </div>
<?
endforeach;
?>
        </div>
    </div>
    <div id="news">
        <h2>
            News
        </h2>
        <?
        $posts = get_posts([
            'category'=>4,
        ]);
        foreach ($posts as $post):
            ?>
        <div class="list">
            <div class="news">
                <h3><?the_title()?></h3>

                <?=get_the_post_thumbnail()?>
                <div class="desc"><?the_excerpt()?></div>
            </div>
        </div>
        <?
        endforeach;
        ?>
    </div>
</section>

<section id="contact">
    <h2>Our contacts</h2>
    <?=do_shortcode('[contact-form-7 id="66" title="Footer contact form"]')?>
</section>

</main>
<?php get_footer(); ?>