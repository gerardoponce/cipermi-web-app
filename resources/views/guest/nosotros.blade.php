<x-guest-layout>

    <x-slot name="header">
        @include('layouts.guest-navigation')
    </x-slot>
    <main class="bg-white-1 text-black-1 grid grid-cols-1 md:grid-cols-2 px-6 md:px-28 py-4 text-justify">
        <section class="col-span-1 md:col-span-2 p-4">
            <h2 class="text-l-blue-1 text-xl md:text-2xl mb-3">Historia</h2>
            <p class="text-base md:text-lg">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus quasi numquam maxime aliquam nemo non corrupti nihil a vitae harum. Architecto inventore iusto modi facere soluta quaerat numquam a minus?
            Incidunt ad, porro tenetur nobis reprehenderit officia facere odio beatae accusantium quidem ratione consequuntur laborum corporis exercitationem. Voluptatem quo non voluptas repellat? Temporibus aut beatae, velit molestias mollitia nihil quae!
            Voluptas quod vel ullam, provident necessitatibus veniam officiis voluptatem quidem aut, eaque quisquam esse, soluta sequi nam culpa? Velit fuga quibusdam quos soluta laboriosam quisquam natus ex sapiente qui? Repellendus!</p>
        </section>
        <section class="col-span-1 p-4">
            <h2 class="text-l-blue-1 text-xl md:text-2xl">Misión</h2>
            <p class="text-base md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore totam, aut fugiat reiciendis provident saepe neque corporis dolores ratione suscipit et libero molestiae ad quia ducimus iure similique fuga repudiandae!</p>
        </section>
        <section class="col-span-1 p-4">
            <h2 class="text-l-blue-1 text-xl md:text-2xl">Visión</h2>
            <p class="text-base md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum sapiente fugit fuga dolores dolorum est asperiores, autem veritatis cumque eum. Blanditiis sapiente ab fuga voluptatum distinctio quam culpa omnis assumenda.
            Commodi velit qui odio asperiores quae ex deserunt, nulla ut, libero, perferendis optio? Labore consectetur minima enim, dolores nam maxime natus placeat minus, excepturi officia delectus nihil, praesentium veniam voluptatibus?</p>
        </section>
        <section class="col-span-1 md:col-span-2 p-4">
            <h2 class="text-l-blue-1 text-xl md:text-2xl">Valores Corporativos</h2>
            <p class="text-base md:text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, aut. Neque harum nostrum, sed, deserunt quam architecto illo ipsa repellat blanditiis dicta, sint deleniti rerum veniam voluptatum labore nobis minima.</p>
        </section>
    </main>
    <section class="hidden sm:hidden md:grid md:px-28 md:py-6 bg-gray-1 md:grid-cols-2 lg:grid-cols-3 text-center">
        <h2 class="text-l-blue-3 md:text-2xl lg:text-3xl md:col-span-2 lg:col-span-3 py-6">Testimonios</h2>
        <section class="text-l-blue-3 italic md:col-span-2 lg:col-span-1 py-2 px-4">
            <p class="text-base md:text-lg text-justify">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, aut. Neque harum nostrum, sed, deserunt quam architecto illo ipsa repellat blanditiis dicta, sint deleniti rerum veniam voluptatum labore nobis minima."</p>
            <h5 class="not-italic text-orange-1 text-left">Cliente 1</h5>
        </section>
        <section class="text-l-blue-3 italic md:col-span-1 py-2 px-4">
            <p class="text-base md:text-lg text-justify">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, aut. Neque harum nostrum, sed, deserunt quam architecto illo ipsa repellat blanditiis dicta, sint deleniti rerum veniam voluptatum labore nobis minima."</p>
            <h5 class="not-italic text-orange-1 text-left">Cliente 2</h5>
        </section>
        <section class="text-l-blue-3 italic md:col-span-1 py-2 px-4">
            <p class="text-base md:text-lg text-justify">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, aut. Neque harum nostrum, sed, deserunt quam architecto illo ipsa repellat blanditiis dicta, sint deleniti rerum veniam voluptatum labore nobis minima."</p>
            <h5 class="not-italic text-orange-1 text-left">Cliente 3</h5>
        </section>
    </section>

</x-guest-layout>