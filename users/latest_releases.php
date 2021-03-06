<!DOCTYPE html>
<html lang="en">

<?php
$active = 'homePage';
require_once('../includes/header.php');

session_start();
?>


<body>
    <?php
    require_once('../includes/menu_logged.php');
    ?>

    <div class="parent-container" id="container-releases">
        <div class="imgParent"></div>
        <div class="box-wide" id="containerLatest">
            <div class="titles" id="searchAndTitle">
                <div class="titles-latest">
                    <h1>Latest releases.</h1>
                    <p>In order to listen to a full song you have to buy it or to own it</p>
                </div>

                <?php
                require_once('../includes/searchBar.php')
                ?>
            </div>
            <div <?= $_SESSION['user']['user_type'] == 1 ? 'style="visibility: hidden"' : 'style="display:inline-block;"' ?> id="buttonLatest">
                <a href="upload_song.php"><button>Upload new song</button></a>
            </div>
            <div id="songs-container">
            </div>
            <div class="loadMoreContainer">
                <button id="loadMore" style="text-align: center;" value="0">Load more</button>
            </div>
        </div>

    </div>
    </div>
    <?php

                    require_once('../includes/footer.php');
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../scripts/audio.js"></script>

    <script>
        $('.likeLink').on("click", function() {
            console.log(this);
            $(this).css({
                fill: "#ff0000"
            });
        });

        $("#loadMore").on("click", function() {
            var row = Number($('#loadMore').val());

            $.ajax({
                method: "POST",
                data: {
                    row: row
                },
                url: "../includes/loadMoreSongs.php"
            }).done(function(data) {
                $('#loadMore').val(row + 3);
                var result = $.parseJSON(data);

                let songs = result.items;

                songs.forEach(song => {

                    createAudioElement(song.song_title, song.artist_name, song.path_id, song.id, song.price, getAttributesForSongId(song.id), song[0].profile_picture, "../img/like.svg")
                });

                if ($('#loadMore').val() > document.getElementById('songs-container').children.length) {
                    document.getElementById('loadMore').style.display = 'none';
                }

            });
        });


        $("#loadMore").trigger("click");
    </script>

    <script src="../scripts/search.js"></script>
    <script>

    </script>
</body>

</html>