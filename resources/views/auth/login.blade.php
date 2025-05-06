<x-layout>
    <x-page-heading>Log In</x-page-heading>

    <x-forms.form method="POST" action="/login">
        <x-forms.input name="email" label="Email" required />
        <x-forms.input name="password" label="Password" type="password" required />

        <div class="mt-6 mb-6 flex justify-center">
            <x-forms.button>Login</x-forms.button>
        </div>
    </x-forms.form>
</x-layout>