<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h1 class="font-bold text-2xl">Halaman BLOG</h1>

    {{-- <article class="py-8 max-w-screen-md">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div class="">
            By
            <a href="/author/{{ $post->author->username }}" class="hover:underline text-base text-gray-500">{{ $post->author->name }}</a> 
            in 
            <a href="/categoris/{{ $post->category->slug }}" class="hover:underline text-base text-gray-500">{{ $post->category->name }}</a> | {{ $post->created_at->diffForHumans() }}
        </div>
        <p class="my-4 font-light">{{ $post['body'] }}</p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline"> &laquo; Back to Posts</a>
    </article> --}}


    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article class="mx-auto w-full max-w-6xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <a href="/posts">&laquo; Back to posts</a>
                    <address class="flex items-center my-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                            <div>
                                <a href="/posts?author={{ $post->author->username }}" rel="author" class="text-xs font-bold text-gray-900 dark:text-white">{{ $post->author->name }}</a>
                                <p class="text-base text-gray-500 dark:text-gray-400 mb-1">{{ $post->created_at->diffForHumans() }}</p>
                                <a href="/posts?category={{ $post->category->slug }}">
                                    <span class="bg-{{ $post->category->color }}-200 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                        {{ $post->category->name }}
                                    </span>
                                </a>
                            </div>
                        </div>
                    </address>
                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">Best practices for successful prototypes</h1>
                </header>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem delectus laboriosam, quisquam accusantium earum rerum ratione nemo sunt, unde et quam minima quas veritatis voluptatem eos! Consequuntur nulla accusantium iusto atque! Id consectetur quia veritatis impedit labore earum minima doloribus iste voluptates quos harum maiores, nesciunt necessitatibus quis illo debitis reprehenderit blanditiis tempora adipisci! Nisi inventore nemo eligendi necessitatibus amet vitae provident corporis voluptas cum. Animi maiores aliquam deserunt itaque sapiente tempore dolores voluptates aut repellat architecto est, quibusdam corporis sint, vero accusamus! Tenetur possimus ratione eaque excepturi dolorum, amet impedit debitis consectetur temporibus iure ex cum consequatur, vitae deleniti, nulla nobis perspiciatis accusantium! Ratione obcaecati nemo consequuntur enim labore vitae, doloribus dolore voluptates possimus doloremque, perferendis animi eveniet aut facere sint blanditiis officia deserunt quibusdam aliquam ipsum recusandae iure qui quis. Cumque veniam officiis est perferendis animi cum officia, vero eaque ipsam similique totam quaerat nulla sit, repellendus laudantium fuga, veritatis porro placeat beatae in suscipit mollitia facere dolorum reprehenderit. Atque amet ea ipsam nobis. Unde repellat at aspernatur hic itaque rerum officiis recusandae soluta, eveniet et nostrum commodi similique saepe earum! Labore dignissimos dolorum minus laudantium qui, sit dolor laborum sed consectetur voluptate itaque corrupti molestias aperiam quo error quis inventore nihil enim? Ex repellat asperiores dolorum! Consectetur eveniet id adipisci hic minus accusamus suscipit architecto quos impedit voluptatem dignissimos aut, quas rerum atque veniam temporibus quisquam? Culpa ab magni est pariatur possimus fuga unde eveniet eos exercitationem dolores, rerum esse architecto voluptatibus tenetur perferendis, ullam aut laboriosam vitae quam porro quo nulla. Debitis, tempore molestiae. Vitae molestiae fugiat qui, minima necessitatibus quas laboriosam officiis nesciunt eveniet facere tempora deserunt provident eligendi expedita quos nemo facilis temporibus cupiditate inventore reprehenderit nulla ea voluptatibus? Eos atque aliquid molestiae non aperiam distinctio sunt sapiente nobis exercitationem necessitatibus quia, fugiat itaque.</p>
            </article>
        </div>
    </main>

</x-layout>