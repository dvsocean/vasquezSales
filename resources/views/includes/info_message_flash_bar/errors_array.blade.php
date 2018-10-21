<!--
/**
 * Created by PhpStorm.
 * User: danielocean
 * Date: 10/20/18
 * Time: 4:20 PM
 */
-->
@if (count($errors) > 0)
    <div class="alert alert-danger">
        @if($errors->has('heading_one'))
            <p>Heading 1 must contains at least 3 characters</p>
        @endif

        @if($errors->has('body_one'))
            <p>Body 1 must contain at least 10 characters</p>
        @endif

        @if($errors->has('heading_two'))
            <p>Heading 2 must contains at least 3 characters</p>
        @endif

        @if($errors->has('body_two'))
            <p>Body 2 must contain at least 10 characters</p>
        @endif

        @if($errors->has('heading_three'))
            <p>Heading 3 must contains at least 3 characters</p>
        @endif

        @if($errors->has('body_three'))
            <p>Body 3 must contain at least 10 characters</p>
        @endif

            @if($errors->has('quad_title'))
                <p>The title must contain at least 3 characters</p>
            @endif

            @if($errors->has('quad_heading_one'))
                <p>The first quad must contain at least 3 characters</p>
            @endif

            @if($errors->has('quad_body_one'))
                <p>The first body portion must contain at least 10 characters</p>
            @endif

            @if($errors->has('quad_heading_two'))
                <p>The second heading must contain at least 3 characters</p>
            @endif

            @if($errors->has('quad_body_two'))
                <p>The second body portion must contain at least 10 characters</p>
            @endif

            @if($errors->has('quad_heading_three'))
                <p>The third heading must contain at least 3 characters</p>
            @endif

            @if($errors->has('quad_body_three'))
                <p>The third body portion must contain at least 10 characters</p>
            @endif

            @if($errors->has('quad_heading_four'))
                <p>The fourth heading must contain at least 3 characters</p>
            @endif

            @if($errors->has('quad_body_four'))
                <p>The fourth body portion must contain at least 10 characters</p>
            @endif

            @if($errors->has('footer_title'))
                <p>The footer title must contain at least 3 characters</p>
            @endif
    </div>
@endif