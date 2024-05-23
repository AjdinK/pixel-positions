<x-layout>
    <div class="space-y-10">

        <section class="text-center pt-6">
            <h1 class="font-bold text-5xl ">Lets Find Your Next Job for ajdin</h1>

            <form action="">
                <input type="text" placeholder="Web developer...." name="" id=""
                       class=" mt-6 rounded-xl bg-white/5 border-white/10 px-5 py-4 w-full max-w-xl  ">
            </form>

        </section>


        <section class="mt-10">
            <x-section-heading>Featuerd Jobs</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1">

                <x-tag>tag</x-tag>
                <x-tag>tag</x-tag>
                <x-tag>tag</x-tag>
                <x-tag>tag</x-tag>
                <x-tag>tag</x-tag>
                <x-tag>tag</x-tag>
                <x-tag>tag</x-tag>

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
