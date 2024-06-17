<x-layout>

    <div class="space-y-10">

        <section class="pt-6 text-center">
            <h1 class="text-4xl font-bold">Lets Find Your Next Job</h1>

            <x-forms.form class="mt-6" action="/search">
                <x-forms.input name="q" :label="false" placeholder="Web Developer ...." />
            </x-forms.form>

        </section>


        <section class="mt-10">

            <x-section-heading>Featuerd Jobs</x-section-heading>

            <div class="mt-6 grid gap-8 lg:grid-cols-3">
                @foreach ($featuredJobs as $job)
                    <x-job-card :$job />
                @endforeach
            </div>

        </section>

        <section>

            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1">
                @foreach ($tags as $tag)
                    <x-tag :$tag />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                @foreach ($jobs as $job)
                    <x-job-card-wide :$job />
                @endforeach
            </div>
        </section>

    </div>
</x-layout>
