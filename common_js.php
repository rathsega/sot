<!-- Critical JS - defer to unblock rendering -->
<script src="<?php echo minified_asset_path('assets/js/vendor/jquery.js'); ?>" defer></script>
<script src="assets/js/vendor/bootstrap.min.js" defer></script>

<?php 
$currentPage = basename($_SERVER['PHP_SELF']);
$isHomePage = ($currentPage === 'index.php');
$isCoursePage = (strpos($currentPage, 'oracle-') === 0);
$isContactPage = ($currentPage === 'contactus.php');

function minified_asset_path($path) {
    if (strpos($path, '.min.') !== false) {
        return $path;
    }

    $minPath = preg_replace('/\.js$/', '.min.js', $path);
    if ($minPath && file_exists(__DIR__ . '/' . $minPath)) {
        return $minPath;
    }

    return $path;
}
?>

<!-- Swiper only needed on home and course pages -->
<?php if ($isHomePage || $isCoursePage): ?>
<script src="<?php echo minified_asset_path('assets/js/vendor/swiper.js'); ?>" defer></script>
<?php endif; ?>

<!-- SAL animation -->
<script src="<?php echo minified_asset_path('assets/js/vendor/sal.js'); ?>" defer></script>

<!-- intl-tel-input - needed by header.php forms -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js" defer></script>

<!-- Core vendor scripts - always needed -->
<script src="<?php echo minified_asset_path('assets/js/vendor/jquery-appear.js'); ?>" defer></script>
<script src="<?php echo minified_asset_path('assets/js/vendor/backtotop.js'); ?>" defer></script>
<script src="<?php echo minified_asset_path('assets/js/vendor/wow.js'); ?>" defer></script>
<script src="assets/js/vendor/waypoint.min.js" defer></script>

<!-- Home page specific scripts -->
<?php if ($isHomePage): ?>
<script src="<?php echo minified_asset_path('assets/js/vendor/odometer.js'); ?>" defer></script>
<?php endif; ?>

<!-- Course page specific scripts (heavy) - lazy load -->
<?php if ($isCoursePage): ?>
<script>
// Lazy load heavy scripts for course pages after interaction
document.addEventListener('DOMContentLoaded', function() {
  var heavyScripts = [
    '<?php echo minified_asset_path('assets/js/vendor/plyr.js'); ?>',
    'assets/js/vendor/magnify-popup.min.js',
    '<?php echo minified_asset_path('assets/js/vendor/isotop.js'); ?>',
    '<?php echo minified_asset_path('assets/js/vendor/imageloaded.js'); ?>'
  ];
  var loaded = false;
  function loadHeavyScripts() {
    if (loaded) return;
    loaded = true;
    heavyScripts.forEach(function(src) {
      var s = document.createElement('script');
      s.src = src;
      s.async = true;
      document.body.appendChild(s);
    });
  }
  // Load on scroll/click or after 3 seconds
  ['scroll', 'click', 'touchstart'].forEach(function(e) {
    window.addEventListener(e, loadHeavyScripts, {once: true, passive: true});
  });
  setTimeout(loadHeavyScripts, 3000);
});
</script>
<?php endif; ?>

<!-- Scripts needed for parallax effects -->
<script src="<?php echo minified_asset_path('assets/js/vendor/paralax-scroll.js'); ?>" defer></script>
<script src="assets/js/vendor/paralax.min.js" defer></script>

<!-- Other vendor scripts - defer but not critical -->
<script src="<?php echo minified_asset_path('assets/js/vendor/easypie.js'); ?>" defer></script>
<script src="<?php echo minified_asset_path('assets/js/vendor/text-type.js'); ?>" defer></script>
<script src="<?php echo minified_asset_path('assets/js/vendor/jquery-one-page-nav.js'); ?>" defer></script>
<script src="assets/js/vendor/bootstrap-select.min.js" defer></script>
<script src="<?php echo minified_asset_path('assets/js/vendor/jquery-ui.js'); ?>" defer></script>
<script src="<?php echo minified_asset_path('assets/js/vendor/countdown.js'); ?>" defer></script>

<!-- Main JS -->
<script src="<?php echo minified_asset_path('assets/js/main.js'); ?>" defer></script>

<!-- Performance optimizations -->
<script>
document.addEventListener('scroll', function() {}, {passive: true});
document.addEventListener('touchstart', function() {}, {passive: true});
</script>