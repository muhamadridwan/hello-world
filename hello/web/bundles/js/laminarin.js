
$(document).ready(function () {
    $(".laminarin-form").on("change", ".uploadfile", function (e) {
        readURL(this, $(this).attr("elm-view"));
    });
});

function readURL(input,target) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $(target).attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

function getDefaultImage(elm)
{
    $(elm).attr('src', "/bundles/images/no_image_available.jpg");
}