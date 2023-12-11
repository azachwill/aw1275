@php
    $headerProps = $form['form_position'] == 'right' ? 'col-span-12 lg:col-span-5' : 'grid-cols-12';

    $formProps = $form['form_position'] == 'right' ? 'col-span-12 lg:col-span-6 lg:col-start-7 gap-[28px] mt-[60px] md:mt-[40px] lg:mt-[0]' : 'grid-cols-12 gap-[28px] mt-[60px] md:mt-[80px] lg:mt-[120px]';
@endphp

<section class="section-contact-form">
    <div class="container space-between-sections {{ $form['form_position'] == 'right' ? 'grid md:grid-cols-12' : null }}">
        <div class="header-container grid {{ $headerProps }}">
            <div class="{{ $form['form_position'] == 'right' ? 'col-span-12' : 'col-span-12 md:col-span-8 lg:col-span-5' }}">
                @include('partials.header', [
                    'data' => $header,
                ])
            </div>
        </div>

        {{-- @todo: add validation on form inputs --}}
        <div class="form-container grid {{ $formProps }}">
            <div class="{{ $form['form_position'] == 'right' ? 'col-span-12' : 'col-span-12 lg:col-span-7 lg:col-start-6' }}">
                <div class="bg-gray6 rounded-[8px] p-[20px] md:py-[80px] md:px-[40px]">
                    <h2 class="h3 text-blue1">
                        {{ $form['title'] }}
                    </h2>
                    @if(!empty($form['description']))
                        <p class="body-md-regular text-blue1/[.62] mt-[24px]">
                            {{ $form['description'] }}
                        </p>
                    @endif

                    <div class="marketo-contact-form subscribe mt-[24px] md:mt-[64px]">
                        <script src="{{ $form['script_source'] }}"></script>
                        <form id="mktoForm_{{$form['marketo_form_id']}}"></form>
                        <script>
                            MktoForms2.loadForm("<?php echo $form['marketo_base_url']; ?>", "<?php echo $form['munchkin_id']; ?>", <?php echo $form['marketo_form_id']; ?>, (form) => {
                                const $privacyRow = document.querySelector('#LblprivacyPolicyRead')
                                const $privacyCheckbox = document.querySelector('.mktoCheckboxList #LblprivacyPolicyRead')

                                if($privacyRow) {
                                    const $privacyWrapper = $privacyRow.parentNode;
                                    $privacyWrapper.classList.add('privacy-wrapper');
                                    $privacyRow.removeAttribute('for')
                                    $privacyRow.style.cursor='pointer';
                                    $privacyRow.id = 'lblPrivacyPolicyLink'
                                    $privacyRow.setAttribute('aria-label', 'Please check this box if you agree to Posit Privacy Policy');
                                    $privacyRow.addEventListener('click',()=>{
                                        const $privacyInput = document.querySelector('#privacyPolicyRead')
                                        $privacyInput.checked = !$privacyInput.checked
                                    })
                                }

                                if($privacyCheckbox) {
                                    $privacyCheckbox.innerHTML = `<div class="opacity-0">Checkbox</div>`
                                }

                                const initialStateOfTheForm = () => {
                                    const formElem = form.getFormElem();
                                    formElem[0].classList.add('initial');

                                    form.onValidate(isValid => {
                                        this.input = document.querySelector('.mktoEmailField')
                                        this.cbPrivacy = document.querySelector('#privacyPolicyRead')
                                        this.mailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

                                        if (isValid && this.input.value.trim().match(this.mailFormat) && this.cbPrivacy.checked) {
                                            form.submittable(true)
                                        } else {
                                            form.submittable(false)
                                            formElem[0].classList.remove('initial');
                                        }
                                    })
                                }

                                const addCheckboxWrapperClass = () => {
                                    const $checkboxInputs = document.querySelectorAll('.mktoLogicalField');
                                    if($checkboxInputs.length) {
                                        $checkboxInputs.forEach(($checkboxInput) => {
                                            const $checkboxWrapper = $checkboxInput.parentNode;
                                            $checkboxWrapper.className += ' checkbox-wrapper';
                                        })
                                    }
                                }

                                const preventLostFocusOnEnter = () => {
                                    const $inputs = document.querySelectorAll('input, select')
                                    const $fields = Array.from($inputs).filter(($input) => $input.classList.contains('mktoField'))

                                    if($fields.length) {
                                        $fields.forEach(($input) => {
                                            $input.addEventListener('keydown', (event) => {
                                                if(!$input.classList.contains('mktoFieldDescriptor') && event.keyCode === 13) {
                                                    event.preventDefault()
                                                }
                                            })
                                        })
                                    }
                                }

                                initialStateOfTheForm()
                                preventLostFocusOnEnter()
                                addCheckboxWrapperClass()

                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
