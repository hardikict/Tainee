<?php
include('db_connect.php');
?>


<script>
    $(document).ready(function() {
        $.ajax({
            url: "",
            type    : "POST",
            cache: false,
            success: function(dataResult) {
                $('#listData').html(dataResult);
            }
        });
        $(document).on("click", ".delete", function() {
            var $ele = $(this).parent().parent();
            $.ajax({
                url: "",
                type: "POST",
                cache: false,
                data: {
                    id: $(this).attr("data-id")
                },
                success: function(dataResult) {
                    var dataResult = JSON.parse(dataResult);
                    if (dataResult.statusCode == 200) {
                        $ele.fadeOut().remove();
                    }
                }
            });
        });
    });
</script>


<?php

$id = $_POST['id'];
$sql = "DELETE FROM `AjaxCrud` WHERE id = $id";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Success! Recodrd deleted')</script>";
} else {
    echo json_encode(array("statusCode" => 201));
}

?>