@php
    $formData = get_field('signup_form');
@endphp
<section id="signup-form" class="section absolute overflow-hidden bg-blue1">
    <div class="bg-blue1 h-[95vh] flex items-center">
        <div class="section-container w-full h-full flex items-center justify-center pt-[40px]">
            <div id="contact-form" class="relative flex flex-col lg:flex-row justify-between border-2 border-blue6 rounded-[20px] p-[14px] md:p-[38px] lg:p-[40px] w-full h-full max-h-[600px]">
                <div class="ls:hidden">
                    @include('partials.icons', [
                        'icon' => 'arrow-right',
                        'class' => ''
                    ])
                </div>
                <div class="flex flex-col justify-center lg:pl-[60px]">
                    <h2 class="h3 text-blue6 font-light max-w-[628px]">
                        {{$formData['title']}}
                    </h2>
                    <p class="mt-[24px] body-medium text-blue6 max-w-[438px] ls:hidden">
                        {{$formData['description']}}
                    </p>
                    <script src="//pages.rstudio.net/js/forms2/js/forms2.min.js"></script>
                    <form id="mktoForm_{{ $formData['form_id'] }}" novalidate class="mt-[40px]">
                    </form>
                    <script>
                        MktoForms2.loadForm("<?php echo $formData['form_url']; ?>", "<?php echo $formData['munchkin_id']; ?>", <?php echo $formData['form_id']; ?>, (form) => {
                            const privacyPolicy = document.querySelector('[target="_blank"]')
                            privacyPolicy.ariaLabel = 'Privacy policy on new tab'

                            const privacyPolicyLink = document.querySelector('#LblprivacyPolicyRead')
                            privacyPolicyLink.setAttribute('for', '');
                            privacyPolicyLink.id = 'lblPrivacyPolicyLink'

                            const lblPrivcayPolicyCheckbox = document.querySelector('.mktoCheckboxList #LblprivacyPolicyRead')
                            lblPrivcayPolicyCheckbox.innerHTML = `<div class="opacity-0">Checkbox</div>`

                            const dataLayer = window.dataLayer || []

                            form.onValidate(isValid => {
                                this.input = document.querySelector('.mktoEmailField')
                                this.cbPrivacy = document.querySelector('#privacyPolicyRead')
                                this.mailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

                                if (isValid && this.input.value.trim().match(this.mailFormat) && this.cbPrivacy.checked) {
                                    form.submittable(true)

                                    form.onSuccess(() => {
                                        form.getFormElem().hide();
                                        const formSuccess = document.querySelector("#FormSuccess");
                                        formSuccess.classList.add('input-success')

                                        if(window.dataLayer.length){
                                            dataLayer.push({
                                                'event': 'form_submit',
                                                'status': 'success',
                                                'formType': 'newsletter'
                                            })
                                        }

                                        return false;
                                    });
                                } else {
                                    form.submittable(false)

                                     dataLayer.push({
                                        'event': 'form_submit',
                                        'status': 'fail',
                                        'formType': 'newsletter'
                                    })
                                }
                            });
                        });
                    </script>
                    <div id="FormSuccess" class="hidden invisible mt-[40px]">
                        Thank you for subscribing!
                    </div>
                </div>
                <div class="flex items-end ml-auto h-[30px] lg:h-[auto] ls:hidden">
                    @include('partials.icons', [
                        'icon' => 'arrow-left',
                        'class' => ''
                    ])
                </div>
            </div>
        </div>
    </div>
    @include('partials.back-top')
</section>
