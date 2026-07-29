<?php
// Resolve the selected course from the current slug
$_claim_course = '';
if (in_array($current_slug, ['oracle-fusion-scm-training', 'oracle-fusion-scm-training-in-hyderabad', 'oracle-fusion-scm-training-in-bangalore', 'oracle-fusion-scm-training-in-pune', 'oracle-apps-scm-training-in-chennai'])) {
    $_claim_course = 'Oracle Fusion SCM';
} elseif (in_array($current_slug, ['oracle-fusion-hcm-online-training', 'oracle-fusion-hcm-training-in-hyderabad', 'oracle-fusion-hcm-training-in-bangalore', 'oracle-fusion-hcm-training-in-pune', 'oracle-fusion-hcm-training-in-chennai'])) {
    $_claim_course = 'Oracle Fusion HCM';
} elseif (in_array($current_slug, ['oracle-fusion-cloud-financials', 'oracle-finance-course-in-hyderabad', 'oracle-finance-course-in-bangalore', 'oracle-finance-course-in-pune', 'oracle-finance-course-in-chennai'])) {
    $_claim_course = 'Oracle Fusion Financials';
} elseif (in_array($current_slug, ['oracle-fusion-technical-online-training', 'oracle-fusion-technical-training-in-hyderabad', 'oracle-fusion-technical-training-in-bangalore', 'oracle-fusion-technical-training-in-pune', 'oracle-fusion-technical-training-in-chennai'])) {
    $_claim_course = 'Oracle Fusion Technical';
} elseif ($current_slug === 'oracle-fusion-procurement-training') {
    $_claim_course = 'Oracle Fusion Procurement';
} elseif ($current_slug === 'oracle-fusion-oic-training') {
    $_claim_course = 'Oracle Fusion OIC';
} elseif ($current_slug === 'oracle-fusion-orc') {
    $_claim_course = 'Oracle Fusion ORC';
} elseif ($current_slug === 'oracle-gtm-online-training') {
    $_claim_course = 'Oracle GTM';
} elseif ($current_slug === 'oracle-fusion-wms-cloud-training') {
    $_claim_course = 'Oracle Fusion WMS Cloud';
} elseif ($current_slug === 'oracle-transportation-management-training') {
    $_claim_course = 'Oracle Transportation Management';
} elseif ($current_slug === 'oracle-scm-training-online') {
    $_claim_course = 'Oracle EBS R12 SCM';
} elseif ($current_slug === 'oracle-r12-apps-financial-training') {
    $_claim_course = 'Oracle EBS R12 Financials';
}
$_claim_is_course_page = ($current_slug !== 'index' && $_claim_course !== '');
?>
<section class="hero-vibrant">
    <div class="hero-content">

        <div class="hero-form">
            <form id="claim_offer_form" novalidate>

                <div class="claim-field-wrap">
                    <input class="form-field" type="text" id="claim_name" name="claim_name" placeholder="Name" />
                    <span class="claim-field-error" id="error_claim_name"></span>
                </div>

                <div class="claim-field-wrap">
                    <input class="form-field" type="email" id="claim_email" name="claim_email" placeholder="Email" />
                    <span class="claim-field-error" id="error_claim_email"></span>
                </div>

                <div class="claim-field-wrap">
                    <input class="form-field" type="tel" id="claim_phone" name="claim_phone" placeholder="Phone" />
                    <span class="claim-field-error" id="error_claim_phone"></span>
                </div>

                <?php if ($_claim_is_course_page): ?>
                    <!-- Course page: pass course value silently -->
                    <input type="hidden" id="claim_course" name="claim_course" value="<?php echo htmlspecialchars($_claim_course); ?>" />
                <?php else: ?>
                    <!-- Home page: show full course dropdown -->
                    <div class="claim-field-wrap">
                        <select class="form-field" id="claim_course" name="claim_course">
                            <option value="">Select a Course</option>
                            <option value="Oracle Fusion SCM">Oracle Fusion SCM</option>
                            <option value="Oracle Fusion HCM">Oracle Fusion HCM</option>
                            <option value="Oracle Fusion Financials">Oracle Fusion Financials</option>
                            <option value="Oracle Fusion Technical">Oracle Fusion Technical</option>
                            <option value="Oracle Fusion Procurement">Oracle Fusion Procurement</option>
                            <option value="Oracle Fusion OIC">Oracle Fusion OIC</option>
                            <option value="Oracle Fusion ORC">Oracle Fusion ORC</option>
                            <option value="Oracle GTM">Oracle GTM</option>
                            <option value="Oracle Fusion WMS Cloud">Oracle Fusion WMS Cloud</option>
                            <option value="Oracle Transportation Management">Oracle Transportation Management</option>
                            <option value="Oracle EBS R12 SCM">Oracle EBS R12 SCM</option>
                            <option value="Oracle EBS R12 Financials">Oracle EBS R12 Financials</option>
                        </select>
                        <span class="claim-field-error" id="error_claim_course"></span>
                    </div>
                <?php endif; ?>
                <div class="claim-btn-wrap">
                    <button type="submit" id="claim_offer_btn">Claim Instant Offer →</button>
                </div>

                <div id="claim_offer_message"></div>

            </form>
        </div>

    </div>
