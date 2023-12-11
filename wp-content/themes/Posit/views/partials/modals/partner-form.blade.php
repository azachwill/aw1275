<section class="partner-form col-span-full subscribe mt-[8px]">
    <div class="mb-[16px] text-blue1 h3">
        {{ $form['title'] }}
    </div>
    <script src="{{ $form['script_source'] }}"></script>
    <form class="mt-[24px]" id="mktoForm_{{$form['marketo_form_id']}}"></form>
    <script>
        MktoForms2.loadForm("<?php echo $form['marketo_base_url']; ?>", "<?php echo $form['munchkin_id']; ?>", <?php echo $form['marketo_form_id']; ?>, (form) => {

            const $lblFirstName = document.querySelector('#LblFirstName')
            const $firstName = document.createTextNode('First Name:');
            $lblFirstName.appendChild($firstName);

            const $lblLastName = document.querySelector('#LblLastName')
            const $lastName = document.createTextNode('Last Name:');
            $lblLastName.appendChild($lastName)

            const $lblEmail = document.querySelector('#LblEmail')
            const $email = document.createTextNode('Email Address:');
            $lblEmail.appendChild($email)

            const $lblCompany = document.querySelector('#LblCompany')
            const $company = document.createTextNode('Company Name:');
            $lblCompany.appendChild($company)

            const $lblCity = document.querySelector('#LblCity')
            $lblCity.textContent = 'City:'

            const $lblState = document.querySelector('#LblState')
            $lblState.textContent = 'state/province/Region:'

            const $lblCountry = document.querySelector('#LblCountry')
            $lblCountry.textContent = 'Country:'

            const $lblLanguage = document.querySelector('#LblZendesk__notes__c')
            $lblLanguage.textContent = 'preferred language:'

            const $txtComments = document.querySelector('#ContactMe_Comment__c')
            $txtComments.setAttribute('rows', '1');

            const initialStateOfTheForm = () => {
                const formElem = form.getFormElem();
                formElem[0].classList.add('initial');

                form.onValidate(isValid => {
                    this.input = document.querySelector('.mktoEmailField')
                    this.mailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

                    if (isValid && this.input.value.trim().match(this.mailFormat)) {
                        form.submittable(true)
                    } else {
                        form.submittable(false)
                        formElem[0].classList.remove('initial');
                    }
                });
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

            preventLostFocusOnEnter()
            initialStateOfTheForm()
        });
    </script>
</section>
