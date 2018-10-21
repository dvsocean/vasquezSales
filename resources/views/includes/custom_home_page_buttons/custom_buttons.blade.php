<!--
/**
 * Created by PhpStorm.
 * User: danielocean
 * Date: 10/10/18
 * Time: 9:30 PM
 */
-->
<?php
$bicons = \App\FrontpageBicons::find(1);
?>

<div class="container">
    <div class="row">
        <br><br>
        <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2">
            <!--PLACEHOLDER-->
        </div>

        <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2">
            <button class="buttonfx curtainup" id="cat_button_one">{{!empty($bicons->cat_button_one) ? $bicons->cat_button_one : 'Category one'}}</button>
            <script>
                $('#cat_button_one').click(function() {
                    window.location = "/cat_button_one";
                });
            </script>
            <br>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2">
            <button class="buttonfx curtainup" id="cat_button_two">{{!empty($bicons->cat_button_two) ? $bicons->cat_button_two : 'Category two'}}</button>
            <script>
                $('#cat_button_two').click(function() {
                    window.location = "/cat_button_two";
                });
            </script>
            <br>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2">
            <button class="buttonfx curtainup" id="cat_button_three">{{!empty($bicons->cat_button_three) ? $bicons->cat_button_three : 'Category three'}}</button>
            <script>
                $('#cat_button_three').click(function() {
                    window.location = "/cat_button_three";
                });
            </script>
            <br>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2">
            <button class="buttonfx curtainup" id="cat_button_four">{{!empty($bicons->cat_button_four) ? $bicons->cat_button_four : 'Category four'}}</button>
            <script>
                $('#cat_button_four').click(function() {
                    window.location = "/cat_button_four";
                });
            </script>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2">
            <!--PLACEHOLDER-->
        </div>
    </div>
</div>