</section>

<style>
.claim-field-wrap {
    flex: 1 1 0;
    min-width: 0;
}
.claim-field-wrap .form-field {
    width: 100%;
    min-width: 0;
    box-sizing: border-box;
}
.claim-field-error {
    display: block;
    color: #e53e3e;
    text-shadow: 0 0 4px rgba(228, 218, 218, 0.8), 0 1px 3px rgba(228, 224, 224, 0.6);
    font-size: 12px;
    margin-top: 3px;
    margin-bottom: 0;
    min-height: 1em;
    text-align: left;
    white-space: nowrap;
}
.claim-field-error:empty { display: none; }
.claim-field--invalid { border-color: #e53e3e !important; }
#claim_offer_btn {
    width: 60%;
    margin: 0 auto;
    display: block;
}

@media (max-width: 480px){
    #claim_offer_btn {
        width: 100%;
    }
}
.claim-btn-wrap {
    flex: 0 0 100%;
    order: 99;
}
#claim_offer_btn:disabled {
    opacity: 0.65;
    cursor: not-allowed;
}
#claim_offer_message {
    flex: 0 0 100%;
    text-align: center;
    margin-top: 4px;
    min-height: 0;
}
#claim_offer_message:empty { display: none; }
.iti--allow-dropdown {
    width: 100%;
}
</style>

