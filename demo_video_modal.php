<style>
    /* Ensure the modal content is responsive */
    .demo_video_modal_dialog {
        max-width: 80%;
        margin-left: 10%;
        margin-top: 20%;
    }

    .demo_video_modal_body {
        position: relative;
        padding-bottom: 100%;
        /* 16:9 Aspect Ratio */
    }

    .demo_video_modal_body iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
</style>
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog demo_video_modal_dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoModalLabel"><?php echo $course_details[$current_slug]['title'] ?></h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body demo_video_modal_body">
                <iframe id="videoFrame" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    //$(document).ready(function() {
        $('#videoModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var videoSrc = "<?php echo $course_details[$current_slug]['mobile_demo_video'] ?>"; // Replace VIDEO_ID with your YouTube video ID
            var modal = $(this);
            modal.find('#videoFrame').attr('src', videoSrc);
            console.log(videoSrc);
        });

        $('#videoModal').on('hide.bs.modal', function(event) {
            var modal = $(this);
            modal.find('#videoFrame').attr('src', '');
        });
    //});
</script>