<form role="form" action="includes/sliderAddImg.php" method="post" enctype="multipart/form-data" multipart="" accept-charset="utf-8" id="sliderAddImgForm" class="form-horizontal col-md-12 registration-form">
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Slider Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" align="center">
                    <!-- Picture Uploader -->
                    <div class="form-group row" align="center">
                        <label for="image-picker" class="col-md control-label label-md">
                            <img id="image-preview" src="http://dummyimage.com/200x200/f5f5f5/000.jpg&text=Click+here+to+upload+your+image" alt="your image" />
                        </label>
                        <input id="image-picker" name="img" type="file" accept="image/*" style="display: none;" />
                    </div>
                    <!-- Image Name -->
                    <div class="form-group row">
                        <label class="col-md control-label label-md" for="imgName">Image Name</label>
                        <input class="col-md" type="text" name="imgName" id="imgName" value="" placeholder="" required autofocus autocomplete>
                    </div>
                    <!-- Image Description -->
                    <div class="form-group row">
                        <label class="col-md control-label label-md" for="imgDesc">Image Description</label>
                        <input class="col-md" type="text" name="imgDesc" id="imgDesc" value="" placeholder="" required autocomplete>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="submitForm">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
/* must apply only after HTML has loaded */
$(document).ready(function() {
    // $("#sliderAddImgForm").on("submit", function(e) {
    //     var postData = $(this).serializeArray();
    //     var formURL = $(this).attr("action");
    //     $.ajax({
    //         url: formURL,
    //         type: "POST",
    //         data: postData,
    //         success: function(data, textStatus, jqXHR) {
    //             // $('#exampleModal').modal('hide');
    //             $('#exampleModal .modal-header .modal-title').html("Result");
    //             $('#exampleModal .modal-body').html(data);
    //             $("#submitForm").remove();
    //         },
    //         error: function(jqXHR, status, error) {
    //             console.log(status + ": " + error);
    //         }
    //     });
    //     e.preventDefault();
    // });

    // $("#submitForm").on('click', function() {
    //     $("#sliderAddImgForm").submit();
    // });

    $("#image-picker").change(function(event) {
        readURL(this);
    });
});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#image-preview').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
</script>