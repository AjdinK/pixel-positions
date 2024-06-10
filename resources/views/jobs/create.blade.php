<x-layout>

    <x-page-heading>New Job</x-page-heading>
    <x-forms.form action="/jobs" method="POST">

        <x-forms.input name="title" label="Title" placeholder="CEO"></x-forms.input>
        <x-forms.input name="salary" label="Salary" placeholder="50,000$"></x-forms.input>
        <x-forms.input name="location" label="Location" placeholder="Sarajevo"></x-forms.input>
        <x-forms.input name="url" label="URL" placeholder="www.example.com"></x-forms.input>


        <x-forms.select label="Schedule" name="schedule">
            <option class="text-black">Full Time</option>
            <option class="text-black">Part Time</option>
        </x-forms.select>

        <x-forms.divider></x-forms.divider>

        <x-forms.input name="tags" label="Tags (comma seperated)"
                       placeholder="laracast, video, education"></x-forms.input>

        <x-forms.checkbox label="Feature (Costs Extra)" name="featured"/>

        <x-forms.button>Publish</x-forms.button>

    </x-forms.form>

</x-layout>

