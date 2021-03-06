<?php

echo ' <div class="player-component">
                           
<h3>' . $song['song_title'] . '</h3>
<div class="tags-container">
<p>' . $song['artist_name'] . ' - ' . $song['song_title'] . '</p>
<div class="tags">
  ' . Attribute::getCurrentAttributesAsList($attributes) . '
</div>
</div>
<div id="seek-bar">
    <div id="fill"></div>
    <div id="handle"></div>
</div>
<audio>
<source
    src="../uploads/' . $song['path_id'] . '.mp3"
    type="audio/mpeg"
/>
Your browser does not support the audio element.
</audio>
<div class="infoAboutSong">
<div id="player">

        <a class="play" id="play"><img src="../img/play.png"/></a>

</div>
<a><img class="like" src="../img/like.svg"/></a>
<details class="commentDetails">
    <summary>Add comment</summary>
    <div class="commentDiv" songId="' . $song['id'] . '">
    <p>
        <span class="user-comment"></span>
        <span class="comment-body">Comment</span>
    </p>
    </div>
    <div class="addCommentDiv">
    <input
    type="text"
    placeholder="Add comment here"
    id="commentId"
    songId="' . $song['id'] . '"
        />
        <a class="addComment">Add</a>
    </div>

</details>
<p class="price">Price: ' . $song['price'] . ' EUR</p>
<a  class="cartButton" 
    id="upload-btn"  
    value="' . $song['id'] . '" 
  
    >Add to cart</a>
</div>

</div>';
