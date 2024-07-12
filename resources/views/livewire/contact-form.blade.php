<form wire:submit.prevent="submitForm" method="post" action="{{ route('contact.form') }}" id="contactForm">
    @csrf
    @if ($successMessage)
        <x-form.success-message successMessage="{{ $successMessage }}" />
    @endif



    <div class="grid grid-col-1 xl:grid-cols-2  xl:gap-6">
        <x-form.input :name="'name'" :label="'imię'" type='text' placeholder="Imię" required />
        <x-form.input :name="'email'" :label="'email'" type='email' placeholder="Email" required />

    </div>
    <div class="grid grid-col-1 xl:grid-cols-2  xl:gap-6">


        <x-form.input :name="'phone'" :label="'telefon'" type='text' placeholder="Numer Telefonu" />
        <x-form.input :name="'breed'" :label="'rasa Psa'" type='text' placeholder="Rasa Psa" />


    </div>
    <div class="flex justify-center">

        <x-form.input :name="'city'" :label="'Miejscowość'" type='text' placeholder="Miejscowość" />



    </div>

    <x-form.text-area :name="'content'" :label="'Wiadomość'" />

    <div class="text-xs mb-6">
        Ta strona jest chroniona przez reCAPTCHA i obowiązuje ją 
        <a class="font-semibold" href="https://policies.google.com/privacy">Polityka Prywatności</a> oraz
        <a class="font-semibold" href="https://policies.google.com/terms">Warunki korzystania z usług Google</a>.
    </div>

    <button data-sitekey="{{ env('CAPTCHA_SITE_KEY') }}" data-callback='handle' data-action='submit'
        wire.loading.attr="disabled" type="submit"
        class="inline-flex justify-center items-center py-3 px-12 bg-black rounded-md text-base font-medium text-center text-white transition transform-color hover:bg-gray-800 focus:ring-4 focus:ring-mainColor-400  gap-2 duration-500">
        <svg wire:loading wire:target="submitForm" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white"
            xmlns="http://www.w3.org/2000/svg" fill="#000000" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="#000000" stroke-width="4"></circle>
            <path class="opacity-75" fill="#fff"
                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
            </path>
        </svg>Wyślij
    </button>








</form>

<script src="https://www.google.com/recaptcha/api.js?render={{ env('CAPTCHA_SITE_KEY') }}"></script>
<script>
    function handle(e) {
        grecaptcha.ready(function() {
            grecaptcha.execute('{{ env('CAPTCHA_SITE_KEY') }}', {
                    action: 'submit'
                })
                .then(function(token) {
                    @this.set('captcha', token);
                });
        })
    }
</script>
