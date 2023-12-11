jQuery(document).ready(function ($) {
    $('.support-search .ais-SearchBox-form').append(
        '<svg class="icon" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_2471_12848)"><path d="M10.6457 11.8528L10.9992 12.2063L11.7063 11.4992L11.3528 11.1457L10.6457 11.8528ZM8.55277 8.34567L8.19922 7.99211L7.49211 8.69922L7.84567 9.05277L8.55277 8.34567ZM11.3528 11.1457L8.55277 8.34567L7.84567 9.05277L10.6457 11.8528L11.3528 11.1457Z" fill="#17212B"/><path d="M5 10C7.48528 10 9.5 7.98528 9.5 5.5C9.5 3.01472 7.48528 1 5 1C2.51472 1 0.5 3.01472 0.5 5.5C0.5 7.98528 2.51472 10 5 10Z" stroke="#17212b9e" stroke-linecap="round" stroke-linejoin="round"/></g></svg>',
    )
    $('.ais-SearchBox-input').focus(function () {
        $('.ais-SearchBox-form .icon').hide()
    })
    $('.ais-SearchBox-input').focusout(function () {
        $('.ais-SearchBox-form .icon').show()
    })
})
