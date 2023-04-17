<x-dashboard-layout>
<!-- Product details section -->
<style>
    .star-rating i {
    color: #ddd;
    font-size: 18px;
    cursor: pointer;
    }

    .star-rating i.active,
    .star-rating i:hover {
    color: #f1c40f;
    /* background-color: #f1c40f; */
}

</style>

<section class="text-gray-700 body-font overflow-hidden bg-white">
    <div class="container px-5 py-24 mx-auto">

        <div class="lg:w-4/5 mx-auto flex flex-wrap  mb-5">
        <img alt="Product image" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200" src="{{ $products->image}}">
        <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">


          <h1 class="text-gray-900 text-3xl title-font font-medium mb-1"> {{ $products->name }}</h1>
          <input type="hidden" id="product_id" value="{{ $products->id }}">
          <div class="flex mb-4">
            <span class="flex items-center">
                <div class="star-rating">
                    <i class="fa-solid fa-star" data-value="1"></i>
                    <i class="fa-solid fa-star" data-value="2"></i>
                    <i class="fa-solid fa-star" data-value="3"></i>
                    <i class="fa-solid fa-star" data-value="4"></i>
                    <i class="fa-solid fa-star" data-value="5"></i>
                </div>
              <span class="text-gray-600 ml-3">{{$products->comments->count()}} Comments</span>
            </span>
            <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200">
                <a class="text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <a class="ml-2 text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                    </svg>
                </a>
                <a class="ml-2 text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                    </svg>
                </a>
            </span>
        </div>
        <p class="leading-relaxed pb-5 border-b-2 border-gray-200 mb-5">{{ $products->description }}</p>

        <div class="flex">
            <span class="title-font font-medium text-2xl text-gray-900">{{ $products->price }} DH</span>
            <span class="flex ml-auto text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded">{{ $products->quantity }} Product</span>
            <button class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
                </svg>
            </button>
        </div>
    </div>
</div>
    <!-- component -->
    <!-- post card -->
    {{-- comment title for this section --}}
    <h1 class="border-b-2 mt-5 text-4xl">Comments</h1>
    <div id="comments">

    </div>

        <!-- add Comments  -->
        <div class="comment mt-3">
            <form >
            @csrf
                <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                    <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                        <label for="comment" class="sr-only">Your comment</label>
                        <textarea id="comment" rows="4" class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Write a comment..." required></textarea>
                    </div>
                    <div class="star-rating">
                        <i class="fa-solid fa-star" data-value="1"></i>
                        <i class="fa-solid fa-star" data-value="2"></i>
                        <i class="fa-solid fa-star" data-value="3"></i>
                        <i class="fa-solid fa-star" data-value="4"></i>
                        <i class="fa-solid fa-star" data-value="5"></i>
                    </div>
                    <input type="hidden" id="rating" name="rating">
                    <div class="flex items-center justify-end   px-3 py-2 border-t dark:border-gray-600">
                        <button id="save-review" type="button" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                            Post comment
                        </button>

                    </div>
                </div>
            </form>
    </div>

</div>
</div>
  </section>



</x-dashboard-layout>
<script>
    $(document).ready(function() {
        $('.star-rating i').click(function() {
            var rating = $(this).data('value');
            $('#rating').val(rating);
            console.log(rating);
            $(this).addClass('active');
            $(this).prevAll().addClass('active');
            $(this).nextAll().removeClass('active');
        });
    });

    $(document).ready(function(){
        $('#save-review').click(function(){
            var comment = $('#comment').val();
            console.log(comment);
            var rating = $('#rating').val();
            console.log(rating);
            var product_id = $('#product_id').val();
            console.log(product_id);
            // var _token = $('input[name="_token"]').val();
            $.ajax({
                url:"/ratings/store",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method:"POST",
                data:{comment:comment, rating:rating, product_id:product_id},
                success:function(data){
                    console.log(data);
                    fetchComments();
                    return;
                    if(data.error){
                        if(data.comment.error){
                            $('#comment').addClass('is-invalid');
                            $('.errorComment').text(data.comment.error[0]);
                        }
                    }
                    if(data.success){
                        $('#comment').removeClass('is-invalid');
                        $('.errorComment').text('');
                        $('#comment').val('');
                        $('.comment').prepend(data.success);
                    }
                }
            });
        });
    })


    function fetchComments(){
        $(document).ready(function(){
            var product_id = $('#product_id').val();
            console.log(product_id);
            $.ajax({
                url: '/ratings/show/' + product_id,
                method: 'GET',
                success: function(data){
                    // console.log(data);
                    show(data);
                    // $('.comment').html(data);
                }
            })
        })
    }

    fetchComments();

    function show(data){

        console.log(data);
        const rating = data.average_rating;
        const stars = $('.star-rating i');
        stars.removeClass('active');

        for (let i = 0; i < rating; i++) {
            stars.eq(i).addClass('active');
        }

        const commentsDiv = $('#comments');
        let comments = data.latest_comments;
        commentsDiv.empty();

        comments.forEach(comment => {
            const commentHtml = `
            <article class="p-2 mb-1 text-base bg-white rounded-lg dark:bg-gray-900">
                            <footer class="flex justify-between items-center mb-2">
                                <div class="flex items-center">
                                    <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white"><img
                                            class="mr-2 w-6 h-6 rounded-full"
                                            src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                            alt="Michael Gough">
                                        <span class="font-semibold">${comment.user_name}</span>
                                            </p>
                                    <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-02-08"
                                            title="February 8th, 2022">
                                            ${comment.created_at}
                                            </time></p>
                                </div>

                                <!-- Dropdown menu -->

                            </footer>
                            <p class="text-gray-500 dark:text-gray-400 text-xs">
                                ${comment.comment}
                            .</p>
                        </article>`;
            commentsDiv.append(commentHtml);
        });
    }
</script>

