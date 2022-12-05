$(document).ready(function () {


    $(".upload-photo").click(function () {
       $("#Pro_Image").trigger('click')
    })

    $("#UserImage").click(function () {
        $("#Pro_Image").trigger('click')
    })


    $("#Pro_Image").change(function () {
        if (this.files && this.files[0]) {
            var fileReader = new FileReader();
            fileReader.readAsDataURL(this.files[0]);
            fileReader.onload = function (x) {

                $("#UserImage").attr('src', x.target.result);
            }
        }
    })
})
   

       
        

        