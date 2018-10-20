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
    </div>
@endif