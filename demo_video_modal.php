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
                <p class="modal-title" id="videoModalLabel"><?php echo $course_details[$current_slug]['title'] ?></p>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body demo_video_modal_body">
                <iframe id="videoFrame" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof $ === 'undefined') return;
        $('#videoModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var videoSrc = "<?php echo $course_details[$current_slug]['mobile_demo_video'] ?>";
            var modal = $(this);
            modal.find('#videoFrame').attr('src', videoSrc);
        });

        $('#videoModal').on('hide.bs.modal', function(event) {
            var modal = $(this);
            modal.find('#videoFrame').attr('src', '');
        });
    });
</script>