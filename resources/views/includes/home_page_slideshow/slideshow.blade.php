<!--
/**
 * Created by PhpStorm.
 * User: danielocean
 * Date: 10/8/18
 * Time: 8:32 PM
 */
-->
<section id="tiny" class="tinyslide">
    <aside class="slides">
        <figure> <img src="{{!empty($tiny->tiny_one) ? $tiny->tiny_one : 'tiny_images/WALT.jpg'}}" alt="" height="2200" width="1600">
            <figcaption><!--PLACEHOLDER--></figcaption>
        </figure>
        <figure> <img src="{{!empty($tiny->tiny_two) ? $tiny->tiny_two : 'tiny_images/WALT.jpg'}}" alt="" height="2200" width="1600">
            <figcaption><!--PLACEHOLDER--></figcaption>
        </figure>
        <figure> <img src="{{!empty($tiny->tiny_three) ? $tiny->tiny_three : 'tiny_images/WALT.jpg'}}" alt="" height="2200" width="1600">
            <figcaption><!--PLACEHOLDER--></figcaption>
        </figure>
    </aside>
</section>
<script> var tiny = $('#tiny').tiny().data('api_tiny');</script>