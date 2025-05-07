<x-layout>
    <x-page-heading>Post a Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input name="title" label="Job Title" placeholder="CEO" required />
        <x-forms.input name="salary" label="Salary" placeholder="$90,000 USD" required />
        <x-forms.input name="location" label="Location" placeholder="Hyderabad" required />

        <x-forms.select label="Schedule" name="schedule">
            <option class="bg-black text-white">Full Time</option>
            <option class="bg-black text-white">Part Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://acme.com/jobs/ceo-wanted" />
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured" />

        <x-forms.divider />

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="laracasts, video, education" />

        <div class="mt-6 mb-6 flex justify-center">
            <x-forms.button>Publish</x-forms.button>
        </div>
    </x-forms.form>
</x-layout>