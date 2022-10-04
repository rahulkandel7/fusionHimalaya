@if($errors->any())

<div class="animate__animated animate__slideInRight dismissible fixed right-8 top-4 z-50">
    @foreach($errors->all() as $error)
    <div class="w-auto rounded-md p-2 shadow-xl border border-slate-100 bg-gray-100 dark:bg-gray-600 my-2">
        <p class="border-l-4 border-slate-500 px-2 text-red-500 dark:text-slate-300 font-bold">
            <p class="text-center text-3xl text-red-600">
                <i class="ri-error-warning-line"></i>
            </p>
            <span class=" text-red-500 px-1.5 py-0.5 rounded-full font-normal ">{{$error}}</span> </p> 
    </div>

    @endforeach
</div>

<script>
   $(function() {
        setTimeout(function(){
            $(".dismissible").fadeOut(1000);
        }, 3000);
        $(".dismissible").click(function(){
            $(this).fadeOut(10);

        });
   });

</script>

@endif

@if(Session::has('success'))
<div class="animate__animated animate__slideInRight dismissible fixed right-8 top-4 z-50">
    <div class="w-auto rounded-md p-2 shadow-xl border border-slate-100 bg-gray-100 dark:bg-gray-600">
        <p class="border-l-4 border-slate-500 px-2 text-slate-900 dark:text-slate-300 font-bold">
            <p class="text-center text-3xl text-slate-600">
                <i class="ri-checkbox-circle-line"></i>

            </p>
            <span class=" text-white px-1.5 py-0.5 rounded-full font-normal "></span> {{session('success')}}</p> 
    </div>
</div>
<script>
   $(function() {
        setTimeout(function(){
            $(".dismissible").fadeOut(1000);
        }, 3000);
        $(".dismissible").click(function(){
            $(this).fadeOut(10);

        });
   });

</script>
@endif


@if(Session::has('error'))
<div class="animate__animated animate__slideInRight dismissible fixed right-8 top-4 z-50">
    <div class="w-auto rounded-md p-2 shadow-lg bg-gray-100 dark:bg-gray-600">
        <p class="border-l-4 border-red-500 px-2 text-red-500 dark:text-red-200 font-bold"><span class="fa fa-times bg-red-500 text-white px-1.5 py-0.5 rounded-full font-normal text-sm"></span> {{session('error')}}</p>
    </div>
</div>
<script>
   $(function() {
        setTimeout(function(){
            $(".dismissible").addClass('animate__slideOutRight').fadeOut(1000);
        }, 2000);
   });

</script>
@endif