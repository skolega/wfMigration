jQuery(document).ready(function () {
    $(".clickable-row").click(function () {
        window.document.location = $(this).data("href");
    });
});

$("div .bigimage").on('mouseenter', function (event) {
    removeBigImage();
    image = $(this).children().children().find('img').attr('src');
    xposition = event.pageX;
    yposition = event.pageY + 60;
    $('body').prepend('<div class="dobigimage" style="top:' + yposition + 'px;left:' + xposition + 'px"><img src="' + image + '"/></div>');
});

$('.dobigimage').mouseleave(function () {
    removeBigImage();
});
function removeBigImage()
{
    $('.dobigimage').remove();
}

$(".bigimage").mouseleave(function () {
    removeBigImage();
});

$(".selectable").on('click', function () {
    $(this).toggleClass('image-selected');
    var numItems = $('.image-selected').length;
    $('.images_count').attr('value', numItems);
    var image = $(this).find('img').attr('src');
     if ($("input[value='" + image + "']").length >0) {
        $("input[value='" + image + "']").remove();
    } else {
        $(this).append('<input type="checkbox" value="' + image + '" name="image_' + numItems + '" checked="checked" style="opacity:0; position:absolute; left:9999px;">');
    }
});

