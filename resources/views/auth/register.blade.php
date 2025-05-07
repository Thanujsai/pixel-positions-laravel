<x-layout>
    <x-page-heading>Register</x-page-heading>

    <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
        <x-forms.input name="name" label="Name" required autofocus autocomplete="name" />
        <x-forms.input name="email" label="Email" type="email" required autocomplete="username" />
        <x-forms.input name="password" label="Password" type="password" required autocomplete="new-password" />
        <x-forms.input name="password_confirmation" label="Confirm Password" type="password" required autocomplete="new-password" />

        <x-forms.divider />

        <x-forms.input label="Employer Name" name="employer" />
        <x-forms.input label="Employer Logo" name="logo" type="file" />

        <div class="mt-6 mb-6 flex justify-center">
            <x-forms.button>Create Account</x-forms.button>
        </div>
    </x-forms.form>
</x-layout>