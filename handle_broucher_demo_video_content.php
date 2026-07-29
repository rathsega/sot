<!-- <script>
    const detectDeviceType = () =>
        /Mobile|Android|iPhone|iPad/i.test(navigator.userAgent) ?
        'Mobile' :
        'Desktop';
    console.log(localStorage.getItem('data_submitted'));

    if (localStorage.getItem('data_submitted') == true || localStorage.getItem('data_submitted') == 'true') {
        
        document.getElementById('download_broucher_form') ? document.getElementById('download_broucher_form').style.display = 'none' : '';
        document.getElementById('download_broucher_link') ? document.getElementById('download_broucher_link').style.display = 'block' : '';

        if (detectDeviceType() == 'Mobile') {
            document.getElementById('demo_video_form_mbl') ? document.getElementById('demo_video_form_mbl').style.display = 'none' : '';
            document.getElementById('demo_video_link_mbl') ? document.getElementById('demo_video_link_mbl').style.display = 'block' : '';
        } else {
            document.getElementById('demo_video_form') ? document.getElementById('demo_video_form').style.display = 'none' : '';
            document.getElementById('demo_video_link') ? document.getElementById('demo_video_link').style.display = 'block' : '';
        }

    } else {
        document.getElementById('download_broucher_form').style.display = 'block';
        document.getElementById('download_broucher_link').style.display = 'none';
        if (detectDeviceType() == 'Mobile') {
            document.getElementById('demo_video_form_mbl').style.display = 'block';
            document.getElementById('demo_video_link_mbl').style.display = 'none';
        } else {
            document.getElementById('demo_video_form').style.display = 'block';
            document.getElementById('demo_video_link').style.display = 'none';
        }
    }
</script> -->

<script>
// Defer execution until DOM is ready
document.addEventListener('DOMContentLoaded', function() {
    const safelyGetLocalStorageItem = (key) => {
        try {
            return localStorage.getItem(key);
        } catch (e) {
            return null;
        }
    };

    const dataSubmitted = safelyGetLocalStorageItem('data_submitted');
    const isDataSubmitted = dataSubmitted === 'true';

    const toggleElementVisibility = (id, shouldShow) => {
        const element = document.getElementById(id);
        if (element) {
            element.style.display = shouldShow ? 'block' : 'none';
        }
    };

    if (isDataSubmitted) {
        toggleElementVisibility('download_broucher_form', false);
        toggleElementVisibility('download_broucher_link', true);

        if (detectDeviceType() === 'Mobile') {
            toggleElementVisibility('demo_video_form_mbl', false);
            toggleElementVisibility('demo_video_link_mbl', true);
        } else {
            toggleElementVisibility('demo_video_form', false);
            toggleElementVisibility('demo_video_link', true);
        }
    } else {
        toggleElementVisibility('download_broucher_form', true);
        toggleElementVisibility('download_broucher_link', false);

        if (detectDeviceType() === 'Mobile') {
            toggleElementVisibility('demo_video_form_mbl', true);
            toggleElementVisibility('demo_video_link_mbl', false);
        } else {
            toggleElementVisibility('demo_video_form', true);
            toggleElementVisibility('demo_video_link', false);
        }
    }
});
</script>