<script>
(function () {
    var claimPhoneInput;

    // ── Validation helpers ──────────────────────────────────────────────────
    function showClaimError(fieldId, msg) {
        var el = document.getElementById(fieldId);
        if (el) {
            el.textContent = msg;
            el.style.display = 'block';
        }
        var input = document.getElementById(fieldId.replace('error_', ''));
        if (input) input.classList.add('claim-field--invalid');
    }

    function clearClaimError(fieldId) {
        var el = document.getElementById(fieldId);
        if (el) {
            el.textContent = '';
            el.style.display = 'none';
        }
        var input = document.getElementById(fieldId.replace('error_', ''));
        if (input) input.classList.remove('claim-field--invalid');
    }

    function validateName() {
        var val = document.getElementById('claim_name').value.trim();
        if (!val) { showClaimError('error_claim_name', 'Name is required.'); return false; }
        if (val.length < 2) { showClaimError('error_claim_name', 'Name must be at least 2 characters.'); return false; }
        clearClaimError('error_claim_name'); return true;
    }

    function validateEmail() {
        var val = document.getElementById('claim_email').value.trim();
        if (!val) { showClaimError('error_claim_email', 'Email is required.'); return false; }
        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(val)) { showClaimError('error_claim_email', 'Enter a valid email address.'); return false; }
        clearClaimError('error_claim_email'); return true;
    }

    function validatePhone() {
        var val = document.getElementById('claim_phone').value.trim();
        if (!val) { showClaimError('error_claim_phone', 'Phone number is required.'); return false; }
        if (!/^[0-9+\-\s()]{6,20}$/.test(val)) { showClaimError('error_claim_phone', 'Enter a valid phone number.'); return false; }
        clearClaimError('error_claim_phone'); return true;
    }

    function validateCourse() {
        var courseEl = document.getElementById('claim_course');
        if (!courseEl || courseEl.type === 'hidden') return true; // course page — always valid
        if (!courseEl.value) { showClaimError('error_claim_course', 'Please select a course.'); return false; }
        clearClaimError('error_claim_course'); return true;
    }

    // ── DOM ready ───────────────────────────────────────────────────────────
    document.addEventListener('DOMContentLoaded', function () {
        // Initialize intl-tel-input for the claim form phone field
        var claimPhoneEl = document.querySelector('#claim_phone');
        if (claimPhoneEl && window.intlTelInput) {
            claimPhoneInput = window.intlTelInput(claimPhoneEl, {
                preferredCountries: ['in'],
                hiddenInput: 'full',
                utilsScript: 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js',
            });
            claimPhoneEl.setAttribute('placeholder', 'Phone (e.g. 9876543210)');
        }

        // Blur-time per-field validation
        var nameEl  = document.getElementById('claim_name');
        var emailEl = document.getElementById('claim_email');
        var phoneEl = document.getElementById('claim_phone');
        var courseEl = document.getElementById('claim_course');

        if (nameEl) {
            nameEl.addEventListener('blur', validateName);
            nameEl.addEventListener('input', function () { clearClaimError('error_claim_name'); });
        }
        if (emailEl) {
            emailEl.addEventListener('blur', validateEmail);
            emailEl.addEventListener('input', function () { clearClaimError('error_claim_email'); });
        }
        if (phoneEl) {
            phoneEl.addEventListener('blur', validatePhone);
            phoneEl.addEventListener('input', function () { clearClaimError('error_claim_phone'); });
        }
        if (courseEl && courseEl.tagName === 'SELECT') {
            courseEl.addEventListener('blur', validateCourse);
            courseEl.addEventListener('change', function () { clearClaimError('error_claim_course'); validateCourse(); });
        }

        // Pre-fill from localStorage if submitted today
        var submission = JSON.parse(localStorage.getItem('contact_form_submission') || '{}');
        var today = new Date().toISOString().slice(0, 10);
        if (submission.date === today) {
            if (nameEl)  nameEl.value  = submission.contact_name  || '';
            if (emailEl) emailEl.value = submission.contact_email || '';
            if (phoneEl) phoneEl.value = submission.contact_phone || '';
            if (courseEl && courseEl.tagName === 'SELECT') courseEl.value = submission.contact_course || '';
            document.getElementById('claim_offer_btn').style.display = 'none';
            document.getElementById('claim_offer_message').innerHTML =
                '<span style="color:#92ff92;">You have already submitted your details today.</span>';
        }

        // jQuery-dependent initialisation
        if (typeof $ !== 'undefined') {
            initClaimOfferForm();
        }
    });

    // ── Form submit ─────────────────────────────────────────────────────────
    function initClaimOfferForm() {
        $('#claim_offer_form').on('submit', function (event) {
            event.preventDefault();

            // Validate all fields; collect results so all errors show at once
            var valid = [
                validateCourse(),
                validateName(),
                validateEmail(),
                validatePhone()
            ].every(Boolean);

            if (!valid) return;

            // Disable button to prevent duplicate submissions
            var btn = document.getElementById('claim_offer_btn');
            btn.disabled = true;
            btn.textContent = 'Submitting…';

            localStorage.setItem('clicked_from', 'claim_offer');

            grecaptcha.ready(function () {
                grecaptcha.execute('6Le5H8IrAAAAAH970v1U2rLbvwx_N9tGX3m3M3sI', {
                    action: 'claim_offer_form'
                }).then(function (token) {
                    var phoneNumber = claimPhoneInput
                        ? claimPhoneInput.getNumber(intlTelInputUtils.numberFormat.E164)
                        : $('#claim_phone').val();

                    var formData = {
                        contact_course: $('#claim_course').val(),
                        contact_name:   $('#claim_name').val(),
                        contact_email:  $('#claim_email').val(),
                        contact_phone:  phoneNumber,
                        contact_from:   'claim_offer',
                        recaptcha_token: token
                    };

                    $.ajax({
                        url: 'https://admin.softonlinetraining.com/home/contactus_submitted',
                        type: 'POST',
                        data: formData,
                        dataType: 'json',
                        success: function (response) {
                            claimOfferPostSubmit(formData);
                        },
                        error: function (xhr, status, error) {
                            if (error.replace(/\s/g, '') === '') {
                                claimOfferPostSubmit(formData);
                            } else {
                                // Re-enable button so user can retry
                                btn.disabled = false;
                                btn.textContent = 'Claim Instant Offer →';
                                document.getElementById('claim_offer_message').innerHTML =
                                    '<span style="color:#e53e3e;">Something went wrong. Please try again.</span>';
                            }
                        }
                    });
                }).catch(function () {
                    btn.disabled = false;
                    btn.textContent = 'Claim Instant Offer →';
                });
            });
        });
    }

    // ── Post-submit ─────────────────────────────────────────────────────────
    function claimOfferPostSubmit(formData) {
        localStorage.setItem('data_submitted', true);
        localStorage.setItem('contact_form_submission', JSON.stringify({
            date: new Date().toISOString().slice(0, 10),
            contact_course: formData.contact_course,
            contact_name:   formData.contact_name,
            contact_email:  formData.contact_email,
            contact_phone:  formData.contact_phone
        }));
        document.getElementById('claim_offer_form').reset();
        window.location.href = (typeof SOT_BASE !== 'undefined' ? SOT_BASE : '') + '/thank-you.php';
    }
}());
</script>