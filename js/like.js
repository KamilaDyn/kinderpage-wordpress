jQuery(document).ready(function ($) {

    $('.like-box').on('click', () => {
        ourClickDispatcher()
    });

    function ourClickDispatcher(e) {

        var target = $(event.target);
        var currentLikeBox = target.closest('.like-box');
        if (currentLikeBox.attr('data-exists') == 'yes') {
            deleteLike(currentLikeBox);
        } else {
            createLike(currentLikeBox);
        }
    }

    function createLike(currentLikeBox) {
        $.ajax({
            beforeSend: (xhr) => {
                xhr.setRequestHeader("X-WP-Nonce", kindergardenData.nonce);
            },
            url: `${kindergardenData.root_url}/wp-json/kindergarden/v1/manageLike`,
            type: 'POST',
            data: {
                "postId": currentLikeBox.data("post"),
            },
            success: (response) => {
                currentLikeBox.attr('data-exists', 'yes');
                var likeCount = parseInt(currentLikeBox.find(".like-count").html(), 10);
                likeCount++;
                currentLikeBox.find('.like-count').html(likeCount);
                currentLikeBox.attr('data-like', response);

            },
            error: (response) => {
                console.log(response);
            }
        })
    }

    function deleteLike(currentLikeBox) {

        $.ajax({
            beforeSend: (xhr) => {
                xhr.setRequestHeader("X-WP-Nonce", kindergardenData.nonce);
            },
            url: `${kindergardenData.root_url}/wp-json/kindergarden/v1/manageLike`,

            data: {
                'like': currentLikeBox.attr('data-like')
            },
            type: 'DELETE',
            success: (response) => {
                currentLikeBox.attr('data-exists', 'no');
                let likeCount = parseInt(currentLikeBox.find(".like-count").html(), 10);
                likeCount--;
                currentLikeBox.find('.like-count').html(likeCount);
                currentLikeBox.attr('data-like', '');

            },
            error: (response) => {
                console.log(response);
            }
        })
    }



});