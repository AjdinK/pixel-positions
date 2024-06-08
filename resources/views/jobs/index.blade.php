<x-layout>
    <div class="space-y-10">

        <section class="pt-6 text-center">
            <h1 class="text-5xl font-bold">Lets Find Your Next Job for</h1>

            <form action="">
                <input class="mt-6 w-full max-w-xl rounded-xl border-white/10 bg-white/5 px-5 py-4" id=""
                    name="" type="text" placeholder="Im looking for...">
            </form>

        </section>


        <section class="mt-10">

            <x-section-heading>Featuerd Jobs</x-section-heading>

            <div class="mt-6 grid gap-8 lg:grid-cols-3">
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1">

                @unless ($tags->isEmpty())
                    @foreach ($tags as $tag)
                        <x-tag :$tag />
                    @endforeach
                @else
                    <p>No tags found</p>
                @endunless
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                <x-job-card-wide></x-job-card-wide>
                <x-job-card-wide></x-job-card-wide>
                <x-job-card-wide></x-job-card-wide>
            </div>
        </section>

    </div>
</x-layout>