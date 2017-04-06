<?php
/**
 * Created by PhpStorm.
 * User: tiema
 * Date: 4/6/2017
 * Time: 6:55 PM
 */
?>
<h1>admin test</h1>

@foreach($posts as $post)
    {{$post['category']}} <br>
@endforeach